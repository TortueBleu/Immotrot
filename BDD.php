<?php 


	

	try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Immotrott;charset=utf8', 'root', 'root');
	
	$reponse = $bdd->query('SELECT description
							FROM VenteADiscretion');
	$data = $reponse->fetchAll();

	foreach ($data as $row) {
		echo "<li>" . $row['description'] . "</li>";
	}

}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}






?>
