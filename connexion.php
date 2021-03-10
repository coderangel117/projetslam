<?php

$user="test";
$pass="mdp";
try{
    $connexion = new PDO( 'mysql:host=127.0.0.1; dbname=crm28', $user, $pass);
}catch(Exception $e)

{
    echo (" pb connexion");
};