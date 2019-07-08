<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/angular.js"></script>
  <title>PHP ex6p6</title>
</head>
<body>
  <!-- container Bootstrap -->
  <div class="container text-center">
    <!-- header -->
    <header>
      <div class="jumbotron bg-transparent shadow-lg rounded-circle text-success">
        <h1 class="display-3">PHP ex6p6</h1>
        <p class="lead">Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?building=12&room=101</p>
      </div>
      </header>
      <!-- main -->
      <main class="text-center">
          <a href = "index.php?building=12&room=101" class="btn btn-danger"> afficher</a>
          <div>
            <?php
             if(isset($_GET['building'])&&(isset($_GET['room']))){
             echo $_GET['building'].'batiments et '.$_GET['room'].'room';
             }else{
             echo 'erreur';    
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
