<?php
include'headerstock.php';
include'connexionstock.php';

if(isset($_POST['nomproduit'])){
    $nomproduit = $_POST['nomproduit'];
} 
if(isset($_POST['prixvente'])){
    $prixvente = $_POST['prixvente'];
}
if(isset($_POST['prixachat'])){
    $prixachat = $_POST['prixachat'];
}
if(isset($_POST['quantitestock'])){
    $quantitestock = $_POST['quantitestock'];
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<?php
$deleteproduit = $connexion->query("DELETE nomproduit, prixvente, prixachat, quantitestock FROM produits where nomproduit='.$nomproduit.'and prixvente=.'$prixvente and prixachat=.'$prixachat and quantitestock=.'$quantitestock");

var_dump($deleteproduit);
?>


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

<br>
    <?php
    include'footer.php';
?>