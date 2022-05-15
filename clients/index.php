<?php
require_once __DIR__ . '/../element/header.php';
require_once __DIR__ . '/../functions/sql.php';
require_once __DIR__ . '/../Connexion.class.php';
?>

    <h1>Bases de données MySQL</h1>
    <div class="search">
        <label for="search">
            Chercher un client
        </label><input type="search" name="search" id="search">
    </div>

<?php
$sql = 'SELECT IdClient, Prenom, Nom FROM projetslam.client';
$selectclient = Query($sql); ?>
    <div class="collapse">
        <table>
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
                <td>
                    <p>
                        modifier
                    </p>
                </td>
                <td>
                    <p>
                        supprimer
                    </p>
                </td>
            </tr
            <?php foreach ($selectclient as $selectclients) { ?>
                <tr>
                    <td> <?= $selectclients['IdClient']; ?></td>
                    <td> <?= $selectclients['Prenom']; ?></td>
                    <td> <?= $selectclients['Nom']; ?></td>
                    <td><a href="ChangeClient.php?Id=<?= $selectclients['IdClient']; ?>">modifier</a></td>
                    <td><a href="DeleteClient.php?Id=<?= $selectclients['IdClient']; ?>">supprimer</a></td>
                </tr>
            <?php } ?>
        </table>

    </div>
    <br>
<?php
require_once __DIR__ . '/../element/footer.php';
?>