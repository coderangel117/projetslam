<?php
session_start();
var_dump($_SESSION);
require_once __DIR__ .'/Connexion.class.php';
require_once __DIR__ .'/element/header.php';
require_once __DIR__ .'/functions/sql.php';


if (isset($_POST['forminscription'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $username = htmlspecialchars($_POST['username']);
    $mdp1 = password_hash($_POST['mdp1'], PASSWORD_BCRYPT);
    if (!empty($prenom and $nom and $username and $mdp1)) {
        if ($_POST['mdp1'] == $_POST['mdp2']) {
            $parameters = [$nom, $prenom, $username, $mdp1];
            $sql = "INSERT INTO projetslam.utilisateur (Nom, Prenom, Username, Password) VALUES( ?, ?,?, ?)";
            $insert = Request($sql, $parameters, "insert")  ;
            header('Location:menu.php');
        } else echo("les mots de passe doivent etre les mêmes !! ");
    } else {
        echo("Tous les champs sont obligatoires !! ");
    }
}
?>
<head>
   <title>inscription A LA BONNE GESTION </title>
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
                     <label for="username">username</label>
                 </td>
                 <td>
                     <input type="text" name="username" id="username" value="<?php if(isset($username)){echo$username;} ?>">
                 </td>
             </tr>
             <tr>
                 <td align="right">
                     <label for="mdp1">rentrez votre mot de passe</label>
                 </td>
                 <td>
                     <input type="password" name="mdp1" id="mdp1">
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
<?php
require_once 'element/footer.php'; ?>