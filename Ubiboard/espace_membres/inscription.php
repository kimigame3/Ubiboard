<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

var_dump($_POST);

session_start();
$bdd = New PDO('mysql:host=localhost;dbname=espace_membres;', 'root', 'root');
if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['mdp'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $mdp = sha1($_POST['mdp']);
        $insertUser = $bdd->prepare('INSERT INTO users(pseudo, email, mdp )VALUES(?, ?, ?)');
        $insertUser->execute(array($pseudo, $email, $mdp));

        $recupUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? AND email = ? AND mdp = ?');
        $recupUser->execute(array($pseudo, $email, $mdp));
        if($recupUser->rowCount() > 0){
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['email'] = $email;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recupUser->fetch()['id'];
        }

        echo $_SESSION['id'];

    }else{
        echo "completer les cases";
    }
}

?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>
<body>

    <h1 align="center">inscrivez vous</h1>

    <form action="index1.php" method="POST" align="center">

        <p>
        <input type="text" name="pseudo" id="pseudo" autocomplete="off">
        <label for="pseudo">Pseudo</label>
        </p>
        <p>
        <input type="email" name="email" id="email" autocomplete="off">
        <label for="email">adresse mail</label>
        </p>
        <p>
        <input type="password" name="mdp" id="mdp" autocomplete="off">
        <label for="mdp">mot de passe</label>
        </p>
        <p>
        <input type="submit" name="valider">
        </p>

    </form>
    
</body>
</html>