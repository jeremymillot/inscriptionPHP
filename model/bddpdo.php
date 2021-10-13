<?php

function connection() {

    $host = 'localhost';
    $dbname = 'portfolio';
    $username = 'root';
    $password = '';
    
    /* Ici on créer une bdd en renseignant le nom de la bdd (dbname),
    le nom de l'utilisateur (username), son mot de passe (password) et le type de connection
    (ici local car : locahost). On affecte cette bdd dans la variable
    $conn, se qui fait une connexion à la bdd en renseignant à l'intérieur l'host,
    le nom de la bdd, l'user et le password.
    
    Ensuite on affiche un message si la connexion à la bdd est un succès, d'où le "try"
    Si la connexion est impossible, il renvoie un message et termine le script.
    */
    $database = null;

    try {
        $database = new PDO('mysql:host=localhost;dbname=portfolio', $username, $password);
    } catch (PDOException $e) {
        die("Impossible de se connecter à la base de données $dbname :". $e->getMessage());
    }

    return $database;
}

?>