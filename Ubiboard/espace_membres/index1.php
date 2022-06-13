<?php
session_start();
if(!$_SESSION['mdp']){
    header('Location: connexion.php');
}
echo $_SESSION['pseudo'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stle1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <a href="deconnexion.php">
        <button>Deconnexion</button>
    </a>

    <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <div class="progress blue">
          <span class="progress-left">
            <span class="progress-bar"></span>
          </span>
          <span class="progress-right">
            <span class="progress-bar"></span>
          </span>
          <div class="progress-value">90%</div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="progress yellow">
          <span class="progress-left">
            <span class="progress-bar"></span>
          </span>
          <span class="progress-right">
            <span class="progress-bar"></span>
          </span>
          <div class="progress-value">75%</div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="progress pink">
          <span class="progress-left">
            <span class="progress-bar"></span>
          </span>
          <span class="progress-right">
            <span class="progress-bar"></span>
          </span>
          <div class="progress-value">60%</div>
        </div>
      </div>
    </div>
  </div> <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <div class="progress blue">
          <span class="progress-left">
            <span class="progress-bar"></span>
          </span>
          <span class="progress-right">
            <span class="progress-bar"></span>
          </span>
          <div class="progress-value">90%</div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="progress yellow">
          <span class="progress-left">
            <span class="progress-bar"></span>
          </span>
          <span class="progress-right">
            <span class="progress-bar"></span>
          </span>
          <div class="progress-value">75%</div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="progress pink">
          <span class="progress-left">
            <span class="progress-bar"></span>
          </span>
          <span class="progress-right">
            <span class="progress-bar"></span>
          </span>
          <div class="progress-value">60%</div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>