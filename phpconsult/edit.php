<?php
include('../config.php');

if(isset($_POST['modification'])){

    $lcondition = $_POST['condition'];

    $nvname = $_POST['namedit'];
    $nvphone = $_POST['phonedit'];
    $nvdate = $_POST['datedit'];
    $nvthyrapy = $_POST['terapyedit'];

    $modificaion =  "UPDATE `getconsultation` SET `name` = '$nvname', `phone` = '$nvphone' , `date` = '$nvdate', `therapy` = '$nvthyrapy' WHERE `id` = $lcondition" ;
    $resultat = mysqli_query($connexion,$modificaion);

    if($resultat){
        header('location: index.php');
    }
    else{
        echo('Erreur Connection');
        
    }
} 
?>

