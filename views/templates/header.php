
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

<!-- 
<body <?php if (isset($_SESSION['id'])) : ?> class="style2" <?php endif; ?>> -->
    <body <?php if (isset($_SESSION['id'])) { echo 'class="' . $_SESSION['style'] . '"'; } ?>>
    <!-- Contenu de votre page ici 
</html>