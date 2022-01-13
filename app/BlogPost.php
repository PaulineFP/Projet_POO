<?php
namespace App\entities;

  class BlogPost {
    private int $id;
    private string $title;
    private string $desc;
    

    function __construct($row) {
      $this -> id = $row["id"];
      $this -> title = $row["titre"];
      $this -> desc = $row["desc"];
    }

    function getId() {
      return $this -> id;
    }

    function getTitle() {
      return $this -> title;
    }

    function getDesc() {
      return $this -> desc;
    }

    function setTitle($title) {
      $this -> title = $title;
    }

    function setDesc($desc) {
      $this -> desc = $desc;
    }
  }




 ?>
