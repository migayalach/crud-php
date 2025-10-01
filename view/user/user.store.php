<?php
  require_once("/home/miguel/Documents/htdocs/crud/controller/user.controller.php");
  $obj = new UserController();
  $obj->save($_POST['name']);
?>