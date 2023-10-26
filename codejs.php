<?php

session_start();

require_once 'views/templates/header.php';

require_once 'views/templates/nav.php';

?>



<p class="style3 ml12">Salut, je suis JavaScript, le magicien des pages web. Ma mission, c'est de rendre les pages interactives. Je peux créer des animations, comme faire apparaître des phrases de gauche et les faire disparaître à droite, ou faire apparaître et disparaître des éléments au clic. Je peux aussi concevoir des jeux, et même des formulaires où vous pouvez saisir des informations. Je suis un peu comme l'animateur de la fête !</p>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

<!-- =============== FOOTER =============== -->

<?php
// require_once 'controllers/router.php';

require_once 'views/templates/footer.php';
?>