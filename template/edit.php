<?php
require_once '../src/Connection.php';
 use App\Connection;

require_once '../app/BlogController.php';

$controller = new App\controllers\BlogController();
$id = $_GET["id"];
$item = $controller->show($id);

 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>
<body>

  <h1 >Modifier un article de la BDD</h1>

  <form action="" method="POST">
      <input type="text" name="titre" placeholder="Titre de l'article" value='<?= $item->getTitle() ?>'>
      <input type="text" name="desc"  placeholder="Description de l'article" value='<?= $item->getDesc() ?>'>
      <button type="submit" name="lign_update" >Modifier</button>
  </form>

</body>
</html>
