<?php
include'connexionstock.php';
include'headerstock.php';

$anciennom = $_POST['anciennom'];
$ancienprixv = $_POST['ancienprixv'];
$ancienprixa = $_POST['ancienprixa'];
$anciennequantite = $_POST['anciennequantite'];

$nouveaunom = $_POST['nouveaunom'];
$nouveauprixv= $_POST['nouveauprixv'];
$nouveauprixa = $_POST['nouveauprixa'];
$nouvellequantite= $_POST['nouvellequantite'];


$insert = $connexion->prepare('UPDATE fournisseur SET nomproduit=$anciennom, prixvente= $ancienprixv ,prixachat=$ancienprixa, quantitestock= $anciennequantite where quantitestock='.$quantite);
$message = "les données ont bien été enregistrées ! ";

?>
<head>
    <title>produit</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>

<form method="POST" action="">
produit a remplacer<input type="text" class="form-control" placeholder="saisissez le nom du produit à remplacer "  id="anciennom" name="anciennom" value="<?php if(isset($anciennom)) { echo $anciennom; } ?>">
<br>
prix de vente a remplacer<input type="text" class="form-control" placeholder="saisissez le prix de vente du produit à remplacer" id="ancienprixv" name="ancienprixv" value="<?php if(isset($ancienprixv)) { echo $ancienprixv; } ?>">
<br>ancien prixa
<input type="text" class="form-control" placeholder="saisissez le prix d'achat du produit à remplacer" id="ancienprixa" name="ancienprixa" value="<?php if(isset($ancienprixa)) { echo $ancienprixa; } ?>">
<br>
quantite à remplacer<input type="text" class="form-control" placeholder="saisissez la quantité de ce produit à remplacer" id="anciennequantite" name="anciennequantite" value="<?php if(isset($anciennequantite)) { echo $anciennequantite; } ?>">
<br>

nouveau nom du produit
<input type="text" class="form-control" placeholder="saisissez le nom du produit choisi"  id="nouveaunom" name="nouveaunom" value="<?php if(isset($nouveaunom)) { echo $nouveaunom; } ?>">
<br>
nouveau prix de vente
<input type="text" class="form-control" placeholder="saisissez le prix de vente du produit choisi" id="nouveauprixv" name="nouveauprixv" value="<?php if(isset($nouveauprixv)) { echo $nouveauprixv; } ?>">
<br>
nouveau prix d'achat 
<input type="text" class="form-control" placeholder="saisissez le prix d'achat du produit choisi" id="nouveauprixva" name="nouveauprixa" value="<?php if(isset($nouveauprixa)) { echo $nouveauprixa; } ?>">
<br>
nouvelle quantité de produit 
<input type="text" class="form-control" placeholder="saisissez la quantité de ce produit choisi" id="nouvellequantite" name="nouvellequantite" value="<?php if(isset($nouvellequantite)) { echo $nouvellequantite; } ?>">
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