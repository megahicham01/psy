<!doctype html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>About Us - MindCare Clinique – Psychotherapist</title>
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
                    <span class="btn_text" data-bs-toggle="modal" data-bs-target="#had-div">Get your Consultation</span>
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
              <h1 class="modal-title fs-5 mx-auto text-sucess" id="exampleModalLabel">Get your Consultation</h1>
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

        <!-- About Section - Start
        ================================================== -->
        <section class="about_section section_space_lg">
          <div class="container">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6 order-lg-last">
                <div class="image_widget">
                  <img src="assets/images/about/about_image_1-min.jpg" alt="About Image - Talking Minds – Psychotherapist Site Template">
                  <div class="image_shape bg_primary_light"></div>
                  <div class="about_video_icon">
                    <a class="video_play_btn popup_video" href="https://www.youtube.com/watch?v=7e90gBu4pas">
                      <i class="fa-duotone fa-play"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="about_content">
                  <div class="section_heading mb-4">
                    <h2 class="section_heading_text">
                      <mark>Dr. Merry Stone</mark> — Licensed Mental Health Counselor, Psychotherapist  
                    </h2>
                    <p class="section_heading_description mb-0 ">
                      It is a long established fact that a reader will be distracted by the readable content of a page. Sed ut perspiciatis unde omnis iste natus error.
                    </p>
                  </div>
                  <div class="row">
                    <div class="col-md-5 col-sm-6">
                      <ul class="info_list unordered_list_block">
                        <li>
                          <span class="info_icon">
                            <i class="fa-light fa-circle-check"></i>
                          </span>
                          <span class="info_text">Personal Consultations</span>
                        </li>
                        <li>
                          <span class="info_icon">
                            <i class="fa-light fa-circle-check"></i>
                          </span>
                          <span class="info_text">Group Therapy</span>
                        </li>
                        <li>
                          <span class="info_icon">
                            <i class="fa-light fa-circle-check"></i>
                          </span>
                          <span class="info_text">Online Therapy</span>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-5 col-sm-6">
                      <ul class="info_list unordered_list_block">
                        <li>
                          <span class="info_icon">
                            <i class="fa-light fa-circle-check"></i>
                          </span>
                          <span class="info_text">Unique technique</span>
                        </li>
                        <li>
                          <span class="info_icon">
                            <i class="fa-light fa-circle-check"></i>
                          </span>
                          <span class="info_text">Couple Problem</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="btn_wrap pb-0">
                    <a class="btn btn-primary" href="about.html">
                      <span class="btn_text" data-text="Learn More">
                        Learn More
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

        <!-- Counter Section - Start
        ================================================== -->
        <section class="funfact_section">
          <div class="container">
            <div class="counter_wrapper">
              <div class="row align-items-center text-center">
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="counter_item">
                    <div class="counter_value">
                      <span class="odometer" data-count="20">0</span>
                      <span>+</span>
                    </div>
                    <h3 class="counter_title">Years of experience</h3>
                    <p class="counter_description mb-0">
                      In psychology
                    </p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="counter_item">
                    <div class="counter_value">
                      <span class="odometer" data-count="840">0</span>
                      <span>+</span>
                    </div>
                    <h3 class="counter_title">Patients received help</h3>
                    <p class="counter_description mb-0">
                      This year
                    </p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="counter_item">
                    <div class="counter_value">
                      <span class="odometer" data-count="98">0</span>
                      <span>%</span>
                    </div>
                    <h3 class="counter_title">Positive Feedback</h3>
                    <p class="counter_description mb-0">
                      From our doctors
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Counter Section - End
        ================================================== -->

        <!-- Certificate Section - Start
        ================================================== -->
        <section class="certificate_section section_space_lg pb-0">
          <div class="container">
            <div class="section_heading text-center">
              <h2 class="section_heading_text">Certificates</h2>
              <p class="section_heading_description mb-0 ">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry
              </p>
            </div>
            <div class="certificates_carousel row zoom-gallery" data-slick='{"arrows": false}'>
              <div class="col- carousel_item">
                <a class="certificate_image popup_image" data-cursor-text="Scroll" href="assets/images/certificate/certificate_image_1-min.jpg">
                  <img src="assets/images/certificate/certificate_image_1-min.jpg" alt="Talking Minds - Psychotherapist Site Template">
                </a>
              </div>
              <div class="col- carousel_item">
                <a class="certificate_image popup_image" data-cursor-text="Scroll" href="assets/images/certificate/certificate_image_2-min.jpg">
                  <img src="assets/images/certificate/certificate_image_2-min.jpg" alt="Talking Minds - Psychotherapist Site Template">
                </a>
              </div>
              <div class="col- carousel_item">
                <a class="certificate_image popup_image" data-cursor-text="Scroll" href="assets/images/certificate/certificate_image_3-min.jpg">
                  <img src="assets/images/certificate/certificate_image_3-min.jpg" alt="Talking Minds - Psychotherapist Site Template">
                </a>
              </div>
              <div class="col- carousel_item">
                <a class="certificate_image popup_image" data-cursor-text="Scroll" href="assets/images/certificate/certificate_image_1-min.jpg">
                  <img src="assets/images/certificate/certificate_image_1-min.jpg" alt="Talking Minds - Psychotherapist Site Template">
                </a>
              </div>
              <div class="col- carousel_item">
                <a class="certificate_image popup_image" data-cursor-text="Scroll" href="assets/images/certificate/certificate_image_2-min.jpg">
                  <img src="assets/images/certificate/certificate_image_2-min.jpg" alt="Talking Minds - Psychotherapist Site Template">
                </a>
              </div>
              <div class="col- carousel_item">
                <a class="certificate_image popup_image" data-cursor-text="Scroll" href="assets/images/certificate/certificate_image_3-min.jpg">
                  <img src="assets/images/certificate/certificate_image_3-min.jpg" alt="Talking Minds - Psychotherapist Site Template">
                </a>
              </div>
            </div>
          </div>
        </section>
        <!-- Certificate Section - End
        ================================================== -->

        <!-- Work Process Section - Start
        ================================================== -->
        <section class="work_process_section section_space_lg">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6 order-lg-last">
                <div class="images_group_widget">
                  <ul class="unordered_list">
                    <li>
                      <img src="assets/images/about/about_image_6-min.png" alt="Talking Minds - Psychotherapist Site Template">
                      <img src="assets/images/about/about_image_7-min.png" alt="Talking Minds - Psychotherapist Site Template">
                    </li>
                    <li>
                      <img src="assets/images/about/about_image_8-min.png" alt="Talking Minds - Psychotherapist Site Template">
                      <img src="assets/images/about/about_image_9-min.png" alt="Talking Minds - Psychotherapist Site Template">
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="section_heading">
                  <h2 class="section_heading_text mb-0">
                    Stages of consultation with patients on mental health
                  </h2>
                </div>
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="work_process_item">
                      <div class="serial_number">01</div>
                      <h3 class="item_title">Request on the site</h3>
                      <p class="mb-0">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                      </p>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="work_process_item">
                      <div class="serial_number">02</div>
                      <h3 class="item_title">Timing</h3>
                      <p class="mb-0">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                      </p>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="work_process_item">
                      <div class="serial_number">03</div>
                      <h3 class="item_title">Conducting a session</h3>
                      <p class="mb-0">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                      </p>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="work_process_item">
                      <div class="serial_number">04</div>
                      <h3 class="item_title">Satisfied review</h3>
                      <p class="mb-0">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Work Process Section - End
        ================================================== -->

        <!-- Service Section - Start
        ================================================== -->
        <section class="service_section section_space_lg bg_primary_light">
          <div class="container">
            <div class="section_heading text-center">
              <h2 class="section_heading_text">What I'm Offer</h2>
              <p class="section_heading_description mb-0 ">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry
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
                    <a class="btn-link" href="service_details.html">
                      <span class="btn_text">More Info</span>
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
                    <h3 class="item_title">Couples Counseling</h3>
                    <p>
                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusant doloremqe laudantium.
                    </p>
                    <a class="btn-link" href="service_details.html">
                      <span class="btn_text">More Info</span>
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
                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusant doloremqe laudantium.
                    </p>
                    <a class="btn-link" href="service_details.html">
                      <span class="btn_text">More Info</span>
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
                    <h3 class="item_title">Anxiety Disorder</h3>
                    <p>
                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusant doloremqe laudantium.
                    </p>
                    <a class="btn-link" href="service_details.html">
                      <span class="btn_text">More Info</span>
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
                    <h3 class="item_title">Children Therapy</h3>
                    <p>
                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusant doloremqe laudantium.
                    </p>
                    <a class="btn-link" href="service_details.html">
                      <span class="btn_text">More Info</span>
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
                    <h3 class="item_title">Individual Therapy</h3>
                    <p>
                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusant doloremqe laudantium.
                    </p>
                    <a class="btn-link" href="service_details.html">
                      <span class="btn_text">More Info</span>
                      <span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="btn_wrap pb-0 text-center">
              <a class="btn btn-primary" href="service.html">
                <span class="btn_text" data-text="All Programs">
                  All Programs
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

        <!-- Gallery Section - Start
        ================================================== -->
        <section class="gallery_section section_space_lg pb-0">
          <div class="container">
            <div class="section_heading text-center">
              <h2 class="section_heading_text">Photos from our Classes</h2>
              <p class="section_heading_description mb-0">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry
              </p>
            </div>

            <div class="zoom-gallery row justify-content-center">
              <div class="col-lg-4 col-md-6 col-sm-6">
                <a class="gallery_item popup_image" href="assets/images/gallery/gallery_image_1-min.jpg">
                  <img src="assets/images/gallery/gallery_image_1-min.jpg" alt="Talking Minds - Psychotherapist Site Template">
                </a>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <a class="gallery_item popup_image" href="assets/images/gallery/gallery_image_2-min.jpg">
                  <img src="assets/images/gallery/gallery_image_2-min.jpg" alt="Talking Minds - Psychotherapist Site Template">
                </a>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <a class="gallery_item popup_image" href="assets/images/gallery/gallery_image_3-min.jpg">
                  <img src="assets/images/gallery/gallery_image_3-min.jpg" alt="Talking Minds - Psychotherapist Site Template">
                </a>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <a class="gallery_item popup_image" href="assets/images/gallery/gallery_image_4-min.jpg">
                  <img src="assets/images/gallery/gallery_image_4-min.jpg" alt="Talking Minds - Psychotherapist Site Template">
                </a>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <a class="gallery_item popup_image" href="assets/images/gallery/gallery_image_5-min.jpg">
                  <img src="assets/images/gallery/gallery_image_5-min.jpg" alt="Talking Minds - Psychotherapist Site Template">
                </a>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <a class="gallery_item popup_image" href="assets/images/gallery/gallery_image_6-min.jpg">
                  <img src="assets/images/gallery/gallery_image_6-min.jpg" alt="Talking Minds - Psychotherapist Site Template">
                </a>
              </div>
            </div>

            <div class="btn_wrap pb-0 text-center">
              <a class="btn btn-primary" href="gallery.html">
                <span class="btn_text" data-text="See More Photos">
                  See More Photos
                </span>
                <span class="btn_icon">
                  <i class="fa-solid fa-arrow-up-right"></i>
                </span>
              </a>
            </div>
          </div>
        </section>
        <!-- Gallery Section - End
        ================================================== -->

        <!-- Consultation Section - Start
        ================================================== -->
        <section class="consultation_section section_space_lg">
          <div class="container">
            <div class="consultation_form bg_primary_light decoration_wrapper">
              <div class="section_heading text-center">
                <h2 class="section_heading_text mb-0">
                  <span class="d-md-block">Get your first free</span> online consultation 
                </h2>
              </div>
              <div class="row justify-content-center">
                <div class="col-lg-7">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="input_name">Name</label>
                        <input id="input_name" class="form-control" type="text" name="name" placeholder="Your Name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="input_phone">Phone</label>
                        <input id="input_phone" class="form-control" type="tel" name="phone" placeholder="Mobile phone number">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="select_therapy">Section</label>
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
                        <label for="input_calendar">Phone</label>
                        <input id="input_calendar" class="form-control" type="date" name="date">
                      </div>
                    </div>
                  </div>
                  <div class="btn_wrap pb-0 text-center">
                    <button type="submit" class="btn btn-primary">
                      <span class="btn_text" data-text="Get A Consultation">
                      Obtenir Vote consultation
                      </span>
                      <span class="btn_icon">
                        <i class="fa-solid fa-arrow-up-right"></i>
                      </span>
                    </button>
                  </div>
                </div>
              </div>
              <div class="decoration_item shape_leaf_1">
                <img src="assets/images/shapes/shape_leaf_right_top.svg" alt="Shape Leaf - Talking Minds - Psychotherapist Site Template">
              </div>
              <div class="decoration_item shape_leaf_2">
                <img src="assets/images/shapes/shape_leaf_left_bottom.svg" alt="Shape Leaf - Talking Minds - Psychotherapist Site Template">
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