<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/angular.js"></script>
  <title>ex1p6</title>
</head>
<body>
  <!-- container Bootstrap -->
  <div class="container text-center">
    <!-- header -->
    <header>
      <div class="container text-center">
        <div class="jumbotron rounded-circle bg-danger text-light">
          <h1 class="display-3">PHP ex1p6</h1>
          <p class="lead">Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL 
                          existent et les afficher: index.php?lastname=Nemare&firstname=Jean </p>
      </div>
        </header>
        <!-- main -->
        <main class="text-center">
           <!-- Création d'un bouton pour afficher l'url demandé -->
      <a href="index.php?lastname=Nemare&firstname=Jean" class="btn btn-danger rounded-circle col-8 ">Afficher Nom / Prénom</a>
      <p>
    <!-- Début du php -->
       
      <div class="font-weight-bolder"> 
          <?php
           // isset = test si une fonction existe
           // $_GET = tableaux associatif
           // On récupére le nom et le prénom et on les affiches
           if(isset($_GET['lastname'])and isset($_GET['firstname'])){
               echo 'Bonjour '.$_GET['lastname'].' '.$_GET['firstname'];
           }else{
           // Si il manque des paramètres on averti l'utilisateur
               echo 'Il faut renseigner un nom et un prénom';
           }
           ?>
     </div>
      </main>
     
      <!-- scripts JQuery Popper et Bootstrap-->
      <script src="assets/js/jquery-3.4.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- mon script principal -->
      <script src="assets/js/main.js"></script>
    </body>
    </html>
