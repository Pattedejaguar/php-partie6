<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/angular.js"></script>
  <title>PHP ex3p6</title>
</head>
<body>
  <!-- container Bootstrap -->
      <!-- header -->
    <header>
      <div class="container text-center">
        <div class="jumbotron">
          <h1 class="display-3">PHP ex3p6</h1>
          <p class="lead">Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?startDate=2/05/2016&endDate=27/11/2016<p/>
          <hr class="my-2">
        </div>
    </header>
    <!-- main -->
    <main class="text-center">
        <a href='index.php?startDate=2/05/2016&endDate=27/11/2016' class="btn btn-primary"> afficher dates</a>
      <?php
       if(isset($_GET['startDate'])&& isset($_GET['endDate'])){
          echo 'ça commence le '.$_GET['startDate'].' et ça termine le '.$_GET['endDate'];
      }else{
          echo 'veuillez indiquez une date de commencement et de faim(oui j\'ai fin)';
      }
      ?>
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
