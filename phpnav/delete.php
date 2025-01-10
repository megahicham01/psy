<?php 
include('../config.php');

$msah = $_GET['ghanmasho'];

$delete = mysqli_query($connexion, "DELETE  FROM `navbar` WHERE id=$msah ");

header('location: index.php');

?>
