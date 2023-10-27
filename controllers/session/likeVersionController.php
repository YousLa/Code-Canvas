<!-- LOG IN - SE CONNECTER -->

<?php
session_start();

var_dump($_SESSION['pseudo']);
var_dump($_POST['classNameBody']);

if (isset($_SESSION['pseudo']) && isset($_POST['classNameBody'])) {

    $utilisateur = $_SESSION['pseudo'];
    $nomClasse = $_POST['classNameBody'];

    // ! Chemin a partir du fucking fichier "index.php"
    include_once "../../models/db.php";



    $query = "
    UPDATE user SET style = :classe WHERE pseudo = :pseudo
    ";

    $objet = $database->prepare($query);

    $options = array(
        ":classe" => $nomClasse,
        ":pseudo" => $utilisateur
    );

    if ($objet->execute($options)) {
        $_SESSION['style'] = $user['style'];
      
        header("Location: ../../index.php");
        // header("Location: ../../index.php");
        // TODO Créer un GET pour afficher un message lorsque la creation de compte à bien été effectué
    }
} else {
    header("Location: ../../index.php");
    var_dump("probleme");
}
