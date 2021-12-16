<?php
require ('./app/BlogController.php');

$controller = new App\controllers\BlogController();

if (isset($_GET['show'])){
  $controller-> show();
  
}else {
  $controller-> showall();
}

?>
