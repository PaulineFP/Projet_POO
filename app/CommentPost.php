<?php
namespace App\entities;

  class CommentPost {
    private int $id;
    private string $name;
    private string $comment;
    private int $blogID;

    function __construct($row) {
      $this -> id = $row['id'];
      $this -> name = $row['name'];
      $this -> comment = $row['comment'];
      $this -> blogID = $row['blogID'];
    }

    function getId() {
      return $this -> id;
    }
    function getBlogID() {
      return $this -> blogID;
    }

    function getName() {
      return $this -> name;
    }

    function getComment() {
      return $this -> comment;
    }

    function setName() {
      $this -> name = $name;
    }

    function setComment() {
      $this -> comment = $comment;
    }

  }


 ?>
