<?php
include'headerstock.php';
include'connexionstock.php';
?>

<h1>Bases de données MySQL</h1>  
<div class="search">
<input type="search" name="search" id="search"  placeholder="search" value="search">
</div>

<?php
if(isset($_POST['search'])){
    $search = $_POST ['search'];
}

$searchup = $connexion->query('SELECT * from fournisseur where ');


$selectfournisseur = $connexion->query('SELECT nomfournisseur, adresse, telephone, mail FROM fournisseur');

?>
<div class="tableau" >
<?php
echo '<table>

    <tr>
        <td>
            <p>
                nom du fournisseur 
            </p>
        </td>
        <td>
            <p>
                adresse
            </p>
        </td>
        <td>
        <p>
            numero de telephone
        </p>
    </td>
    <td>
        <p>
            e-mail
        </p>
    </td>
    </tr>';
    while ($tableau = $selectfournisseur->fetch())
    {
    ?>
    <table >
    <?php
    echo ('
    <tr>
        <td>' . $tableau['nomfournisseur'] . '</td>
        <td>' . $tableau['adresse']. '</td>
        <td>' . $tableau['telephone']. '</td>
        <td>' . $tableau['mail']. '</td>
    </tr>
</table>') ;
}
?>
</table>
</div>