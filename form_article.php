<?php
require_once 'src/Connection.php';
 use App\Connection;

require_once 'app/BlogController.php';

$controller = new App\controllers\BlogController();
$art = $controller->showall();
 ?>

<!doctype html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
 <head>
     <meta charset="utf-8">
     <title>Titre de la page</title>
 </head>
<br>
<?php foreach ($art as $blog): ?>
<p> L'article <?php echo  $blog->getTitle() ;?> qui a pour id <?php echo  $blog->getId();?> </p>
 <a class="delete" href="template\delete.php?lign_delete=<?= intval($blog->getId()) ?> ">Supprimer l'article de la base de donnée </a>
</br>
 <a  class="update" href="template\edit.php?lign_update=<?= intval($blog->getId()) ?> ">modifier l'article</a>
<?php endforeach; ?>
</body>
</html>
