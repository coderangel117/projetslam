<?php
include'headerstock.php';
include'connexionstock.php';

$nom = $_POST['nom'];
$adresse = $_POST['adresse'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];


    
$updatefournisseur = $connexion->query(" UPDATE fournisseur SET nomfournisseur , adresse,telephone, mail)");

?>
<head>
<title>fournisseur</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
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
include'footer.php';
?>
