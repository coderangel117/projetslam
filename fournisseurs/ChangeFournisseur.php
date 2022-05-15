<?php
require_once __DIR__ .'/../element/header.php';
require_once __DIR__ .'/../Connexion.class.php';

if(isset($_POST['nom']) && isset($_POST['adresse']) && isset($_POST['telephone']) && isset($_POST['email']) && isset($_POST['email'])){
$id = $_POST['id'];
$nom = $_POST['nom'];
$adresse = $_POST['adresse'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
}

    
$updatefournisseur = $connexion->query('UPDATE fournisseur SET nomfournisseur=$nom , adresse=$adresse,telephone$=$telephone, mail=$email where idfournisseur=$id)');
var_dump($updatefournisseur);
?>
<head>
<title>modifier fournisseur</title>

</head>
<form method="POST" action="">

id du fournisseur 
  <input type="text" class="form-control" placeholder="saisissez l'id' du fournisseur" id="id" name="id" value="<?php if(isset($id)) { echo $id; } ?>">
<br>
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