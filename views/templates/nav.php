<header>
    <nav>
        <ul>
            <li><a href="?page=home">LOGO</a></li>
            <li><a href="?page=page2">❓</a></li>
            <!-- Si la variable session existe c'est que l'utilisateur est connecté et on affiche le bouton de déconnexion -->
            <?php if (isset($_SESSION['id'])) : ?>
                <li><a href="controllers/session/logoutController.php">Log out</a></li>
                <!-- Si la varibale session n'existe pas on affiche le bouton de connexion -->
            <?php else : ?>
                <li><a class="buttonLogin" href="controllers/session/loginController.php">Login</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>