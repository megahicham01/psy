<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>edit consultation</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="../assets/images/icons/iconconsultation.png" type="image/x-png">
</head>
  <body class="bg-dark">
            
            <nav class="container main_menu navbar navbar-expand-lg bg-white my-4">
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
                    <a class="nav-link navbar-text " aria-current="page" href="http://localhost/psy/<?php echo $starjdid['refer']?>"><?php echo $starjdid['nav']?></a>
                    </li>
                    <?php
                    }
                    ?>
                  </ul>
                </div>
            </nav>         
    <h3 class="text-white d-flex justify-content-center text-decoration-underline mb-5">Modification du Tableau du consultation</h3>
    <hr>
    <div class="container">
        <form action="edit.php" method="post">
            <div class="row">
            <?php
                include("../config.php");
                $mod = $_GET ['ed'];
                $select = "SELECT * FROM `getconsultation` WHERE id =$mod ";
                $resultat = mysqli_query($connexion,$select);
                while($row = mysqli_fetch_array($resultat)){

            ?>
            <input type="hidden" class="form-control" name="condition" value="<?php echo $row['id'] ?>">
                <div class="form-group col-6">
                    <label for="" class="form-label fw-bold text-primary">Nom :</label>
                    <input type="text" class="form-control" name="namedit" value="<?php echo $row['name'] ?>">
                </div>
                <div class="form-group col-6">
                    <label for="" class="form-label fw-bold text-primary">Téléphone :</label>
                    <input type="text" class="form-control" name="phonedit"  value="<?php echo $row['phone'] ?>">
                </div>
                <div class="form-group col-6">
                    <label for="" class="form-label fw-bold text-primary">Date de Consultation :</label>
                    <input type="date" class="form-control" name="datedit"  value="<?php echo $row['date'] ?>">
                </div>
                <div class="form-group col-6">
                    <label for="" class="form-label fw-bold text-primary">Section de Thérapie :</label>
                    <select class="form-select"  name="terapyedit"  >
                            <option selected><?php echo $row['therapy'] ?></option>
                            <option value="Traitement de la dépression">Traitement de la dépression</option>
                            <option value="Thérapie de couples">Thérapie de couples</option>
                            <option value="Relationships">Relationships</option>
                            <option value="Trouble anxieux">Trouble anxieux</option>
                            <option value="Thérapie des enfants">Thérapie des enfants</option>
                            <option value="Thérapie individuelle">Thérapie individuelle</option>
                    </select>
                </div>
                

            <?php
            }
            ?>
            </div>
            <div class="form-group my-4">
                <input type="submit" value="Modifier" class="btn btn-warning" name="modification">
                <a href="index.php" type="button" class="btn btn-danger" >Annuler</a>
            </div>

        </form>

        
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>