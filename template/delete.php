<?php
require_once 'src/Connection.php';
 use App\Connection;

require_once 'app/BlogController.php';

$controller = new App\controllers\BlogController();
$controller->delete();

 ?>
