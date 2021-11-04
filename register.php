<?php 
session_start(); 

if (isUserAuthorized()) {
    header('Location: index.php');
    die;
    }

    var_dump($_POST);
?>

