<?php
    error_reporting(E_ALL);

session_start();
if(!$_SESSION['mdp']){
    header('Location: admin.php');
}
?>


<!--
<div>
    <a href="membres.php">afficher tous les membres</a>
    <br>
    <a href="publier-article.php">publier un nouvel article</a>
    <br>
    <a href="articles.php">voir les articles</a>
</div>
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Dashbord</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../icons.css">
        
  <link rel="stylesheet" type="text/css" href="../style2.css">
  <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
  <link href="ht  tps://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
</head>
<body>
    
  <input type="checkbox" id="menu" name="">
  <div class="sidebar">
    <div class="sidebar-brand">
      <h2><span class="fa fa-user-o"></span>Tableau de bord</h2>
    </div>

    <div class="sidebar-menu">
      <ul>
        <li>
          <a href="" class="active"><span class="material-symbols-outlined">dashboard</span></a>
        </li>
        <li>
          <a href=""><span class="material-symbols-outlined">dashboard</span></span></a>
        </li>
        <li>
          <a href=""><span class="material-symbols-outlined">dashboard</span></a>
        </li>
        <li>
          <a href=""><span class="material-symbols-outlined">dashboard</span></a>
        </li>
        <li>
          <a href=""><span class="material-symbols-outlined">dashboard</span></a>
        </li>
        <li>
          <a href=""><span class="material-symbols-outlined">dashboard</span></a>
        </li>
        
      </ul>
    </div>
  </div>



  <div class="content">
    
    <header>
      <p><label for="menu"><span class="fa fa-bars"></span></label><span class="accueil">Accueil</span></p>

      <div class="search-wrapper">
        <span class="fa fa-search"></span>
        <input type="search" name="" placeholder="recherche" />
      </div>

      <div class="user-wrapper" id="dropdown">
        <div>
          <h4>Ubinair</h4>
          <small>Admin</small>
        </div>
        
        <img src="../img/001.jpg" width="30" height="30" class="logo-admin">
        <div class="dropdown-content">
        <a href=""><p>Mon profil</p></a>
        <a href="deconnexion.php"><p>Deconnexion</p></a>
        </div>
        
      </div>
    </header>

    <main>
      <div class="cards">
        <div class="card-single">
          <div>
            <h2>50</h2>
            <small>Achev??s</small>
          </div>
          <div>
            <span class="material-symbols-outlined">settings</span>
        </div>
        </div>

        <div class="card-single">
          <div>
            <h2>10</h2>
            <small>en cours</small>
          </div>
          <div>
            <span class="material-symbols-outlined">settings</span>
        </div>
        </div>
        <div class="card-single">
          <div>
            <h2>5</h2>
            <small>en pause</small>
          </div>
          <div>
            <span class="material-symbols-outlined">settings</span>
        </div>
        </div>
        <div class="card-single">
          <div>
            <h2>2</h2>
            <small>Annul??s</small>
          </div>
          <div>
            <span class="material-symbols-outlined">settings</span>
        </div>
        </div>
      </div>

      <div class="composant">
        <div class="ventes">
          <div class="case">
            <div class="header-case">
              <h2>Listes produits</h2>
              <button class="button">voir plus<span class="fa fa-arrow-right"></span></button>
            </div>
            <div class="body-case">
              <div class="tableau">
                <table width="100%">
                  <thead>
                    <tr>
                      <td>First</td>
                      <td>Last</td>
                      <td>Handle</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php include('articles.php'); ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>



        <div class="stock">
          <div class="case">
            <div class="header-case">
              <h2>Clients Fid??les</h2>
              
            </div>
        <div class="body-case">
            <?php include('membres.php'); ?>
        </div>
        
        <div class="statistique">
          
            <canvas id="graph1"></canvas>

      </div>
        <div class="legende">
          <h4>Legende</h4>
          <table>
            <tr>
              <td><span class="evolution color-one"></span>Riz</td>
            </tr>
            <tr>
              <td><span class="evolution color-two"></span>Mil</td>
            </tr>
          </table>
          <div class="txt-deco">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            </p>
          </div>
        </div>
      </div>


      <div class="calendar">
     <input type="datetime-local">
      </div>
    </main>
  </div>


  <script>
    const ctx = document.getElementById('graph1').getContext('2d');
const graph1 = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Administration', 'Commerce', 'Construction', 'Industrie', 'Services'],
        datasets: [{
            label: 'Annonces',
            data: [11, 42, 8, 28, 166],
            backgroundColor: [
                'rgba(255, 99, 132, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 206, 86, 0.5)',
                'rgba(75, 192, 192, 0.5)',
                'rgba(153, 102, 255, 0.5)'
                
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
                
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
</body>
</html>


