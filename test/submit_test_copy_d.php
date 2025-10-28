<?php
// test/submit_test.php  (نسخة مُنقّحة)
include '../config.php';
function esc($s){ return htmlspecialchars($s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }

/* -------- validation بسيطة للـ POST -------- */
$q = [];
for($i=1;$i<=10;$i++){
    $k = 'q'.$i;
    $q[$i] = isset($_POST[$k]) ? trim($_POST[$k]) : '';
}

$suicide_q = isset($_POST['suicide_q']) ? (int)$_POST['suicide_q'] : 0;
if($suicide_q !== 0 && $suicide_q !== 1) $suicide_q = 0;

/* -------- بدء المعاملة لضمان التناسق -------- */
$connexion->begin_transaction();

try {

    /* -------- INSERT في test_base -------- */
    $stmt = $connexion->prepare("
        INSERT INTO test_base
        (Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,suicide_q,timestamp)
        VALUES (?,?,?,?,?,?,?,?,?,?,?, NOW())
    ");
    if(!$stmt){
        throw new Exception('Prepare failed (test_base).');
    }

    // عشرة s ثم i
    $stmt->bind_param(
        'ssssssssssi',
        $q[1], $q[2], $q[3], $q[4], $q[5], $q[6], $q[7], $q[8], $q[9], $q[10],
        $suicide_q
    );

    if(!$stmt->execute()){
        error_log('[submit_test] INSERT test_base failed: '.$stmt->error);
        throw new Exception('حدث خطأ أثناء تسجيل الاختبار الأساسي.');
    }

    $last_id = $connexion->insert_id;
    $stmt->close();

    /* -------- جلب السطر بعد تطبيق trigger -------- */
    $res = $connexion->query("SELECT * FROM test_base WHERE id=".(int)$last_id." LIMIT 1");
    if(!$res){
        throw new Exception('Impossible de récupérer test_base.');
    }
    $row = $res->fetch_assoc();
    if(!$row){
        throw new Exception('Aucun enregistrement trouvé après insertion.');
    }

    /* -------- جدول الخريطة للجداول الفرعية (آمن) -------- */
    $tests = [
        'Display_PHQ9'    => ['file'=>'phq.php','label'=>'PHQ-9 : Questionnaire pour évaluer la dépression.','table'=>'test_phq'],
        'Display_GAD7'    => ['file'=>'gad.php','label'=>'GAD-7 : Questionnaire pour mesurer l’anxiété généralisée.','table'=>'test_gad'],
        'Display_PCL5'    => ['file'=>'pcl.php','label'=>'PCL-5 : Questionnaire pour détecter le stress post-traumatique.','table'=>'test_pcl'],
        'Display_ISI'     => ['file'=>'isi.php','label'=>'ISI : Questionnaire pour évaluer la gravité de l’insomnie.','table'=>'test_isi'],
        'Display_AUDIT'   => ['file'=>'audit.php','label'=>'AUDIT : Questionnaire complet pour dépister l’alcoolisme.','table'=>'test_audit'],
        'Display_DAST10'  => ['file'=>'dast.php','label'=>'DAST-10 : Questionnaire pour dépister l’usage problématique de drogues.','table'=>'test_dast'],
    ];

    $visibleTests = [];

    // سجل مختصر لحالة الـ row للـ display flags (diagnostic)
    $displayStates = [];
    foreach(array_keys($tests) as $c){
        $displayStates[$c] = $row[$c] ?? null;
    }
    error_log('[submit_test] display flags: ' . json_encode($displayStates));

    foreach($tests as $col => $info){
        if(!empty($row[$col]) && (int)$row[$col] === 1){
            $visibleTests[$col] = $info;
            $table = $info['table'];

            // escape اسم الجدول (آمن لأن القائمة ثابتة) واستخدم backticks
            $table_safe = '`' . $connexion->real_escape_string($table) . '`';

            // تحضير استعلام CHECK باستخدام اسم الجدول المحمي
            $sqlChk = "SELECT COUNT(*) as cnt FROM $table_safe WHERE id = ?";
            $chk = $connexion->prepare($sqlChk);
            if(!$chk){
                error_log(sprintf('[submit_test] prepare CHECK failed for table %s: %s', $table, $connexion->error));
                continue;
            }

            $chk->bind_param('i', $last_id);
            if(!$chk->execute()){
                error_log(sprintf('[submit_test] execute CHECK failed for table %s: %s', $table, $chk->error));
                $chk->close();
                continue;
            }

            // جمع النتيجة (دعم بديل لبيئات لا تدعم get_result)
            $cnt = 0;
            $chk->bind_result($cnt);
            $chk->fetch();
            $chk->close();

            error_log(sprintf('[submit_test] check %s id=%d exists=%d', $table, $last_id, (int)$cnt));

            if((int)$cnt === 0){
                // INSERT مبدئي في الجدول الفرعي (id من test_base)
                $sqlIns = "INSERT INTO $table_safe (id, suicide_q, comment_msg, timestamp) VALUES (?, ?, ?, NOW())";
                $ins = $connexion->prepare($sqlIns);
                if(!$ins){
                    error_log("[submit_test] prepare INSERT into $table failed: ".$connexion->error);
                    continue;
                }

                $comment_clean = isset($row['comment_msg']) ? $row['comment_msg'] : '';

                $ins->bind_param('iis', $last_id, $suicide_q, $comment_clean);
                if(!$ins->execute()){
                    error_log("[submit_test] execute INSERT into $table failed: ".$ins->error);
                    $ins->close();
                    continue;
                }
                error_log(sprintf('[submit_test] inserted into %s id=%d', $table, $last_id));
                $ins->close();
            }
        }
    }

    // إذا كان مؤشر الانتحار مفعلًا، تأكد أيضًا من إنشاء صف C-SSRS في test_srss
    if($suicide_q === 1){
        $ssrs_table = '`' . $connexion->real_escape_string('test_srss') . '`';
        $chkS = $connexion->prepare("SELECT COUNT(*) as cnt FROM $ssrs_table WHERE id = ?");
        if($chkS){
            $chkS->bind_param('i', $last_id);
            if($chkS->execute()){
                $cntS = 0;
                $chkS->bind_result($cntS);
                $chkS->fetch();
                $chkS->close();
                if((int)$cntS === 0){
                    $insS = $connexion->prepare("INSERT INTO $ssrs_table (id, suicide_q, comment_msg, timestamp) VALUES (?, ?, ?, NOW())");
                    if($insS){
                        $comment_clean = isset($row['comment_msg']) ? $row['comment_msg'] : '';
                        $insS->bind_param('iis', $last_id, $suicide_q, $comment_clean);
                        if(!$insS->execute()){
                            error_log('[submit_test] INSERT into test_srss failed: ' . $insS->error);
                        } else {
                            error_log(sprintf('[submit_test] inserted into test_srss id=%d', $last_id));
                        }
                        $insS->close();
                    } else {
                        error_log('[submit_test] prepare INSERT into test_srss failed: ' . $connexion->error);
                    }
                }
            } else {
                error_log('[submit_test] execute check test_srss failed: ' . $chkS->error);
                $chkS->close();
            }
        } else {
            error_log('[submit_test] prepare check test_srss failed: ' . $connexion->error);
        }
    }

    error_log('[submit_test] commit');
    $connexion->commit();

    // post-commit diagnostic check (آمن: نستخدم prepared ونتحقق إن وجدت get_result وإلا bind_result)
    foreach($visibleTests as $col => $info){
        $table = $connexion->real_escape_string($info['table']);
        $table_safe = '`' . $table . '`';
        $sql = "SELECT * FROM $table_safe WHERE id = ? LIMIT 1";
        $chk2 = $connexion->prepare($sql);
        if($chk2){
            $chk2->bind_param('i', $last_id);
            if($chk2->execute()){
                // حاول استخدام get_result إن كان متاحًا
                $res2 = null;
                if(method_exists($chk2, 'get_result')){
                    $res2 = $chk2->get_result();
                    $row2 = $res2 ? $res2->fetch_assoc() : null;
                } else {
                    // بديل: جلب الأعمدة ديناميكياً عبر bind_result (نوع مبسط)
                    $meta = $chk2->result_metadata();
                    if($meta){
                        $fields = $meta->fetch_fields();
                        $rowBind = [];
                        $bindVars = [];
                        foreach($fields as $field){
                            $bindVars[] = &$rowBind[$field->name];
                        }
                        call_user_func_array([$chk2, 'bind_result'], $bindVars);
                        $chk2->fetch();
                        $row2 = $rowBind;
                    } else {
                        $row2 = null;
                    }
                }
                error_log(sprintf('[submit_test] post-commit check table=%s id=%d row=%s', $info['table'], $last_id, json_encode($row2)));
            } else {
                error_log(sprintf('[submit_test] post-commit execute failed for table %s: %s', $info['table'], $chk2->error));
            }
            $chk2->close();
        } else {
            error_log(sprintf('[submit_test] post-commit prepare failed for table %s: %s', $info['table'], $connexion->error));
        }
    }

    /* -------- بناء HTML الاستجابة -------- */
    $html = '<div id="mainTestResult">';
    $html .= '<h4>'.esc($row['comment_msg']).'</h4>';

    // Always render accordion of subtests. If suicide flag set, include C-SSRS first and mark other tests as requiring SSRS
    if(!empty($visibleTests) || $suicide_q === 1){
            $html .= '<div class="accordion accordion-flush mt-3" id="accordionTests">';

            // If suicide flag set, render C-SSRS as the first accordion item
            if($suicide_q === 1){
                $ssrs_file = 'ssrs.php';
                $ssrs_label = 'C-SSRS';
                $ssrs_data_result = 'result_ssrs';
                $ssrs_wrapperId = 'formWrapper_ssrs_' . (int)$last_id;

                $html .= '<div class="accordion-item">';
                $html .= '<h2 class="accordion-header d-flex align-items-center justify-content-between" id="heading_ssrs">';
                $html .= '<button class="accordion-button collapsed flex-grow-1 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_ssrs" aria-expanded="false" aria-controls="collapse_ssrs">';
                $html .= esc($ssrs_label);
                $html .= '</button>';
                $html .= '<div class="ms-2"><button type="button" class="btn btn-sm btn-primary showSubTestBtn" data-target="' . $ssrs_wrapperId . '">Afficher le test</button></div>';
                $html .= '</h2>';
                $html .= '<div id="collapse_ssrs" class="accordion-collapse collapse" aria-labelledby="heading_ssrs" data-bs-parent="#accordionTests">';
                $html .= '<div class="accordion-body">';

                $ssrsPath = __DIR__ . '/' . $ssrs_file;
                if(file_exists($ssrsPath)){
                    ob_start();
                    include $ssrsPath;
                    $ssrsBuffer = ob_get_clean();
                    // inject hidden input file
                    $hiddenInput = '<input type="hidden" name="file" value="'.htmlspecialchars($ssrs_file, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8').'">';
                    $posForm = stripos($ssrsBuffer, '<form');
                    if($posForm !== false){
                        $posClose = strpos($ssrsBuffer, '>', $posForm);
                        if($posClose !== false){
                            $tagLen = $posClose - $posForm + 1;
                            $tag = substr($ssrsBuffer, $posForm, $tagLen);
                            if(stripos($tag, 'class=') === false){
                                $newTag = rtrim($tag, '>') . ' class="subTestForm" data-result="' . $ssrs_data_result . '">';
                                $ssrsBuffer = substr_replace($ssrsBuffer, $newTag, $posForm, $tagLen);
                                $posClose = $posForm + strlen($newTag) - 1;
                            } else {
                                if(stripos($tag, 'data-result=') === false){
                                    $newTag = rtrim($tag, '>') . ' data-result="' . $ssrs_data_result . '">';
                                    $ssrsBuffer = substr_replace($ssrsBuffer, $newTag, $posForm, $tagLen);
                                    $posClose = $posForm + strlen($newTag) - 1;
                                }
                            }
                            $posInsert = $posClose + 1;
                            $ssrsBuffer = substr_replace($ssrsBuffer, $hiddenInput, $posInsert, 0);
                        } else {
                            $ssrsBuffer = $hiddenInput . $ssrsBuffer;
                        }
                    } else {
                        $ssrsBuffer = '<form method="POST" action="test/submit_test_filiale.php" class="subTestForm" data-result="' . $ssrs_data_result . '">' . $hiddenInput . $ssrsBuffer . '</form>';
                    }

                    $html .= '<div id="' . $ssrs_wrapperId . '" class="subtest-wrapper" style="display:none;">' . $ssrsBuffer . '</div>';
                } else {
                    $html .= '<div class="alert alert-warning">Fichier C-SSRS manquant: '.esc($ssrs_file).'</div>';
                }

                $html .= '<div id="' . $ssrs_data_result . '" class="mt-3"></div>';
                $html .= '</div></div></div>';
            }

            foreach($visibleTests as $col => $info){
                $file = esc($info['file']);
                $label = esc($info['label']);
                $data_result = 'result_'.esc($col);

                // wrapper id for the hidden form container (unique per test + last_id)
                $wrapperId = 'formWrapper_'.preg_replace('/[^a-zA-Z0-9_\-]/', '_', $col). '_' . (int)$last_id;
                $file = esc($info['file']);
                $label = esc($info['label']);
                $data_result = 'result_'.esc($col);

                // wrapper id for the hidden form container (unique per test + last_id)
                $wrapperId = 'formWrapper_'.preg_replace('/[^a-zA-Z0-9_\-]/', '_', $col). '_' . (int)$last_id;

                $html .= '<div class="accordion-item">';
                $html .= '<h2 class="accordion-header d-flex align-items-center justify-content-between" id="heading'.esc($col).'">';
                // keep all items collapsed by default; user will click 'Afficher le test' to reveal the form
                // إذا كان اختبار C-SSRS مطلوباً (suicide_q === 1) نمنع فتح عناصر الأكورديون الأخرى client-side
                $lockedAttr = ($suicide_q === 1) ? ' data-ssrs-required="1"' : '';
                $html .= '<button class="accordion-button collapsed flex-grow-1 text-start"' . $lockedAttr . ' type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.esc($col).'" aria-expanded="false" aria-controls="collapse'.esc($col).'">';
                $html .= $label;
                $html .= '</button>';
                // small action button visible in the header to directly open the form
                $html .= '<div class="ms-2"><button type="button" class="btn btn-sm btn-primary showSubTestBtn" data-target="' . $wrapperId . '">Afficher le test</button></div>';
                $html .= '</h2>';

                $html .= '<div id="collapse'.esc($col).'" class="accordion-collapse collapse" aria-labelledby="heading'.esc($col).'" data-bs-parent="#accordionTests">';
                $html .= '<div class="accordion-body">';

                // تضمين ملف الاختبار الفرعي server-side (يجب أن يطبع نموذج <form> مع action ل submit_test_filiale.php)
                $subfilePath = __DIR__ . '/' . $info['file'];
                if(file_exists($subfilePath)){
                    ob_start();
                    include $subfilePath;
                    $buffer = ob_get_clean();

                    // حقن حقل مخفي داخل أول وسم <form ...>
                    $hiddenInput = '<input type="hidden" name="file" value="'.htmlspecialchars($info['file'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8').'">';
                    $posForm = stripos($buffer, '<form');
                    if($posForm !== false){
                        $posClose = strpos($buffer, '>', $posForm);
                        if($posClose !== false){
                            // أضف attributes (class + data-result) إلى وسم الفتح إن لم تكن موجودة
                            $tagLen = $posClose - $posForm + 1;
                            $tag = substr($buffer, $posForm, $tagLen);
                            if(stripos($tag, 'class=') === false){
                                // ضع الصنف و data-result قبل إغلاق الوسم
                                $newTag = rtrim($tag, '>') . ' class="subTestForm" data-result="' . $data_result . '">';
                                $buffer = substr_replace($buffer, $newTag, $posForm, $tagLen);
                                // بعد الاستبدال أعِد حساب مكان الإغلاق
                                $posClose = $posForm + strlen($newTag) - 1;
                            } else {
                                // حتى لو وُجدت class، تأكد من إضافة data-result إن لم تكن موجودة
                                if(stripos($tag, 'data-result=') === false){
                                    $newTag = rtrim($tag, '>') . ' data-result="' . $data_result . '">';
                                    $buffer = substr_replace($buffer, $newTag, $posForm, $tagLen);
                                    $posClose = $posForm + strlen($newTag) - 1;
                                }
                            }
                            $posInsert = $posClose + 1;
                            $buffer = substr_replace($buffer, $hiddenInput, $posInsert, 0);
                        } else {
                            $buffer = $hiddenInput . $buffer;
                        }
                    } else {
                        // إذا لم نجد <form> نلف المحتوى داخل form يناسب submit_test_filiale.php
                        $buffer = '<form method="POST" action="test/submit_test_filiale.php" class="subTestForm" data-result="' . $data_result . '">' . $hiddenInput . $buffer . '</form>';
                    }

                        // wrap the (possibly modified) form into a hidden container (will be shown when user clicks header button)
                        // if suicide flag set, mark this wrapper as requiring SSRS first
                        $ssrsAttr = ($suicide_q === 1) ? ' data-ssrs-required="1"' : '';
                        $html .= '<div id="' . $wrapperId . '" class="subtest-wrapper"' . $ssrsAttr . ' style="display:none;">' . $buffer . '</div>';
                } else {
                    $html .= '<div class="alert alert-warning">Fichier de sous-test manquant: '.esc($info['file']).'</div>';
                }

                $html .= '<div id="'. $data_result .'" class="mt-3"></div>';
                $html .= '</div></div></div>';

                $first = false;
            }
            $html .= '</div>';
        }

    $html .= '</div>';

    echo $html;
    exit;

} catch(Exception $e) {
    $connexion->rollback();
    error_log('[submit_test.php] Error: '.$e->getMessage());
    http_response_code(500);
    echo '';
    exit;
}
