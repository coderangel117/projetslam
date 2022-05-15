<?php
require_once __DIR__ .'/../element/header.php';
require_once __DIR__ .'/../connexion_bdd.php';
if(isset($_POST['prenom']) && isset($_POST['nom'])){
$nom = $_POST['prenom'];
$prenom = $_POST['nom'];
}



if(!empty($_POST['nom'])AND !empty($_POST['prenom'])) {
    $insert = $connexion->prepare("INSERT INTO client (prenom, nom) VALUES(?,?)");
    $insert->execute(array($prenom, $nom, ));
    $message = "les données ont bien été enregistrées ! ";
}
else {$message = "Tous les champs doivent être complétés !";}
?>
<head>
<title>client</title>

</head>
<form method="POST" acttion="">
    <div class="titreform"> 
        prenom client 
    </div>
    <input type="text" class="form-control" placeholder="saisissez le prenom du client" id="prenom" name="prenom" value="<?php if(isset($prenom)) { echo $prenom; } ?>">

    <div class="titreform">
        nom client
    </div>
    <input type="text" class="form-control" placeholder="saisissez le nom du client" id="nom" name="nom" value="<?php if(isset($nom)) { echo $nom; } ?>">
    <br>

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