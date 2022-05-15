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
                        <li><a href="../connexionutilisateur.php">se connecter</a></li>
                    </ul>
                    <?php
                    if (isset($_SESSION) && !empty($_SESSION)) {?>
                        <li><a href="../accueilstocks.php"> Menu principal de l'application</a></li>
                <?php } ?>
                </li>
            </ul>
        </nav>
    </div>
</header>