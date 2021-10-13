<?php
require('../model/users.php');

function registerUser($login, $password, $mail, $phone) {
        validateData($login, $password, $mail, $phone);
        $sanitized_data = sanitizeData($login, $password, $mail, $phone);
        createUser($sanitized_data['login'], $sanitized_data['password'], $sanitized_data['mail'], $sanitized_data['phone']);
}

function validateData($login, $password, $mail, $phone) {
    if (empty($login) || empty($password) || empty($mail) || empty($phone)) {
        header('Location: index.php');
    }
}

function sanitizeData($login, $password, $mail, $phone) {
    $sanitized_login = htmlspecialchars($login);
    $sanitized_password = htmlspecialchars($password);
    $sanitized_mail = htmlspecialchars($mail);
    $sanitized_phone = htmlspecialchars($phone);

    return [
        'login' => $sanitized_login,
        'password' => $sanitized_password,
        'mail' => $sanitized_mail,
        'phone' => $sanitized_phone,
    ];
}
?>