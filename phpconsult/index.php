<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin_consultation </title>
    <link rel="shortcut icon" href="../assets/images/icons/iconconsultation.png" type="image/x-png">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class="bg-dark">
            <nav class="main_menu navbar navbar-expand-lg bg-white container my-4">
                <div class="main_menu_inner collapse navbar-collapse justify-content-center" id="main_menu_dropdown">
                  <ul class="main_menu_list unordered_list navbar-nav">
                    <li class="anav nav-item fw-bold">
                      <a class="nav-link navbar-text bg-secondary" aria-current="page" href="http://localhost/psy/index.php">page index</a>
                    </li>
                    <?php
                      include ('../config.php');
                      $jibdata = "SELECT * FROM `navbar_table` ";
                      $dirlordre = mysqli_query($connexion,$jibdata); 
                      while($starjdid = mysqli_fetch_array($dirlordre)){
                    ?>
                    <li class="anav nav-item fw-bold">
                      <a class="nav-link navbar-text" aria-current="page" href="http://localhost/psy/<?php echo $starjdid['refer']?>"><?php echo $starjdid['nav']?></a>
                    </li>
                    <?php
                    }
                    ?>
                  </ul>
                </div>
            </nav>     
    <div class="container my-4">
        <h3 class="text-white d-flex justify-content-center text-decoration-underline mb-5">Tableau du consultation</h3>


        <table class="table table-striped table-light">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nom</th>
                    <th>Téléphone</th>
                    <th>Date</th>
                    <th>thérapie</th>
                    <th>Action1</th>
                    <th>Action2</th>

                </tr>
            </thead>
               
            <tbody> 
                <?php
                    include ('../config.php');
                    $jibdata = "SELECT * FROM `getconsultation` ";
                    $dirlordre = mysqli_query($connexion,$jibdata); 
                    while($starjdid = mysqli_fetch_array($dirlordre)){
                ?>
                <tr>
                    <td><?php echo $starjdid['id']?></td>
                    <td><?php echo $starjdid['name']?></td>
                    <td><?php echo $starjdid['phone']?></td>
                    <td><?php echo $starjdid['date']?></td>
                    <td><?php echo $starjdid['therapy']?></td>
                    <td><a href="delete.php?ghanmasho=<?php echo $starjdid['id']?>"  class="btn btn-danger col-10">Supprimer</a></td>
                    <td><a href="modification.php?ed=<?php echo $starjdid['id']?>"  class="btn btn-warning col-10">Modifie</a></td>

                </tr>
            
                <?php
                }
                ?>
            </tbody>


        </table>
      

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>


