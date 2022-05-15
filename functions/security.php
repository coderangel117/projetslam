<?php
//COPYRIGHT (C)  appli-scout  ( Gabriel PERINO) 2022. All rights reserved.
require_once __DIR__ . '/../Connexion.class.php';
/**
 * Créer une session s'il n'en existe pos encore
 * @return void
 */
function est_connecte()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}

/**
 *  Fonction de <b>redirection</b> vers *$redirect* si session <b>INEXISTANTE</b> ou <b>VIDE</b>
 * ou si le role est<b> DIFFERENT </b> du paramètre *$role
 * Le paramètre *$role* est optionnel, s'il n'est pas rentré, l'utilisateur n'est redirigé que s'il n'a pas de session active (déconnecté)
 * @param string $redirect
 * @param mixed $role
 * @return void
 * @author Gabriel PERINO <gabriel@gmail.com>
 */

function Redirect(string $redirect, $role = false)
{
    if (isset($_SESSION) && !empty($_SESSION)) {
        if ($role !== false) {
            if ($_SESSION['role'] !== $role) {
                header('Location:' . $redirect);
            }
        }
    } else {
        header('Location: ../index.php');
    }
}
