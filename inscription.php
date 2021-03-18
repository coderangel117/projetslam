<?php
include'connexion.php';
if(true)
{
    if (!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mdp']))
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mail = htmlspecialchars($_POST['mail']);
        $mdp = password_hash($_POST['mdp']);
        var_dump($pseudo);
        var_dump($mail);
        var_dump($mdp);

    
        $pseudolenght = strlen($pseudo);
        if($pseudolenght >5 ) 
        {
           /*
            if(filter_var($mail, FILTER_VALIDATE_EMAIL))
                
                {
                    $insertmbr = $bdd->prepare("INSERT INTO membres('pseudo', 'mail', 'mot de passe') values (?,?,?)");
                    $insertmbr->execute(array($pseudo, $mail, $mdp));
                    header('Location: accueil.html');
                }
        */}
        else
        {
            $erreur="votre pseudo ne doit pas être inferieur à 2 caractères !";
            echo $erreur;
        }
    }
    else
    {
        $erreur="des champs ne sont pas complétés";
        echo $erreur;
    }
}
else
{
    echo 'false';
}
?>



<body>

    <h2>inscription</h2>
    <form method="POST" action="inscription.php">

    <table>
        <tr>
            <td>
            <label for="pseudo" > pseudo :</label>
            </td>
            <td>
                <input type="text" placeholder="votre pseudo" name="Pseudo" id="pseudo" value="">
            </td>
        </tr>
        <tr>
            <td>
                <label for="mail"> adresse mail :</label>
            </td>
            <td>
                <input type="email" placeholder="votre adresse mail" name="Mail" id="mail"  value="" >
            </td>
        </tr>
        <tr>
            <td>
            <label for="mdp"> mot de passe :</label>
            </td>
            <td>
                <input type="password" placeholder="votre mot de passe" name="Mdp" id="mdp" >
            </td>
        </tr>
        <tr>
            <td ></td>
            <td><input type="submit"  value="je m'inscris"></td>
        </tr>
    </table>
    </form>
</body>
