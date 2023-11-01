<header>
    <div>
        <a class="logo" href="../../index.php">Code Canvas</a>
    </div>

    <nav>
        <ul>
            <li><a href="about.php"><img class="info" src="assets/img/icons/question-mark-question-svgrepo-com.svg" alt=""></a></li>

            <!-- Si la variable session existe c'est que l'utilisateur est connecté et on affiche le bouton de déconnexion -->
            <?php if (isset($_SESSION['id'])) : ?>
                <li><button class="buttonLogout language-button"><a href="controllers/session/logoutController.php">Log out</a></button></li>
                <!-- Si la varibale session n'existe pas on affiche le bouton de connexion -->
                <li><button class="boutonEnregistrer language-button">Enregistrer</a></button></li>
            <?php else : ?>
                <li><button class="buttonLogin language-button"><a href="controllers/session/loginController.php">Login</a></button></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>

