<!doctype html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Home - SihaNafsia</title>
    <link rel="shortcut icon" href="assets/images/site_logo/Logo.PNG">
    
    <!-- Fraimwork - CSS Include -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <!-- Icon Font - CSS Include -->
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.min.css">

    <!-- Animation - CSS Include -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">

    <!-- Cursor - CSS Include -->
    <link rel="stylesheet" type="text/css" href="assets/css/cursor.min.css">

    <!-- Carousel - CSS Include -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.min.css">

    <!-- Video & Image Popup - CSS Include -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.min.css">

    <!-- Counter - CSS Include -->
    <link rel="stylesheet" type="text/css" href="assets/css/odometer.min.css">

    <!-- Custom - CSS Include -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="styleindexhtml.css">

    <!-- header style -->

    <link rel="stylesheet" type="text/css" href="header/css/animate.min.css"><!-- WOW ANIMATION STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="header/css/feather.css"><!-- FEATHER ICON SHEET -->
    <link rel="stylesheet" type="text/css" href="header/css/swiper-bundle.min.css"><!-- Swiper Slider -->
    <link rel="stylesheet" type="text/css" href="header/css/style.css"><!-- MAIN STYLE SHEET -->

    <!-- slide style : -->

    <!-- 1- Theme style -->
    <link rel='stylesheet' href='slide/css/theme.css' type='text/css' media='all' />
    <!-- 2- Responsive -->
    <link rel='stylesheet' href='slide/css/responsive.css' type='text/css' media='all' />

  </head>


  <body>

    <!-- Body Wrap - Start -->
    <div class="page_wrapper">

      <!-- Back To Top - Start -->
      <div class="backtotop">
        <a href="#" class="scroll">
          <i class="fa-solid fa-arrow-up"></i>
        </a>
      </div>
      <!-- Back To Top - End -->
      <header class="site_header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-3">
              <div class="site_logo">
                <a class="site_link" href="expert.php">
                  <img src="assets/images/site_logo/Logo.PNG" alt="Site Logo – Talking Minds – Psychotherapist Site Template" style="height: 5rem;">
                </a>
              </div>
            </div>
            <?php
            include ('phpnav/navbar.php');
            ?>
          </div>
        </div>
      </header>

      

      <!-- Site Header - Start
      ================================================== -->
      <div class="page-wraper">
        <!-- CONTENT START -->
        <div class="page-content">
            <!--SLIDER BANNER START-->
            <div class="av-bnr-1-wrap-outer home-1-slider">
                <!-- swiper slides -->
                <div class="swiper-wrapper">
                    <div class="av-bnr-1-wrap swiper-slide overlay-overlay" >
                          <video autoplay loop muted style="width: 80%">
                            <source src="header/images/header_video.mp4" type="video/mp4">
                            <p>Votre navigateur ne prend pas en charge la balise vidéo. Veuillez utiliser un navigateur moderne.</p>
                          </video>
                    </div>
                </div>
            </div>
        </div>
 	    </div>
  <!-- Site Header - fin
      ================================================== -->




    <!-- Hero Section - Start
        ================================================== -->
        <section class="hero_section decoration_wrapper" >
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <div class="hero_content_wrap">
                    <h1 class="heading_text ">SihaNafsia <br> pour une vie meilleure.</h1> 
                                        
                    <p class="heading_description">
                        Sihanafsia vous propose une série de tests d’auto-évaluation <br> pour mieux comprendre votre bien-être psychologique. </p> 
                    <p class="heading_description">  
                      Répondez simplement aux questions suivantes pour découvrir où vous en êtes et comment prendre soin de vous. :</p>  
                      
                      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTestGeneral">
                          Démarrer test
                      </button>
                                     
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="hero_image_wrap">
                    <video autoplay loop muted style="width: 80%; max-width: 400px; height: auto;">
                      <source src="assets/images/Récit_vidéo_2.mp4" type="video/mp4">
                      <p>Votre navigateur ne prend pas en charge la balise vidéo. Veuillez utiliser un navigateur moderne.</p>
                    </video>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="decoration_item shape_blur_shadow"></div>
            <div class="decoration_item shape_leaf">
              <img src="assets/images/shapes/shape_leaf_left_top.svg" alt="Shape Leaf - Talking Minds - Psychotherapist Site Template">
            </div>
          </section>
          <!-- Modals - Start
        ================================================== -->
        <!-- Modal test g-->
        
        <!-- Button to start test -->
<?php
// modal_test_general.php
include '../config.php';
function esc($s){ return htmlspecialchars($s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }

// جلب آخر إدخال للـ test_base
$last_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$res = $connexion->query("SELECT * FROM test_base WHERE id=".$last_id." LIMIT 1");
$row = $res->fetch_assoc();

// تعريف الاختبارات الممكنة
$tests = [
    'Display_PHQ9'    => ['file'=>'phq.php','label'=>'PHQ-9'],
    'Display_GAD7'    => ['file'=>'gad.php','label'=>'GAD-7'],
    'Display_PCL5'    => ['file'=>'pcl.php','label'=>'PCL-5'],
    'Display_ISI'     => ['file'=>'isi.php','label'=>'ISI'],
    'Display_AUDIT_C' => ['file'=>'audit_c.php','label'=>'AUDIT-C'],
    'Display_AUDIT'   => ['file'=>'audit.php','label'=>'AUDIT'],
    'Display_DAST10'  => ['file'=>'dast.php','label'=>'DAST-10'],
];

// بناء قائمة الاختبارات المقترحة فقط
$visibleTests = [];
foreach($tests as $col => $info){
    if(isset($row[$col]) && (int)$row[$col] === 1){
        $visibleTests[$col] = $info;
    }
}
?>

<!-- Modal -->
<div class="modal fade" id="modalTestGeneral" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <div style="border:2px solid #f5c542;background-color:#fff3cd;padding:15px;border-radius:5px;">
          <strong>Avertissement :</strong> Ces tests sont fournis uniquement à des fins d'information et de sensibilisation.
          Si vous ressentez des symptômes graves ou des idées d'automutilation, contactez immédiatement un professionnel qualifié.
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <!-- Form Test Général -->
        <form id="formGeneral" action="test/submit_test.php" method="POST">
          <!-- Question 1 -->
                <div class="mb-4">
                    <label class="form-label fw-bold">1. Je me sens triste ou sans espoir la plupart du temps :</label>
                    <div class="d-flex justify-content-evenly flex-wrap">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q1" id="r1q1" value="jamais"  required>
                            <label class="form-check-label" for="r1q1">Pas du tout</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q1" id="r2q1" value="quelques jours">
                            <label class="form-check-label" for="r2q1">Seulement certains jours</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q1" id="r3q1" value="souvent">
                            <label class="form-check-label" for="r3q1">Assez souvent</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q1" id="r4q1" value="toujours">
                            <label class="form-check-label" for="r4q1">Presque tout le temps</label>
                        </div>
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="mb-4">
                    <label class="form-label fw-bold">2. J’ai du mal à dormir ou je me sens très somnolent </label>
                    <div class="d-flex justify-content-evenly flex-wrap">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q2" id="r1q2" value="jamais"  required>
                            <label class="form-check-label" for="r1q2">Jamais de difficultés</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q2" id="r2q2" value="quelques jours">
                            <label class="form-check-label" for="r2q2">À l’occasion</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q2" id="r3q2" value="souvent">
                            <label class="form-check-label" for="r3q2">Souvent</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q2" id="r4q2" value="toujours">
                            <label class="form-check-label" for="r4q2">Quasi tout le temps</label>
                        </div>
                    </div>
                </div>

                                <!-- Question 3 -->
                <div class="mb-4">
                    <label class="form-label fw-bold">3. Je me sens stressé ou anxieux tout le temps </label>
                    <div class="d-flex justify-content-evenly flex-wrap">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q3" id="r1q3" value="jamais"  required>
                            <label class="form-check-label" for="r1q3">Jamais</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q3" id="r2q3" value="quelques jours">
                            <label class="form-check-label" for="r2q3">Par moments</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q3" id="r3q3" value="souvent">
                            <label class="form-check-label" for="r3q3">Souvent</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q3" id="r4q3" value="toujours">
                            <label class="form-check-label" for="r4q3">Toujours</label>
                        </div>
                    </div>
                </div>
                                <!-- Question 4 -->
                <div class="mb-4">
                    <label class="form-label fw-bold">4. Je perds l’intérêt pour les activités que j’aime</label>
                    <div class="d-flex justify-content-evenly flex-wrap">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q4" id="r1q4" value="jamais"  required>
                            <label class="form-check-label" for="r1q4">Jamais</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q4" id="r2q4" value="quelques jours">
                            <label class="form-check-label" for="r2q4">Quelques fois</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q4" id="r3q4" value="souvent">
                            <label class="form-check-label" for="r3q4">Souvent</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q4" id="r4q4" value="toujours">
                            <label class="form-check-label" for="r4q4">Presque toujours</label>
                        </div>
                    </div>
                </div>

                 <!-- Question 5 -->
                <div class="mb-4">
                    <label class="form-label fw-bold">5. Je me sens fatigué ou manque d’énergie chaque jour </label>
                    <div class="d-flex justify-content-evenly flex-wrap">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q5" id="r1q5" value="jamais"  required>
                            <label class="form-check-label" for="r1q5">Jamais</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q5" id="r2q5" value="quelques jours">
                            <label class="form-check-label" for="r2q5">Parfois</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q5" id="r3q5" value="souvent">
                            <label class="form-check-label" for="r3q5">Souvent</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q5" id="r4q5" value="toujours">
                            <label class="form-check-label" for="r4q5">Toujours</label>
                        </div>
                    </div>
                </div>

                 <!-- Question 6 -->
                <div class="mb-4">
                    <label class="form-label fw-bold">6. Je trouve difficile de me concentrer sur les tâches quotidiennes </label>
                    <div class="d-flex justify-content-evenly flex-wrap">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q6" id="r1q6" value="jamais"  required>
                            <label class="form-check-label" for="r1q6">Jamais</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q6" id="r2q6" value="quelques jours">
                            <label class="form-check-label" for="r2q6">De temps en temps</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q6" id="r3q6" value="souvent">
                            <label class="form-check-label" for="r3q6">Souvent</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q6" id="r4q6" value="toujours">
                            <label class="form-check-label" for="r4q6">Presque toujours</label>
                        </div>
                    </div>
                </div>

                 <!-- Question 7 -->
                <div class="mb-4">
                    <label class="form-label fw-bold">7. Je me sens souvent isolé ou seul </label>
                    <div class="d-flex justify-content-evenly flex-wrap">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q7" id="r1q7" value="jamais"  required>
                            <label class="form-check-label" for="r1q7">Jamais</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q7" id="r2q7" value="quelques jours">
                            <label class="form-check-label" for="r2q7">Parfois</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q7" id="r3q7" value="souvent">
                            <label class="form-check-label" for="r3q7">Souvent</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q7" id="r4q7" value="toujours">
                            <label class="form-check-label" for="r4q7">Toujours</label>
                        </div>
                    </div>
                </div>
                 <!-- Question 8 -->
                <div class="mb-4">
                    <label class="form-label fw-bold">8. Je me sens anxieux ou stressé à propos de choses simples ou quotidiennes </label>
                    <div class="d-flex justify-content-evenly flex-wrap">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q8" id="r1q8" value="jamais"  required>
                            <label class="form-check-label" for="r1q8">Jamais</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q8" id="r2q8" value="quelques jours">
                            <label class="form-check-label" for="r2q8">Occasionnellement</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q8" id="r3q8" value="souvent">
                            <label class="form-check-label" for="r3q8">Souvent</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q8" id="r4q8" value="toujours">
                            <label class="form-check-label" for="r4q8">Presque toujours</label>
                        </div>
                    </div>
                </div>
                 <!-- Question 9 -->
                <div class="mb-4">
                    <label class="form-label fw-bold">9. Je ressens des symptômes physiques liés au stress tels que des maux de tête ou des palpitations </label>
                    <div class="d-flex justify-content-evenly flex-wrap">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q9" id="r1q9" value="jamais"  required>
                            <label class="form-check-label" for="r1q9">Jamais</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q9" id="r2q9" value="quelques jours">
                            <label class="form-check-label" for="r2q9">Quelques jours</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q9" id="r3q9" value="souvent">
                            <label class="form-check-label" for="r3q9">Souvent</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q9" id="r4q9" value="toujours">
                            <label class="form-check-label" for="r4q9">Toujours</label>
                        </div>
                    </div>
                </div>
                  <!-- Question 10 -->
                <div class="mb-4">
                    <label class="form-label fw-bold">10. J’ai un sentiment de faible estime de soi ou que je suis inférieur aux autres </label>
                    <div class="d-flex justify-content-evenly flex-wrap">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q10" id="r1q10" value="jamais"  required>
                            <label class="form-check-label" for="r1q10">Jamais</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q10" id="r2q10" value="quelques jours">
                            <label class="form-check-label" for="r2q10">À l’occasion</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q10" id="r3q10" value="souvent">
                            <label class="form-check-label" for="r3q10">Souvent</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q10" id="r4q10" value="toujours">
                            <label class="form-check-label" for="r4q10">Toujours</label>
                        </div>
                    </div>
                </div>
                <!-- Question 11 -->
                <div class="mb-4">
                    <label class="form-label fw-bold">11. Avez-vous déjà eu envie de vous faire du mal ou pensé à vous suicider ?</label>
                    <div class="d-flex justify-content-evenly flex-wrap">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="suicide_q" id="r1qsuicide_q" value="0"  required>
                            <label class="form-check-label" for="r1qsuicide_q">Non</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="suicide_q" id="r2qsuicide_q" value="1">
                            <label class="form-check-label" for="r2qsuicide_q">Oui</label>
                        </div>
                        
                    </div>
                </div> 
          <button type="submit" class="btn btn-success my-3">Afficher la réponse</button>
        </form>

        <!-- Résultat Test Général -->
        <div id="resultGeneral" class="mt-3"></div>
  <!-- Div لعرض Accordion الاختبارات المقترحة -->
        <div id="accordionSubTests" class="mt-3"></div>
      </div>
    </div>
  </div>
</div>

 <script>
document.addEventListener('submit', function(e){
    // Test Général
    if(e.target && e.target.id === 'formGeneral'){
        e.preventDefault();
        const formData = new FormData(e.target);
        const resultDiv = document.getElementById('resultGeneral');

        fetch(e.target.action, {method:'POST', body: formData})
        .then(r => r.text())
          .then(html => { 
              resultDiv.innerHTML = html;
              // hide the main form so the user cannot resubmit, but keep the modal open
              try{
                if(e.target && e.target instanceof HTMLElement){
                  e.target.style.display = 'none';
                }
              }catch(ex){ console.error(ex); }
              resultDiv.scrollIntoView({behavior:'smooth'});
                
            })
            .catch(err => { 
                resultDiv.innerHTML='<div class="alert alert-danger">Erreur lors de l\'envoi.</div>'; 
                console.error(err); 
            });
    }

    // SubTests داخل accordion
    if(e.target && e.target.classList.contains('subTestForm')){
        e.preventDefault();
        const formData = new FormData(e.target);
        const resultDiv = document.getElementById(e.target.dataset.result);

    fetch(e.target.action, {method:'POST', body: formData})
      .then(r => {
        const ct = r.headers.get('content-type') || '';
        if(ct.indexOf('application/json') !== -1){
          return r.json();
        }
        return r.text();
      })
      .then(data => {
        if(typeof data === 'object'){
          // JSON response from submit_test_filiale.php
          if(data.comment_msg_test){
            resultDiv.innerHTML = '<div class="alert alert-info">'+ data.comment_msg_test +'</div>';
          } else if(data.error){
            resultDiv.innerHTML = '<div class="alert alert-danger">'+ data.error +'</div>';
          } else {
            resultDiv.innerHTML = JSON.stringify(data);
          }
        } else {
          // plain HTML fallback
          resultDiv.innerHTML = data;
        }
    // hide the submitted form so user sees only the result
    try{
      if(e.target && e.target instanceof HTMLElement){
        e.target.style.display = 'none';
        // if this was the C-SSRS form, mark SSRS completed so other tests can be opened
        if(e.target.id === 'formssrs'){
          // add a hidden marker inside mainTestResult
          var marker = document.createElement('div');
          marker.setAttribute('data-ssrs-completed', '1');
          marker.id = 'ssrs_done_' + Date.now();
          var main = document.getElementById('mainTestResult');
          if(main) main.appendChild(marker);
          // previously we showed a toast here; to disable toast messages we no longer display one
        }
      }
    }catch(ex){console.error(ex);} 
        resultDiv.scrollIntoView({behavior:'smooth'});
      })
      .catch(err => {
        resultDiv.innerHTML='<div class="alert alert-danger">Erreur lors de l\'envoi.</div>';
        console.error(err);
      });
    }
});
// Click handler for header-level "Afficher le test" buttons: open collapse and reveal the hidden form wrapper
document.addEventListener('click', function(e){
  // SSRS gating removed: allow accordion buttons to open regardless of C-SSRS completion
    if(e.target && e.target.classList && e.target.classList.contains('showSubTestBtn')){
        const targetId = e.target.dataset.target;
        // open the accordion item (simulate click on the accordion-toggle)
        const item = e.target.closest('.accordion-item');
        if(item){
            const toggle = item.querySelector('.accordion-button');
            if(toggle && toggle.getAttribute('aria-expanded') === 'false'){
                try{ toggle.click(); }catch(_){ /* ignore */ }
            }
        }
    if(targetId){
      const wrapper = document.getElementById(targetId);
      // Always reveal the wrapper when the header button is clicked
      if(wrapper){ wrapper.style.display = 'block'; wrapper.scrollIntoView({behavior:'smooth'}); }
    }
    }
});
// small helper to show Bootstrap toast
function showToast(message){
  try{
    // Toasts are disabled by request. Keep this function as a no-op so other calls are harmless.
    console.debug('toast suppressed:', message);
  }catch(ex){ console.warn('Toast failed', ex); alert(message); }
}
$('.subTestForm').on('submit', function(e){
    e.preventDefault(); // منع إعادة تحميل الصفحة

    var $form = $(this);
    var $resultDiv = $('#' + $form.data('result'));
    
    $.ajax({
        url: $form.attr('action'),
        method: 'POST',
        data: $form.serialize(), // سيريلايز جميع الحقول
        dataType: 'json',
        success: function(res){
            if(res.comment_msg_test){
    $resultDiv.html('<div class="alert alert-info">'+res.comment_msg_test+'</div>');
    $form.hide();
    // if this was SSRS form, mark completed so other tests can open
    try{
          if($form.attr('id') === 'formssrs'){
            $('<div data-ssrs-completed="1"></div>').appendTo('#mainTestResult');
            // toast disabled
          }
    }catch(ex){console.warn(ex);} 
            } else if(res.error){
    $resultDiv.html('<div class="alert alert-danger">'+res.error+'</div>');
    $form.hide();
    try{
          if($form.attr('id') === 'formssrs'){
            $('<div data-ssrs-completed="1"></div>').appendTo('#mainTestResult');
            // toast disabled
          }
    }catch(ex){console.warn(ex);} 
            }
        },
        error: function(){
            $resultDiv.html('<div class="alert alert-danger">حدث خطأ أثناء الإرسال</div>');
        }
    });
});

</script>
          <!-- Hero Section - End
          ================================================== -->

          <!-- slide Section - start
          ================================================== -->

          <div id="hopeCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="10000">
            <div class="carousel-inner">

              <!-- Slide 1 -->
              <div class="carousel-item active">
                <section class="service_section section_space_lg bg_primary_light">
                  <div class="container">
                    <div class="section_heading text-center">
                      <h2 class="section_heading_text">l'espoir</h2>
                      <p class="section_heading_description mb-0 ">
                        "Il y a de l'espoir, même quand votre cerveau vous dit le contraire."<br> – John Green
                      </p>
                    </div>
                  </div>
                </section>
              </div>

              <!-- Slide 2 -->
              <div class="carousel-item">
                <section class="service_section section_space_lg bg_primary_light">
                  <div class="container">
                    <div class="section_heading text-center">
                      <h2 class="section_heading_text">Sagesse</h2>
                      <p class="section_heading_description mb-0 ">
                        "Ce qui ne me tue pas me rend plus fort."<br> – Friedrich Nietzsche
                      </p>
                    </div>
                  </div>
                </section>
              </div>

              <!-- Slide 3 -->
              <div class="carousel-item">
                <section class="service_section section_space_lg bg_primary_light">
                  <div class="container">
                    <div class="section_heading text-center">
                      <h2 class="section_heading_text">Vie</h2>
                      <p class="section_heading_description mb-0 ">
                        "Le bonheur n'est pas quelque chose de prêt à l'emploi. Il vient de vos propres actions."<br> – Le Dalaï-Lama
                      </p>
                    </div>
                  </div>
                </section>
              </div>

              <!-- Slide 4 -->
              <div class="carousel-item">
                <section class="service_section section_space_lg bg_primary_light">
                  <div class="container">
                    <div class="section_heading text-center">
                      <h2 class="section_heading_text">Courage</h2>
                      <p class="section_heading_description mb-0 ">
                        "La seule chose que nous ayons à craindre est la peur elle-même."<br> – Franklin D. Roosevelt
                      </p>
                    </div>
                  </div>
                </section>
              </div>

              <!-- Slide 5 -->
              <div class="carousel-item">
                <section class="service_section section_space_lg bg_primary_light">
                  <div class="container">
                    <div class="section_heading text-center">
                      <h2 class="section_heading_text">Pensée</h2>
                      <p class="section_heading_description mb-0 ">
                        "Je pense, donc je suis."<br> – René Descartes
                      </p>
                    </div>
                  </div>
                </section>
              </div>

              <!-- Slide 6 -->
              <div class="carousel-item">
                <section class="service_section section_space_lg bg_primary_light">
                  <div class="container">
                    <div class="section_heading text-center">
                      <h2 class="section_heading_text">Destin</h2>
                      <p class="section_heading_description mb-0 ">
                        "L’homme est condamné à être libre."<br> – Jean-Paul Sartre
                      </p>
                    </div>
                  </div>
                </section>
              </div>

            </div>
          </div> 
          <!-- slide Section - end
          ================================================== -->


          <div class="page-template page-template-page-fullscreen-slider page-template-page-fullscreen-slider-php page page_with_abs_header dark_color_scheme">
            <div class="gt3_preloader">
              <div class="gt3_preloader_content">
                <div class="arc1"></div>
                <div class="arc2"></div>
                <div class="arc3"></div>
              </div>
            </div>
            <div class="header_holder"></div>
            <div class="mobile_menu_wrapper"></div>
            <div class="sticky_menu_enabled"></div>
            <div class="wrapper">
              <!-- FS Slider Start -->
              <div class="fs_gallery_megawrapper">
                <div class="fs_title_wrapper">
                  <h1 class="fs_title dis-01">&nbsp;</h1>
                  <h3 class="fs_descr dis-01">&nbsp;</h3>
                </div>
                <a href="#" class="fs_slider_prev" data-count="13/13"></a>
                <a href="#" class="fs_slider_next" data-count="2/13"></a>
                <div class="fs_controls">
                  <a href="#" class="fs_state_play fs_play_pause"><span class="icon-Pause"></span><span class="icon-Play"></span></a>
                  <a href="#" class="close_controls fs_controls_toggler"><span class="icon-Fullscreen"></span></a>
                  <a href="#" class="info_btn"><span class="icon-Info"></span></a>
                </div>
                <div class="fs_gallery_wrapper fadeOnLoad">
                  <ul class="no_fit fs_gallery_container autoplay fs_slider fade video_cover controls_on" data-video="0" data-interval="5000" data-autoplay="autoplay">
                    <li class="fs_slide slide_image block2preload fs_slide1" data-count="1" data-src="slide/imagslide/1.jpg" data-title="Consulter un professionnel " data-descr="Un psychologue ou psychiatre <br />peut aider à comprendre les causes <br />et proposer un accompagnement adapté." data-type="image">
                    </li>
                    <li class="fs_slide slide_image block2preload fs_slide2" data-count="2" data-src="slide/imagslide/2.jpg" data-title="Adopter une alimentation saine" data-descr="Privilégier les aliments riches en oméga-3 <br />vitamines B et D pour améliorer l'humeur." data-type="image">
                    </li>
                    <li class="fs_slide slide_image block2preload fs_slide3" data-count="3" data-src="slide/imagslide/13.jpg" data-title="Être bienveillant envers soi-même" data-descr="Accepter le temps de la guérison <br />et éviter l’autocritique excessive." data-type="image">
                    </li>
                    <li class="fs_slide slide_image block2preload fs_slide4" data-count="4" data-src="slide/imagslide/4.jpg" data-title="Améliorer son sommeil" data-descr="Une routine régulière et moins d'écrans avant de dormir <br />favorisent l'équilibre émotionnel." data-type="image">
                    </li>
                    <li class="fs_slide slide_image block2preload fs_slide5" data-count="5" data-src="slide/imagslide/5.jpg" data-title="Se fixer des objectifs réalisables" data-descr="De petits objectifs quotidiens <br />renforcent le sentiment d'accomplissement." data-type="image">
                    </li>
                    <li class="fs_slide slide_image block2preload fs_slide6" data-count="6" data-src="slide/imagslide/6.jpg" data-title="Pratiquer la méditation" data-descr="La pleine conscience <br />aide à réduire les pensées négatives <br />et à se recentrer." data-type="image">
                    </li>
                    <li class="fs_slide slide_image block2preload fs_slide7" data-count="7" data-src="slide/imagslide/7.jpg" data-title="Maintenir des liens sociaux" data-descr=" Être entouré de proches <br /> ou participer à des groupes de soutien <br /> est bénéfique." data-type="image">
                    </li>
                    <li class="fs_slide slide_image block2preload fs_slide8" data-count="8" data-src="slide/imagslide/8.jpg" data-title="Limiter l’alcool et les substances toxiques" data-descr="Elles aggravent les symptômes <br />et nuisent à la santé mentale." data-type="image">
                    </li>
                    <li class="fs_slide slide_image block2preload fs_slide9" data-count="9" data-src="slide/imagslide/9.jpg" data-title="Exprimer les émotions" data-descr="Écrire, dessiner ou jouer de la musique <br />permet d’extérioriser ses sentiments." data-type="image">
                    </li>
                    <li class="fs_slide slide_image block2preload fs_slide10" data-count="10" data-src="slide/imagslide/10.jpg" data-title="Gérer le stress" data-descr="La respiration, le yoga et la relaxation <br />aident à mieux gérer les tensions." data-type="image">
                    </li>
                    <li class="fs_slide slide_image block2preload fs_slide11" data-count="11" data-src="slide/imagslide/11.jpg" data-title="Créer un environnement positif" data-descr="Désencombrer et ajouter des éléments apaisants <br /> favorisent le bien-être." data-type="image">
                    </li>
                    <li class="fs_slide slide_image block2preload fs_slide12" data-count="12" data-src="slide/imagslide/12.jpg" data-title="S’engager dans des activités gratifiantes" data-descr=" Hobbies et bénévolat <br /> procurent du plaisir et renforcent l’estime de soi." data-type="image">
                    </li>
                    <li class="fs_slide slide_image block2preload fs_slide13" data-count="13" data-src="slide/imagslide/13.jpg" data-title="Être bienveillant envers soi-même" data-descr="Accepter le temps de la guérison <br />et éviter l’autocritique excessive." data-type="image">
                    </li>
                  </ul>
                </div>
                <div class="fs_thmb_viewport">
                  <div class="label">Thumbs</div>
                  <div class="fs_thmb_wrapper">
                    <ul class="fs_thmb_list fs_thumbs style8">
                      <li class="thmb_slide thmb_slide1" data-count="1">
                        <img alt="Happy young people" src="slide/imagslide/1.jpg">
                      </li>
                      <li class="thmb_slide thmb_slide2" data-count="2">
                        <img alt="Woman in white short" src="slide/imagslide/2.jpg">
                      </li>
                      <li class="thmb_slide thmb_slide4" data-count="4">
                        <img alt="Woman in white short" src="slide/imagslide/4.jpg">
                      </li>
                      <li class="thmb_slide thmb_slide5" data-count="5">
                        <img alt="Woman in white short" src="slide/imagslide/5.jpg">
                      </li>
                      <li class="thmb_slide thmb_slide6" data-count="6">
                        <img alt="Woman in white short" src="slide/imagslide/6.jpg">
                      </li>
                      <li class="thmb_slide thmb_slide7" data-count="7">
                        <img alt="Woman in white short" src="slide/imagslide/7.jpg">
                      </li>
                      <li class="thmb_slide thmb_slide8" data-count="8">
                        <img alt="Woman in white short" src="slide/imagslide/8.jpg">
                      </li>
                      <li class="thmb_slide thmb_slide9" data-count="9">
                        <img alt="Woman in white short" src="slide/imagslide/9.jpg">
                      </li>
                      <li class="thmb_slide thmb_slide10" data-count="10">
                        <img alt="Woman in white short" src="slide/imagslide/10.jpg">
                      </li>
                      <li class="thmb_slide thmb_slide11" data-count="11">
                        <img alt="Woman in white short" src="slide/imagslide/11.jpg">
                      </li>
                      <li class="thmb_slide thmb_slide12" data-count="12">
                        <img alt="Woman in white short" src="slide/imagslide/12.jpg">
                      </li>
                      <li class="thmb_slide thmb_slide13" data-count="13">
                        <img alt="Woman in white short" src="slide/imagslide/13.jpg">
                      </li>
                    </ul>
                  </div>
                </div>
                
                <div class="fs_gallery_trigger personal_preloader"></div>
                
                <div class='fs_gallery_slider' data-thumbs-btn-title='Thumbs'></div>
              </div>
              <!-- .fs_gallery_megawrapper -->
              <!-- FS Slider End -->
            </div>
            
            
           
            
          </div>
          <!-- slide Section - End
          ================================================== -->
         
      <!-- Site Footer - Start
      ================================================== -->
    <footer class="site_footer bg_primary">
        <div class="container">
          <div class="site_footer_content">
            <div class="row align-items-center">
              <div class="col-lg-3">
                <div class="site_logo">
                  <a class="site_link" href="expert.php">
                    <img src="assets/images/site_logo/Logo.PNG" style="height: 7rem;" alt="Site Logo – Talking Minds – Psychotherapist Site Template">
                  </a>
                </div>
              </div>
              <div class="col-lg-6 col-2">
                <nav class="main_menu navbar navbar-expand-lg">
                  <div class="main_menu_inner collapse navbar-collapse justify-content-center" id="main_menu_dropdown">
                    <ul class="main_menu_list unordered_list">
                      <li class="anav">
                        <a class="nav-link navbar-text" aria-current="page" href="index.php">Accueil</a>
                      </li>
                      <li class="anav">
                        <a class="nav-link navbar-text" aria-current="page" href="sources.html">Sources</a>
                      </li>
                      <li class="anav">
                        <a class="nav-link navbar-text" aria-current="page" href="equipe.php"> Communiquer avec un expert</a>
                      </li>
                      
                    </ul>
                  </div>
                </nav>
              </div>
              <div class="col-lg-3">
                <ul class="social_links unordered_list justify-content-center justify-content-lg-end">
                  <li><a href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                  <li><a href="#!"><i class="fa-brands fa-instagram"></i></a></li>
                  <li><a href="#!"><i class="fa-brands fa-twitter"></i></a></li>
                  <li><a href="#!"><i class="fa-brands fa-whatsapp"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="copyright_widget text-center">
              <p class="copyright_text m-0">ZGHOUDI © <b>PSY</b> Template All rights reserved Copyrights 
                <a class="text-white" href="#" id="accessLink">2025</a>
              </p>
        </div>
    </div>
    </footer>
           
      <!-- Site Footer - End
      ================================================== -->


    <!-- Fraimwork - Jquery Include -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-dropdown-ml-hack.min.js"></script>

    <!-- animation - jquery include -->
    <script src="assets/js/cursor.min.js"></script>

    <!-- Carousel - Jquery Include -->
    <script src="assets/js/slick.min.js"></script>

    <!-- Video & Image Popup - Jquery Include -->
    <script src="assets/js/magnific-popup.min.js"></script>
    
    <!-- Counter - Jquery Include -->
    <script src="assets/js/appear.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>

    <!-- Custom - Jquery Include -->
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- JAVASCRIPT header FILES ========================================= --> 
    <script  src="header/js/jquery-3.7.1.min.js"></script><!-- JQUERY.MIN JS -->
    <script  src="header/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
    <script  src="header/js/imagesloaded.pkgd.min.js"></script><!-- MASONRY  -->
    <script  src="header/js/swiper-bundle.min.js"></script><!-- Swiper JS -->
    <script  src="header/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->


     <!-- slide Main scripts -->
     <script src='slide/js/jquery/jquery.js'></script>
     <script src='https://player.vimeo.com/api/player.js'></script>
     <script src='slide/js/plugins/jquery.scrollTo.js'></script>
     <script src='slide/js/plugins/jquery.fs.gallery.js'></script>
     <script src='slide/js/theme.js'></script>
     
      <!-- test scripts --> 
      <script src='test/test_ajax.js'></script>   
     

     <script>
      document.addEventListener('DOMContentLoaded', function () {
      document.querySelectorAll('.btn-close, [data-bs-dismiss="modal"]').forEach(function (btn) {
        btn.addEventListener('click', function () {
          document.querySelectorAll('.modal-backdrop').forEach(function (backdrop) {
            backdrop.remove();
          });
          document.body.classList.remove('modal-open');
          document.body.style.overflow = 'auto'; 

          // If this close button belongs to the main test modal, reload the page after the modal is hidden
          try{
            var modalEl = document.getElementById('modalTestGeneral');
            if(modalEl && modalEl.contains(btn)){
              // attach one-time hidden event to reload after bootstrap finishes hiding the modal
              var _handler = function(){
                try{ location.reload(); }catch(_){ /* ignore */ }
                modalEl.removeEventListener('hidden.bs.modal', _handler);
              };
              modalEl.addEventListener('hidden.bs.modal', _handler);
            }
          }catch(_){ /* ignore */ }
        });
      });
      });
    </script>
  

    <!-- accessLink -->
    <script src="assets/js/main.js"></script>
    <!-- ربط سكربتات Bootstrap -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

      <script>
      function calculateScore() {
          const answers = [
              document.querySelector('input[name="question1"]:'),
              document.querySelector('input[name="question2"]:'),
              document.querySelector('input[name="question3"]:'),
              document.querySelector('input[name="question4"]:'),
              document.querySelector('input[name="question5"]:'),
              document.querySelector('input[name="question6"]:'),
              document.querySelector('input[name="question7"]:'),
              document.querySelector('input[name="question8"]:'),
              document.querySelector('input[name="question9"]:'),
              document.querySelector('input[name="question10"]:')
          ];
      
          let score = 0;
      
          answers.forEach(answer => {
              if (answer && answer.value === "Oui") {
                  score++;
              }
          });
      
          let resultText = '';
          if (score === 0) {
              resultText = "Votre résultat : Vous semblez en bonne santé mentale.";
          } else if (score <= 3) {
              resultText = "Votre résultat : Symptômes légers à modérés d'anxiété ou de dépression.";
          } else if (score <= 6) {
              resultText = "Votre résultat : Symptômes modérés à sévères d'anxiété ou de dépression.";
          } else {
              resultText = "Votre résultat : Symptômes graves, il est fortement recommandé de consulter un professionnel.";
          }
      
          document.getElementById("result").innerHTML = `<h4>${resultText}</h4>`;
      }
      </script>
 

  </body>
</html>
