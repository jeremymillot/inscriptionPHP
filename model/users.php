<?php
require('bddpdo.php');

function createUser($login, $password, $mail, $phone) {
    $database = connection();

    $query = "INSERT INTO utilisateur VALUES (?, ?, ?, ?, 0000-00-00)";
    $statement = $database->prepare($query);
    $statement->execute([$login, password_hash($password, PASSWORD_DEFAULT), $mail, $phone]);
}

function getUser($login) {
    $database = connection();

    $query = 'SELECT * FROM utilisateur WHERE login = ?';
    $statement = $database->prepare($query);
    $statement->execute([$login]);
    return $statement->fetch();
}

?>