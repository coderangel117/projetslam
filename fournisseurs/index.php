<?php
require_once __DIR__ . '/../element/header.php';
require_once __DIR__ . '/../Connexion.class.php';
?>

    <h1>Bases de données MySQL</h1>
    <div class="search">
        <input type="search" name="search" id="search" placeholder="search" value="search">
    </div>

<?php
if (isset($_POST['search'])) {
    $search = $_POST ['search'];
}
$sqlsearch = 'SELECT * from projetslam.fournisseur';
$sqltable = 'SELECT IdFournisseur, NomFournisseur, Adresse, Telephone, Mail FROM projetslam.fournisseur';
$selectfournisseur = Query($sqltable, []);
    var_dump($selectfournisseur);
?>
    <div class="tableau">
        <table>
            <tr>
                <td>
                    <p>
                        id du fournisseur
                    </p>
                </td>
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
            </tr>
            <?php foreach ($selectfournisseur

            as $fournisseur) {
            ?>
            <tr>
                <td><?= $fournisseur['IdFournisseur']; ?></td>
                <td><?= $fournisseur['NomFournisseur']; ?></td>
                <td><?= $fournisseur['Adresse']; ?></td>
                <td><?= $fournisseur['Telephone']; ?></td>
                <td><?= $fournisseur['Mail']; ?></td>
                <?php }
                ?></tr>
        </table>
    </div>
<?php
require_once __DIR__ . '/../element/footer.php';
?>