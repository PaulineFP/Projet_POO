<?php
namespace App\controllers;
require_once 'src/Connection.php';
require_once 'BlogPost.php';

use App\Connection;
use App\entities\BlogPost;

class BlogRepository {

  private Connection $db;

    function __construct(){
      $this->db = new Connection();
    }

  public function findAll() {
    //requete select *, construit un tableau de BlogPost et le renvoi
    $pdoStat = $this->db->query('SELECT * FROM femmes_histoire');
    $blogs = array();

      //On boucle les resultats de la requette
      foreach ($pdoStat->fetchAll() as $blog) {
        //On crée une nouvelle instance d'entité blog post
       $e = new BlogPost ($blog);
       //On ajoute la nouvelle entité dans le tableau
       array_push($blogs, $e);
      }
      return $blogs;
  }

  public function findById(int $id) {
    //requete select * where id=, construit un BlogPost et le renvoi
    $stmt = $this->db->prepare("SELECT * FROM femmes_histoire WHERE id = :num");
    $stmt->bindParam(":num", $id);
    $stmt->execute();
    $result = $stmt-> fetch();
    $blog = new BlogPost ($result);
    return $blog;
  }

  public function update(BlogPost $blog) {
    //requete update where id=$blog->getId() en utilisant les infos contenu dans $blog, ex: bindParam("titre", $blog -> getTitle())
    $stmp = $this->db->prepare("UPDATE femmes_histoire SET `titre` = :titre, `desc` = :desc WHERE id = :num");
    $stmp->bindParam(":titre",$blog->getTitle());
    $stmp->bindParam(":desc", $blog->getDesc());
    $stmp->bindParam(":num", $blog->getId());
    $stmp->execute();
  }

 }
?>
