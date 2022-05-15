<?php
session_start();
require_once __DIR__ .'/../functions/sql.php';
require_once __DIR__ .'/../functions/security.php';
?>
<head>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/confirmation.js"></script>

</head>
<header class="flex-container">
    <div class="flex-items__title">
        <h1>A LA BONNE GESTION <h1>
    </div>
    <div class="flex-items__parts">
        <nav>
            <ul>
                <li class="deroulant">menu
                    <ul class="sous">
                        <li><a href="../../index.php">revenir à l'accueil</a></li>
                        <li><a href="../login.php">se connecter</a></li>
                    </ul>
                    <?php
                    if (isset($_SESSION) && !empty($_SESSION)) {?>
                        <li><a href="../menu.php"> Menu principal de l'application</a></li>
                <?php } ?>
                </li>
            </ul>
        </nav>
    </div>
</header>