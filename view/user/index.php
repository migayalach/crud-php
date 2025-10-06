<?php
require_once("/home/miguel/Documents/htdocs/crud/view/head/head.php");
require_once("/home/miguel/Documents/htdocs/crud/controller/user.controller.php");
$obj = new UserController();
$rows = $obj->index();
?>

<div class="mb-3">
  <a href="../user/user.create.php" class="btn btn-primary">Adding new user</a>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id Number</th>
      <th scope="col">Name</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php if ($rows): ?>
      <?php foreach ($rows as $row): ?>
        <tr>
          <th> <?= $row[0] ?> </th>
          <th> <?= $row[1] ?> </th>
          <th>
            <a href="user.show.php?id=<?= $row[0] ?>" class="btn btn-primary">See</a>
            <a href="user.edit.php?id=<?= $row[0] ?>" class="btn btn-success">Update</a>
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
                    <a href="user.delete.php?id=<?= $row[0] ?>" class="btn btn-danger">Delete</a>
                  </div>
                </div>
              </div>
            </div>
          </th>
        </tr>
      <?php endforeach; ?>
    <?php else: ?>
      <tr>
        <td colspan="3" class="text-center">There are no records stored</td>
      </tr>
    <?php endif; ?>
  </tbody>
</table>

<?php
require_once("/home/miguel/Documents/htdocs/crud/view/head/footer.php");
?>