<?php
include'connexionstock.php';
include'headerstock.php';
if(isset($_POST['anciennom']) && isset($_POST['ancienprixv']) && isset($_POST['ancienprixa']) && isset($_POST['anciennequantite']) && isset($_POST['nouveaunom']) && isset($_POST['nouveauprixv']) && isset($_POST['nouveauprixa']) && isset($_POST['nouvellequantite']) ){
$anciennom = $_POST['anciennom'];
$ancienprixv = $_POST['ancienprixv'];
$ancienprixa = $_POST['ancienprixa'];
$anciennequantite = $_POST['anciennequantite'];
$nouveaunom = $_POST['nouveaunom'];
$nouveauprixv= $_POST['nouveauprixv'];
$nouveauprixa = $_POST['nouveauprixa'];
$nouvellequantite= $_POST['nouvellequantite'];
}


$updateproduit = $connexion->query('UPDATE produits SET nomproduit=$anciennom, prixvente=$ancienprixv, prixachat=$ancienprixa, quantitestock= $anciennequantite  WHERE nomproduit=$anciennom, prixvente=$ancienprixv, prixachat=$ancienprixa ,quantitestock=$nouvellequantite');

?>
<head>
    <title>modifier produit</title>
</head>

<form method="POST" action="">
<table>
    <tr>
        <td>
            nom du produit a remplacer<input type="text" class="form-control" placeholder="saisissez le nom du produit à remplacer "  id="anciennom" name="anciennom" value="<?php if(isset($anciennom)) { echo $anciennom; } ?>">
            <br>
        </td>
        <td>
        nouveau nom du produit
        <input type="text" class="form-control" placeholder="saisissez le nom du produit choisi"  id="nouveaunom" name="nouveaunom" value="<?php if(isset($nouveaunom)) { echo $nouveaunom; } ?>">
        <br>
        </td>
    </tr>
    <tr>
        <td>
        prix de vente a remplacer
        <input type="text" class="form-control" placeholder="saisissez le prix de vente du produit à remplacer" id="ancienprixv" name="ancienprixv" value="<?php if(isset($ancienprixv)) { echo $ancienprixv; } ?>">
        <br> 
        </td>
        <td>
        nouveau prix de vente
        <input type="text" class="form-control" placeholder="saisissez le prix de vente du produit choisi" id="nouveauprixv" name="nouveauprixv" value="<?php if(isset($nouveauprixv)) { echo $nouveauprixv; } ?>">
        <br>
        </td>
    </tr>
    <tr>
        <td>
        prix d'achat à remplacer
        <input type="text" class="form-control" placeholder="saisissez le prix d'achat du produit à remplacer" id="ancienprixa" name="ancienprixa" value="<?php if(isset($ancienprixa)) { echo $ancienprixa; } ?>">
        <br>
        </td>
        <td>
        nouveau prix d'achat 
        <input type="text" class="form-control" placeholder="saisissez le prix d'achat du produit choisi" id="nouveauprixva" name="nouveauprixa" value="<?php if(isset($nouveauprixa)) { echo $nouveauprixa; } ?>">
        <br>
        </td>
    </tr>
    <tr>
        <td>
        quantite à remplacer<input type="text" class="form-control" placeholder="saisissez la quantité de ce produit à remplacer" id="anciennequantite" name="anciennequantite" value="<?php if(isset($anciennequantite)) { echo $anciennequantite; } ?>">
        <br>
        </td>
        <td>
        nouvelle quantité de produit 
        <input type="text" class="form-control" placeholder="saisissez la quantité de ce produit choisi" id="nouvellequantite" name="nouvellequantite" value="<?php if(isset($nouvellequantite)) { echo $nouvellequantite; } ?>">
        <br>
        </td>
    </tr>
</table>
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