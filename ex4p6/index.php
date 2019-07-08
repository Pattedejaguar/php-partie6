<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/angular.js"></script>
  <title>PHP ex4p6</title>
</head>
<body>
  <!-- container Bootstrap -->
  <div class="container text-center">
 <!-- header -->
  <header>
    <div class="jumbotron">
      <h1 class="display-3">PHP ex4p6</h1>
      <p class="lead">Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?language=PHP&server=LAMP</p>
      <hr class="my-2">
    </header>
    <!-- main -->
    <main class="text-center">
      <a href ="index.php?language=PHP&server=LAMP" class="btn btn-dark text-warning"> Afficher langage et serveur</a>
      <div>
        <?php
       if(isset($_GET['language'])&& isset($_GET['server'])){
         echo 'bonjour '.$_GET['language'].' aurevouar '.$_GET['server'];
       }else{
           echo 'Uesh y\'a pas de langage et de serveur fréro';
       }
        ?>
      </div>
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
