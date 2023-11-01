<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/resetCSS.css">
    <link rel="stylesheet" href="assets/css/style1.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/style3.css">
    <link rel="stylesheet" href="assets/css/animations.css">
    <script src="assets/js/script.js" defer></script>
    <script src="assets/js/script2.js" defer></script>
    <title>Code Canvas</title>

</head>

<!-- Style 1  -->

<?php if (isset($_SESSION['id'])) : ?>
    <body class="<?= $_SESSION['style'] ?>">
<?php else : ?>
    <body>
<?php endif; ?>
