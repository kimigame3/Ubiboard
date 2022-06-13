<?php

session_start();
$bdd = New PDO('mysql:host=localhost;dbname=espace_membres;','root','root');
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $getid = $_GET['id'];
    $recupUser = $bdd->prepare('SELECT * FROM users WHERE id = ?');
    $recupUser->execute(array($getid));
    if($recupUser->rowCount()>0){

        $bannirUser = $bdd->prepare("DELETE FROM users WHERE id = ?");
        $bannirUser->execute(array($getid));

        header('Location: membres.php');

    }else{
        echo "aucun membre trouvé";
    }
    }else{
        echo "identifiant introuvable";
    }
?>