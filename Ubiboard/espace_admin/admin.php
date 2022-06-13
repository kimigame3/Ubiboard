<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

session_start();
$bdd = New PDO('mysql:host=localhost;dbname=espace_admin;', 'root', 'root');

if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) && !empty($_POST['mdp'])){
        $pseudo_par_defaut = "admin";
        $mdp_par_defaut = "ubinair";

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        if($pseudo_saisi == $pseudo_par_defaut && $mdp_saisi == $mdp_par_defaut){
            $_SESSION['mdp'] = $mdp_saisi;
            header('Location: index.php');
        }else{
            echo "le pseudo ou le mot de passe est incorrect.";
        }
    }else{
        echo "veuillez remplir les cases...";
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>espace administrateur</title>
    </head>
    <body>

        <h1 id="admin"></h1>
        <form method="post" action="admin.php" align="center">

            <p>
                <label for="pseudo">Pseudo</label>
                <input type="text" name="pseudo" id="pseudo" autocomplete="off">
            </p>
            
            <p>
                <label for="mdp">mot de passe</label>
                <input type="password" name="mdp" id="mdp"> 
            </p>
            
            <p>
                <input type="submit" name="valider">
            </p>
            

        </form>
    </body>
</html>