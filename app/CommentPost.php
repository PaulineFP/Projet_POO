<?php
namespace App\entities;

  class CommentPost {
    private int $id;
    private string $name;
    private string $comment;

    function __construc($row) {
      $this -> id = $row['id'];
      $this -> name = $row['name'];
      $this -> comment = $row['comment'];
    }

    function getId() {
      return $this -> id;
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
