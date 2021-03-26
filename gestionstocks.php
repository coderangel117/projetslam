<?php 
include 'connexion.php';
include 'header.php';


$requser = $connexion->execute("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");

?>

<table>
    <tr>
        <td>numcli</td>
        <td></td>
    </tr>
</table>