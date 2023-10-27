<?php
// UPDATE CHOSEN STYLE

session_start();

if (isset($_SESSION['id']) && isset($_POST['style'])) {
    // Connect to the database
    include_once "../../models/db.php";

    // Get the user's ID from the session
    $userId = $_SESSION['id'];

    // Get the selected style from the POST request
    $selectedStyle = $_POST['style'];

    // Update the user's style in the database
    $query = "UPDATE User SET style = :style WHERE id = :userId";
    $stmt = $database->prepare($query);
    $stmt->bindParam(":style", $selectedStyle);
    $stmt->bindParam(":userId", $userId);

    if ($stmt->execute()) {
        // Style updated successfully
    } else {
        echo("Sorry, something went wrong...");
    }
}
