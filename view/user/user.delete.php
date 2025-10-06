<?php
  require_once("/home/miguel/Documents/htdocs/crud/controller/user.controller.php");
  $obj = new UserController();
  $data = $obj->delete($_GET['id']);
?>