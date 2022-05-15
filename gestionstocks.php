<?php
require_once 'connexion_bdd.php';
require_once 'element/header.php'; ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>

        <title>Document</title>
    </head>
    <body>


    EFFECTUER DES ENTRÉE DE PRODUITS SUR LA BASE DE DONNEES
    <form method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> </label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        produit
        <input type="text" class="form-control" id="exampleInputPassword1">
        rayon
        <input type="text" class="form-control" id="exampleInputPassword1">
        prixvente
        <input type="text" class="form-control" id="exampleInputPassword1">
        prixachat
        <input type="text" class="form-control" id="exampleInputPassword1">

        <input type="text" class="form-control" id="exampleInputPassword1">

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </body>
<?php    require_once 'element/footer.php';?>
    </html>

