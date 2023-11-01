<!-- LOG IN - SE CONNECTER -->

<?php
session_start();




if (isset($_SESSION['pseudo']) && isset($_POST['classe'])) {

    $utilisateur = $_SESSION['pseudo'];
    $nomClasse = $_POST['classe'];

    // ! Chemin a partir du fucking fichier "index.php"
    include_once "../../models/db.php";



    $query = "
    UPDATE user SET classe = :classe WHERE pseudo = :pseudo
    ";

    $objet = $database->prepare($query);

    $options = array(
        ":classe" => $nomClasse,
        ":pseudo" => $utilisateur
    );

    if ($objet->execute($options)) {
        var_dump("gggg");
        // header("Location: ../../index.php");
        // TODO Créer un GET pour afficher un message lorsque la creation de compte à bien été effectué
    }
} else {
    var_dump("probleme");
}
