<?php
include'connexionstock.php';
include'headerstock.php';

$nomproduit = $_POST['nomproduit'];
$prixvente = $_POST['prixvente'];
$prixachat = $_POST['prixachat'];
$quantite = $_POST['quantite'];



if(!empty($_POST['nomproduit'])AND !empty($_POST['prixvente']) AND !empty($_POST['prixvente'])) {
    $insert = $connexion->prepare("INSERT INTO produits (nomproduit, prixvente, prixachat, quantit?stock) VALUES(?, ?, ?)");
    $insert->execute(array($nomproduit, $prixachat, $prixvente,$quantite));
    $message = "les données ont bien été enregistrées ! ";
}
else {$message = "Tous les champs doivent être complétés !";}

?>
<head>
    <title>produit</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>

<form method="POST" acttion="">
nomproduit
<input type="text" class="form-control" placeholder="saisissez le nom du produit"  id="nomproduit" name="nomproduit" value="<?php if(isset($nomproduit)) { echo $nomproduit; } ?>">
<br>
prix vente
<input type="text" class="form-control" placeholder="saisissez le prix de vente du produit" id="prixvente" name="prixvente" value="<?php if(isset($prixvente)) { echo $prixvente; } ?>">
<br>prixachat
<input type="text" class="form-control" placeholder="saisissez le prix d'achat du produit" id="prixachat" name="prixachat" value="<?php if(isset($prixachat)) { echo $prixachat; } ?>">
<br>
quantité de produit 
<input type="text" class="form-control" placeholder="saisissez la quantité de ce produit" id="quantite" name="quantite" value="<?php if(isset($quantite)) { echo $quantite; } ?>">
<br>
<button type="submit" class="btn btn-primary">Submit</button>
<?php
if(isset($message)){
    echo($message);
}
?>
</form>

<?php
include 'footer.php';
?>