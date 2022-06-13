<?php
session_start();
$bdd = New PDO('mysql:host=localhost;dbname=espace_membres;', 'root', 'root');
if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = sha1($_POST['mdp']);

        $recupUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? AND mdp = ?');
        $recupUser->execute(array($pseudo, $mdp));

        if($recupUser->rowCount() > 0){
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recupUser->fetch()['id'];
            header('Location: index1.php');


        }else{
            echo "votre pseudo ou mot de passe est incorrect...";
        }
    }else{
        echo "complétez les cases";
    }
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>connexion</title>
</head>
<body>

    <form action="connexion.php" method="POST" align="center">

        <p>
            <label for="pseudo">psuedo</label>
            <input type="text" name="pseudo" id="pseudo" autocomplete="off">
        </p>
        <p>
            <label for="mdp">mot de passe</label>
            <input type="password" name="mdp" id="mdp" autocomplete="off">
        </p>
        
        <input type="submit" name="valider" >

    </form>
    
</body>
</html>