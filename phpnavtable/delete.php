<?php 
include('../config.php');

$msah = $_GET['ghanmasho'];

$delete = mysqli_query($connexion, "DELETE  FROM `navbar_table` WHERE id=$msah ");

header('location: index.php');

?>
