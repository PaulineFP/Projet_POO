<?php

namespace App;


use PDO;

class Connection
{

  private PDO $pdo ;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=mysql;dbname=projets_cours;host=127.0.0.1', 'root', '', [
           PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }

    public function query(string $req){

      return $this->pdo->query($req);
    }

    public function prepare(string $req){
      return $this->pdo->prepare($req);
    }
}

 ?>
