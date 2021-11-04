<?php
function isUserAuthorized() {

    return empty($_SESSION['user_id']);
}