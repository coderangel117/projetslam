<?php
require_once __DIR__ . '/../element/header.php';
require_once __DIR__ . '/../functions/sql.php';
require_once __DIR__ . '/../Connexion.class.php';
if (isset($_POST['prenom']) && isset($_POST['nom'])) {
    $nom = htmlspecialchars($_POST['prenom']);
    $prenom = htmlspecialchars($_POST['nom']);
}



if(!empty($_POST['nom'])AND !empty($_POST['prenom'])) {
    $insert = $connexion->prepare("INSERT INTO client (prenom, nom) VALUES(?,?)");
    $insert->execute(array($prenom, $nom, ));
    $message = "les données ont bien été enregistrées ! ";
} else {
    $message = "Tous les champs doivent être complétés !";
}
?>
    <head>
        <title>client</title>

    </head>
    <form method="POST" action="">
        <div class="titreform">
            Prenom
        </div>
        <label for="prenom">
            saisissez le prenom du client
        </label><input type="text" class="form-control"  id="prenom" name="prenom" value="<?php if (isset($prenom)) {echo $prenom;} ?>">

        <div class="titreform">
            Nom
        </div>
        <label for="nom">
            saisissez le nom du client
        </label>
        <input type="text" class="form-control"  id="nom" name="nom" value="<?php if (isset($nom)) {echo $nom;} ?>">
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
        <?php
        if (isset($message)) {
            echo($message);
        }?>
    </form>
<?php
require_once __DIR__ . '/../element/footer.php';
?>