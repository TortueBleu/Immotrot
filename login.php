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


    <div class=" card-body" style="max-width: 30rem ">
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Pseudo</label>
                <input type="text" name="pseudo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Veuillez entrer votre Pseudo.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mot de passe </label>
                <input type="password" name="password"class="form-control" id="exampleInputPassword1">
            </div>
            
            <input type="submit" class="btn btn-primary">

            <button class="btn  btn-danger ms-1 "> <a href="index.php">Annuler</a> </button>

        
        </form>
    </div>


</body>

</html>';
if ($_GET['id'] == 245456){
    session_start();
    echo $code;
    $bdd = new PDO('mysql:host=localhost;dbname=Immotrott;charset=utf8', 'root', 'root');
    
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];

    $requetePseudo = $bdd->query('SELECT pseudo
                            FROM login');
    $requeteMdp = $bdd->query('SELECT mdp
                            FROM login');

    $data = $requetePseudo->fetchAll();
    $data2 = $requeteMdp->fetchAll();

    if($data[0][0] == $pseudo && $password == $data2[0][0]){
        $_SESSION['login'] = 'true';
        header('Location: formulaire.php');
        exit();
    }else{
        echo "Le pseudo ou le mot de passe n'est pas valide ou n'est actuellement vide";
    }

}else{
    echo "Cette page est introuvable";
}

?>