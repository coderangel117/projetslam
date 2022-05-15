<?php
require_once __DIR__ .'/../element/header.php';
require_once __DIR__ .'/../Connexion.class.php';

if(isset($_POST['idproduit']) && isset($_POST['ancienprixv']) && isset($_POST['nouveaunom']) && isset($_POST['nouveauprixv']) && isset($_POST['nouveauprixa']) && isset($_POST['nouvellequantite']) ){
$idproduit = $_POST['idproduit'];
$nouveaunom = $_POST['nouveaunom'];
$nouveauprixv= $_POST['nouveauprixv'];
$nouveauprixa = $_POST['nouveauprixa'];
$nouvellequantite= $_POST['nouvellequantite'];
}


$updateproduit = $connexion->query('UPDATE produits SET nomproduit=$nouveaunom, prixvente=$nouveauprixv, prixachat=$nouveauprixa, quantitestock= $nouvellequantite  WHERE idproduit=$idproduit');
var_dump($updateproduit);

?>
<head>
    <title>modifier produit</title>
</head>

<form method="POST" action="">
<table>
    <tr>
        <td>
            id du produit a remplacer<input type="text"  placeholder="saisissez l'id du produit à remplacer "  id="idproduit" name="idproduit" value="<?php if(isset($idproduit)) { echo $idproduit; } ?>">
            <br>
        </td>
    </tr>
    <tr>
        <td>
        nouveau nom du produit
        <input type="text"  placeholder="saisissez le nom du produit choisi"  id="nouveaunom" name="nouveaunom" value="<?php if(isset($nouveaunom)) { echo $nouveaunom; } ?>">
        <br>
        </td>
    </tr>
    <tr>
        <td>
        nouveau prix de vente
        <input type="text"  placeholder="saisissez le prix de vente du produit choisi" id="nouveauprixv" name="nouveauprixv" value="<?php if(isset($nouveauprixv)) { echo $nouveauprixv; } ?>">
        <br>
        </td>
    </tr>
    <tr>
        <td>
        nouveau prix d'achat 
        <input type="text"  placeholder="saisissez le prix d'achat du produit choisi" id="nouveauprixva" name="nouveauprixa" value="<?php if(isset($nouveauprixa)) { echo $nouveauprixa; } ?>">
        <br>
        </td>
    </tr>
    <tr>
        <td>
        nouvelle quantité de produit 
        <input type="text"  placeholder="saisissez la quantité de ce produit choisi" id="nouvellequantite" name="nouvellequantite" value="<?php if(isset($nouvellequantite)) { echo $nouvellequantite; } ?>">
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
require_once __DIR__ .'/../element/footer.php';
?>?>