<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">

    <title></title>
</head>

<body>


    <div class=" card-body" style="max-width: 30rem ">
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Bien</label>
                <input type="texte" class="form-control" name="description">
            </div>
 
            <input type="submit" class="btn btn-primary" value="Ajouter un Bien">

            

        
        </form>
    </div>

    <div class=" card-body" style="max-width: 30rem ">
<<<<<<< HEAD

        <?php 

            $description = $_POST['description'];
            $bdd = new PDO('mysql:host=localhost;dbname=Immotrott;charset=utf8', 'root', 'root');
            if(isset($description)){
            		$test = "INSERT INTO VenteADiscretion(description) VALUES('".$description."')";
            	 	$requete = $bdd->exec($test);
            	}
  			
            $req = $bdd->query("SELECT description FROM VenteADiscretion");
            $data = $req->fetchAll();
            foreach ($data as $row) {
			echo "<p>" . $row['description'] . "</p><button>supp</button>";
	}

  			?>
=======
        </form>
>>>>>>> 7541a25607680847371a2f3eac7f0acfda31bc5b
    </div>


</body>

</html>