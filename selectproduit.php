<?php
include'headerstock.php';
include'connexionstock.php';
?>

<h1>Bases de données MySQL</h1>  
<div class="search">
<input type="search" name="search" id="search"  placeholder="search" value="search">
</div>

<?php
 
$selectproduit = $connexion->query('SELECT nomproduit, prixvente, prixachat, quantitestock FROM produits');
?>
<div class="tableau" >
<?php
echo '<table>

    <tr>
        <td>
            <p>
                nom du produit
            </p>
        </td>
        <td>
            <p>
                prix de vente 
            </p>
        </td>
        <td>
            <p>
                prix d\'achat 
            </p>
            <td>
            <p>
                quantité en stock            
            </p>
        </td>
    </td>
    </tr>';
    while ($tableau = $selectproduit->fetch())
    {
    ?>
    <table >

    <?php
    echo ('
    <tr>
        <td>' . $tableau['nomproduit'] . ' ' .'</td>
        <td>' . $tableau['prixvente'] . ' ' .'</td>
        <td>' . $tableau['prixachat'] . ' ' .'</td>
        <td>' . $tableau['quantitestock'] . ' ' .'</td>

        
    </tr>
</table>') ;
}
?></table>

</div>



