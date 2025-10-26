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
$Q = [];
for($i=1;$i<=20;$i++){
    $key = 'Q'.$i;
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

// قبل التحديث، نتأكد أن الصف موجود
$stmtCheck = $conn->prepare("SELECT id_test FROM $table WHERE id = ?");
$stmtCheck->bind_param("i", $id);
$stmtCheck->execute();
$res = $stmtCheck->get_result();

if($res->num_rows === 0){
    // الصف لم يُنشأ بعد، ندرجه
    $columns = 'id, suicide_q, comment_msg, timestamp';
    $placeholders = '?,?,?,NOW()';
    $values = [$id, $suicide_q, $comment_msg];

    $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
    $stmtInsert = $conn->prepare($sql);
    $stmtInsert->bind_param("iis", ...$values);
    $stmtInsert->execute();
}

// الآن نقوم بعمل UPDATE فقط إذا Q1..Q20 فارغة (B: منع التعديل بعد أول إرسال)
$updateSet = [];
$params = [];
$types = '';

foreach($Q as $col => $val){
    if($val !== null){
        $updateSet[] = "$col=?";
        $params[] = $val;
        $types .= 's'; // نفترض أن كل Q varchar
    }
}
$updateSet[] = "timestamp=NOW()";
$types .= '';
$sql = "UPDATE $table SET ".implode(',', $updateSet)." WHERE id=? AND (Q1 IS NULL OR Q1='')"; 
$params[] = $id;
$types .= 'i';

if(!empty($updateSet)){
    $stmtUpdate = $conn->prepare($sql);
    $stmtUpdate->bind_param($types, ...$params);
    $stmtUpdate->execute();
}

// جلب comment_msg_test بعد Trigger
$stmtFetch = $conn->prepare("SELECT comment_msg_test FROM $table WHERE id=?");
$stmtFetch->bind_param("i", $id);
$stmtFetch->execute();
$resFetch = $stmtFetch->get_result();
$row = $resFetch->fetch_assoc();

echo json_encode(['comment_msg_test' => $row['comment_msg_test'] ?? '']);
exit;
?>
