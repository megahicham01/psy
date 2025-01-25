<?php
include ('../config.php');


if(isset($_POST['sifat'])){
    $valeurnav = $_POST['nv'];
    $valeurrefer = $_POST['rfr'];


    $tadkhal="INSERT INTO `navbar_table` (`nav`,`refer`) VALUES ('$valeurnav','$valeurrefer')";


    $natija = mysqli_query($connexion,$tadkhal);

    if($natija){ 
        header('location:index.php'); 
    }
}

?>

