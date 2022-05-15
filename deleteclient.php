<?php
require_once 'element/header.php';
require_once 'connexion_bdd.php';

if(isset($_POST['prenom']) && isset($_POST['nom'])){
    $nom = $_POST['prenom'];
    $prenom = $_POST['nom'];
}
?>
<?php
$deleteclient = $connexion->query('DELETE prenom, nom FROM client where prenom=$prenomand nom=$nom');

var_dump($deleteclient);
?>
<head>
    <title>
        supprimer client
    </title>
</head>
<form method="POST" action="" > <!--- onsubmit="return confirmation()" -->
    <div class="titreform"> 
        prenom client 
    </div>
    <input type="text" class="form-control" placeholder="saisissez le prenom du client" id="prenom" name="prenom" value="<?php if(isset($prenom)) { echo $prenom; } ?>">
    <br>
    <div class="titreform">
        nom client
    </div>
    <input type="text" class="form-control" placeholder="saisissez le nom du client" id="nom" name="nom" value="<?php if(isset($nom)) { echo $nom; } ?>">
    <br>

    <button type="submit" class="btn btn-primary">Submit</button>

<br>
    <?php
require_once 'element/footer.php'; ?>