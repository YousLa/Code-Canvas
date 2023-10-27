<?php

session_start();

require_once 'views/templates/header.php';

require_once 'views/templates/nav.php';

?>

<!-- html -->
<html>
    <body class='style1 app' >
        <div class='about'>
            <p class='texte'>Voici un site qui va vous permettre de comprendre ce dont on a besoin pour construire un site et quelle est la fonction de chaque langage.
                L'HTML, le CSS, Javascript et PHP. 
                <br/>Vous pouvez créer un compte et sauvegarder la page qui vous plait pour qu'elle s'affiche automatiquement lors de votre prochain passage sur notre site. 
                <br/>Ce site a été réalisé en 3 jours lors de l'Hackathon 2023 d'Interface3 à Bruxelles. Merci aux coachs!
                <br/>Un chouette challenge de travail de groupe et de mise en pratique.</p>
                <p class='texte'>Yousra (WEB12), Hanane, Elena et Laurence (WAD23).</p>
                
                <a href="index.php"><button class='language-button retour'>
                    retour
                </button></a>
            </div>
        </body>
</html>