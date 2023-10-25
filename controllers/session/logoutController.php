<!-- BOUTON SE DECONNECTER -->
<?php


session_start();

// unset($_SESSION['pseudo']);
// unset($_SESSION['id']);

session_destroy();

header('Location: /index.php');

?>

<!-- LOG OUT - SE DECONNECTER -->