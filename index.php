<?php

session_start();

require_once 'views/templates/header.php';

require_once 'views/templates/nav.php';

?>

<!-- =============== FOOTER =============== -->

<main>

    <button class="buttonLogin">login</button>
    <h1 class="titre">HTML</h1>

    <img class="image" src="assets/img/spirohtml.svg" alt="">

    <p src="htmlText">HTML</p>
    <p src="cssText">CSS</p>
    <p src="jsText">JAVASCRIPT</p>
    <p src="phpText">PHP</p>



    <!-- Formulaire d'inscription -->
    <div class="registre hidden-registration">

        <h1>Registration Form</h1>

        <form action="./controllers/session/signupController.php" method="POST">

            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo">

            <label for="password">Password</label>
            <input type="password" name="password" id="password">

            <button type="submit" name="register">Register</button>
        </form>

    </div>

    <div class="login hidden-login">
        <h1>LOG IN</h1>

        <form action="./controllers/session/loginController.php" method="POST">

            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo">

            <label for="password">Password</label>
            <input type="password" name="password" id="password">

            <button type="submit" name="login">Se connecter</button>
        </form>
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
        <!-- <div class="choice_css hidden-css">
            <button>style1</button>
            <button>style2</button>
        </div> -->

        <button class="jsButton language-button">
            JAVASCRIPT
        </button>
        <!-- Choix Function -->
        <!-- <div class="hidden-js">
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
