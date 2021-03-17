<?php
include'connexion.php';

if(isset($_POST['pseudo']))
{       

    if (!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']))
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mail = htmlspecialchars($_POST['mail']);
        $mail2 = htmlspecialchars($_POST['mail2']);
        $mdp = password_hash($_POST['mdp']);
        $mdp2 = password_hash($_POST['mdp2']);
        var_dump($pseudo);
        var_dump($mail);
        var_dump($mail2);
        var_dump($mdp);
        var_dump($mdp2);

    
        $pseudolenght = strlen($pseudo);
        if($pseudolenght >5 ) 
        {
            if($mail == $mail2)
            {
                if(filter_var($mail, FILTER_VALIDATE_EMAIL))
                    if($mdp == $mdp2)
                    {
                        {
                            $insertmbr = $bdd->prepare("INSERT INTO membres('pseudo', 'mail', 'mot de passe') values (?,?,?)");
                            $insertmbr->execute(array($pseudo, $mail, $mdp));
                            header('Location: accueil.html');
                        }
                    }
                    else
                    {
                        $erreur="vos mots de passe ne correspondent pas!";
                }
            }
            else
            {
                $erreur="vos adresses mail ne correspondent pas!";
            }
        }
        else
        {
            $erreur="votre pseudo ne doit pas être inferieur à 2 caractères !";    
        }
    }
    else
    {
        echo "des champs ne sont pas complétés";
    }
}
else 
{
if(isset ( $erreur))
{
    echo $erreur;
}
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
                <input type="text" placeholder="votre pseudo" name="Pseudo" id="pseudo" value="<?php if (isset($pseudo)){echo $pseudo;}?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="mail"> adresse mail :</label>
            </td>
            <td>
                <input type="email" placeholder="votre adresse mail" name="Mail" id="mail"  value="<?php if (isset($mail)){echo $mail;}?>" >
            </td>
        </tr>
        <tr>
            <td>

            <label for="mail2"> confirmation de l'adresse mail :</label>
            </td>
            <td>
                <input type="email" placeholder="veuillez confirmer votre adresse mail" name="Mail2" id="mail2"  value="<?php if (isset($mail2)){echo $mail2;}?>"  >
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
            <td >

            <label for="mdp2"> confirmation du mot de passe :</label>
            </td>
            <td>
                <input type="password" placeholder="veuillez confirmer votre mot de passe" name="Mdp2" id="mdp2" >
            </td>
        </tr>
        <tr>
            <td ></td>
            <td><input type="submit" name="pseudo" value="je m'inscris"></td>
        </tr>
    </table>
    </form>
</body>