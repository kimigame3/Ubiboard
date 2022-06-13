<?php
$bdd = New PDO('mysql:host=localhost;dbname=messagerie;', 'root', 'root');
if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['message'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $message = nl2br(htmlspecialchars($_POST['message']));

        $insererMessage = $bdd->prepare('INSERT INTO messages(pseudo, message) VALUES(?, ?)');
        $insererMessage->execute(array($pseudo, $message));
    }else{
        echo "complétez les cases";
    }
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>chat instantané</title>
</head>
<body>

    <form action="" method="POST" align="center">
        <input type="text" name="pseudo">
        <br><br>
        <textarea name="message"></textarea>
        <br><input type="submit" name="valider">
    </form>
    <section id="messages"></section>

    <script>
        setInterval('load_messages()', 500);
        function load_messages(){
            $('#messages').load('loadMessages.php');
        }
    </script>
    
</body>
</html>