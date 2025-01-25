<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>edit navbar</title>
    <link rel="shortcut icon" href="../assets/images/icons/iconnavbar.png" type="image/x-png">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-dark">
    <div class="container">
        
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

            <h3 class="text-white d-flex justify-content-center text-decoration-underline mb-5">Modification du tableau des pages d'admin</h3>

    <hr>
        <form action="editnav.php" method="post">
            <div class="row">
            <?php
                include("../config.php");
                $mod = $_GET ['ed'];
                $select = "SELECT * FROM `navbar_table` WHERE id =$mod ";
                $resultat = mysqli_query($connexion,$select);
                while($row = mysqli_fetch_array($resultat)){

            ?>
            <input type="hidden" class="form-control" name="condition" value="<?php echo $row['id'] ?>">
                <div class="form-group col-4">
                    <label for="" class="form-label fw-bold text-primary">Nom Produit :</label>
                    <input type="text" class="form-control" name="navedit" value="<?php echo $row['nav'] ?>">
                </div>
                <div class="form-group col-4">
                    <label for="" class="form-label fw-bold text-primary">Reference :</label>
                    <input type="text" class="form-control" name="referedit"  value="<?php echo $row['refer'] ?>">
                </div>
            <?php
            }
            ?>
            </div>
            <div class="form-group my-4">
                <input type="submit" value="Modifier" class="btn btn-warning" name="modif">
                <a href="index.php" type="button" class="btn btn-danger" >Annuler</a>
            </div>

        </form>


        
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>