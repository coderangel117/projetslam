<?php
include'headerstock.php';
include'connexionstock.php';

if(isset($_POST['nomfournisseur'])){
    $nomfournisseur = $_POST['nomfournisseur'];
} 
if(isset($_POST['adresse'])){
    $adresse = $_POST['adresse'];
}
if(isset($_POST['telephone'])){
    $telephone = $_POST['telephone'];
}
if(isset($_POST['mail'])){
    $mail = $_POST['mail'];
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<?php
$deletefournisseur = $connexion->query("DELETE nomfournisseur, adresse, telephone, mail FROM fournisseur where nomfournisseur='.$nomfournisseur.'and adresse=.'$adresse and telephone=.'$telephone and mail=.'$mail");
var_dump($deletefournisseur);
?>
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
    include'footer.php';
?>