<?php 

$bdd = new PDO('mysql:host=localhost;dbname=Immotrott;charset=utf8', 'root', 'root');
$test = "DELETE FROM VenteADiscretion WHERE id=".$_GET['id']."";
$requete = $bdd->exec($test);
header('Location: formulaire.php');


?>