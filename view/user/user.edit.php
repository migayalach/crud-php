<?php
require_once("/home/miguel/Documents/htdocs/crud/view/head/head.php");
require_once("/home/miguel/Documents/htdocs/crud/controller/user.controller.php");
$obj = new UserController();
$user = $obj->show($_GET['id']);
?>
<form action="update.php" method="post" autocomplete="off">
    <h2>Update personal information</h2>

    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id user</label>
        <div class="col-sm-10">
            <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user[0] ?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Name user</label>
        <div class="col-sm-10">
            <input type="text" name="name" value="<?= $user[1] ?>" class="form-control" id="inputPassword">
        </div>
    </div>

    <div>
        <input type="submit" class="btn btn-success" value="Update">
        <a class="btn btn-danger" href="user.show.php?id=<?= $user[0] ?>">Cancel</a>
    </div>
</form>


<?php
require_once("/home/miguel/Documents/htdocs/crud/view/head/footer.php");
?>