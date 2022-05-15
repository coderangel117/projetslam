<?php
require_once __DIR__ .'/../element/header.php';
require_once __DIR__ .'/../connexion_bdd.php';

if(isset($_POST['nom']) && isset($_POST['adresse']) && isset($_POST['telephone']) && isset($_POST['mail'])){
    $nom = $_POST['nom'];
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];
    $email = $_POST['mail'];
}
?>
<?php
$deletefournisseur = $connexion->query('DELETE nomfournisseur, adresse, telephone, mail FROM fournisseur where nomfournisseur=$nomfournisseurand adresse=$adresse and telephone=$telephone and mail=$mail');
var_dump($deletefournisseur);
?>
<head>
    <title>supprimer fournisseur</title>
</head>
<form method="POST" action="" > <!--- onsubmit="return confirmation()" -->
    <div class="titreform"> 
        nom du fournisseur
    </div>
    <input type="text" class="form-control" placeholder="saisissez le nom du fournisseur" id="nomfournisseur" name="nomfournisseur" value="<?php if(isset($nomfournisseur)) { echo $nomfournisseur; } ?>">
    <br>
    <div class="titreform">
        adresse
    </div>
    <input type="text" class="form-control" placeholder="saisissez l'adresse du fournisseur" id="adresse" name="adresse" value="<?php if(isset($adresse)) { echo $adresse; } ?>">
    <br>
    
    <div class="titreform">
       telephone
</div>
    <input type="tel" class="form-control" placeholder="saisissez le numero de telephone" id="telephone" name="telephone" value="<?php if(isset($telephone)) { echo $telephone; } ?>">
    <br>

    <div class="titreform">
    mail
    
    </div>
    <input type="text" class="form-control" placeholder="saisissez la mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>">
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>

<br>
    <?php
require_once __DIR__ .'/../element/footer.php';
?>