<?php
require_once 'connexion_bdd.php';
require_once 'element/header.php';
?>

<head>
    <title>
        choix action
    </title>
</head>
<nav>
	<ul>
		<li class="deroulant">
            <a href="#">actions sur les produits &ensp;</a>
	  		<ul class="sous">
                <li> <a href="selectproduit.php" target="blank" >liste des produits déjà enregistrés</a> </li>
                <li> <a href="insertproduit.php" target="blank" >inserer de nouveaux produits</a> </li>
                <li> <a href="updateproduit.php" target="blank" >modifer des produits</a> </li>
                <li> <a href="deleteproduit.php" target="blank" >supprimer des produits</a></li>
            </ul>
		</li>
        <li class="deroulant">
            <a href="#">actions sur les clients &ensp;</a>
            <ul class="sous">
                <li>
                  <a href="selectclient.php" target="_blank" rel="noopener noreferrer">liste des clients déjà enregistrés</a>
                </li>
                <li>
                  <a href="insertclient.php" target="_blank" rel="noopener noreferrer">inserer de nouveaux clients</a>
                </li>
                <li>
                  <a href="updateclient.php" target="_blank" rel="noopener noreferrer">modifer des clients</a>
                </li>
                <li>
                  <a href="deleteclient.php" target="_blank" rel="noopener noreferrer">supprimer des clients</a>
                </li>
            </ul>
        </li>
        <li class="deroulant">
            <a href="#">actions sur les fournisseurs &ensp;</a>
            <ul class="sous">
                <li>
                  <a href="selectfournisseur.php" target="_blank" >liste des fournisseurs déjà enregistrés</a>
                </li>
                <li>
                  <a href="insertfournisseur.php" target="_blank" >inserer de nouveaux fournisseurs</a>
                </li>
                <li>
                  <a href="updatefournisseur.php" target="_blank" >modifer des fournisseurs</a>
                </li>
                <li>
                  <a href="deletefournisseur.php" target="_blank" >supprimer des produits</a>
                </li>
            </ul>
        </li>
	</ul>
</nav>
<h1>
Bienvenue sur le site internet" A LA BONNE GESTION" si vous vous trouvez sur cette page, c'est que vous êtes connecté
</h1>

<?php
require_once 'element/footer.php';
?>