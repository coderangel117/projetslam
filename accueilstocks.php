<?php 
include 'connexion.php';
include 'header.php';
?>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>accueilstocks
    </title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="produits.php">produits</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="clients.php">clients</a>
          </li>
          <li class="nav-item">
            <ul>
              <a class="nav-link dropdown-toggle" href="fournisseurs.php" id="fournisseur" >fournisseur</a>
              <li>
                <a href="selectfournisseur.php">retrouver un fournisseur</a>
              </li>
              <li>
                <a href="insertfournisseur.php">rentrer un fournisseur</a>
              </li>
              <li>
                <a href="deletefournisseur.php">supprimer un fournisseur</a>
              </li>

            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</body>
