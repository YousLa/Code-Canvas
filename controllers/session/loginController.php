<!-- LOG IN - SE CONNECTER -->

<?php
session_start();

//var_dump($_POST);

if (isset($_POST['login'], $_POST['password'])) {

    if (empty($_POST['pseudo']) || empty($_POST['password'])) {

        $message = "<span>All fields are required</span>";
    } else {

        // Connexion à la base de données
        include_once "../../models/db.php";

      

        // Création de la requête
        $query = "SELECT * FROM user WHERE pseudo = :pseudo AND password = sha2(:password, 256)";

        $stmt = $database->prepare($query);

        $stmt->bindParam(":pseudo", $_POST['pseudo']);
        $stmt->bindParam(":password", $_POST['password']);


        if ($stmt->execute()) {
            // La méthode fetch(PDO::FETCH_ASSOC) permet d'organiser les données renvoyées en un tableau associatif.
            // Ici les données renvoyées sont l'email et le password
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            var_dump($user);

            // * Si user renvoie true cela signifie que l'email et le password sont correctes
            if ($user) {
                $_SESSION['id'] = $user['id'];
                $_SESSION['pseudo'] = $user['pseudo'];
                $_SESSION['style'] = $user['style'];
                $_SESSION['fonctionjs'] = $user['fonctionjs'];

                header("Location: ../../index.php");
            }
        }
    }
}
