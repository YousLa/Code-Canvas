<!-- BOUTON SE DECONNECTER -->

<?php

session_start();

unset($_SESSION['pseudo']);

session_destroy();

header('Location: ?page=home');

?>

<!-- LOG OUT - SE DECONNECTER -->