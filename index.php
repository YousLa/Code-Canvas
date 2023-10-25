<?php

session_start();

require_once 'views/templates/header.php';

require_once 'views/templates/nav.php';
var_dump($_SESSION['id']);
?>

<!-- HTML -->

<div class="style1">

    <h1>HTML</h1>

    <img src="" alt="">

    <p>HTML</p>
    <p>CSS</p>
    <p>JAVASCRIPT</p>
    <p>PHP</p>

    <div>
        <button>
            HTML
        </button>

        <button>
            CSS
        </button>
        <!-- Choix Style -->
        <div class="hidden-css">
            <button>style1</button>
            <button>style2</button>
        </div>

        <button>
            JAVASCRIPT
        </button>
        <!-- Choix Function -->
        <div class="hidden-js">
            <button>function1</button>
            <button>function2</button>
        </div>

        <button>
            PHP
        </button>
    </div>

    <!-- Formulaire d'inscription -->
    <div class="hidden-registration">

        <h1>Registration Form</h1>

        <form action="./controllers/session/signupController.php" method="POST">

            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo">

            <label for="password">Password</label>
            <input type="password" name="password" id="password">

            <button type="submit" name="register">Register</button>
        </form>

    </div>

    <div class="hidden-login">
        <h1>LOG IN</h1>

        <form action="./controllers/session/loginController.php" method="POST">

            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo">

            <label for="password">Password</label>
            <input type="password" name="password" id="password">

            <button type="submit" name="login">Se connecter</button>
        </form>
    </div>
</div>

<!-- A rajouter -->
<!-- Login coté view -->
<!-- Sign up coté view -->

<?php
// require_once 'controllers/router.php';

require_once 'views/templates/footer.php';
