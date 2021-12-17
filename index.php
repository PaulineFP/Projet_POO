<?php
require ('./app/BlogController.php');

$controller = new App\controllers\BlogController();

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
  // $controller-> showall();
}
else if (isset($_GET['create']))
{
  $controller-> create();
}
else if (isset($_POST['newCreate']))
{
  $controller-> created();
  // $controller-> showall();
}

else if (isset($_GET['delete']))
{
  $controller-> delete();
  // $controller-> showall();
}
//faire un created
else
{
  $controller-> showall();
}

?>
