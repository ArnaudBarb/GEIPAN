<header>
    <nav role="navigation">
        <ul>
            <li><a href="index.php?page=home">Accueil</a></li>
            <li><a href="index.php?page=inscription">Inscription</a></li>
            <li><a href="index.php?page=login">Se connecter</a></li>
            <?php
            if(isset($_SESSION['login']) && $_SESSION['login'] === true) 
            {
                echo "<li><a href=\"index.php?page=logout\">Logout</a></li>";
            }
            else 
            {
                echo "<li><a href=\"index.php?page=login\">Login</a></li>";
                echo "<li><a href=\"index.php?page=inscription\">Inscription</a></li>";
            }
            ?>
            <li><a href="index.php?page=observations">renseigner une observation</a></li>
        </ul>
    </nav>
</header>