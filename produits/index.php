<?php
require_once __DIR__ . '/../element/header.php';
require_once __DIR__ . '/../Connexion.class.php';
?>
    <head>
        <link rel="stylesheet" href="stylestock.css">
    </head>

    <h1>Bases de données MySQL</h1>
    <div class="search">
        <input type="search" name="search" id="search" placeholder="search" value="search">
    </div>

<?php
$sql = 'SELECT IdProduit, IdRayon, NomProduit, PrixVente, PrixAchat, QuantiteStock from projetslam.produits ';
$selectproduit = Query($sql, []);
?>
    <div class="collapse">
        <table>
            <tr>
                <td>
                    <p>
                        id du produit
                    </p>
                </td>
                <td>
                    <p>
                        id du rayon
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
                        prix d'achat
                    </p>
                <td>
                    <p>
                        quantité en stock
                    </p>
                </td>
            </tr>
            <?php
            foreach ($selectproduit as $produits) { ?>
            <tr>
                <td><?= $produits['IdProduit']; ?></td>
                <td><?= $produits['IdRayon']; ?></td>
                <td><?= $produits['NomProduit']; ?></td>
                <td><?= $produits['PrixVente']; ?></td>
                <td><?= $produits['PrixAchat']; ?></td>
                <td><?= $produits['QuantiteStock']; ?></td>
                <?php }
            ?>
            </tr>
        </table>
    </div>
<?php
require_once __DIR__ . '/../element/footer.php';
?>