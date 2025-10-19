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

// تنفيذ INSERT (Trigger يحسب total و evaluation و final_result تلقائيًا)
$sql = "INSERT INTO test_base 
        (q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,suicide_q) 
        VALUES 
        ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$suicide_q')";

if (mysqli_query($connexion, $sql)) {
    // جلب آخر إدخال لمعرفة النتيجة
    $last_id = mysqli_insert_id($connexion);
    $res = mysqli_query($connexion, "SELECT final_result, suicide_q FROM test_base WHERE id = $last_id");
    $row = mysqli_fetch_assoc($res);

    if ($row['suicide_q'] == 1) {
        // حالة الطوارئ
        echo "<h2>⚠ تنبيه عاجل</h2>";
        echo "<p>تشير إجابتك إلى وجود أفكار لإيذاء نفسك. هذا الوضع يحتاج إلى مساعدة فورية من مختصين.</p>";
        echo '<a href="../expert.php">⬇ اضغط هنا للتواصل مع مختصين فورًا</a>';
    } else {
        // عرض النتيجة العامة فقط بدون ذكر النقاط
        echo "<h2>نتيجتك: " . $row['final_result'] . "</h2>";

        // روابط إضافية
        echo '<br><a href="test.php">اختبارات إضافية</a>';
        echo ' | ';
        echo '<a href="../expert.php">تواصل مع الخبراء</a>';
    }
} else {
    echo "خطأ في تسجيل البيانات: " . mysqli_error($connexion);
}
?>
