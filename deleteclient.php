<?php
include'headerstock.php';
include'connexionstock.php';

if(isset($_POST['nom']) && isset($_POST['prenom'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<?php
$deleteclient = $connexion->query('DELETE prenom, nom FROM client where prenom='.$prenom.'and nom=.$nom');

?>
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
    include'footer.php';
?>