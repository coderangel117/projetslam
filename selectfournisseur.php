<?php
include'headerstock.php';
?>

<h1>Bases de données MySQL</h1>  
<?php
    $servname = "localhost"; $dbname = "projetslam"; $user = "test"; $pass = "mdp";
    
    try{
        $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        /*Sélectionne les valeurs dans les colonnes prenom et mail de la table
         *users pour chaque entrée de la table*/
        $sth = $dbco->prepare("SELECT  nomfournisseur, adresse, telephone, mail FROM fournisseur");
        $sth->execute();
        
        /*Retourne un tableau associatif pour chaque entrée de notre table
         *avec le nom des colonnes sélectionnées en clefs*/
        $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
        
        /*print_r permet un affichage lisible des résultats,
         *<pre> rend le tout un peu plus lisible*/
        echo '<pre>';
        print_r($resultat);
        echo '</pre>';
    }
          
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
?>