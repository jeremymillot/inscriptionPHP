<?php
require('authentification.php');

if (isset($_POST['submit'], $_POST['login'], $_POST['password'])) {
    $sanitized_data = sanitizeDataAuth($_POST['login'], $_POST['password'])
    if (verifyUser($sanitized_data['$login'], $sanitized_data['$password'])) {
        header('Location: ../index.php');
    } else {
        header('Location: ../view/html/loginForm.php');
    }
}
?>