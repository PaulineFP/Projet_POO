<?php
namespace App\controllers;
require_once 'src/Connection.php';
require_once 'BlogPost.php';

use App\Connection;
use App\entities\BlogPost;
/**
 *
 */
class BlogController
{

private Connection $db;

  function __construct(){
    $this->db = new Connection();
  }
  public function show(int $id)
  {
    $titre = $this->db->query("SELECT titre FROM femmes_histoire")->fetchAll();
  }

  public function showall()
  {
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

  public function edit(int $id)
  {
    $ins = $this->db->prepare("SELECT * FROM femmes_histoire WHERE id = :num");
    $ins->bindParam(":num", $_GET["lign_update"]);
    $ins->execute();
    $ins->fetch();

    if(isset($_POST['titre']) && !empty($_POST['titre'])
    && isset($_POST['desc']) && !empty($_POST['desc']))
    {
      $id = $_GET["lign_update"];
      $article = $_POST['titre'];
      $desc = $_POST['desc'];

      $req = $this->db->prepare("UPDATE femmes_histoire SET titre ='$article', desc = '$desc' WHERE id ='$id'");
      $req->execute();
      }
  }

  public function delete(int $id)
  {
    $id = $_REQUEST["lign_delete"];
    $id = intval($id);
    $req = $this->db->prepare("DELETE FROM femmes_histoire WHERE id = $id ");
    $req->execute();
  }

}


 ?>
