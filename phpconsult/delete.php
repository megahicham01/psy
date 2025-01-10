<?php 
include('../config.php');

$msah = $_GET['ghanmasho'];

$delete = mysqli_query($connexion, "DELETE  FROM `getconsultation` WHERE id=$msah ");

header('location: index.php');

?>
