<?php


require_once 'init.php';

if (!isUserAuthorized()) {

    header('Location: registerForm.php');
    die;
}

echo 'User is authorized<br>';

echo 'You ID is = ' . $_SESSION['user_id'];

if (!empty($_GET['authorized'])) {
    echo 'You just successfully authorized';
}

