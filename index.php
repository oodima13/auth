<?php

require_once 'init.php'; 

if (!isUserAuthorized()) {
header('Location: registerForm.php');
die;
}

echo 'User is authorized';