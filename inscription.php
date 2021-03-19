 <?php
/*
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
           
            if(filter_var($mail, FILTER_VALIDATE_EMAIL))
                
                {
                    $insertmbr = $bdd->prepare("INSERT INTO membres('pseudo', 'mail', 'mot de passe') values (?,?,?)");
                    $insertmbr->execute(array($pseudo, $mail, $mdp));
                    header('Location: accueil.html');
                }
        }
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
*/

?>



<?php
include 'connexion.php';
if(isset($_POST['forminscription'])) {
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $mail = htmlspecialchars($_POST['mail']);
   $mail2 = htmlspecialchars($_POST['mail2']);
   $mdp = sha1($_POST['mdp']);
   $mdp2 = sha1($_POST['mdp2']);
   if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 255) {
         if($mail == $mail2) {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $connexion->prepare("SELECT * FROM membres WHERE mail = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
                  if($mdp == $mdp2) {
                     $insertmbr = $connexion->prepare("INSERT INTO membres(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
                     $insertmbr->execute(array($pseudo, $mail, $mdp));
                     $erreur = "Votre compte a bien été créé ! <a href=\"connexionutilisateur.php\">Me connecter</a>";
                  } else {
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse mail n'est pas valide !";
            }
         } else {
            $erreur = "Vos adresses mail ne correspondent pas !";
         }
      } else {
         $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>	   <body>
<div align="center">
   <h2>Inscription</h2>
   <br /><br />
   <form method="POST" action="">
      <table>
         <tr>
            <td align="right">
               <label for="pseudo">Pseudo :</label>
            </td>
            <td>
               <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
            </td>
         </tr>
         <tr>
            <td align="right">
               <label for="mail">Mail :</label>
            </td>
            <td>
               <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
            </td>
         </tr>
         <tr>
            <td align="right">
               <label for="mail2">Confirmation du mail :</label>
            </td>
            <td>
               <input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
            </td>
         </tr>
         <tr>
            <td align="right">
               <label for="mdp">Mot de passe :</label>
            </td>
            <td>
               <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
            </td>
         </tr>
         <tr>
            <td align="right">
               <label for="mdp2">Confirmation du mot de passe :</label>
            </td>
            <td>
               <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" />
            </td>
         </tr>
         <tr>
            <td></td>
            <td align="center">
               <br />
               <input type="submit" name="forminscription" value="Je m'inscris" />
            </td>
         </tr>
      </table>
   </form>
   <?php
   if(isset($erreur)) {
      echo '<font color="red">'.$erreur."</font>";
   }
   ?>
</div>
</body>