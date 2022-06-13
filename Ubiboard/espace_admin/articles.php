<?php

session_start();
$bdd = New PDO('mysql:host=localhost;dbname=espace_admin;', 'root', 'root');
if(!$_SESSION['mdp']){
    header('Location: admin.php');
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Articles</title>
</head>
<body>
    <?php
        $recupArticles = $bdd->query('SELECT * FROM articles');
        while($article = $recupArticles->fetch()){
            ?>
            <div class= "article" style="border: 1px solid black;">
                <h1><?= $article['titre']; ?></h1>
                <p><?= $article['contenu']; ?></p>
                <a href="supprimer-article.php?id=<?= $article['id']; ?>">
                    <button style="color:white; background-color:red;">supprimer</button>
                </a>
                <a href="modifier-article.php?id=<?= $article['id']; ?>">
                    <button style="color:white; background-color:blue;">modifier</button>
                </a>

            </div>
            <br>
            <?php
        }
    ?>
</body>
</html>