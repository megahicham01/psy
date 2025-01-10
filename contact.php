<!doctype html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Contacts de la clinique - Esprits parlant - Psychothérapeute</title>
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

        <!-- Contact Section - Start
        ================================================== -->
        <section class="contact_section section_space_lg" style="padding-top: 10px;">
          <div class="container">
            <div class="conatiner_box">
              <div class="section_heading mb-4">
                <div class="row justify-content-lg-between">
                  <div class="col-lg-6">
                    <h2 class="section_heading_text mb-0">
                    Prenez soin de votre santé mentale maintenant
                    </h2>
                  </div>
                  <div class="col-lg-6">
                    <p class="section_heading_description mb-0 ps-lg-4">
                    Nous sommes heureux de vous avoir contacté. 
                    </p>
                  </div>
                </div>
              </div>
              <form action="phpcontact/ajouter.php" method="post">
              <div class="row justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="input_name">Nom</label>
                        <input id="input_name" class="form-control" type="text" name="name" placeholder="Votre nom">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="input_phone">Téléphone</label>
                        <input id="input_phone" class="form-control" type="tel" name="phone" placeholder="votre numéro de téléphone">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group mb-4">
                        <label for="input_message">Message</label>
                        <textarea id="input_message" class="form-control col-6" name="comment" placeholder="veuillez Saisissez votre message ici, jusqu'à 255 caractères." maxlength="255" style="width:33rem"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary" name="submit" >
                        <span class="btn_text" data-text="Envoyer">
                        Envoyer
                        </span>
                        <span class="btn_icon">
                          <i class="fa-solid fa-arrow-up-right"></i>
                        </span>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="ps-lg-4">
                    <div class="row mb-5">
                      <div class="col-md-5">
                        <ul class="contact_info_list unordered_list_block">
                          <li>
                            <div class="item_icon">
                              <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="item_content">
                              <h3 class="item_title">Téléphone</h3>
                              <p class="item_info mb-0">+2127 08 03 99 10</p>
                            </div>
                          </li>
                          <li>
                            <div class="item_icon">
                              <i class="fa-solid fa-fax"></i>
                            </div>
                            <div class="item_content">
                              <h3 class="item_title">Fax</h3>
                              <p class="item_info mb-0">+2125 08 03 99 10</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="col-md-7">
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
                              <h3 class="item_title">localisation</h3>
                              <p class="item_info mb-0">345 Av. Lalla Asmaa, <br> Casablanca 20250R</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <h3 class="social_title">Suivez-nous:</h3>
                    <ul class="social_links unordered_list">
                      <li><a class="bg-primary" href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                      <li><a class="bg-primary" href="#!"><i class="fa-brands fa-instagram"></i></a></li>
                      <li><a class="bg-primary" href="#!"><i class="fa-brands fa-twitter"></i></a></li>
                      <li><a class="bg-primary" href="#!"><i class="fa-brands fa-whatsapp"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              </form>
            </div>
          </div>
        </section>
        <!-- Contact Section - End
        ================================================== -->

        <!-- Google Map - Start
        ================================================== -->
        <div class="gmap_canvas contact_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26593.012840987773!2d-7.575401532447857!3d33.576061934334774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd0d156d336b%3A0x6a868fc61d146fdf!2sDR%20ZINEB%20EL%20RHAZOUI!5e0!3m2!1sfr!2sma!4v1734566518721!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- Google Map - End
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