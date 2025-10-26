<?php
include '../config.php'; // يجب أن يحتوي على $connexion = mysqli_connect(...);

// تنظيف واستقبال البيانات
$q = [];
for($i=1;$i<=10;$i++){
    $q[$i] = isset($_POST['q'.$i]) ? mysqli_real_escape_string($connexion, trim($_POST['q'.$i])) : '';
}
$suicide_q = isset($_POST['suicide_q']) ? (int)$_POST['suicide_q'] : 0;

// INSERT آمن (Trigger يحسب القيم الأخرى)
$sql = "INSERT INTO test_base 
        (Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,suicide_q)
        VALUES
        ('{$q[1]}','{$q[2]}','{$q[3]}','{$q[4]}','{$q[5]}','{$q[6]}','{$q[7]}','{$q[8]}','{$q[9]}','{$q[10]}','$suicide_q')";

if(mysqli_query($connexion, $sql)) {

    $last_id = mysqli_insert_id($connexion);
    $res = mysqli_query($connexion, "SELECT * FROM test_base WHERE id = $last_id");
    $row = mysqli_fetch_assoc($res);

    echo '<div class="test-result-wrapper">';
    // comment_msg
    echo '<h2>' . htmlspecialchars($row['comment_msg'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . '</h2>';

    // زر C-SSRS إذا suicide_q = 1
    if($row['suicide_q'] == 1){
        echo '<a href="test/C_SSRS.php" class="btn btn-danger my-2">إجراء اختبار C-SSRS</a>';
    } else {
        // Mapping الأزرار حسب Display_*
        $tests = [
            'Display_PHQ9'    => 'PHQ9.php',
            'Display_GAD7'    => 'GAD7.php',
            'Display_PCL5'    => 'PCL5.php',
            'Display_ISI'     => 'ISI.php',
            'Display_AUDIT_C' => 'AUDIT_C.php',
            'Display_AUDIT'   => 'AUDIT.php',
            'Display_DAST10'  => 'DAST10.php'
        ];

        foreach($tests as $col => $file){
            if(isset($row[$col]) && $row[$col] == 1){
                $fileEsc = htmlspecialchars($file, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
                $labelEsc = htmlspecialchars(str_replace('.php','',$file), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
                echo '<a href="test/' . $fileEsc . '" class="btn btn-primary my-1">' . $labelEsc . '</a> ';
            }
        }
    }
    echo '</div>';

} else {
    echo '<div class="alert alert-danger">حدث خطأ في الإدخال: ' . mysqli_error($connexion) . '</div>';
}