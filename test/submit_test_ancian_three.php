<?php
// test/submit_test.php
include '../config.php'; // يُعرّف $connexion (mysqli)

function esc($s){ return htmlspecialchars($s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }

$q = [];
for($i=1;$i<=10;$i++){
    $k = 'q'.$i;
    $q[$i] = isset($_POST[$k]) ? $_POST[$k] : '';
}
$suicide_q = isset($_POST['suicide_q']) ? (int)$_POST['suicide_q'] : 0;

// prepared insert into test_base (نخزن الأسئلة؛ الـ trigger سيكمل الباقي)
$stmt = $connexion->prepare("INSERT INTO test_base (Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,suicide_q,timestamp) VALUES (?,?,?,?,?,?,?,?,?,?,?,NOW())");
$stmt->bind_param('sssssssssis', $q[1],$q[2],$q[3],$q[4],$q[5],$q[6],$q[7],$q[8],$q[9],$q[10], $suicide_q);
$ok = $stmt->execute();
if(!$ok){
    echo '<div class="alert alert-danger">خطأ في الإدخال: '.esc($connexion->error).'</div>';
    exit;
}
$last_id = $stmt->insert_id;
$stmt->close();

// جلب السطر بعد تنفيذ الـ trigger
$res = $connexion->query("SELECT * FROM test_base WHERE id = ".(int)$last_id." LIMIT 1");
$row = $res->fetch_assoc();
if(!$row){
    echo '<div class="alert alert-danger">فشل جلب النتيجة.</div>';
    exit;
}

// بناء HTML للـ main result
$html = '<div id="mainResult">';
$html .= '<h2>' . esc($row['comment_msg']) . '</h2>';

// إذا الـ suicide_q = 1 نعرض ssrs فقط
if((int)$row['suicide_q'] === 1){
    $html .= '<button class="btn btn-danger my-2 load-subtest-btn" data-file="ssrs.php" data-base="data_ssrs" data-id="'.(int)$last_id.'">C-SSRS</button> ';
} else {
    $map = [
      'Display_PHQ9'    => ['file'=>'phq.php','base'=>'data_phq','label'=>'PHQ9'],
      'Display_GAD7'    => ['file'=>'gad.php','base'=>'data_gad','label'=>'GAD7'],
      'Display_PCL5'    => ['file'=>'pcl.php','base'=>'data_pcl','label'=>'PCL5'],
      'Display_ISI'     => ['file'=>'isi.php','base'=>'data_isi','label'=>'ISI'],
      'Display_AUDIT_C' => ['file'=>'audit_c.php','base'=>'data_audit_c','label'=>'AUDIT-C'],
      'Display_AUDIT'   => ['file'=>'audit.php','base'=>'data_audit','label'=>'AUDIT'],
      'Display_DAST10'  => ['file'=>'dast.php','base'=>'data_dast','label'=>'DAST-10'],
    ];

    foreach($map as $col => $info){
    if(isset($row[$col]) && (int)$row[$col] === 1){
        $html .= '<button class="btn btn-primary my-1 load-subtest-btn" 
                           data-file="'.htmlspecialchars($info['file'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8').'" 
                           data-base="'.htmlspecialchars($info['base'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8').'" 
                           data-id="'.(int)$last_id.'">'
                  . htmlspecialchars($info['label'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') .
                 '</button> ';
    }
}


}

$html .= '</div>';

echo $html;
