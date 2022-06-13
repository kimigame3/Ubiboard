<?php
    error_reporting(E_ALL);

session_start();
$bdd = New PDO('mysql:host=localhost;dbname=espace_membres;', 'root', 'root');
if(!$_SESSION['mdp']){
    header('Location: admin.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Afficher les membres</title>
</head>
<body>

    <!--afficher tous les membres-->

    <?php

        $recupUsers = $bdd->query('SELECT * FROM users');
        while($user = $recupUsers->fetch()){
            ?>
            <p><?= $user['pseudo']; ?> <a href="bannir.php?id=<?= $user['id']; ?>" style="color:red; text-decoration:none;">Bannir</a></p>
            <?php
        }

    ?>

    <!-- fin afficher tous les membres-->
    
</body>
</html>