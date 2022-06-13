<?php

$mail = $_POST["user_mail"];
$phone = ["user_phone"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>

    <header>
        <a class="buttons" href="page3_2.php#p3_2">précedent</a>
    </header>
    <h1 id="p3-3">par ici la monaie</h1>

    <main>
       

        <form action="formulaire.php" method="post">
            <div class="page">
                <label for="mail">Email</label>
                <input type="email" id="mail" name="user_mail" required>
            </div>
            <div>
                <label for="phone">Numéro</label>
                <input type="tel" id="phone" name="user_phone" max="9" min="0" required>
            </div>

            <div>
                <button type="submit">Envoyer </button>
            </div>

        </form>
    </main>
    
</body>
</html>