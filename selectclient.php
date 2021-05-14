<?php
include'headerstock.php';
include'connexionstock.php';
?>

<h1>Bases de données MySQL</h1>  
<div class="search">
<input type="search" name="search" id="search"  placeholder="search" value="search">
</div>

<?php
 

$selectclient = $connexion->query('SELECT prenom, nom FROM client');
?>
<div class="tableau" >
<?php
echo '<table>

    <tr>
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
        <td>' . $tableau['prenom'] .'</td>
        <td>' . $tableau['nom']. '</td>
    </tr>
</table>') ;
}
?></table>

</div>



