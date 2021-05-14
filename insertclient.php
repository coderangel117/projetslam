<?php
include'connexionstock.php';
include'header.php';


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];



if(!empty($_POST['nom'])AND !empty($_POST['prenom'])) {
    $insert = $connexion->prepare("INSERT INTO client (prenom, nom) VALUES(?,?)");
    $insert->execute(array($prenom, $nom, ));
    $message = "les données ont bien été enregistrées ! ";
}
else {$message = "Tous les champs doivent être complétés !";}
?>
<head>
<title>client</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<form method="POST" acttion="">

    <div class="titreform">
        nom client
    </div>
    <input type="text" class="form-control" placeholder="saisissez le nom du client" id="nom" name="nom" value="<?php if(isset($nom)) { echo $nom; } ?>">
    <br>
    <div class="titreform"> 
        prenom client 
    </div>
    <input type="text" class="form-control" placeholder="saisissez le prenom du client" id="prenom" name="prenom" value="<?php if(isset($prenom)) { echo $prenom; } ?>">

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