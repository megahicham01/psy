<?php
include('../config.php');

if(isset($_POST['modif'])){

    $lcondition = $_POST['condition'];

    $nom_nav = $_POST['navedit'];
    $refer = $_POST['referedit'];

    $modificaion =  "UPDATE `navbar_table` SET `nav` = '$nom_nav', `refer` = '$refer' WHERE `id` = $lcondition" ;
    $resultat = mysqli_query($connexion,$modificaion);

    if($resultat){
        header('location:index.php');
    }
} 
?>