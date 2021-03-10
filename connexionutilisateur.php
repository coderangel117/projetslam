<?php
include 'connexion.php';
?>

<form action="accesbdd.php" method="post">
identifiant
<input type="text" name="login" ><br>
mot de passe
<input type="password" name="mdp" ><br>
<input type="submit" value="valider">
</form>


<?php

$sql = '
INSERT INTO `utilisateur`(`nom`, `prenom`, `mot de passe`) VALUES (lastname,name,password)';
foreach ($connexion->query($sql)as $row)
{
    
}


?>