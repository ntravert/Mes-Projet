<?php
$articles = [
  ["id" => 1, "Nom_article" => 'NEXATONE HEADSETS', "description" => "Nos écouteurs sont méticuleusement conçus pour offrir une expérience d'écoute supérieure. Grâce à l'harmonie parfaite entre le design et la qualité du son, ces casques élèvent votre musique et vos divertissements, garantissant que chaque note et chaque rythme sont clairs comme de l'eau de roche. Que vous soyez un audiophile ou un auditeur occasionnel, notre gamme de casques offre un mélange parfait de style et de performance.", "Nom_image" => "img/1.jpg"],
  ["id" => 2, "Nom_article" => 'ECHOPULSE SOUNDGEAR', "description" => "Nos écouteurs sont méticuleusement conçus pour offrir une expérience d'écoute supérieure. Grâce à l'harmonie parfaite entre le design et la qualité du son, ces casques élèvent votre musique et vos divertissements, garantissant que chaque note et chaque rythme sont clairs comme de l'eau de roche. Que vous soyez un audiophile ou un auditeur occasionnel, notre gamme de casques offre un mélange parfait de style et de performance.", "Nom_image" => "img/2.jpg"],
  ["id" => 3, "Nom_article" => 'AUDIOSCULPT ELITE', "description" => "Nos écouteurs sont méticuleusement conçus pour offrir une expérience d'écoute supérieure. Grâce à l'harmonie parfaite entre le design et la qualité du son, ces casques élèvent votre musique et vos divertissements, garantissant que chaque note et chaque rythme sont clairs comme de l'eau de roche. Que vous soyez un audiophile ou un auditeur occasionnel, notre gamme de casques offre un mélange parfait de style et de performance.", "Nom_image" => "img/3.jpg"],
  ["id" => 4, "Nom_article" => 'SONOWAVE HEADPHONES', "description" => "Nos écouteurs sont méticuleusement conçus pour offrir une expérience d'écoute supérieure. Grâce à l'harmonie parfaite entre le design et la qualité du son, ces casques élèvent votre musique et vos divertissements, garantissant que chaque note et chaque rythme sont clairs comme de l'eau de roche. Que vous soyez un audiophile ou un auditeur occasionnel, notre gamme de casques offre un mélange parfait de style et de performance.", "Nom_image" => "img/4.jpg"],
] ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


</head>

<body>
  <header class="site_header">
    <div class="header_logo">
      <img src="" alt="">
    </div>
  </header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Logo à gauche -->
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <img src="chemin_vers_ton_logo.png" alt="Logo">
        </a>
      </div>

      <!-- Boutons au milieu -->
      <div class="navbar-center">
        <ul class="nav navbar-nav">
          <li><a href="#">Home</a></li>
          <li><a href="#">Shop</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <section id="articles d-flex">
    <!-- tous mes articles sans l'article 2 -->
    <div class="row justify-content-center">
    <?php
    foreach ($articles as $article) {



    ?>
    <div class="col-md-3">
      <div class="card d-flex justify-content-center ">
        <img class="card-img-top" src="<?= $article['Nom_image'] ?>" alt="Card image">
        <div class="card-body">
          <h4 class="card-title"><?= $article['Nom_article'] ?></h4>
          <p class="card-text">Some example text.</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
      </div>
      </div>
      

    <?php

    }
    ?>
    </div>
  </section>
</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>
