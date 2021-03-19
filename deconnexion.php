<?php
include 'connexion.php';
session_start();
$_SESSION = array();
session_destroy();
header("Location: connexionutilisateur.php");
?>