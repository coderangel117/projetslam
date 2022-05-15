<?php
require_once __DIR__ .'/../element/header.php';
require_once __DIR__ .'/../connexion_bdd.php';
?>
<head>
    <link rel="stylesheet" href="stylestock.css">
</head>

<h1>Bases de données MySQL</h1>  
<div class="search">
<input type="search" name="search" id="search"  placeholder="search" value="search">
</div>

<?php
 
$selectproduit = $connexion->query('SELECT idproduit, nomproduit, prixvente, prixachat, quantitestock FROM produits');
var_dump($selectproduit);
?>
<div class="collapse" >
    <?php
    echo '<table>

        <tr>
            <td>
                <p>
                 id du produit
                </p>
            </td>
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
            <td>' . $tableau['idproduit'] . '</td>
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
<?php
require_once __DIR__ .'/../element/footer.php';
?>