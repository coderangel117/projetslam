<?php
require_once 'connexion_bdd.php';
require_once 'element/header.php';
if(isset($_POST['ancienprenom']) && isset($_POST['anciennom']) && isset($_POST['nouveauprenom']) && isset($_POST['nouveaunom'])){
$ancienprenom = $_POST['ancienprenom'];
$anciennom = $_POST['anciennom'];
$nouveauprenom = $_POST['nouveauprenom'];
$nouveaunom= $_POST['nouveaunom'];
}

$updateclient = $connexion->query('UPDATE client SET prenom=$nouveauprenom, nom=$nouveaunom where prenom=$ancienprenom,  prenom=$ancienprenom');
var_dump($updateclient);

?>
<head>
    <title>modifier client</title>
</head>

<form method="POST" action="">
<table>
    <tr>
        <td>
            prenom du client a remplacer<input type="text"  placeholder="saisissez le nom du produit à remplacer "  id="ancienprenom" name="ancienprenom" value="<?php if(isset($ancienprenom)) { echo $ancienprenom; } ?>">
            <br>
        </td>
        <td>
        nouveau prenom du client
        <input type="text"  placeholder="saisissez le nom du produit choisi"  id="nouveaunom" name="nouveaunom" value="<?php if(isset($nouveaunom)) { echo $nouveaunom; } ?>">
        <br>
        </td>
    </tr>
    <tr>
        <td>
       nom a remplacer
        <input type="text"  placeholder="saisissez le nom du client du produit à remplacer" id="anciennom" name="anciennom" value="<?php if(isset($anciennom)) { echo $anciennom; } ?>">
        <br> 
        </td>
        <td>
        nouveau nom du client
        <input type="text"  placeholder="saisissez le nom du client du produit choisi" id="nouveaunom" name="nouveaunom" value="<?php if(isset($nouveaunom)) { echo $nouveaunom; } ?>">
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
require_once 'element/footer.php'; ?>