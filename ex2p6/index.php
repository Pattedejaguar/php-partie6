<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/angular.js"></script>
  <title>PHP ex2p6</title>
</head>
<body>
  <!-- container Bootstrap -->
  <div class="container text-center">
    <!-- header -->
    <header>
      <div class="jumbotron rounded bg-dark text-white">
        <h1 class="display-3">PHP ex2p6</h1>
        <p class="lead">Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?lastname=Nemare&firstname=Jean.
        </p>
        <hr class="my-2">
      </div>
    </header>
    <!-- main -->
    <main class="text-center">
       <!-- Création d'un bouton pour afficher l'url demandé -->
      <a href="index.php?lastname=Nemare&firstname=Jean" class="btn btn-success text-dark bolder col-4">Afficher age</a>
         <!-- Début du php -->
         <div class="font-weight-bolder text-center text-monospace text-danger"> <?php
          // isset = test si une fonction existe
          // $_GET = tableaux associatif
          // On récupére l'age
          if(isset($_GET['age'])){
              echo 'Bonjour vous avez '.$_GET['age'];
          }else{        
          // Si il manque des paramètres on averti l'utilisateur
              echo 'Il faut renseigner un age Mr/Mme. '.$_GET['lastname'].' '.$_GET['firstname'];
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
