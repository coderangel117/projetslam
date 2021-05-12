<?php
include 'connexion.php';
include 'header.php';

if(isset($_POST['forminscription'])) {

   $nom = htmlspecialchars($_POST['nom']);
   $prenom = htmlspecialchars($_POST['prenom']);
   $login = htmlspecialchars($_POST['login']);
   $mdp = hash('sha256', $_POST['mdp'],false);
   $mdp2 = hash('sha256', $_POST['mdp2'],false);

   if(!empty($_POST['login'])AND !empty($_POST['mdp']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mdp2'])) {
      $mdplength = strlen($mdp);
      if($mdplength>2){
         if($mdp == $mdp2) {
            try{

            $insert = $connexion->prepare("INSERT INTO utilisateurs (nom, prenom, identifiant, motdepasse) VALUES(?, ?, ?, ?)");
            var_dump($insert);
            $insert->execute(array($nom, $prenom, $login, $mdp));
            }catch(Exception $e){
               var_dump($e);
            }

            $message = "Votre compte a bien été créé ! <a href=\"connexionutilisateur.php\">Me connecter</a>";
         }else {$message = "Vos mots de passes ne correspondent pas !";}
      }else{$message = "mot de passe trop  petit pour être sécurisé";}
   }else {$message = "Tous les champs doivent être complétés !";}
}

?>
<head>
   <title>inscription AU BON MARCHE</title>
</head>

<body>
   <div align="center">
      <h2>Inscription</h2>
      <br /><br />
      <form method="POST" action="">
         <table>
            <tr>
               <td align="right">
                  <label for="nom">nom :</label>
               </td>
               <td>
                  <input type="text" placeholder="Votre nom" id="nom" name="nom" value="<?php if(isset($nom)) { echo $nom; } ?>" />
               </td>
            </tr>


            <tr>
               <td align="right">
                  <label for="prenom">prenom :</label>
               </td>
               <td>
                  <input type="text" placeholder="Votre prenom" id="prenom" name="prenom" value="<?php if(isset($prenom)) { echo $prenom; } ?>" />
               </td>
            </tr>

            <tr>
               <td align="right">
                  <label for="login">Entrée du login :</label>
               </td>
               <td>
                  <input type="text" placeholder="choisissez votre login" id="login" name="login" value="<?php if(isset($login)) { echo $login; } ?>" />
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
               <td >
                  <br />
                  <input type="submit" name="forminscription" value="Je m'inscris" />
               </td>
            </tr>
         </table>
      </form>
      <?php
         if(isset($message)) {
            echo '<font color="red">'.$message."</font>";
         }
      ?>
   </div>
</body>