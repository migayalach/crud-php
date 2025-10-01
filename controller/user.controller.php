<?php 
  class UserController{
    private $model;

    public function __construct(){
      require_once("/home/miguel/Documents/htdocs/crud/model/user.model.php");
      $this->model = new UserModel();
    }
    
    public function save($name){
      $id = $this->model->add($name);
      return ($id != false) ? header("Location:user.show.php?id=".$id) : header("Location:user.create.php");
    }
  }
?>