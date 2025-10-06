<?php
require_once("/home/miguel/Documents/htdocs/crud/controller/user.controller.php");
$obj = new UserController();
$obj->update($_POST['id'], $_POST['name']);
?>
