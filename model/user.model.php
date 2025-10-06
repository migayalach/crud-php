<?php
class UserModel
{
  private $PDO;

  public function __construct()
  {
    require_once("/home/miguel/Documents/htdocs/crud/configuration/connection.php");
    $connection = new Connection();
    $this->PDO = $connection->connect();
  }

  public function add($name)
  {
    $stament = $this->PDO->prepare("INSERT INTO username VALUES(null, :name)");
    $stament->bindParam(":name", $name);
    return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
  }

  public function show($id)
  {
    $stament = $this->PDO->prepare("SELECT * FROM username where id = :id limit 1");
    $stament->bindParam(":id", $id);
    return ($stament->execute()) ? $stament->fetch() : false;
  }

  public function index()
  {
    $stament = $this->PDO->prepare("SELECT * FROM username");
    return ($stament->execute()) ? $stament->fetchAll() : false;
  }

  public function update($id, $name)
  {
    $stament = $this->PDO->prepare("UPDATE username SET name=:name WHERE id=:id");
    $stament->bindParam(":name", $name);
    $stament->bindParam(":id", $id);
    return ($stament->execute()) ? $id : false;
  }

  public function  delete($id)
  {
    $stament = $this->PDO->prepare("DELETE FROM username WHERE id=:id");
    $stament->bindParam(":id", $id);
    return ($stament->execute()) ? true : false;
  }
}
