<?php
require ('./app/BlogController.php');
require ('./app/CommentController.php');

$controller = new App\controllers\BlogController();
$Comcontroller = new App\controllers\CommentController();


if (isset($_GET['show']))
{
  $controller-> show();
}

else if (isset($_GET['edit']))
{
  $controller-> edit();
}
else if (isset($_POST['newUpdate']))
{
  $controller-> update();
}
else if (isset($_GET['create']))
{
  $controller-> create();
}
else if (isset($_POST['newCreate']))
{
  $controller-> created();
}

else if (isset($_GET['delete']))
{
  $controller-> delete();
}
//AJOUTER LES ROUTES POUR LES COMMENTAIRES
else if (isset($_POST['newComment'])){
  $Comcontroller-> created();
}

else
{
  $controller-> showall();
}



?>
