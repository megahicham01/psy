<?php
// submit_test.php

// استدعاء ملف config.php للاتصال بقاعدة البيانات
include '../config.php';

// استلام بيانات POST
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
$suicide_q = $_POST['suicide_q'] ?? 'non';

// تنفيذ INSERT (Trigger يحسب السكورات و C_SSRS و comment_msg تلقائيًا)
$sql = "INSERT INTO test_base 
        (q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,suicide_q) 
        VALUES 
        ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$suicide_q')";

if (mysqli_query($connexion, $sql)) {
    // جلب آخر إدخال لمعرفة الرسالة والتقييم
    $last_id = mysqli_insert_id($connexion);
    $res = mysqli_query($connexion, "SELECT comment_msg FROM test_base WHERE id = $last_id");
    $row = mysqli_fetch_assoc($res);

    // عرض الرسالة المحسوبة في trigger
    echo "<div class='alert alert-info mt-3'>";
    echo $row['comment_msg'];
    echo "</div>";

} else {
    echo "<div class='alert alert-danger'>خطأ في تسجيل البيانات: " . mysqli_error($connexion) . "</div>";
}
?>
