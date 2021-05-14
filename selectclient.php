<?php
include'headerstock.php';

?>

<h1>Bases de données MySQL</h1>  
<div class="search">
<input type="search" name="search" id="search"  placeholder="search" value="search">
</div>

<?php
 
$pdo = new PDO('mysql:dbname=projetslam;host=localhost', 'test','mdp',array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES\'UTF8\''));

$selectclient = $pdo->query('SELECT prenom, nom FROM client');

?>
<div class="tableau" >
<?php
echo '<table>

<tr><td><p>prenom</p></td><td><p>nom</p></td></tr><tr>';

while ($tableau = $selectclient->fetch())
{
?>
<table >

<?php
echo ('  <tr><td>' . $tableau['prenom'] . ' ' .'</td><td>' . $tableau['nom']. '</td></tr></table>') ;
}
?></table>

</div>



