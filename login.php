<?php
session_start();
require_once 'element/header.php';

include 'connexion_bdd.php';
if(isset($_POST['formconnexion'])) {
   $login = htmlspecialchars($_POST['login']);
    if (isset($_POST['formconnexion'])) {
        if (!empty($_POST['login']) and !empty($_POST['mdpconnect'])) {
            $login = htmlspecialchars($_POST['login']);
            $sql = $connexion->prepare("select password from projetslam.utilisateur where username = ?");
            $sql->execute(array($_POST['login']));
            $mdp_bdd = $sql->fetchcolumn();
            $mdpconnect = $_POST['mdpconnect'];
            $testmdp = password_verify($mdpconnect, $mdp_bdd);
            if ($testmdp === true) {
                $requser = $connexion->prepare("SELECT * FROM projetslam.utilisateur where  username = ? AND password = ?");
                $requser->execute(array($login, $mdp_bdd));
                $userexist = $requser->rowCount();
                if ($userexist == 1) {
                    echo "YES !! ";
                    session_start();
                    $userinfo = $requser->fetch();
                    $_SESSION['username'] = $userinfo['username'];
                    $_SESSION['nom'] = $userinfo['nom'];
                    $_SESSION['prenom'] = $userinfo['prenom'];
                    $_SESSION['connecte'] = 1;
                    header("Location: accueilstocks.php");
                }
            } else {
                $message = "Mauvais login ou mot de passe !";
            }
        } else {
            $message = "Tous les champs doivent être complétés !";
        }
    }
}?>
<html>
   <head>
      <title>connexion A LA BONNE GESTION</title>
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
<?php
require_once 'element/footer.php';
?>