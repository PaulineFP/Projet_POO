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

    //created comment pour resevoir les données du formulaire
    public function created()
    {
      if (!isset($_POST['name'])
      || !isset($_POST['comment'])
      || !isset($_POST['blogID']))

      {
        echo "Erreur il manque des paramètres"
      }
      else {
        $stmp = $this->db->prepare("INSERT INTO fhcomment (`name`,`comment`, `blogID`) VALUES(:name, :comment, :blogID)");
        $stmp->bindParam(":name", $_POST['name']);
        $stmp->bindParam(":comment", $_POST['comment']);
        $stmp->bindParam(":blogID", $_POST['blogID']);
        $stmp->execute();
        header('location: article.php');
      }
    }
}


 ?>
