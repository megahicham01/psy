<!doctype html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Tous les programmes - MindCare Clinique – Psychotherapist</title>
    <link rel="shortcut icon" href="assets/images/site_logo/Logo.png">

    <!-- Fraimwork - CSS Include -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

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

       <!-- Site Header - Start
      ================================================== -->
      <header class="site_header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-2 col-2">
              <div class="site_logo">
                <a class="site_link" href="expert.php">
                  <img src="assets/images/site_logo/Logo.png" alt="Site Logo – Talking Minds – Psychotherapist Site Template" style="height: 5rem;">
                </a>
              </div>
            </div>
            <div class="col-lg-8 col-8">
              <nav class="main_menu navbar navbar-expand-lg">
                <div class="main_menu_inner collapse navbar-collapse justify-content-center" id="main_menu_dropdown">
                  <ul class="main_menu_list unordered_list">
                    <?php
                      include ('config.php');
                      $jibdata = "SELECT * FROM `navbar` ";
                      $dirlordre = mysqli_query($connexion,$jibdata); 
                      while($starjdid = mysqli_fetch_array($dirlordre)){
                    ?>
                    <li class="anav">
                      <a class="nav-link" aria-current="page" href="<?php echo $starjdid['refer']?>"><?php echo $starjdid['nav']?></a>
                    </li>
                    <?php
                    }
                    ?>
                  </ul>
                </div>
              </nav>
            </div>
            <div class="col-lg-2 col-2">
              <ul class="header_btns_group unordered_list justify-content-end">
                <li>
                  <button class="mobile_menu_btn" type="button" data-bs-toggle="collapse" data-bs-target="#main_menu_dropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="far fa-bars"></i>
                  </button>
                </li>

                                  <!-- Consultation modal - Start
        ================================================== -->                                
                <li>
                  <a class="btn_hotline" href="#">
                    <span class="btn_icon">
                      <i class="fa-solid "><img src="assets/images/calendrier.png" alt="calendrier" data-bs-toggle="modal" data-bs-target="#had-div" style="height: 2rem;" class="images"></i>
                    </span>
                    <span class="btn_text" data-bs-toggle="modal" data-bs-target="#had-div">Obtenez votre consultation</span>
                  </a>
                                
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header>

      <!-- Modal -->

      <div class="modal fade" id="had-div" tabindex="-1" data-bs-backdrop="true" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5 mx-auto text-sucess" id="exampleModalLabel">Obtenez votre consultation</h1>
            </div>
            <div class="modal-body">
              <form action="phpconsult/ajouter.php" method="POST" >
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="input_name">Nom</label>
                          <input id="input_name" class="form-control" type="text" name="name1" placeholder="Your Name">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="input_phone">téléphone</label>
                          <input id="input_phone" class="form-control" type="tel" name="phone1" placeholder="Mobile phone number">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="select_therapy">Thérapie</label>
                          <select id="select_therapy" class="form-select" aria-label="Therapy Select Options" name="therapy1">
                            <option selected>Sélectionner la thérapie</option>
                            <option value="Depression Therapy">Traitement de la dépression</option>
                            <option value="Couples Counseling">Thérapie de couples</option>
                            <option value="Relationships">Relationships</option>
                            <option value="Anxiety disorder">Trouble anxieux</option>
                            <option value="Child therapy">Thérapie des enfants</option>
                            <option value="Individual therapy">Thérapie individuelle</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="input_calendar">Date de la consultation</label>
                          <input id="input_calendar" class="form-control" type="date" name="date1">
                        </div>
                      </div>
                    </div>
                    <div class="btn_wrap pb-0 text-center">
                      <button type="submit" class="btn btn-primary" name="submit">
                        <span class="btn_text" data-text="Get A Consultation">
                          Obtenir votre consultation
                        </span>
                        <span class="btn_icon">
                          <i class="fa-solid fa-arrow-up-right"></i>
                        </span>
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="decoration_item shape_leaf_1">
              <img src="assets/images/shapes/shape_leaf_right_top.svg" alt="Shape Leaf - Talking Minds - Psychotherapist Site Template">
            </div>
            <div class="decoration_item shape_leaf_2">
              <img src="assets/images/shapes/shape_leaf_left_bottom.svg" alt="Shape Leaf - Talking Minds - Psychotherapist Site Template">
            </div>
          </div>
        </div>
      </div>
      <!-- Site Header - End
      ================================================== -->

      <!-- Main Body - Start
      ================================================== -->
      <main class="page_content">

        <!-- Page Banner - Start
        ================================================== -->
        <section class="page_banner decoration_wrapper">
         <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <!--<h1 class="page_title mb-0">Team of Professionals</h1>
              </div>
              <div class="col-lg-6">
                <ul class="breadcrumb_nav unordered_list justify-content-lg-end justify-content-center">
                  <li><a href="php/expert.php">Home</a></li>
                  <li>Team</li>
                </ul>
              </div>-->
            </div>
          </div>
          <div class="decoration_item shape_leaf_1">
            <img src="assets/images/shapes/shape_leaf_left.svg" alt="Shape Leaf - Talking Minds - Psychotherapist Site Template">
          </div>
          <div class="decoration_item shape_leaf_2">
            <img src="assets/images/shapes/shape_leaf_right.svg" alt="Shape Leaf - Talking Minds - Psychotherapist Site Template">
          </div>
        </section>
        <!-- Page Banner - End
        ================================================== -->

        <!-- Service Section - Start
        ================================================== -->
        <section class="service_section section_space_lg">
          <div class="container">
            <div class="section_heading text-center">
              <h2 class="section_heading_text">Programmes de thérapie en santé mentale</h2>
              <p class="section_heading_description mb-0 ">
              Programmes de thérapie en santé mentale pour traiter la dépression, améliorer les relations et renforcer le bien-être émotionnel.
              </p>
            </div>

            <div class="row justify-content-center">
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service_item">
                  <div class="item_icon">
                    <img src="assets/images/icons/icon_brain.svg" alt="Brain Icon - Talking Minds – Psychotherapist Site Template">
                  </div>
                  <div class="item_contact">
                    <h3 class="item_title">Depression Therapy</h3>
                    <p>
                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusant doloremqe laudantium.
                    </p>
                    <a class="btn-link" href="error.html">
                      <span class="btn_text">Plus d'Infos</span>
                      <span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service_item">
                  <div class="item_icon">
                    <img src="assets/images/icons/icon_head_double.svg" alt="Head Double Icon - Talking Minds – Psychotherapist Site Template">
                  </div>
                  <div class="item_contact">
                    <h3 class="item_title">Conseil matrimonial</h3>
                    <p>
                    Accompagnement et conseils pour renforcer la communication, résoudre les conflits et améliorer la vie de couple.
                    </p>
                    <a class="btn-link" href="error.html">
                      <span class="btn_text">Plus d'infos</span>
                      <span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service_item">
                  <div class="item_icon">
                    <img src="assets/images/icons/icon_head.svg" alt="Brain Icon - Talking Minds – Psychotherapist Site Template">
                  </div>
                  <div class="item_contact">
                    <h3 class="item_title">Relationships</h3>
                    <p>
                    Soutien pour bâtir et maintenir des relations saines, harmonieuses et épanouissantes.
                    </p>
                    <a class="btn-link" href="error.html">
                      <span class="btn_text">Plus d'infos</span>
                      <span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service_item">
                  <div class="item_icon">
                    <img src="assets/images/icons/icon_head_plus.svg" alt="Brain Icon - Talking Minds – Psychotherapist Site Template">
                  </div>
                  <div class="item_contact">
                    <h3 class="item_title">Trouble anxieux</h3>
                    <p>
                    Gestion et traitement des troubles anxieux pour réduire le stress et retrouver la sérénité.                    </p>
                    <a class="btn-link" href="error.html">
                      <span class="btn_text">Plus d'infos</span>
                      <span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service_item">
                  <div class="item_icon">
                    <img src="assets/images/icons/icon_head_children.svg" alt="Head Double Icon - Talking Minds – Psychotherapist Site Template">
                  </div>
                  <div class="item_contact">
                    <h3 class="item_title">Thérapie des enfants</h3>
                    <p>
                    Accompagnement thérapeutique pour aider les enfants à surmonter leurs défis émotionnels et comportementaux.                    </p>
                    <a class="btn-link" href="error.html">
                      <span class="btn_text">Plus d'infos</span>
                      <span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service_item">
                  <div class="item_icon">
                    <img src="assets/images/icons/icon_brain_plus.svg" alt="Brain Icon - Talking Minds – Psychotherapist Site Template">
                  </div>
                  <div class="item_contact">
                    <h3 class="item_title">Thérapie individuelle</h3>
                    <p>
                    Soutien personnalisé pour favoriser le bien-être mental et surmonter les défis personnels.                    </p>
                    <a class="btn-link" href="error.html">
                      <span class="btn_text">Plus d'infos</span>
                      <span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Service Section - End
        ================================================== -->

        <!-- About Section - Start
        ================================================== -->
        <section class="about_section section_space_lg bg_primary_light">
          <div class="container">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6 order-lg-last">
                <div class="image_widget ps-lg-4">
                  <img src="assets/images/Therapie_des_enfants.jpg" alt="About Image - Talking Minds – Psychotherapist Site Template">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="about_content">
                  <div class="section_heading mb-lg-5">
                    <h2 class="section_heading_text">
                    Thérapie des enfants
                    </h2>
                    <p class="section_heading_description mb-0 ">
                    Soutien spécialisé pour aider les enfants à gérer leurs émotions, développer leur confiance et surmonter leurs difficultés.                    </p>
                  </div>
                  <div class="row">
                    <div class="col-md-6 col-sm-6">
                      <div class="policy_item">
                        <div class="title_wrap">
                          <div class="item_icon">
                            <i class="fa-solid fa-hand-holding-heart"></i>
                          </div>
                          <h3 class="item_title">Fiabilité</h3>
                        </div>
                        <p class="mb-0">
                        Un service fiable basé sur l’écoute, le professionnalisme et des solutions adaptées à vos besoins.                        </p>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                      <div class="policy_item">
                        <div class="title_wrap">
                          <div class="item_icon">
                            <i class="fa-solid fa-headset"></i>
                          </div>
                          <h3 class="item_title">Soutien</h3>
                        </div>
                        <p class="mb-0">
                        Accompagnement émotionnel et psychologique pour aider à surmonter les difficultés et favoriser le bien-être.                        </p>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                      <div class="policy_item">
                        <div class="title_wrap">
                          <div class="item_icon">
                            <i class="fa-solid fa-head-side-medical"></i>
                          </div>
                          <h3 class="item_title">Précision</h3>
                        </div>
                        <p class="mb-0">
                        Clarté et exactitude dans l’approche thérapeutique pour garantir des résultats adaptés aux besoins spécifiques de chaque individu.                        </p>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                      <div class="policy_item">
                        <div class="title_wrap">
                          <div class="item_icon">
                            <i class="fa-solid fa-shield-halved"></i>
                          </div>
                          <h3 class="item_title">Confidentialité</h3>
                        </div>
                        <p class="mb-0">
                        Respect total de la confidentialité, assurant un environnement sûr et sécurisé pour partager et traiter des informations personnelles.                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="btn_wrap pb-0">
                    <a class="btn btn-primary" href="#">
                      <span class="btn_text" data-text="Get A Consultation" data-bs-toggle="modal" data-bs-target="#had-div">
                      Obtenir votre consultation
                      </span>
                      <span class="btn_icon">
                        <i class="fa-solid fa-arrow-up-right"></i>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- About Section - End
        ================================================== -->

        <!-- Work Process Section - Start
        ================================================== -->
        <section class="work_process_section section_space_lg">
          <div class="container">
            <div class="section_heading text-center">
              <h2 class="section_heading_text">
              Processus de consultation
              </h2>
              <p class="section_heading_description mb-0">
              Le processus de consultation inclut une première évaluation, un diagnostic personnalisé, suivi de séances adaptées aux besoins du patient pour assurer une progression vers le bien-être.              </p>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="work_process_item">
                  <div class="serial_number">01</div>
                  <h3 class="item_title">Demande sur le site</h3>
                  <p class="mb-0">
                  Pour toute demande, veuillez remplir le formulaire sur le site et nous vous répondrons dans les plus brefs délais pour vous accompagner dans votre démarche.                  </p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="work_process_item">
                  <div class="serial_number">02</div>
                  <h3 class="item_title">Calendrier</h3>
                  <p class="mb-0">
                  Consultez notre calendrier en ligne pour prendre rendez-vous à votre convenance et choisir l'heure qui vous convient le mieux.                  </p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="work_process_item">
                  <div class="serial_number">03</div>
                  <h3 class="item_title">Diriger une séance</h3>
                  <p class="mb-0">
                  Diriger une séance consiste à guider le patient à travers un processus structuré, en écoutant activement, en posant des questions pertinentes et en utilisant des techniques thérapeutiques adaptées pour atteindre les objectifs fixés.                  </p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="work_process_item">
                  <div class="serial_number">04</div>
                  <h3 class="item_title">Évaluation satisfaisante</h3>
                  <p class="mb-0">
                  Une évaluation satisfaisante consiste à analyser attentivement les besoins du patient, à mesurer ses progrès et à ajuster les stratégies thérapeutiques pour garantir des résultats positifs.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Work Process Section - End
        ================================================== -->

        <!-- Pricing Section - Start
        ================================================== -->
        <section class="pricing_section section_space_lg bg_primary_light decoration_wrapper">
          <div class="container">
            <div class="section_heading text-center">
              <h2 class="section_heading_text">Forfaits</h2>
              <p class="section_heading_description mb-0">
              Nous proposons des forfaits adaptés à vos besoins, incluant des séances individuelles, des thérapies de couples ou des programmes de soutien à long terme, pour un accompagnement complet et personnalisé.              </p>
            </div>

            <div class="pricing_toggle_btn_wrap">
              <button class="pricing_toggle_btn" type="button">
                <span>Mensuel</span>
                <span>Annuellement <mark>économiser +20%</mark></span>
              </button>
            </div>

            <div class="row justify-content-center">
              <div class="col-lg-4">
                <div class="pricing_item">
                  <h3 class="pricing_heading">Light Session</h3>
                  <div class="pricing_price_value">
                    <span class="pricing_monthly">1500 DH <sub>par mois</sub></span>
                    <span class="pricing_annually">1,4400 DH <sub>vous économiserez +3500 DH</sub></span>
                  </div>
                  <hr>
                  <ul class="info_list unordered_list_block">
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">6 Thérapie de session</span>
                    </li>
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">Durée 30 minutes</span>
                    </li>
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">Réunion de groupe</span>
                    </li>
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">Rencontre personnelle</span>
                    </li>
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">Soutien 24 heures</span>
                    </li>
                  </ul>
                  <div class="btn_wrap pb-0 text-center">
                    <a class="btn btn-outline-primary" href="#!">
                      <span class="btn_text" data-text="Buy Now">
                      Inscrivez-vous dès maintenant
                      </span>
                      <span class="btn_icon">
                        <i class="fa-solid fa-arrow-up-right"></i>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="pricing_item">
                  <h3 class="badge_popular">Les plus populaires</h3>
                  <h4 class="pricing_heading">Standart Session</h4>
                  <div class="pricing_price_value">
                    <span class="pricing_monthly">2500 DH <sub>par mois</sub></span>
                    <span class="pricing_annually">2,3500 DH <sub>Vous économiserez +600 DH</sub></span>
                  </div>
                  <hr>
                  <ul class="info_list unordered_list_block">
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">10 Thérapie de séance</span>
                    </li>
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">Durée 30 minutes</span>
                    </li>
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">Réunion de groupe</span>
                    </li>
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">Rencontre personnelle</span>
                    </li>
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">Soutien 24 heures</span>
                    </li>
                  </ul>
                  <div class="btn_wrap pb-0 text-center">
                    <a class="btn btn-primary" href="#!">
                      <span class="btn_text" data-text="Buy Now">
                      Inscrivez-vous dès maintenant
                      </span>
                      <span class="btn_icon">
                        <i class="fa-solid fa-arrow-up-right"></i>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="pricing_item">
                  <h3 class="pricing_heading">Individual Session</h3>
                  <div class="pricing_price_value">
                    <span class="pricing_monthly">4000 DH <sub>Par mois</sub></span>
                    <span class="pricing_annually">3,800 DH <sub>Vous économiserez +9600 DH</sub></span>
                  </div>
                  <hr>
                  <ul class="info_list unordered_list_block">
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">Thérapie d’un an</span>
                    </li>
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">Duration 30 Minutes</span>
                    </li>
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">Réunion de groupe</span>
                    </li>
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">Rencontre personnelle</span>
                    </li>
                    <li>
                      <span class="info_icon">
                        <i class="fa-light fa-circle-check"></i>
                      </span>
                      <span class="info_text">Soutien 24 heures</span>
                    </li>
                  </ul>
                  <div class="btn_wrap pb-0 text-center">
                    <a class="btn btn-outline-primary" href="#!">
                      <span class="btn_text" data-text="Buy Now">
                      Inscrivez-vous dès maintenant
                      </span>
                      <span class="btn_icon">
                        <i class="fa-solid fa-arrow-up-right"></i>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="decoration_item shape_leaf_1">
            <img src="assets/images/shapes/shape_leaf_right_top.svg" alt="Shape Leaf - Talking Minds - Psychotherapist Site Template">
          </div>
          <div class="decoration_item shape_leaf_2">
            <img src="assets/images/shapes/shape_leaf_left_bottom.svg" alt="Shape Leaf - Talking Minds - Psychotherapist Site Template">
          </div>
        </section>
        <!-- Pricing Section - End
        ================================================== -->

        <!-- Consultation Section - Start
        ================================================== -->
        <section class="consultation_section section_space_lg">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-5">
                <div class="image_widget">
                  <img src="assets/images/contact_us.jpg" alt="About Image - Talking Minds – Psychotherapist Site Template">
                  <div class="image_shape bg_secondary_light"></div>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="section_heading">
                  <h2 class="section_heading_text mb-0">
                  Prenez soin de votre santé mentale 
                  </h2>
                </div>
                <form action="phpconsult/ajouter.php" method="POST" >
                <div class="row justify-content-center">
                  <div class="col-lg-12">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="input_name">Nom</label>
                          <input id="input_name" class="form-control" type="text" name="name1" placeholder="Your Name">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="input_phone">Téléphone</label>
                          <input id="input_phone" class="form-control" type="tel" name="phone1" placeholder="Mobile phone number">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="select_therapy">Thérapie</label>
                          <select id="select_therapy" class="form-select" aria-label="Therapy Select Options" name="therapy1">
                            <option selected>Sélectionner la thérapie</option>
                            <option value="Depression Therapy">Traitement de la dépression</option>
                            <option value="Couples Counseling">Thérapie de couples</option>
                            <option value="Relationships">Relationships</option>
                            <option value="Anxiety disorder">Trouble anxieux</option>
                            <option value="Child therapy">Thérapie des enfants</option>
                            <option value="Individual therapy">Thérapie individuelle</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="input_calendar">Date de la consultation</label>
                          <input id="input_calendar" class="form-control" type="date" name="date1">
                        </div>
                      </div>
                    </div>
                    <div class="btn_wrap pb-0 text-center">
                      <button type="submit" class="btn btn-primary" name="submit">
                        <span class="btn_text" data-text="Get A Consultation">
                          Obtenir une consultation
                        </span>
                        <span class="btn_icon">
                          <i class="fa-solid fa-arrow-up-right"></i>
                        </span>
                      </button>
                    </div>
                  </div>
                </div>
              </form>
              </div>
            </div>
          </div>
        </section>
        <!-- Consultation Section - End
        ================================================== -->

      </main>
      <!-- Main Body - End
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
                    <img src="assets/images/site_logo/Logo.png" style="height: 10rem;" alt="Site Logo – Talking Minds – Psychotherapist Site Template">
                  </a>
                </div>
              </div>
              <div class="col-lg-6">
                <ul class="info_list unordered_list justify-content-center">
                <?php
                      include ('config.php');
                      $jibdata = "SELECT * FROM `navbar` ";
                      $dirlordre = mysqli_query($connexion,$jibdata); 
                      while($starjdid = mysqli_fetch_array($dirlordre)){
                    ?>
                    <li class="anav">
                      <a class="nav-link" aria-current="page" href="<?php echo $starjdid['refer']?>"><?php echo $starjdid['nav']?></a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
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
          <p class="copyright_text m-0">ZGHOUDI © <b>PSY</b> Template All rights reserved Copyrights 2025</p>          </div>
          </div>
        </div>
      </footer>
      <!-- Site Footer - End
      ================================================== -->

    </div>
    <!-- Body Wrap - End -->

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

  </body>
</html>