<?php
/*require_once './src/Connection.php';
 use App\Connection;

require_once './app/BlogController.php';

$controller = new App\controllers\BlogController();
// $id= 1;
$id = $_GET["id"];
$item = $controller->show($id);
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
//trouver comment formuler autrement et en afficher un en faisant déplacer avec les btn suivant et précédent
  ?>
      <div class="container">

      <?php

      require 'template\article.php';

      ?>

        <!-- <a href="#">Suivant</a>
        <a href="#">Précedent</a> -->

      </div>
    </section>
  </body>
</html>
