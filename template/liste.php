<!doctype html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
 <head>
     <meta charset="utf-8">
     <title>Titre de la page</title>
 </head>
<br>
<?php foreach ($blogs as $blog): ?>
<p> L'article <?php echo  $blog->getTitle() ;?> qui a pour id <?php echo  $blog->getId();?> </p>
 <a class="delete" href="index.php?lign_delete&id=<?= intval($blog->getId()) ?> ">Supprimer l'article de la base de donnée </a>
</br>
 <a  class="update" href="index.php?lign_update&id=<?= intval($blog->getId()) ?> ">modifier l'article</a>
 <br>
 <a  href="index.php?id=<?= intval($blog->getId()) ?> ">Détail</a>
<?php endforeach; ?>
</body>
</html>