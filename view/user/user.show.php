<?php
require_once("/home/miguel/Documents/htdocs/crud/view/head/head.php");
require_once("/home/miguel/Documents/htdocs/crud/controller/user.controller.php");
$obj = new UserController();
$data = $obj->show($_GET['id']);
?>

<h2 class="text-center">Detail after registration</h2>

<div class="pb-3">
  <a href="/crud/view/user/index.php" class="btn btn-primary">Return</a>
  <a href="user.edit.php?id=<?= $data[0] ?>" class="btn btn-success">Update</a>

  <!-- Button trigger modal -->
  <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</a>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Do you want to delete this user?</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Once you delete a user, you can't get them back.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
          <a href="user.delete.php?id=<?= $data[0] ?>" class="btn btn-danger">Delete</a>
        </div>
      </div>
    </div>
  </div>
</div>

<table class="table container-fluid">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="cold"><?= $data[0] ?></td>
      <td scope="cold"><?= $data[1] ?></td>
    </tr>
  </tbody>
</table>

<?php
require_once("/home/miguel/Documents/htdocs/crud/view/head/footer.php");
?>