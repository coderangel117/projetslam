<?php 
include 'connexionstock.php';
include 'headerstock.php';
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
        <li>
          <a href="selectproduit.php" target="_blank" rel="noopener noreferrer">liste des produits déjà enregistrés</a>
        </li>
        <li>
          <a href="insertproduit.php" target="_blank" rel="noopener noreferrer">inserer de nouveaux produits</a>
        </li>
        <li>
          <a href="updateproduit.php" target="_blank" rel="noopener noreferrer">modifer des produits</a>
        </li>
        <li>
          <a href="deleteproduit.php" target="_blank" rel="noopener noreferrer">supprimer des produits</a>
        </li>
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
          <a href="selectfournisseur.php" target="_blank" rel="noopener noreferrer">liste des fournisseurs déjà enregistrés</a>
        </li>
        <li>
          <a href="insertfournisseur.php" target="_blank" rel="noopener noreferrer">inserer de nouveaux fournisseurs</a>
        </li>
        <li>
          <a href="updatefournisseur.php" target="_blank" rel="noopener noreferrer">modifer des fournisseurs</a>
        </li>
        <li>
          <a href="deletefournisseur.php" target="_blank" rel="noopener noreferrer">supprimer des produits</a>
        </li>
			</ul>
		</li>
	</ul>
</nav>