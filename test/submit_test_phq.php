<?php
// test/submit_test_phq.php
include '../config.php'; // يجب أن يعرف $connexion (mysqli)

function esc($s){ return htmlspecialchars($s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }

$base_id = isset($_POST['base_id']) ? (int)$_POST['base_id'] : 0;
if(!$base_id){
  echo '<div class="alert alert-danger">ID غير معرف.</div>'; exit;
}

// جمع قيم q1..q9 و functional
$qs = [];
$score = 0;
for($i=1;$i<=9;$i++){
  $k = 'q'.$i;
  $v = isset($_POST[$k]) ? (int)$_POST[$k] : 0;
  $qs[$k] = $v;
  $score += $v;
}
$functional = isset($_POST['functional']) ? (int)$_POST['functional'] : 0;

// جلب suicide_q و comment_msg من test_base
$stmt = $connexion->prepare("SELECT suicide_q, comment_msg FROM test_base WHERE id = ? LIMIT 1");
$stmt->bind_param('i', $base_id);
$stmt->execute();
$res = $stmt->get_result();
$tb = $res->fetch_assoc();
$stmt->close();

$suicide_q = $tb ? (int)$tb['suicide_q'] : 0;
$comment_msg = $tb ? $tb['comment_msg'] : '';

// تحضير INSERT ... ON DUPLICATE KEY UPDATE
// الأعمدة التي سنخزنها: id, suicide_q, comment_msg, score, q1..q9, functional
$columns = ['id','suicide_q','comment_msg','score'];
$columns = array_merge($columns, array_keys($qs));
$columns[] = 'functional';

// قيم placeholders وbindings
$placeholders = implode(',', array_fill(0, count($columns), '?'));
$insertCols = implode(',', $columns);

// نجهز UPDATE جزء
$updateParts = [];
foreach(['suicide_q','comment_msg','score'] as $c) $updateParts[] = "$c=VALUES($c)";
foreach(array_keys($qs) as $c) $updateParts[] = "$c=VALUES($c)";
$updateParts[] = "functional=VALUES(functional)";
$updateSql = implode(',', $updateParts);

// بناء الـ SQL
$sql = "INSERT INTO data_phq ($insertCols) VALUES ($placeholders) ON DUPLICATE KEY UPDATE $updateSql";

// تجهيز القيم للـ binding
$values = [];
$values[] = $base_id;
$values[] = $suicide_q;
$values[] = $comment_msg;
$values[] = $score;
foreach($qs as $v) $values[] = $v;
$values[] = $functional;

// لأن هناك قيمة نصية (comment_msg) نحتاج types string
// بناء types string مثل 'iissiiii...': i=int, s=string
$types = '';
foreach($values as $v){
  if(is_int($v)) $types .= 'i';
  else $types .= 's';
}

// تنفيذ prepared statement (ديناميكي bind)
$stmt = $connexion->prepare($sql);
if($stmt === false){
  echo '<div class="alert alert-danger">Prepare failed: '.esc($connexion->error).'</div>'; exit;
}

// bind_param requires references
$a_params = [];
$a_params[] = & $types;
for($i=0;$i<count($values);$i++){
  $a_params[] = & $values[$i];
}
call_user_func_array([$stmt, 'bind_param'], $a_params);

$ok = $stmt->execute();
if(!$ok){
  echo '<div class="alert alert-danger">خطأ في الحفظ: '.esc($stmt->error).'</div>';
  $stmt->close(); exit;
}
$stmt->close();

// جلب السطر بعد الإدخال
$stmt2 = $connexion->prepare("SELECT * FROM data_phq WHERE id = ? LIMIT 1");
$stmt2->bind_param('i', $base_id);
$stmt2->execute();
$res2 = $stmt2->get_result();
$row = $res2->fetch_assoc();
$stmt2->close();

if(!$row){
  echo '<div class="alert alert-warning">لم أتمكن من جلب نتيجة الاختبار بعد الحفظ.</div>';
  exit;
}

// تفسير مبسّط للـ PHQ-9 بناءً على score
$interpret = 'غير محدد';
$scr = (int)$row['score'];
if($scr <= 4) $interpret = 'Minimal or none (0-4)';
elseif($scr <= 9) $interpret = 'Mild (5-9)';
elseif($scr <= 14) $interpret = 'Moderate (10-14)';
elseif($scr <= 19) $interpret = 'Moderately severe (15-19)';
else $interpret = 'Severe (20-27)';

// عرض نتيجة HTML
echo '<div class="card p-3">';
echo '<h4>PHQ-9 — النتيجة</h4>';
echo '<p><strong>Score:</strong> '.esc($row['score']).'</p>';
echo '<p><strong>interprétation:</strong> '.esc($interpret).'</p>';
echo '<p><strong>Difficulté fonctionnelle :</strong> '.esc($row['functional'] ?? 'N/A').'</p>';
echo '<div class="mt-2"><button class="btn btn-secondary" id="backToMainResult">العودة إلى نتائج الاختبار العام</button></div>';
echo '</div>';

// (اختياري) يمكنك هنا إظهار مزيد من التفاصيل أو توصيات بناءً على النتيجة.
