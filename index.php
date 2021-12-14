<?php

require_once 'src/Connection.php';
 use App\Connection;

require_once 'app/BlogController.php';

$controller = new App\controllers\BlogController();
$controller->show(1);
/*
?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Les grandes femmes de l'histoire</title>
  </head>
  <body>
    <header>
      <h1>30 Femmes importantes qui ont changées le monde</h1>
    </header>

    <section class="articles">
     <?php
    $i = ['id'];
    $img = "";
    // $img_1 = "";
    $titre = ['titre'];
    $desc = ['desc'];
      ?>





      <div class="container">
      <?php include 'article.php'?>
        <a href="#">Suivant</a>
        <a href="#">Précedent</a>

      </div>



    </section>
  </body>
</html>*/
