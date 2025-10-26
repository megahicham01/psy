<?php
// test/submit_test.php
include '../config.php'; // الاتصال بقاعدة البيانات
function esc($s){ return htmlspecialchars($s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }

// جمع الأسئلة من POST
$q = [];
for($i=1;$i<=10;$i++){
    $k = 'q'.$i;
    $q[$i] = isset($_POST[$k]) ? $_POST[$k] : '';
}
$suicide_q = isset($_POST['suicide_q']) ? (int)$_POST['suicide_q'] : 0;

// إدخال البيانات في test_base
$stmt = $connexion->prepare("
    INSERT INTO test_base 
    (Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,suicide_q,timestamp)
    VALUES (?,?,?,?,?,?,?,?,?,?,?,NOW())
");
$stmt->bind_param('sssssssssis',
    $q[1],$q[2],$q[3],$q[4],$q[5],$q[6],$q[7],$q[8],$q[9],$q[10], $suicide_q
);
$ok = $stmt->execute();
if(!$ok){
    echo '<div class="alert alert-danger">Erreur insertion: '.esc($connexion->error).'</div>';
    exit;
}
$last_id = $stmt->insert_id;
$stmt->close();

// جلب السطر بعد trigger
$res = $connexion->query("SELECT * FROM test_base WHERE id = ".(int)$last_id." LIMIT 1");
$row = $res->fetch_assoc();
if(!$row){
    echo '<div class="alert alert-danger">Impossible de récupérer le résultat.</div>';
    exit;
}

// HTML النتائج الرئيسية
$html = '<div id="mainTestResult">';
$html .= '<h2>' . esc($row['comment_msg']) . '</h2>';

// إذا كانت هناك نية انتحار
if($suicide_q === 1){
    $html .= '<button class="btn btn-danger my-2" 
                  onclick="window.open(\'test/ssrs.php?id='.$last_id.'\',\'_blank\')">
                  C-SSRS
              </button>';
} else {
    // تحديد الاختبارات المقترحة
    $tests = [
        'Display_PHQ9'    => ['file'=>'phq.php','label'=>'PHQ-9'],
        'Display_GAD7'    => ['file'=>'gad.php','label'=>'GAD-7'],
        'Display_PCL5'    => ['file'=>'pcl.php','label'=>'PCL-5'],
        'Display_ISI'     => ['file'=>'isi.php','label'=>'ISI'],
        'Display_AUDIT_C' => ['file'=>'audit_c.php','label'=>'AUDIT-C'],
        'Display_AUDIT'   => ['file'=>'audit.php','label'=>'AUDIT'],
        'Display_DAST10'  => ['file'=>'dast.php','label'=>'DAST-10'],
    ];

    $visibleTests = [];
    foreach($tests as $col => $info){
        if(isset($row[$col]) && (int)$row[$col] === 1){
            $visibleTests[$col] = $info;
        }
    }

    if(!empty($visibleTests)):
        $html .= '<div class="accordion accordion-flush mt-3" id="accordionTests">';
        $first = true;
        foreach($visibleTests as $col => $info):
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
                            <button type="submit" class="btn btn-success my-3">Afficher la réponse</button>
                        </form>
                        <div id="result_'.esc($col).'" class="mt-3"></div>
                    </div>
                </div>
            </div>';
            $first = false;
        endforeach;
        $html .= '</div>'; // accordion
    endif;
}

$html .= '</div>';

echo $html;
?>

<script>
// AJAX لكل form داخل accordion
document.querySelectorAll('.subTestForm').forEach(form=>{
    form.addEventListener('submit', function(e){
        e.preventDefault();
        const formData = new FormData(this);
        const resultDiv = document.getElementById(this.dataset.result);

        fetch(this.action,{method:'POST', body:formData})
            .then(r=>r.text())
            .then(html=>{
                resultDiv.innerHTML = html;
                resultDiv.scrollIntoView({behavior:'smooth'});
            })
            .catch(err=>{
                resultDiv.innerHTML='<div class="alert alert-danger">Erreur lors de l\'envoi du formulaire.</div>';
                console.error(err);
            });
    });
});
</script>
