<?php
session_start();
include 'header.php';

include 'connexion.php';
if(isset($_POST['formconnexion'])) {
   $login = htmlspecialchars($_POST['login']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($login) AND !empty($mdpconnect)) {
      $requser = $connexion->prepare("SELECT * FROM utilisateurs WHERE identifiant = ? AND motdepasse = ?");
      $requser->execute(array($login, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['mail'] = $userinfo['mail'];
         header("Location: profil.php?id=".$_SESSION['id']);
      } else {
         $message = "Mauvais login ou mot de passe !";
      }
   } else {
      $message = "Tous les champs doivent être complétés !";
   }
}
?>
<html>
   <head>
      <title>connexion AU BON MARCHE</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Connexion</h2>
         <br /><br />
         <form method="POST"  action="">
            <input type="text" name="login" placeholder="login" />
            <input type="password" name="mdpconnect" placeholder="Mot de passe" />
            <br /><br />
            <input type="submit" name="formconnexion" value="Se connecter !" />
         </form>
         <?php
         if(isset($message)) {
            echo '<font color="red">'.$message."</font>";
         }
         ?>
      </div>
   </body>
</html>