<?php
include 'connexion_bdd.php';
session_start();
$_SESSION = array();
session_destroy();
header("Location: connexionutilisateur.php");
?>