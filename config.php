<?php

$host = 'localhost';
$user = 'root';
$pass = ''; 
$data_base = 'psy';

$connexion = mysqli_connect($host, $user, $pass, $data_base);    

if (!$connexion) {
    echo('Erreur Connection');  
}