<?php
// submit_test_filiale.php
include '../config.php'; // إعدادات قاعدة البيانات
header('Content-Type: application/json');

function esc($s) {
    return htmlspecialchars($s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

// تأكد أن POST موجودة
if(!isset($_POST['id'])) {
    echo json_encode(['error'=>'Missing base id']);
    exit;
}

$id = (int)$_POST['id'];
$suicide_q = isset($_POST['suicide_q']) ? (int)$_POST['suicide_q'] : 0;
$comment_msg = isset($_POST['comment_msg']) ? $_POST['comment_msg'] : '';

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
    echo json_encode(['error'=>'Invalid subtest file']);
    exit;
}

$table = $mapping[$_POST['file']];

// قبل التحديث، نتأكد أن الصف موجود (نستخدم $connexion الموحد من config)
$stmtCheck = $connexion->prepare("SELECT id FROM $table WHERE id = ?");
if(!$stmtCheck){
    error_log('prepare stmtCheck failed: ' . $connexion->error);
    echo json_encode(['error'=>'Server error']);
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
        echo json_encode(['error'=>'Server error']);
        exit;
    }
    // bind requires variables (and references) - لا تستخدم unpacking المباشر للسلامة
    $v1 = $id; $v2 = $suicide_q; $v3 = $comment_msg;
    $stmtInsert->bind_param('iis', $v1, $v2, $v3);
    if(!$stmtInsert->execute()){
        error_log('execute insert failed: ' . $stmtInsert->error);
        echo json_encode(['error'=>'Server error']);
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

// نحدث الطابع الزمني دائمًا
$updateSet[] = "timestamp = NOW()";

// شرط منع التعديل بعد أول إرسال: نتحقق أن Q1 فارغة
$sql = "UPDATE $table SET " . implode(', ', $updateSet) . " WHERE id = ? AND (Q1 IS NULL OR Q1 = '')";
$params[] = $id;
$types .= 'i';

if(count($updateSet) > 0){
    $stmtUpdate = $connexion->prepare($sql);
    if(!$stmtUpdate){
        error_log('prepare update failed: ' . $connexion->error);
        echo json_encode(['error'=>'Server error']);
        exit;
    }

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
        echo json_encode(['error'=>'Server error']);
        exit;
    }
    $stmtUpdate->close();
}

// جلب comment_msg_test بعد Trigger
// جلب comment_msg_test بعد trigger أو بعد حسابات server-side
$stmtFetch = $connexion->prepare("SELECT comment_msg_test FROM $table WHERE id = ? LIMIT 1");
if(!$stmtFetch){
    error_log('prepare fetch failed: ' . $connexion->error);
    echo json_encode(['error'=>'Server error']);
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
