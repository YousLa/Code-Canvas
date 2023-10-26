<?php

session_start();

require_once 'views/templates/header.php';

require_once 'views/templates/nav.php';

?>

<!-- =============== FOOTER =============== -->

<main>


    <h1 class="titre">HTML</h1>

    <img class="image" src="assets/img/spirohtml.svg" alt="">

    <p src="htmlText">HTML</p>
    <p>Salut, je suis HTML (Hypertext Markup Language) et je suis le langage de base d'une page web. Je m'occupe de la structure. Imagine-moi comme l'architecte qui dessine les plans pour une maison. Je dis où mettre les images, le texte et les liens. En gros, je construis la base solide de la page. Mon importance est primordial mais j'avoue que je suis un peu moche quand j'agis tout seul !</p>
    <p src="cssText">CSS</p>
    <p src="jsText">JAVASCRIPT</p>
    <p src="phpText">PHP</p>



    <!-- Formulaire d'inscription -->
    <div class="registre hidden-element">

        <h1>Registration Form</h1>

        <form action="./controllers/session/signupController.php" method="POST">

            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo">

            <label for="password">Password</label>
            <input type="password" name="password" id="password">

            <button type="submit" name="register">Register</button>
        </form>

    </div>


     <!-- formulaire de login  -->



     <section class="hidden-element container loginSection">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">

                <h1 class="opacity">LOGIN</h1>
                <form action="./controllers/session/signupController.php" method="POST">

                    <input type="text" name="pseudo" id="pseudo" placeholder="USERNAME" />
                    <input type="password" name="password" id="password" placeholder="PASSWORD" />
                    <button class="opacity">SUBMIT</button>
                </form>


                <div class="register-forget opacity">
                    <a id="registration" href="">REGISTER</a>

                </div>
            </div>
            <!-- <div class="circle circle-two"></div> -->
        </div>
        <div class="theme-btn-container"></div>
    </section>


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
            <button class="choiceStatique">style1</button>
            <button class="choiceDynamique">style2</button>
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
