<!doctype html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Team of Professionals - MindCare Clinique – Psychotherapist</title>
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
      <header class="site_header ">
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
                    <li class="anav">
                      <a class="nav-link navbar-text" aria-current="page" href="index.html">Accueil</a>
                    </li>
                    <li class="anav">
                      <a class="nav-link navbar-text" aria-current="page" href="Source.html">Sources</a>
                    </li>
                    <li class="anav">
                      <a class="nav-link navbar-text" aria-current="page" href="equipe.php"> Communiquer avec un expert</a>
                    </li>
                    
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

        <!-- Team Section - Start
        ================================================== -->
        <section class="team_section section_space_lg">
          <div class="container">
            <div class="row justify-content-lg-between align-items-lg-end">
              <div class="col-lg-5">
                <div class="section_heading mb-lg-4 mb-2">
                  <h2 class="section_heading_text">Faites connaissance avec nos médecins</h2>
                  <p class="section_heading_description mb-0 ">
                  Faites connaissance avec nos médecins qualifiés, experts dans le domaine de la santé mentale, prêts à vous offrir un accompagnement professionnel et bienveillant pour votre bien-être.                  </p>
                </div>
              </div>
              <div class="col-lg-6">
                <ul class="team_funfact unordered_list justify-content-lg-end text-center mb-lg-2 mb-3">
                  <li>
                    <div class="counter_item">
                      <div class="counter_value">
                        <span class="odometer" data-count="12">0</span>
                        <span>+</span>
                      </div>
                      <h3 class="counter_title mb-0">Spécialistes qualifiés</h3>
                    </div>
                  </li>
                  <li>
                    <div class="counter_item">
                      <div class="counter_value">
                        <span class="odometer" data-count="99">0</span>
                        <span>%</span>
                      </div>
                      <h3 class="counter_title mb-0">Efficacité de la thérapie</h3>
                    </div>
                  </li>
                </ul>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team_item">
                  <div class="team_memder_image">
                    <a href="index.php"><img src="assets/images/team/1.jpg" alt="Talking Minds - Psychotherapist Site Template"></a>
                  </div>
                  <div class="team_memder_info text-center">
                    <h3><a  class="team_memder_designation" href="index.php">Psychologue de la famille, Psy. D</a></h3>
                    <h4><a  class="team_memder_name text-dark" href="index.php">Mr. Hicham ZGHOUDI</a></h4>
                    <ul class="social_links unordered_list justify-content-center">
                      <li><a href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                      <li><a href="#!"><i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href="#!"><i class="fa-brands fa-twitter"></i></a></li>
                      <li><a href="#!"><i class="fa-brands fa-whatsapp"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team_item">
                  <div class="team_memder_image">
                    <img src="assets/images/team/2.jpg" alt="Talking Minds - Psychotherapist Site Template">
                  </div>
                  <div class="team_memder_info text-center">
                    <h3 class="team_memder_designation">Psychologue clinicien, Psy. D</h3>
                    <h4 class="team_memder_name">Mr. Abdelwahed MOUDEN</h4>
                    <ul class="social_links unordered_list justify-content-center">
                      <li><a href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                      <li><a href="#!"><i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href="#!"><i class="fa-brands fa-twitter"></i></a></li>
                      <li><a href="#!"><i class="fa-brands fa-whatsapp"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team_item">
                  <div class="team_memder_image">
                    <img src="assets/images/team/6.jpg" alt="Talking Minds - Psychotherapist Site Template">
                  </div>
                  <div class="team_memder_info text-center">
                    <h3 class="team_memder_designation">Psychologue praticien</h3>
                    <h4 class="team_memder_name">Ms. Ilham ALAMI</h4>
                    <ul class="social_links unordered_list justify-content-center">
                      <li><a href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                      <li><a href="#!"><i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href="#!"><i class="fa-brands fa-twitter"></i></a></li>
                      <li><a href="#!"><i class="fa-brands fa-whatsapp"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team_item">
                  <div class="team_memder_image">
                    <img src="assets/images/team/4.jpg" alt="Talking Minds - Psychotherapist Site Template">
                  </div>
                  <div class="team_memder_info text-center">
                    <h3 class="team_memder_designation">psychologue praticien, Psy. D</h3>
                    <h4 class="team_memder_name">Ms. Sara BOURKADI</h4>
                    <ul class="social_links unordered_list justify-content-center">
                      <li><a href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                      <li><a href="#!"><i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href="#!"><i class="fa-brands fa-twitter"></i></a></li>
                      <li><a href="#!"><i class="fa-brands fa-whatsapp"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team_item">
                  <div class="team_memder_image">
                    <img src="assets/images/team/5.jpg" alt="Talking Minds - Psychotherapist Site Template">
                  </div>
                  <div class="team_memder_info text-center">
                    <h3 class="team_memder_designation">psychologue clinicien, Psy. D</h3>
                    <h4 class="team_memder_name">Ms. Asmae Floyd</h4>
                    <ul class="social_links unordered_list justify-content-center">
                      <li><a href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                      <li><a href="#!"><i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href="#!"><i class="fa-brands fa-twitter"></i></a></li>
                      <li><a href="#!"><i class="fa-brands fa-whatsapp"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team_item">
                  <div class="team_memder_image">
                    <img src="assets/images/team/3.jpg" alt="Talking Minds - Psychotherapist Site Template">
                  </div>
                  <div class="team_memder_info text-center">
                    <h3 class="team_memder_designation">pédopsychologue</h3>
                    <h4 class="team_memder_name">Merryl Morton</h4>
                    <ul class="social_links unordered_list justify-content-center">
                      <li><a href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                      <li><a href="#!"><i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href="#!"><i class="fa-brands fa-twitter"></i></a></li>
                      <li><a href="#!"><i class="fa-brands fa-whatsapp"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Team Section - End
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