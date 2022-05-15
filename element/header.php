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
</header>
<div class="flex-items__parts">
    <nav>
        <ul>
            <li class="deroulant">menu
                <ul class="sous">
                    <?php
                    /**
                     * Fait varier l'affichage en fonction du rôle de l'utilisateur et / ou de l'existence de la session
                     * Non connecté, seul l'accueil et le lien vers la page de connexion s'affiche
                     *Si administrateur, le menu sera différent que celui du simple utilisateur
                     * Si simple utilisateur il aura accès à un menu spécifique pour limiter les actions possibles
                     *les liens de déconnexion et de retour vers l'index restent affichés pour tout le monde
                     */
                    if (isset($_SESSION) && !empty($_SESSION)) {
                        ?>
                        <li><a href="../index.php">revenir à l'accueil</a></li>
                        <li><a href="../menu.php">Aller au menu </a></li>
                        <li><a href="../login.php">se connecter</a></li>
                        <?php
                    } else {?>
                        <li><a href="../index.php">revenir à l'accueil</a></li>
                        <li><a href="../menu.php">Aller au menu </a></li>
                        <li><a href="../logout.php"> se déconnecter</a></li>
                    <?php  } ?>
                </ul>
            </li>
            <li class="deroulant">
                <a href="#">actions sur les produits &ensp;</a>
                <ul class="sous">
                    <li> <a href="../produits/index.php" >liste des produits déjà enregistrés</a> </li>
                    <li> <a href="../produits/AddProduit.php"  >inserer de nouveaux produits</a> </li>
                    <li> <a href="../produits/ChangeProduit.php"  >modifer des produits</a> </li>
                    <li> <a href="../produits/DeleteProduit.php" >supprimer des produits</a></li>
                </ul>
            </li>
            <li class="deroulant">
                <a href="#">actions sur les clients &ensp;</a>
                <ul class="sous">
                    <li>
                        <a href="../clients/index.php" >liste des clients déjà enregistrés</a>
                    </li>
                    <li>
                        <a href="../clients/Addclient.php" >inserer de nouveaux clients</a>
                    </li>
                    <li>
                        <a href="../clients/ChangeClient.php" > modifer des clients</a>
                    </li>
                    <li>
                        <a href="../clients/DeleteClient.php" >supprimer des clients</a>
                    </li>
                </ul>
            </li>
            <li class="deroulant">
                <a href="#">actions sur les fournisseurs &ensp;</a>
                <ul class="sous">
                    <li>
                        <a href="../fournisseurs/index.php" >liste des fournisseurs déjà enregistrés</a>
                    </li>
                    <li>
                        <a href="../fournisseurs/AddFournisseur.php" >inserer de nouveaux fournisseurs</a>
                    </li>
                    <li>
                        <a href="../fournisseurs/ChangeFournisseur.php" >modifer des fournisseurs</a>
                    </li>
                    <li>
                        <a href="../fournisseurs/DeleteFournisseur.php" >supprimer des produits</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
