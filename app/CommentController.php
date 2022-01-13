<?php
namespace App\controllers;
require_once 'src/Connection.php';
require_once 'CommentPost.php';
require_once ('CommentRepository.php');

use App\Connection;
use App\entities\CommentPost;
/**
 *
 */
class CommentController
{

  private Connection $db;
  private CommentRepository $repo;


    function __construct(){
      $this->db = new Connection();
      $this->repo = new CommentRepository();
    }
    //function Created se fait que pour un article actif donc pas besoin d'en faire un pour la creation d'article car se fait au détail. Pour cela il faut faire un create normale mais l'associer à l'id de la table principable.
    //Mais ou dois je incrémenter mon cross join ?

}


 ?>
