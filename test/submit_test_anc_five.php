<?php
// test/submit_test.php
include '../config.php';
function esc($s){ return htmlspecialchars($s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }

// جمع الأسئلة من POST
$q=[];
for($i=1;$i<=10;$i++){
    $k='q'.$i;
    $q[$i] = $_POST[$k] ?? '';
}
$suicide_q = isset($_POST['suicide_q']) ? (int)$_POST['suicide_q'] : 0;

// إدخال البيانات فقط id, Q1..Q10, suicide_q
$stmt=$connexion->prepare("
    INSERT INTO test_base (Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,suicide_q,timestamp)
    VALUES (?,?,?,?,?,?,?,?,?,?,?,NOW())
");
$stmt->bind_param('sssssssssis',// prbbbbbbbbbbbbbbbbbb
    $q[1],$q[2],$q[3],$q[4],$q[5],$q[6],$q[7],$q[8],$q[9],$q[10],$suicide_q
);
if(!$stmt->execute()){
    echo '<div class="alert alert-danger">Erreur insertion: '.esc($connexion->error).'</div>';
    exit;
}
$last_id = $stm->insert_id;
$stmt->close();

// جلب السطر بعد trigger
$res = $connexion->query("SELECT * FROM test_base WHERE id=".(int)$last_id);
$row = $res->fetch_assoc();

// HTML النتائج
$html = '<div id="mainTestResult">';
$html .= '<h4>'.esc($row['comment_msg']).'</h4>';

// إذا suicide_q = 1
if($suicide_q === 1){
    $html .= '<button class="btn btn-danger my-2" onclick="window.open(\'test/ssrs.php?id='.$last_id.'\',\'_blank\')">C-SSRS</button>';
}else{
    // الاختبارات المقترحة بناءً على display
    $tests=[
        'Display_PHQ9'=>['file'=>'phq.php','label'=>'PHQ-9'],
        'Display_GAD7'=>['file'=>'gad.php','label'=>'GAD-7'],
        'Display_PCL5'=>['file'=>'pcl.php','label'=>'PCL-5'],
        'Display_ISI'=>['file'=>'isi.php','label'=>'ISI'],
        'Display_AUDIT_C'=>['file'=>'audit_c.php','label'=>'AUDIT-C'],
        'Display_AUDIT'=>['file'=>'audit.php','label'=>'AUDIT'],
        'Display_DAST10'=>['file'=>'dast.php','label'=>'DAST-10'],
    ];

    $visibleTests=[];
    foreach($tests as $col=>$info){
    if(!empty($row[$col]) && (int)$row[$col]===1){
        $visibleTests[$col]=$info;

        // تحديد اسم الجدول الفرعي
        $table_map = [
            'Display_PHQ9'=>'test_phq',
            'Display_GAD7'=>'test_gad',
            'Display_PCL5'=>'test_pcl',
            'Display_ISI'=>'test_isi',
            'Display_AUDIT_C'=>'test_audit',
            'Display_AUDIT'=>'test_audit',
            'Display_DAST10'=>'test_dast'
        ];
        $table = $table_map[$col] ?? '';
        if($table){
            $stmt2 = $connexion->prepare("
                INSERT INTO $table (id, suicide_q, comment_msg, timestamp) 
                VALUES (?, ?, ?, NOW())
            ");
            $stmt2->bind_param('iis', $last_id, $suicide_q, $row['comment_msg']);
            $stmt2->execute();
            $stmt2->close();
        }
    }
}

// Accordion 
    if($visibleTests){
        $html .= '<div class="accordion accordion-flush mt-3" id="accordionTests">';
        $first=true;
        foreach($visibleTests as $col=>$info){
            $html .= '
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading'.esc($col).'">
                    <button class="accordion-button '.($first?'':'collapsed').'" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapse'.esc($col).'" 
                        aria-expanded="'.($first?'true':'false').'" aria-controls="collapse'.esc($col).'">
                        '.esc($info['label']).'
                    </button>
                </h2>
                <div id="collapse'.esc($col).'" class="accordion-collapse collapse '.($first?'show':'').'" 
                     aria-labelledby="heading'.esc($col).'" data-bs-parent="#accordionTests">
                    <div class="accordion-body">
                        <form action="test/'.esc($info['file']).'" method="POST" class="subTestForm" data-result="result_'.esc($col).'">
                            <input type="hidden" name="base_id" value="'.(int)$last_id.'">
                            <?php include "test/'.esc($info['file']).'"; ?> 
                            <button type="submit" class="btn btn-success my-3">Afficher le test</button>
                        </form>
                        <div id="result_'.esc($col).'" class="mt-3"></div>
                    </div>
                </div>
            </div>';
            $first=false;// ?php include "t...... prbbbbbbbbbbb
        }
        $html .= '</div>';
    }
}

$html .= '</div>';
echo $html;
