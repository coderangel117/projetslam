<?php
include'connexionstock.php';
include'headerstock.php';

$ancienprenom = $_POST['anciennom'];
$anciennom = $_POST['anciennom'];

$nouveauprenom = $_POST['nouveauprenom'];
$nouveaunom= $_POST['nouveaunom'];


$updateclient = $connexion->query("UPDATE client SET prenom='.$nouveauprenom ', nom='.$nouveaunom ' where prenom='.$ancienprenom ', prenom='.$ancienprenom ");

?>
<head>
    <title>produit</title>
</head>

<form method="POST" action="">
<table>
    <tr>
        <td>
            prenom du client a remplacer<input type="text" class="form-control" placeholder="saisissez le nom du produit à remplacer "  id="ancienprenom" name="ancienprenom" value="<?php if(isset($ancienprenom)) { echo $ancienprenom; } ?>">
            <br>
        </td>
        <td>
        nouveau prenom du client
        <input type="text" class="form-control" placeholder="saisissez le nom du produit choisi"  id="nouveaunom" name="nouveaunom" value="<?php if(isset($nouveaunom)) { echo $nouveaunom; } ?>">
        <br>
        </td>
    </tr>
    <tr>
        <td>
       nom a remplacer
        <input type="text" class="form-control" placeholder="saisissez le nom du client du produit à remplacer" id="anciennom" name="anciennom" value="<?php if(isset($anciennom)) { echo $anciennom; } ?>">
        <br> 
        </td>
        <td>
        nouveau nom du client
        <input type="text" class="form-control" placeholder="saisissez le nom du client du produit choisi" id="nouveaunom" name="nouveaunom" value="<?php if(isset($nouveaunom)) { echo $nouveaunom; } ?>">
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