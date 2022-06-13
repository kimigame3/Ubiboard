<?php 

session_start();
$bdd = New PDO('mysql:host=localhost;dbname=espace_admin;', 'root', 'root');
if(!$_SESSION['mdp']){
    header('Location: admin.php');
}

if(isset($_POST['envoie'])){
    if(!empty($_POST['titre']) AND !empty($_POST['contenu'])){
        $titre = htmlspecialchars($_POST['titre']);
        $contenu = nl2br(htmlspecialchars($_POST['contenu']));

        $insererArticle = $bdd->prepare('INSERT INTO articles(titre, contenu)VALUES(?, ?)');
        $insererArticle->execute(array($titre, $contenu));

        echo "Article envoyé";
    }else{
        echo "completer la publication...";
    }
}

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>publier une nouvelle tache</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="titre">
        <br>
        <textarea name="contenu" ></textarea>
        <br>
        <input type="submit" name="envoie">
    </form>
</body>
</html>