<?php
require_once __DIR__ .'/../element/header.php';
require_once __DIR__ .'/../Connexion.class.php';

if (isset($_POST['submit'])){ // Verify that the confirmation button has been clicked
    if(isset($_POST['Prenom']) && isset($_POST['Nom'])){
        $Prenom =  htmlspecialchars($_POST['ancienprenom']);
        $Nom = htmlspecialchars($_POST['anciennom']);
        $IdUser = htmlspecialchars($_GET['Id']);

        $parameters = [ $Prenom ,$Nom, $IdUser];
        $sql = 'UPDATE projetslam.client SET prenom= ?, nom= ? where IdClient = ?';
        $updateclient = Query($sql, $parameters);
        var_dump($updateclient);
    }
}
?>
<head>
    <title>modifier client</title>
</head>

<form method="POST" action="">
<table>
    <tr>
        <td>
             <label for="Prenom">
                Prenom du client
            </label><input type="text" placeholder="prenom du client " id="Prenom" name="Prenom" value="<?php if(isset($Prenom)) { echo $Prenom; } ?>">
            <br>
        </td>
        <td>
            <label for="Nom">
                Nom du client
            </label><input type="text" placeholder=" nom du client" id="Nom" name="nouveaunom" value="<?php if(isset($Nom)) { echo $Nom; } ?>">
        <br>
        </td>
    </tr>
</table>
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
<?php
if(isset($message))
{
    echo($message);
}
?>
</form>

<?php
require_once __DIR__ .'/../element/footer.php';
?>