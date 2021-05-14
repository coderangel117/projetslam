<?php
include'headerstock.php';
include'connexionstock.php';
?>
<head>
    <link rel="stylesheet" href="stylestock.css">
</head>

<h1>Bases de données MySQL</h1>  
<div class="search">
<input type="search" name="search" id="search"  placeholder="search" value="search">
</div>

<?php
 
$selectproduit = $connexion->query('SELECT nomproduit, prixvente, prixachat, quantitestock FROM produits');
?>
<div class="collapse" >
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
            <div class="quantite">
                <td>
                    <p>
                        quantité en stock            
                    </p>
                </td>            
            </div>
        </tr>';
        while ($tableau = $selectproduit->fetch())
        {
        ?>
        <table >

        <?php
        echo ('
        <tr>
            <td>' . $tableau['nomproduit'] . '</td>
            <td>' . $tableau['prixvente'] . '</td>
            <td>' . $tableau['prixachat'] .'</td>

            <div class="quantite">
                <td>' . $tableau['quantitestock'] .'</td>
            </div>
            
        </tr>
    </table>') ;
    }
    ?></table>

</div>



