<div class="col-lg-6 d-flex justify-content-between">
              <?php
                    include ('config.php');
                    $jibdata = "SELECT * FROM `navbar` ";
                    $dirlordre = mysqli_query($connexion,$jibdata); 
                    while($starjdid = mysqli_fetch_array($dirlordre)){
                ?>
              <nav class="main_menu navbar navbar-expand-lg">
                <div class="main_menu_inner collapse navbar-collapse justify-content-center" id="main_menu_dropdown">
                  <ul class="main_menu_list unordered_list">
                    <li class="anav">
                      <a class="nav-link navbar-text" aria-current="page" href="<?php echo $starjdid['refer']?>"><?php echo $starjdid['nav']?></a>
                    </li>
                  </ul>
                </div>
              </nav>
             <?php
                }
                ?>
            </div>