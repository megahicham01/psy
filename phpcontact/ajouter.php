<?php
include('../config.php');

if (isset($_POST['submit'])) {
    $n = $_POST['name'];
    $ph = $_POST['phone'];
    $msg = $_POST['comment'];
    

    $sql = "INSERT INTO `contact` (`nom`, `phone`,`message`) VALUES ('$n', '$ph', '$msg')";
    
    $result = mysqli_query($connexion, $sql);
    
    if ($result) { 
        header('location:../index.php'); 
    }
}
?>