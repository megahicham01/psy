<?php
include '../config.php';

$q1 = $_POST['q1'] ?? '';
$q2 = $_POST['q2'] ?? '';
$q3 = $_POST['q3'] ?? '';
$q4 = $_POST['q4'] ?? '';
$q5 = $_POST['q5'] ?? '';
$q6 = $_POST['q6'] ?? '';
$q7 = $_POST['q7'] ?? '';
$q8 = $_POST['q8'] ?? '';
$q9 = $_POST['q9'] ?? '';
$q10 = $_POST['q10'] ?? '';
$suicide_q = $_POST['suicide_q'] ?? '0';

// تنفيذ INSERT (Trigger يحسب السكورات و C_SSRS و comment_msg تلقائيًا)
$sql = "INSERT INTO test_base 
        (q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,suicide_q) 
        VALUES 
        ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$suicide_q')";

if (mysqli_query($connexion, $sql)) {

$last_id = mysqli_insert_id($connexion);
$res = mysqli_query($connexion, "SELECT * FROM test_base WHERE id = $last_id");
$row = mysqli_fetch_assoc($res);

// عرض الرسالة
echo "<h2>" . $row['comment_msg'] . "</h2>";

// زر C-SSRS إذا كانت suicide_q = oui
if ($row['suicide_q'] == 1) {
    echo '<a href="test/C_SSRS.php" class="btn btn-danger my-2">إجراء اختبار C-SSRS</a>';


// إذا suicide_q = non، عرض أزرار الاختبارات التي تساوي 1
if ($row['suicide_q'] == 0) {
    $tests = [
        'Display_PHQ9' => 'PHQ9.php',
        'Display_GAD7' => 'GAD7.php',
        'Display_PCL5' => 'PCL5.php',
        'Display_ISI' => 'ISI.php',
        'Display_AUDIT_C' => 'AUDIT_C.php',
        'Display_AUDIT' => 'AUDIT.php',
        'Display_DAST10' => 'DAST10.php'
    ];

    foreach ($tests as $col => $file) {
        if ($row[$col] == 1) {
            echo '<a href="test/' . $file . '" class="btn btn-primary my-1">' . str_replace('.php','',$file) . '</a> ';
        }
    }
}}}
?>
