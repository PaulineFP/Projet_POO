<?php
namespace App\controllers;
require_once 'src/Connection.php';
require_once 'CommentPost.php';

use App\Connection;
use App\entities\CommentPost;

/**
*
*/
class CommentRepository {

    private Connection $db;

  function __construc() {
    $this->db = new Connection ();
  }

  // findAll des commentaires dans un seul article (Coupler une cololone de table 2 avec table 1 direct dans mysql)
  public function findAllByBlogId (int $Blogid){

    $stmt = $this->db->prepare('SELECT * FROM fhcomment WHERE BlogID = :num');
    $stmt->bindParam(":num", $id);
    $stmt->execute();

    $comments = array();

    foreach ($stmt->fetchall() as $blog) {
      $e = New CommentPost ($comments);
      array_push($comments, $e);
    }
    return $comments;
  }

  public function findById(int $id) {
    //joindre la table pour afficher avec les ids de la table source
    $stmt = $this->db->prepare("SELECT * FROM fhcomment WHERE id = :num");
    $stmt->bindParam(":num", $id);
    $stmt->execute();
    $result = $stmt-> fetch();
    $comment = new CommentPost ($result);
    return $comment;
  }



}
?>
