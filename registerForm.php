<?php 
session_start(); 

if (isUserAuthorized()) {
    header('Location: index.php');
    die;
    }
?>

Register and login form<br><br><br>


Register:<br><br>
<form action="register.php" method="post">
    Login: <input type="text" name="login" value=""><br>
    Password: <input type="text" name="password" value=""><br>
    <input type="hiden" name="command" value="register">
    <input type="submit" value="register">
</form>

<br>
<br>
<br>
Auth:<br><br>
<form action="auth.php" method="post">
    Login: <input type="text" name="login" value=""><br>
    Password: <input type="text" name="password" value=""><br>
    <input type="submit" value="login">
</form>
