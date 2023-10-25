<!-- SIGN UP - INSCRIPTION -->
<?php

# Lancement de la session
session_start();

if (isset($_POST['register'], $_POST['pseudo'], $_POST['password']) && !empty($_POST['pseudo']) && !empty($_POST['password'])) {

    $pseudo = htmlspecialchars(trim($_POST['pseudo']));
    $password = htmlspecialchars(trim($_POST['password']));

    // ! Chemin a partir du fucking fichier "index.php"
    include_once "../../models/db.php";

    $database = getConnection();

    $query = "
    INSERT INTO user
    VALUES (NULL, :pseudo, sha2(:password, 256), NULL, NULL)
    ";

    $objet = $database->prepare($query);

    $options = array(
        ":pseudo" => $pseudo,
        ":password" => $password
    );

    if ($objet->execute($options)) {

        header("Location: ../../index.php");
        // TODO Créer un GET pour afficher un message lorsque la creation de compte à bien été effectué
    }
} else if (isset($_POST['register'])) {
    $error_message = "<p class='alert' > Veuillez complèter tous les champs.</p>";
}
