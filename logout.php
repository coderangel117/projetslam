<?php
require_once __DIR__ .'/Connexion.class.php';
require_once 'functions/sql.php';
session_start();
$_SESSION = array();
session_destroy();
header("Location: login.php"); ?>