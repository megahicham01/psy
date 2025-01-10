<?php
include('../config.php');

if (isset($_POST['submit'])) {
    $n = $_POST['name1'];
    $ph = $_POST['phone1'];
    $d = $_POST['date1'];
    $therapy = $_POST['therapy1'];

    $sql = "INSERT INTO `getconsultation` (`name`, `phone`,`date`,`therapy`) VALUES ('$n', '$ph', '$d', '$therapy')";
    
    $result = mysqli_query($connexion, $sql);
    
    if ($result) { 
        header('location:../index.php'); 
    }
}
?>