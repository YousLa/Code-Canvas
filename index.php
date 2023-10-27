<?php

session_start();

require_once 'views/templates/header.php';

require_once 'views/templates/nav.php';

?>

<!-- =============== FOOTER =============== -->

<main>




    <div class="spirohtml">
        <img class="image" src="assets/img/spirohtml1.jpg" alt="">
        <img class="image" src="assets/img/spirohtml2.jpg" alt="">
    </div>
    <!-- page css static -->

    <div class="container">


        <div class="forme1"></div>
        <div class="spirovert">
            <img src="./assets/img/spiro vert- 1.svg" alt="">
        </div>
        <div class="forme2"></div>
        <div class="forme3"></div>
        <div class="forme4"></div>
        <div class="forme5"></div>
        <div class="forme6"></div>
        <div class="spirojaune">
            <img src="./assets/img/spirojaune.svg" alt="">
        </div>
        <div class="forme7"></div>
        <div class="forme8"></div>
        <div class="forme9"></div>
    </div>

    <!-- page CSS animations -->
    <div class="container-animation">
        <img class="imgSpiro1 vert" src="./assets/img/png/spirovertAn.png" alt="">
        <img class="imgSpiro2 orange" src="./assets/img/png/spiroorangeAn.png" alt="">
        <img class="imgSpiro3 bleu" src="./assets/img/png/spirobleuAn.png" alt="">
        <img class="imgSpiro4 rose" src="./assets/img/png/spiroroseAn.png" alt="">
    </div>
    <!-- page js -->
    <div class="js_animation hidden-element"> </div>    



    <!-- Textes -->
    <h1 class="titre">HTML</h1>
    <div class="text-container">
        <p>Salut, je suis HTML (Hypertext Markup Language) et je suis le langage de base d'une page web. Je m'occupe de la structure. Imagine-moi comme l'architecte qui dessine les plans pour une maison. Je dis où mettre les images, le texte et les liens. En gros, je construis la base solide de la page. Mon importance est primordial mais j'avoue que je suis un peu moche quand j'agis tout seul !</p>

    </div>

    <h1 class="titre">CSS</h1>
    <div class="text">
        <p>
            Coucou, je suis CSS (Cascading Style Sheets), le designer de la page web. Mon travail consiste à la rendre jolie. Je choisis les couleurs, les polices de caractères et la mise en page. Je m'assure que tout ait l'air attrayant. On peut dire que je suis comme le décorateur d'intérieur du site web. Je suis même capable de créer des petites animations.
        </p>
    </div>

    <h1 class="titre">JAVASCRIPT</h1>
    <div class="text">
        <p>
            Salut, je suis JavaScript, le magicien des pages web. Ma mission, c'est de rendre les pages interactives. Je peux créer des animations, comme faire apparaître des phrases de gauche et les faire disparaître à droite, ou faire apparaître et disparaître des éléments au clic. Je peux aussi concevoir des jeux, et même des formulaires où vous pouvez saisir des informations. Je suis un peu comme l'animateur de la fête !
        </p>
    </div>

    <div class="text">
        <h1 class="titre">PHP</h1>
        <p>
            Mesdames et messieurs, je suis PHP, le chef en coulisses du site web. Je m'occupe de tout ce qui se passe en arrière-plan. Je gère le formulaire, je communique avec une base de données et je garantis que vous puissiez sauvegarder votre version préférée de ce site. Vous ne me voyez pas souvent, c'est vrai, mais je m'assure que tout fonctionne correctement.
        </p>
    </div>

    <div class="registre hidden-element">
        <section class="container">
            <div class="login-container">
                <div class="circle circle-one"></div>
                <div class="form-container">

                    <h1 class="opacity">Inscription</h1>
                    <form action="./controllers/session/signupController.php" method="POST">
                        <label for="pseudo">Pseudo</label>
                        <input type="text" name="pseudo" id="pseudo" />
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="PASSWORD" />
                        <button class="submitRegitre opacity">S'inscrire</button>
                    </form>
                </div>
                <!-- <div class="circle circle-two"></div> -->
            </div>
            <div class="theme-btn-container"></div>
        </section>
    </div>









    <!-- formulaire de login  -->


    <div class="formLogin hidden-element">
        <section class="container loginSection">
            <div class="login-container">
                <div class="circle circle-one"></div>
                <div class="form-container">

                    <h1 class="opacity">LOGIN</h1>
                    <form action="./controllers/session/loginController.php" method="POST">

                        <input type="text" name="pseudo" id="pseudo" placeholder="USERNAME" />
                        <input type="password" name="password" id="password" placeholder="PASSWORD" />
                        <button class="submitRegitre opacity">Connexion</button>
                    </form>


                    <div class="register-forget opacity">Pas encore inscrit ?
                        <a id="registration" href="">S'inscrire.</a>

                    </div>
                </div>
                <!-- <div class="circle circle-two"></div> -->
            </div>
            <div class="theme-btn-container"></div>
        </section>
    </div>

</main>

<!-- =============== FOOTER =============== -->

<footer>
    <div class="menuFooter">
        <button class="htmlButton language-button">
            HTML
        </button>

        <button class="cssButton language-button">
            CSS
        </button>
        <!-- Choix Style -->
        <div class="choice_css hidden-element">
            <button class="choiceStatique language-button">
                <h2>Statique</h2>
            </button>
            <button class="choiceDynamique language-button">
                Dynamique
            </button>
        </div>

        <button class="jsButton language-button">
            JAVASCRIPT
        </button>
        <!-- Choix Function -->
        <!-- <div class="">
            <button>function1</button>
            <button>function2</button>
        </div> -->

        <button class="phpButton language-button">
            PHP
        </button>
    </div>
</footer>

<?php
// require_once 'controllers/router.php';

require_once 'views/templates/footer.php';
