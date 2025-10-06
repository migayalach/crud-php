<?php
class UserController
{
  private $model;

  public function __construct()
  {
    require_once("/home/miguel/Documents/htdocs/crud/model/user.model.php");
    $this->model = new UserModel();
  }

  public function save($name)
  {
    $id = $this->model->add($name);
    return ($id != false) ? header("Location:user.show.php?id=" . $id) : header("Location:user.create.php");
  }

  public function show($id)
  {
    return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
  }

  public function index()
  {
    return ($this->model->index()) ? $this->model->index() : false;
  }

  public function update($id, $name)
  {
    return ($this->model->update($id, $name) != false) ? header("Location:user.show.php?id=" . $id) : header("Location:index.php");
  }

  public function delete($id)
  {
    return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:user.show.php?id=" . $id);
  }
}
