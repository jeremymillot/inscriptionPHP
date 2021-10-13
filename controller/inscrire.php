<?php
require('inscription.php');

if (isset($_POST['submit'], $_POST['login'], $_POST['password'], $_POST['mail'], $_POST['phone'])) {
    registerUser($_POST['login'], $_POST['password'], $_POST['mail'], $_POST['phone']);
    header('Location: ../view/html/loginForm.php');
}

?>