<?php
include 'connexion_bdd.php';
include 'header.php';
?>
<form action="POST">

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0"
              crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>


    EFFECTUER DES Entrée DE PRODUITS SUR LA BASE DE DONNEES
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
    </html>

