<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/angular.js"></script>
  <title>PHP ex5p5</title>
</head>
<body>
  <!-- container Bootstrap -->
  <div class="container text-center">
      <!-- header -->
    <header>
      <div class="jumbotron bg-warning">
        <h1 class="display-3">PHP ex5p5</h1>
        <p class="lead">Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?week=12</p>
        <hr class="my-2">
      </div>
    </header>
    <!-- main -->
    <main class="text-center">
        <a href ="index.php?week=12" class="btn btn-dark rounded-circle font-weigth-bolder font-italic"> Afficher langage et serveur</a>
      <p>
          <?php
      if(isset($_GET['week'])){
       echo 'vous avez '.$_GET['week'].' semaine(s) de vacance annuel';
     }else{
         echo 'erreur';
     }
      ?>
      </p>
    </main>
      <!-- footer -->
      <footer>
      </footer>
    </div>
    <!-- scripts JQuery Popper et Bootstrap-->
    <script src="assets/js/jquery-3.4.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- mon script principal -->
    <script src="assets/js/main.js"></script>
  </body>
  </html>
