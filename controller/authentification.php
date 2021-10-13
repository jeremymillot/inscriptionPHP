<?php
require('../model/users.php');

function sanitizeDataAuth($login, $password) {
    $sanitized_login = htmlspecialchars($login);
    $sanitized_password = htmlspecialchars($password);

    return [
        'login' => $sanitized_login,
        'password' => $sanitized_password,
    ];
}

function verifyUser($login, $password) {
    $same_password = false;
    $user = getUser($login);
    var_dump($user);
    die;
    if (!empty($user)) {
        $same_password = password_verify($password, $user['mdp']);
    }

    session_start();
    return $same_password;
}
?>
