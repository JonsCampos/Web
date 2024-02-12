<?php

class Database {
  private $dsn;
  private $pdo;

  public function __construct($dsn = null){
    if (empty($dsn)) {
      $this->dsn='sqlite:../database.sqlite';
    }
    $this->pdo = new PDO($this->dsn);
  }

  public function exec($sql){
    $this->pdo->exec($sql);
  }

  public function query($sql){
    return $this->pdo->query($sql);
  }

}

?>