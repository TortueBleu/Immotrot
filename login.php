<?php 
$code = '
<!DOCTYPE html>
<html>

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
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom utilisateur</label>
                    <input type="text" name="pseudo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Veuillez entrer votre nom utilisateur.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mot de passe </label>
                    <input type="password" name="password"class="form-control" id="exampleInputPassword1">
                    <div id="emailHelp" class="form-text">Veuillez entrer votre mot de passe.</div>
                </div>
                
                <input type="submit" class="btn btn-primary">

                <button class="btn  btn-danger ms-1 "> <a href="index.php">Annuler</a> </button>

            
            </form>
        </div>
    </div>

</body>

</html>';
if ($_GET['id'] == 245456){
    session_start();
    echo $code;
    $bdd = new PDO('mysql:host=localhost;dbname=Immotrott;charset=utf8', 'root', 'root');
    
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];
    $password = hash('sha256', $password);

    $requetePseudo = $bdd->query('SELECT pseudo
                            FROM login');
    $requeteMdp = $bdd->query('SELECT mdp
                            FROM login');

    $data = $requetePseudo->fetchAll();
    $data2 = $requeteMdp->fetchAll();
    
    if($data[0]['pseudo'] == $pseudo && $password == hash('sha256',$data2[0]['mdp'])){
        $_SESSION['login'] = 'true';
        header('Location: formulaire.php');
        exit();
    }else{
        echo "<div class='error'><p>Le nom utilisateur ou le mot de passe n'est pas valide ou est actuellement vide.</p></div>";
    }

}else{
    echo "Cette page est introuvable";
}

?>