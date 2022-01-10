<?php
namespace App\controllers;
require_once 'src/Connection.php';
require_once 'BlogPost.php';
require_once ('BlogRepository.php');

use App\Connection;
use App\entities\BlogPost;
/**
 *
 */
class BlogController
{

private Connection $db;
private BlogRepository $repo;

  function __construct(){
    $this->db = new Connection();
    $this->repo = new BlogRepository();
  }


  public function show()
  // Je veux que parmis toutes les valeurs tu m 'affiche qu'une seul valeur avec le titre et la descripition
  {

    if (!isset($_GET['id'])){
      echo "Erreur pas d'id dans les paramettres";
    }else {
      $blog = $this->repo->findById($_GET['id']);
      include ('template/article.php');
    }
  }
//repositorie edit / show
  public function showall()
  {
    $blogs = $this->repo->findAll();
    include "template/liste.php";
    }


  public function edit()
  {

    if (!isset($_GET['id'])){
      echo "Erreur pas d'id dans les paramettres";
    }else {
      $blog = $this->repo->findById($_GET['id']);
      include ('template/edit.php');
    }
  }

  public function update()
  {
    if(isset($_POST['titre']) && !empty($_POST['titre'])
    && isset($_POST['desc']) && !empty($_POST['desc']))
    {
      $blog = $this->repo->findById($_POST['id']);
      $blog->setTitle($_POST['titre']);
      $blog->setDesc($_POST['desc']);
      $this->repo->update($blog);


      header('Location: index.php');
      }

  }
  public function create(){
    include('template/create.php');
  }

  public function created()
  {
    if (!isset($_POST['titre'])
    || !isset($_POST['desc']))
    {
    echo "Erreur il manque des paramettres";
    }
    else {
      $stmp = $this->db->prepare("INSERT INTO femmes_histoire (`titre`, `desc`) VALUES(:titre, :desc)");
      $stmp->bindParam(":titre", $_POST['titre']);
      $stmp->bindParam(":desc", $_POST['desc']);
      $stmp->execute();
      header('Location: index.php');
    }
  }


  public function delete()
  {
    if (!isset($_GET['id'])){
      echo "Erreur pas d'id dans les paramettres";
    }else
    {
      $id = intval($_GET['id']);
      $stmp = $this->db->prepare("DELETE FROM femmes_histoire WHERE id = :num");
      $stmp->bindParam(":num", $_GET['id']);
      $stmp->execute();
      header('Location: index.php');
    }
  }
}


 ?>
