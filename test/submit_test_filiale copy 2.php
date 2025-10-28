<?php
// submit_test_filiale.php
include '../config.php'; // إعدادات قاعدة البيانات
header('Content-Type: application/json');

function esc($s) {
    return htmlspecialchars($s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

// تأكد أن POST موجودة
if(!isset($_POST['id'])) {
    error_log('[submit_test_filiale] Missing base id in POST');
    echo json_encode(['comment_msg_test'=>'']);
    exit;
}

$id = (int)$_POST['id'];
$suicide_q = isset($_POST['suicide_q']) ? (int)$_POST['suicide_q'] : 0;
$comment_msg = isset($_POST['comment_msg']) ? $_POST['comment_msg'] : '';

// Debug: سجل البيانات الواردة (آمن للتطوير فقط)
error_log(sprintf('[submit_test_filiale] incoming file=%s id=%d suicide_q=%d comment_present=%s',
    $_POST['file'] ?? 'NULL', $id, $suicide_q, ($comment_msg !== '' ? 'yes' : 'no')
));

// جمع كل Q1..Q20
// جمع Q1..Q20 إن وُجدت (قد تختلف حسب الاختبار الفرعي)
$Q = [];
for($i=1;$i<=20;$i++){
    $key = 'q'.$i;
    $Q[$key] = isset($_POST[$key]) ? $_POST[$key] : null; // إذا غير موجود يصبح null
}

// تحديد الجدول الفرعي من اسم الملف الذي أرسلته form
$mapping = [
    'phq.php' => 'test_phq',
    'gad.php' => 'test_gad',
    'isi.php' => 'test_isi',
    'dast.php' => 'test_dast',
    'pcl.php' => 'test_pcl',
    'audit.php' => 'test_audit',
    'srss.php' => 'test_srss'
];

// نفترض أن form أرسل hidden input باسم 'file'
if(!isset($_POST['file']) || !isset($mapping[$_POST['file']])) {
    error_log('[submit_test_filiale] Invalid or missing subtest file: ' . ($_POST['file'] ?? 'NULL'));
    echo json_encode(['comment_msg_test'=>'']);
    exit;
}

$table = $mapping[$_POST['file']];

// قبل التحديث، نتأكد أن الصف موجود (نستخدم $connexion الموحد من config)
$stmtCheck = $connexion->prepare("SELECT id FROM $table WHERE id = ?");
if(!$stmtCheck){
    error_log('prepare stmtCheck failed: ' . $connexion->error);
    echo json_encode(['comment_msg_test'=>'']);
    exit;
}
$stmtCheck->bind_param("i", $id);
$stmtCheck->execute();
$res = $stmtCheck->get_result();

if($res->num_rows === 0){
    // الصف لم يُنشأ بعد - ندرجه مبدئياً
    $columns = 'id, suicide_q, comment_msg, timestamp';
    $sql = "INSERT INTO $table ($columns) VALUES (?,?,?,NOW())";
    $stmtInsert = $connexion->prepare($sql);
    if(!$stmtInsert){
        error_log('prepare insert failed: ' . $connexion->error);
        echo json_encode(['comment_msg_test'=>'']);
        exit;
    }
    // bind requires variables (and references) - لا تستخدم unpacking المباشر للسلامة
    $v1 = $id; $v2 = $suicide_q; $v3 = $comment_msg;
    $stmtInsert->bind_param('iis', $v1, $v2, $v3);
    if(!$stmtInsert->execute()){
        error_log('execute insert failed: ' . $stmtInsert->error);
        echo json_encode(['comment_msg_test'=>'']);
        exit;
    }
    $stmtInsert->close();
}
$stmtCheck->close();

// الآن نقوم بعمل UPDATE فقط إذا Q1..Q20 فارغة (B: منع التعديل بعد أول إرسال)
// الآن نقوم بعمل UPDATE ولكن فقط للحقول المرسلة
$updateSet = [];
$params = [];
$types = '';

foreach($Q as $col => $val){
    if($val !== null){
        // تأكد أن أسماء الأعمدة متوقعة (مقدمة بسيطة: يجب أن تكون Q1..Q20)
        if(preg_match('/^q[1-9][0-9]*$/i', $col)){
            $updateSet[] = "$col = ?";
            $params[] = $val;
            $types .= 's'; // نفترض أن كل Q varchar
        }
    }
}

// نحدّث الطابع الزمني دائمًا
$updateSet[] = "timestamp = NOW()";

// نحدّث السطر حسب id فقط (لا نحذف السطر).
// سابقاً كان التحديث مشروطًا بـ (Q1 IS NULL OR Q1 = ''), ما قد يمنع التحديث أو يترك السطر دون تغير — الآن نحدّده بـ id فقط
$sql = "UPDATE $table SET " . implode(', ', $updateSet) . " WHERE id = ?";
$params[] = $id;
$types .= 'i';

if(count($updateSet) > 0){
    $stmtUpdate = $connexion->prepare($sql);
    if(!$stmtUpdate){
        error_log('prepare update failed: ' . $connexion->error);
        echo json_encode(['comment_msg_test'=>'']);
        exit;
    }

    // سجّل نوع المعاملات والقيم قبل الربط للتشخيص
    error_log('[submit_test_filiale] update sql=' . $sql);
    error_log('[submit_test_filiale] update types=' . $types . ' params=' . json_encode($params));

    // bind_param يحتاج مراجع؛ نستخدم دالة مساعدة
    $bindParams = array_merge([$types], $params);
    // تحويل القيم إلى مراجع
    $tmp = [];
    foreach($bindParams as $key => $value){
        $tmp[$key] = &$bindParams[$key];
    }
    call_user_func_array([$stmtUpdate, 'bind_param'], $tmp);

    if(!$stmtUpdate->execute()){
        error_log('execute update failed: ' . $stmtUpdate->error);
        echo json_encode(['comment_msg_test'=>'']);
        exit;
    }

    // سجّل عدد الصفوف المتأثرة. إذا لم يتأثر أي صفّ، نحاول إدخال/تحديث احتياطيًا لضمان وجود السطر (آمن لأن id هو PRIMARY KEY)
    $affected = $stmtUpdate->affected_rows;
    error_log(sprintf('[submit_test_filiale] update affected_rows=%d for id=%d table=%s', $affected, $id, $table));
    if($affected === 0){
        // fallback: استخدم INSERT ... ON DUPLICATE KEY UPDATE لتطبيق القيم بأمان
        // نحاول بناء استعلام بسيط يطابق الأعمدة التي أرسلناها
        $cols = [];
        $valsPlace = [];
        $updates = [];
        $bindVals = [];
        $bindTypes = '';
        foreach($updateSet as $setItem){
            if(strpos($setItem, 'timestamp =') !== false) continue; // نتجاهل timestamp في هذه البنية
            // setItem مثل "q1 = ?" -> نأخذ اسم العمود
            if(preg_match('/^([a-zA-Z0-9_]+)\s*=\s*\?$/', trim($setItem), $m)){
                $colName = $m[1];
                $cols[] = $colName;
                $valsPlace[] = '?';
                $updates[] = "$colName = VALUES($colName)";
            }
        }
        // إضافة comment_msg و suicide_q إن وُجدوا في params (افتراضي مغطى سابقًا)
        if(count($cols) > 0){
            // بناء استعلام
            $insertCols = implode(', ', array_merge(['id'], $cols));
            $insertVals = implode(', ', array_merge(['?'], $valsPlace));
            $dupUpdates = implode(', ', $updates);
            $fallbackSql = "INSERT INTO $table ($insertCols) VALUES ($insertVals) ON DUPLICATE KEY UPDATE $dupUpdates";
            $stmtFallback = $connexion->prepare($fallbackSql);
            if($stmtFallback){
                // بناء bind values: أول قيمة هي id
                $fbParams = array_merge([$id], array_values(array_filter($params, function($k){return true;})));
                // types: 'i' + remaining types (we reuse $types but it's tricky). For safety, bind all as strings except id
                $fbTypes = 'i' . str_repeat('s', count($fbParams)-1);
                $bindArray = array_merge([$fbTypes], $fbParams);
                $tmp = [];
                foreach($bindArray as $k => $v) $tmp[$k] = &$bindArray[$k];
                call_user_func_array([$stmtFallback, 'bind_param'], $tmp);
                if(!$stmtFallback->execute()){
                    error_log('[submit_test_filiale] fallback insert failed: ' . $stmtFallback->error);
                } else {
                    error_log('[submit_test_filiale] fallback insert succeeded for id=' . $id);
                }
                $stmtFallback->close();
            } else {
                error_log('[submit_test_filiale] prepare fallback failed: ' . $connexion->error);
            }
        }
    }
    $stmtUpdate->close();
}

// جلب comment_msg_test بعد Trigger
// جلب comment_msg_test بعد trigger أو بعد حسابات server-side
$stmtFetch = $connexion->prepare("SELECT comment_msg_test FROM $table WHERE id = ? LIMIT 1");
if(!$stmtFetch){
    error_log('prepare fetch failed: ' . $connexion->error);
    echo json_encode(['comment_msg_test'=>'']);
    exit;
}
$stmtFetch->bind_param('i', $id);
$stmtFetch->execute();
$resFetch = $stmtFetch->get_result();
$row = $resFetch->fetch_assoc();
$stmtFetch->close();

echo json_encode(['comment_msg_test' => $row['comment_msg_test'] ?? '']);
exit;
?>
