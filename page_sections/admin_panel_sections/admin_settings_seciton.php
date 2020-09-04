<?php
session_start();
ob_start();
require_once '../../controller/Controller.php';
?>
<div class="container">
  <form>
    <div class="row">
      <form action="" method="post">
        <div class="col-md-4">
          <div class="col-md">

            <h4>Change Your Password</h4>
            <input type="password" name="old_password" class="form-control" placeholder="Old Password" required> <br>
          </div>

          <div class="col-md">
            <input type="password" name="new_password" class="form-control" placeholder="New Password" required> <br>
          </div>

          <div class="col-md">
            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required> <br>
          </div>

          <div class="col-md">
            <button type="submit" name="change_password_admin" class="btn btn-primary">Change</button>
          </div>

        </div>
      </form>
    </div>
</div>