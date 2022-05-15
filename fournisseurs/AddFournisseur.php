<?php
require_once __DIR__ .'/../element/header.php';
require_once __DIR__ .'/../connexion_bdd.php';


if(isset($_POST['nom']) && isset($_POST['adresse']) && isset($_POST['telephone']) && isset($_POST['email'])){
$nom = $_POST['nom'];
$adresse = $_POST['adresse'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
}

if(!empty($_POST['nom'])AND !empty($_POST['adresse']) AND !empty($_POST['telephone']) AND !empty($_POST['email'])) {
    $insert = $connexion->prepare("INSERT INTO fournisseur (nomfournisseur, adresse,telephone, mail) VALUES(?, ?, ?, ?)");
    $insert->execute(array($nom, $adresse, $telephone, $email));
    $message = "les données ont bien été enregistrées ! ";
}
else {$message = "Tous les champs doivent être complétés !";}


?>
<head>
<title>inserer fournisseur</title>

</head>
<form method="POST" acttion="">

nomfournisseur 
  <input type="text" class="form-control" placeholder="saisissez le nom du fournisseur" id="nom" name="nom" value="<?php if(isset($nom)) { echo $nom; } ?>">
<br>
adresse
<input type="text" class="form-control" placeholder="saisissez l'adresse du fournisseur" id="adresse" name="adresse" value="<?php if(isset($adresse)) { echo $adresse; } ?>">
<br>
telephone
  <input type="text" class="form-control" placeholder="saisissez numero de telephone du fournisseur" id="telephone" name="telephone" value="<?php if(isset($telephone)) { echo $telephone; } ?>">
<br>
email
<input type="email" class="form-control" placeholder="saisissez l'email du fournisseur" id="email" name="email" value="<?php if(isset($email)) { echo $email; } ?>">
<br>

  <button type="submit" class="btn btn-primary">Submit</button>
  <?php
if(isset($message)){
    echo($message);
}
?>
</form>
<?php
require_once __DIR__ .'/../element/footer.php';
?>