<?php
require_once 'element/header.php';
require_once 'connexion_bdd.php';

if(isset($_POST['nomproduit']) && isset($_POST['prixvente']) && isset($_POST['prixachat']) && isset($_POST['quantitestock'])){
    $nomproduit = $_POST['nomproduit'];
    $prixvente = $_POST['prixvente'];
    $prixachat = $_POST['prixachat'];
    $quantitestock = $_POST['quantitestock'];
}
?>
<?php
$deleteproduit = $connexion->query('DELETE nomproduit, prixvente, prixachat, quantitestock FROM produits where nomproduit=$nomproduitand prixvente=$prixvente and prixachat=$prixachat and quantitestock=$quantitestock');

var_dump($deleteproduit);
?>
<head>
    <title>
        supprimer produit
    </title>
</head>
<div class="collapse">
    <form method="POST" action="" > <!--- onsubmit="return confirmation()" -->
        <div class="titreform"> 
            nom du produit
        </div>
        <input type="text" class="form-control" placeholder="saisissez le nom du produit" id="nomproduit" name="nomproduit" value="<?php if(isset($nomproduit)) { echo $nomproduit; } ?>">
        <br>
        <div class="titreform">
            prix de vente
        </div>
        <input type="text" class="form-control" placeholder="saisissez le prix de vente" id="prixvente" name="prixvente" value="<?php if(isset($prixvente)) { echo $prixvente; } ?>">
        <br>
        
        <div class="titreform">
            prix d'achat
        </div>
        <input type="text" class="form-control" placeholder="saisissez le prix d'achat" id="prixachat" name="prixachat" value="<?php if(isset($prixachat)) { echo $prixachat; } ?>">
        <br>

        <div class="titreform">
            quantite en stock 
    </div>
        <input type="text" class="form-control" placeholder="saisissez la quantite" id="quantitestock" name="quantitestock" value="<?php if(isset($quantitestock)) { echo $quantitestock; } ?>">
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
</div>

<br>
    <?php
require_once 'element/footer.php'; ?>