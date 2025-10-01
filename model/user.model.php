<?php
  class UserModel {
      private $PDO;

      public function __construct(){
          require_once("/home/miguel/Documents/htdocs/crud/configuration/connection.php");
          $connection = new Connection();
          $this->PDO = $connection->connect();
      }

      public function add($name){
          $stament = $this->PDO->prepare("INSERT INTO username VALUES(null, :name)");
          $stament->bindParam(":name", $name);
          return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
      }
  }

?>