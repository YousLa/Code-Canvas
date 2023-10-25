<!-- SIGN UP - INSCRIPTION -->
<?php
/*
# Lancement de la session
session_start();

if (isset($_POST['register'], $_POST['pseudo'], $_POST['email'], $_POST['birthdate'], $_POST['password']) && !empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['birthdate']) && !empty($_POST['password'])) {

    $pseudo = trim($_POST['pseudo']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $birthdate = trim($_POST['birthdate']);

    // ! Chemin a partir du fucking fichier "index.php"
    include_once "./template/connectDB.php";

    $query = "
    INSERT INTO customer
    VALUES (NULL, :pseudo, :email, sha2(:password, 256), :birthdate, DEFAULT, DEFAULT)
    ";

    $objet = $database->prepare($query);

    $options = array(
        ":pseudo" => $pseudo,
        ":email" => $email,
        ":password" => $password,
        ":birthdate" => $birthdate
    );

    if ($objet->execute($options)) {

        header("Location: ./index.php?page=login&successRegister");
        // TODO Créer un GET pour afficher un message lorsque la creation de compte à bien été effectué
    }
} else if (isset($_POST['register'])) {
    $error_message = "<p class='alert' > Veuillez complèter tous les champs.</p>";
}
