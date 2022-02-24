<?php
include 'header.php';
include 'connexion_bdd.php';
?>

<h1>Bases de données MySQL</h1>  
<div class="search">
<input type="search" name="search" id="search"  placeholder="search" value="search">
</div>

<?php
 

$selectclient = $connexion->query('SELECT idclient, prenom, nom FROM client');
var_dump($selectclient);
?>
<div class="collapse" >
<?php
echo '<table>

    <tr>
    <td>
        <p>
            idclient
        </p>
    </td>
        <td>
            <p>
                prenom
            </p>
        </td>
        <td>
            <p>
                nom
            </p>
        </td>
    </tr>';
    while ($tableau = $selectclient->fetch())
    {
    ?>
    <table >

    <?php
    echo ('
    <tr>
    <td>' . $tableau['idclient'] .'</td>
        <td>' . $tableau['prenom'] .'</td>
        <td>' . $tableau['nom']. '</td>
    </tr>
</table>') ;
}
?></table>

</div>
<br>
<?php
include 'footer.php';
?>