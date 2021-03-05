<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">

    <title></title>
</head>

<body>

<div class="flex">
	<div class=" card-body" style="max-width: 30rem "> 
    		<form method="post">
                <label for="exampleInputEmail1" class="form-label">Bien</label>
                <input type="texte" class="form-control" name="description">
                <div id="emailHelp" class="form-text">Veuillez entrer le bien off.</div>
                <input type="submit" class="btn btn-primary" value="Ajouter un Bien">
                
                <button type="button" class="btn btn-danger color-99CC5B"><a href="logout.php">Déconnexion</a> </button>
            </form>

    </div>

            



</div>
    
 
            

            

        
        
<div class="flex">
	<div class=" card-body" style="max-width: 30rem ">

<?php 

	session_start();

	if($_SESSION['login'] != 'true'){
		header('Location: index.php');
	}
    $description = $_POST['description'];
    $bdd = new PDO('mysql:host=localhost;dbname=Immotrott;charset=utf8', 'root', 'root');
    if(isset($description)){
    		$test = "INSERT INTO VenteADiscretion(description) VALUES('".$description."')";
    	 	$requete = $bdd->exec($test);
    	 	header('Location: formulaire.php');
    	}
		
    $req = $bdd->query("SELECT * FROM VenteADiscretion");
    $data = $req->fetchAll();
    foreach ($data as $row) {

	echo "<p>" . $row['description'] . "</p><button> <a href='action.php?id=".$row['id']."'>supp</a></button>";

}

		?>
</div>
</div>	

    

    


</body>

</html>