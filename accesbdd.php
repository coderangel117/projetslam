<?php
require_once 'element/header.php'; ?>
vous avez enregistré votre nom en tant que
<?php
if (isset($_SESSION['login'])) {
    echo($_SESSION['login']); ?>
<br> BRAVO !! VOTRE COMPTE A BIEN ETE CREE !!
<?php }
else{?>
    <br> pas encore de session
    <a href="login.php"> aller à la page de connexion</a><?php
}
?>