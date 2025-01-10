<!doctype html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Home - MindCare Clinique – Psychotherapist</title>
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
            <div class="col-lg-3 col-5">
              <div class="site_logo">
                <a class="site_link" href="index.php">
                  <img src="assets/images/site_logo/Logo.png" alt="Site Logo – Talking Minds – Psychotherapist Site Template" style="height: 5rem;">
                </a>
              </div>
            </div>
            <div class="col-lg-6 col-2">
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
            <div class="col-lg-3 col-5">
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
                  <li><a href="php/index.php">Home</a></li>
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

        <!-- Hero Section - Start
        ================================================== -->
        <section class="hero_section decoration_wrapper" style="padding-top: 21px;">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="hero_content_wrap">
                  <h1 class="heading_text">
                  Consultation privée en santé mentale d’un professionnel
                  </h1>
                  <p class="heading_description fw-bold">
                    Dr.Hicham ZGHOUDI </p>
                  <p class="heading_description">
                  Je peux voir des progrès dans ma santé mentale, ce que je n’ai pas pu dire depuis 15 ans et c’est grâce à elle.      </p>
                  <ul class="btns_group unordered_list">
                    <li>
                      <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#had-div" href="contact.html">
                        <span class="btn_text" data-text="Get A Consultation">
                        Obtenir votre consultation
                        </span>
                        <span class="btn_icon">
                          <i class="fa-solid fa-arrow-up-right"></i>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a class="btn btn-outline-secondary" href="service.php">
                        <span class="btn_text" data-text="Learn More">
                        En savoir plus
                        </span>
                        <span class="btn_icon">
                          <i class="fa-solid fa-arrow-up-right"></i>
                        </span>
                      </a>
                    </li>
                  </ul>
                  <ul class="hero_section_counter unordered_list">
                    <li>
                      <div class="counter_item">
                        <div class="counter_value mb-0">
                          <span class="odometer" data-count="15">0</span>
                          <span>+</span>
                        </div>
                        <hr>
                        <p class="counter_description mb-0">
                        Des années d’expérience
                        </p>
                      </div>
                    </li>
                    <li>
                      <div class="counter_item">
                        <div class="counter_value mb-0">
                          <span class="odometer" data-count="840">0</span>
                          <span>+</span>
                        </div>
                        <hr>
                        <p class="counter_description mb-0">
                        Des patients ont reçu de l’aide cette année
                        </p>
                      </div>
                    </li>
                    <li>
                      <div class="counter_item">
                        <div class="counter_value mb-0">
                          <span class="odometer" data-count="98">0</span>
                          <span>%</span>
                        </div>
                        <hr>
                        <p class="counter_description mb-0">
                        Du client a amélioré son état
                        </p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="hero_image_wrap">
                  <video autoplay loop muted style="width: 80%; max-width: 400px; height: auto;">
                    <source src="assets/images/Récit_vidéo.mp4" type="video/mp4">
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
        <!-- Hero Section - End
        ================================================== -->

        <!-- Service Section - Start
        ================================================== -->
        <section class="service_section section_space_lg bg_primary_light">
          <div class="container">
            <div class="section_heading text-center">
              <h2 class="section_heading_text">Ce que je vous offre</h2>
              <p class="section_heading_description mb-0">
              Je vous offre un accompagnement personnalisé pour votre bien-être mental, avec des consultations adaptées et un traitement si nécessaire.
              </p>
            </div>

            <div class="row justify-content-center">
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service_item">
                  <div class="item_icon">
                    <img src="assets/images/icons/icon_brain.svg" alt="Brain Icon - Talking Minds – Psychotherapist Site Template">
                  </div>
                  <div class="item_contact">
                    <h3 class="item_title">Traitement de la dépression</h3>
                    <p>
                    Accompagnement personnalisé pour surmonter les symptômes et améliorer votre bien-être émotionnel.
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
                    <img src="assets/images/icons/icon_head_double.svg" alt="Head Double Icon - Talking Minds – Psychotherapist Site Template">
                  </div>
                  <div class="item_contact">
                    <h3 class="item_title">Thérapie de couples</h3>
                    <p>
                    Aide à résoudre les conflits et à renforcer la communication et la complicité dans votre relation.
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
                    Conseils et soutien pour développer des relations saines et épanouissantes, qu'elles soient familiales, amicales ou professionnelles.
                    </p>
                    <a class="btn-link" href="error.html">
                      <span class="btn_text">Plus d'infos</span>
                      <span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="btn_wrap pb-0 text-center">
              <a class="btn btn-primary" href="service.php">
                <span class="btn_text" data-text="All Programs">
                Tous les programmes
                </span>
                <span class="btn_icon">
                  <i class="fa-solid fa-arrow-up-right"></i>
                </span>
              </a>
            </div>
          </div>
        </section>
        <!-- Service Section - End
        ================================================== -->

        <!-- About Section - Start
        ================================================== -->
        <section class="about_section section_space_lg">
          <div class="container">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6 order-lg-last">
                <div class="image_widget">
                  <img src="assets/images/Dr. Merry Stone.jpg" alt="About Image - Talking Minds – Psychotherapist Site Template">
                  <div class="image_shape bg_primary_light"></div>
                  <div class="about_video_icon">
                    <a class="video_play_btn popup_video" href="https://www.youtube.com/watch?v=eaxN2edUrnI">
                      <i class="fa-duotone fa-play"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="about_content">
                  <div class="section_heading mb-4">
                    <h2 class="section_heading_text">
                      <mark>Dr. Hicham ZGHOUDI</mark> — Thérapie de sérénité, psychologue clinique et psychothérapeute  
                    </h2>
                    <p class="section_heading_description mb-0 ">
                    Offrir des soins compatissants et une thérapie fondée sur des données probantes pour favoriser le bien-être mental, la croissance personnelle et la résilience émotionnelle.
                    </p>
                  </div>
                  <div class="row">
                    <div class="col-md-5 col-sm-6">
                      <ul class="info_list unordered_list_block">
                        <li>
                          <span class="info_icon">
                            <i class="fa-light fa-circle-check"></i>
                          </span>
                          <span class="info_text">Consultations personnelles</span>
                        </li>
                        <li>
                          <span class="info_icon">
                            <i class="fa-light fa-circle-check"></i>
                          </span>
                          <span class="info_text">Thérapie de groupe</span>
                        </li>
                        <li>
                          <span class="info_icon">
                            <i class="fa-light fa-circle-check"></i>
                          </span>
                          <span class="info_text">Thérapie en ligne</span>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-5 col-sm-6">
                      <ul class="info_list unordered_list_block">
                        <li>
                          <span class="info_icon">
                            <i class="fa-light fa-circle-check"></i>
                          </span>
                          <span class="info_text">technique unique</span>
                        </li>
                        <li>
                          <span class="info_icon">
                            <i class="fa-light fa-circle-check"></i>
                          </span>
                          <span class="info_text">Problème de couple</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="btn_wrap pb-0">
                    <a class="btn btn-primary" href="service.php">
                      <span class="btn_text" data-text="Learn More">
                      En savoir plus
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
        

      
        <section class="testimonial_section section_space_lg">
          <div class="container">
            <div class="section_heading text-center">
              <h2 class="section_heading_text">Ce que disent les patients</h2>
              <p class="section_heading_description mb-0">
              Les patients apprécient l’approche compatissante du Dr Hicham et rapportent des améliorations importantes de leur santé mentale et de leur confiance grâce à la thérapie.
              </p>
            </div>

            <div class="testimonial_carousel">
              <div class="carousel_2col row" data-slick='{"arrows":false}'>
                <div class="carousel_item col-">
                  <div class="testimonial_item">
                    <ul class="rating_star unordered_list">
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                    <div class="author_box">
                      <div class="author_box_image">
                        <img src="assets/images/comment1.jpg" alt="Reviewer Image - Talking Minds - Psychotherapist Site Template">
                      </div>
                      <div class="author_box_content">
                        <h3 class="author_box_name">Maryam</h3>
                        <span class="author_box_designation">Houssa</span>
                      </div>
                    </div>
                    <p class="mb-0">
                      Dr. [Name] has a calm and understanding approach that made me feel heard and supported from the very first session. 
                    </p>
                  </div>
                </div>
                <div class="carousel_item col-">
                  <div class="testimonial_item">
                    <ul class="rating_star unordered_list">
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                    <div class="author_box">
                      <div class="author_box_image">
                        <img src="assets/images/comment2.jpg" alt="Reviewer Image - Talking Minds - Psychotherapist Site Template">
                      </div>
                      <div class="author_box_content">
                        <h3 class="author_box_name">Hicham</h3>
                        <span class="author_box_designation">Entrepreneur</span>
                      </div>
                    </div>
                    <p class="mb-0">
                      I’ve seen such a positive change in my mental health thanks to her guidance and techniques.
                    </p>
                  </div>
                </div>
                <div class="carousel_item col-">
                  <div class="testimonial_item">
                    <ul class="rating_star unordered_list">
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                    <div class="author_box">
                      <div class="author_box_image">
                        <img src="assets/images/comment3.jpg" alt="Reviewer Image - Talking Minds - Psychotherapist Site Template">
                      </div>
                      <div class="author_box_content">
                        <h3 class="author_box_name">Ahmed</h3>
                        <span class="author_box_designation">DADA</span>
                      </div>
                    </div>
                    <p class="mb-0">
                      She creates a safe and welcoming space where I can openly share without judgment. 
                    </p>
                  </div>
                </div>
                <div class="carousel_item col-">
                  <div class="testimonial_item">
                    <ul class="rating_star unordered_list">
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                    <div class="author_box">
                      <div class="author_box_image">
                        <img src="assets/images/comment1.jpg" alt="Reviewer Image - Talking Minds - Psychotherapist Site Template">
                      </div>
                      <div class="author_box_content">
                        <h3 class="author_box_name">Radia</h3>
                        <span class="author_box_designation">MOUHA</span>
                      </div>
                    </div>
                    <p class="mb-0">
                      Her expertise and patience helped me overcome challenges I thought were impossible to address.
                    </p>
                  </div>
                </div>
                <div class="carousel_item col-">
                  <div class="testimonial_item">
                    <ul class="rating_star unordered_list">
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                    <div class="author_box">
                      <div class="author_box_image">
                        <img src="assets/images/comment2.jpg" alt="Reviewer Image - Talking Minds - Psychotherapist Site Template">
                      </div>
                      <div class="author_box_content">
                        <h3 class="author_box_name">Nourdine</h3>
                        <span class="author_box_designation">JORDAN</span>
                      </div>
                    </div>
                    <p class="mb-0">
                      I highly recommend her for anyone seeking a compassionate and skilled therapist. 
                    </p>
                  </div>
                </div>
                <div class="carousel_item col-">
                  <div class="testimonial_item">
                    <ul class="rating_star unordered_list">
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                    <div class="author_box">
                      <div class="author_box_image">
                        <img src="assets/images/comment1.jpg" alt="Reviewer Image - Talking Minds - Psychotherapist Site Template">
                      </div>
                      <div class="author_box_content">
                        <h3 class="author_box_name">Damian York</h3>
                        <span class="author_box_designation">Entrepreneur</span>
                      </div>
                    </div>
                    <p class="mb-0">
                      Thanks to her, I now have the tools to manage my anxiety and feel more in control of my life.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Testimonial Section - End
        ================================================== -->


        <!-- FAQ Section - Start
        ================================================== -->
        <section class="faq_section">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="images_group_widget">
                  <ul class="unordered_list">
                    <li>
                      <img src="assets/images/mentalhelth1.jpg" alt="Talking Minds - Psychotherapist Site Template">
                      <img src="assets/images/mentalhelth2.jpg" alt="Talking Minds - Psychotherapist Site Template">
                    </li>
                    <li>
                      <img src="assets/images/mentalhelth3.jpg" alt="Talking Minds - Psychotherapist Site Template">
                      <img src="assets/images/mentalhelth4.jpg" alt="Talking Minds - Psychotherapist Site Template">
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="ps-lg-5">
                  <div class="section_heading mb-lg-4 mb-2">
                    <h2 class="section_heading_text mb-0">
                    Les questions les plus populaires pour discuter de la santé mentale:
                    </h2>
                  </div>
                  <div class="accordion" id="faq_accordion">
                    <div class="accordion-item">
                      <div class="accordion-header" id="heading_one">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_one" aria-expanded="true" aria-controls="collapse_one">
                        Qu'est-ce que la santé mentale?
                        </button>
                      </div>
                      <div id="collapse_one" class="accordion-collapse collapse show" aria-labelledby="heading_one" data-bs-parent="#faq_accordion">
                        <div class="accordion-body">
                          <p class="m-0">
                          La santé mentale fait référence au bien-être émotionnel, psychologique et social d’une personne. Elle affecte la façon dont les individus pensent, se sentent et agissent, influençant leur façon de gérer le stress, de communiquer avec les autres et de faire des choix. Une bonne santé mentale est essentielle au bien-être général et aide les gens à faire face aux contraintes normales de la vie, à travailler de façon productive et à contribuer à leur collectivité.</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <div class="accordion-header" id="heading_two">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_two" aria-expanded="false" aria-controls="collapse_two">
                        Que faire si le support ne m’aide pas ?
                        </button>
                      </div>
                      <div id="collapse_two" class="accordion-collapse collapse" aria-labelledby="heading_two" data-bs-parent="#faq_accordion">
                        <div class="accordion-body">
                          <p class="m-0">
                          Si le soutien ne vous aide pas, essayez les étapes suivantes : <br> <br>
                            - Parlez à votre thérapeute de vos préoccupations. <br>
                            - Demander un deuxième avis à un autre professionnel. <br> 
                            - Explorer différents types de thérapie ou d’options de soutien. <br>
                            - Se concentrer sur les soins personnels comme l’exercice et les passe-temps.                          
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <div class="accordion-header" id="heading_three">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_three" aria-expanded="false" aria-controls="collapse_three">
                        Pouvez-vous prévenir les problèmes de santé mentale? 
                        </button>
                      </div>
                      <div id="collapse_three" class="accordion-collapse collapse" aria-labelledby="heading_three" data-bs-parent="#faq_accordion">
                        <div class="accordion-body">
                          <p class="m-0">
                          Bien qu’il ne soit pas toujours possible de prévenir les problèmes de santé mentale, vous pouvez prendre des mesures pour réduire le risque : <br> <br>

                            - Dormez suffisamment <br>
                            - Gérer le stress <br>
                            - Établir des relations solides <br>
                            Ces habitudes peuvent améliorer la résilience et soutenir la santé mentale. <br>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <div class="accordion-header" id="heading_four">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_four" aria-expanded="false" aria-controls="collapse_four">
                        Quels sont les 7 éléments constitutifs de la santé mentale?
                        </button>
                      </div>
                      <div id="collapse_four" class="accordion-collapse collapse" aria-labelledby="heading_four" data-bs-parent="#faq_accordion">
                        <div class="accordion-body">
                          <p class="m-0">
                          Les sept composantes de la santé mentale comprennent le bien-être émotionnel, la résilience psychologique, les liens sociaux, l’estime de soi, la gestion du stress, le fonctionnement cognitif et la santé physique. Ces facteurs contribuent tous à maintenir un esprit équilibré et sain.                          
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <div class="accordion-header" id="heading_five">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_five" aria-expanded="false" aria-controls="collapse_five">
                        Y a-t-il des remèdes pour les problèmes de santé mentale?
                        </button>
                      </div>
                      <div id="collapse_five" class="accordion-collapse collapse" aria-labelledby="heading_five" data-bs-parent="#faq_accordion">
                        <div class="accordion-body">
                          <p class="m-0">
                          Les problèmes de santé mentale ne sont peut-être pas guéris, mais ils peuvent être gérés avec une thérapie, des médicaments et du soutien, ce qui améliore le bien-être.                          
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- FAQ Section - End
        ================================================== -->

        <!-- Contact Section - Start
        ================================================== -->
        <section class="contact_section section_space_lg">
          <div class="container">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-5">
                <div class="section_heading mb-lg-5">
                  <h2 class="section_heading_text">coordonnées</h2>
                  <p class="section_heading_description mb-0">
                  N’hésitez pas à contacter pour plus de détails ou des demandes, nous sommes là pour vous aider! 
                  </p>
                </div>
                <div class="row">
                  <div class="col-md-5 col-sm-5">
                    <ul class="contact_info_list unordered_list_block">
                      <li>
                        <div class="item_icon">
                          <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="item_content">
                          <h3 class="item_title">Téléphone</h3>
                          <p class="item_info mb-0">05 34 56 78 23</p>
                        </div>
                      </li>
                      <li>
                        <div class="item_icon">
                          <i class="fa-solid fa-fax"></i>
                        </div>
                        <div class="item_content">
                          <h3 class="item_title">Fax</h3>
                          <p class="item_info mb-0">05 34 56 78 23</p>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <ul class="contact_info_list unordered_list_block">
                      <li>
                        <div class="item_icon">
                          <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="item_content">
                          <h3 class="item_title">Email</h3>
                          <p class="item_info mb-0">info@MindCare.com</p>
                        </div>
                      </li>
                      <li>
                        <div class="item_icon">
                          <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="item_content">
                          <h3 class="item_title">Location</h3>
                          <p class="item_info mb-0">345 Av. Lalla Asmaa, <br> Casablanca 20250R</p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="office_hour_list bg_primary_light mt-5">
                  <h3 class="area_title">Working Time</h3>
                  <ul class="unordered_list_block">
                    <li>
                      <span>Lundi - Vendredi:</span>
                      <span>8 am - 5 pm</span>
                    </li>
                    <li>
                      <span>Samedi - Dimanche</span>
                      <span>9 am - 2 pm</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="gmap_canvas">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26593.012840987773!2d-7.575401532447857!3d33.576061934334774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd0d156d336b%3A0x6a868fc61d146fdf!2sDR%20ZINEB%20EL%20RHAZOUI!5e0!3m2!1sfr!2sma!4v1734566518721!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Contact Section - End
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
                  <a class="site_link" href="index.php">
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