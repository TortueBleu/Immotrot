<?php 

//$_POST 
if (empty($_POST['Bien1']) && empty($_POST['Bien2']) && empty($_POST['Bien3'])) {
    header('Location: formulaire.php?p=form&error=empty');
    //var_dump ;
    die();
}

header('Location: formulaire.php?p=form&sucess=1');
die();

?>