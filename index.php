<?php

session_start(); 

if (!isUserAuthorized()) {
header('Location: registerForm.php');
die;
}

