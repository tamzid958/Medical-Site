<?php
require_once '../../controller/Controller.php';
$categories = getAllCategory();
$services = getAllService();
?>


<div id="admin-new-service">

  <div id="left">

    <h3 class="total-admin-badge">Services <span class="badge badge-dark"><?php echo  $_SESSION['serviceCounter'] ?></span> Total </h3>

  </div>

  <div id="right">

    <a href="#" class="btn btn-primary btn-lg active admin-add-new-service-btn" role="button" aria-pressed="true" data-toggle="modal" data-target="#exampleModalLong"> + Add New Service </a>
    <button type="button" class="btn btn-primary btn-lg active" data-toggle="modal" data-target="#exampleModal">
      Create New Category
    </button>
  </div>




  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add New Service</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            <input class="form-control" type="text" name="service_name" placeholder="Service Name" required>
            <br>
            <select class="form-control" name="service_category" required>
              <option value="" disabled selected>Select Category</option>
              <?php

              foreach ($categories as $category) {
                echo "<option>" . $category["category_name"] . "</option>";
              } ?>

            </select>

            <br>

            <input class="form-control" name="service_cost" type="number" placeholder="Cost" required>


            <br>


            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="service_create_btn" class="btn btn-primary">Create</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>







</div>

<div class="container admin-service-category col-sm-12">
  <hr>
  <div class="row">
    <div class="col-sm">

      <h4>Categories</h4>
      <div class="card">
        <div class="card-body">
          <div>
            <div class="row">
              <div class="col-12">
                <div class="table-responsive">
                  <table class="table" id="myTable">
                    <thead>
                      <tr>
                        <td>CATEGORY ID</td>
                        <td>CATEGORY NAME</td>
                        <td>EDIT / DELETE</td>
                      </tr>
                    </thead>

                    <tbody>
                      <?php

                      foreach ($categories as $category) {
                        echo "<tr>";
                        echo " <td>" . $category["category_id"] . "</td>";
                        echo "<td>" . $category["category_name"] . "</td> ";
                        echo "<td>
                        <a href='#' class='btn btn-warning' data-toggle='modal'><i class='fa fa-pencil' aria-hidden='true'></i></a>
                        <a href='#' class='btn btn-danger' data-toggle='modal'><i class='fa fa-trash' aria-hidden='true'></i></a>
                      </td>";
                        echo "</tr>";
                      } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>



      <!-- Modal -->
      <form method="post" action="">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <input class="form-control" type="text" name="category_name" placeholder="Category Name" required>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" name="category_create_btn" class="btn btn-primary">Create</button>
                </div>

              </div>
            </div>

          </div>
        </div>
      </form>
    </div>

  </div>
  <div class="col-sm">

    <h4>All Services</h4>
    <div class="card">
      <div class="card-body">
        <div>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table class="table" id="myTable">
                  <thead>
                    <tr>
                      <td>SERVICE ID</td>
                      <td>SERVICE NAME</td>
                      <td>CATEGORY</td>
                      <td>COST</td>
                      <td>EDIT / DELETE</td>
                    </tr>
                  </thead>

                  <tbody>
                    <?php

                    foreach ($services as $service) {
                      echo "<tr>";
                      echo "<td>" . $service["service_ID"] . "</td>";
                      echo "<td>" . $service["service_name"] . "</td>";
                      echo "<td>" . $service["category_name"] . "</td>";
                      echo "<td>" . $service["cost"] . "</td>";
                      echo "                      <td>
                      <a href='#' class='btn btn-warning' data-toggle='modal'><i class='fa fa-pencil' aria-hidden='true'></i></a>
                      <a href='#' class='btn btn-danger' data-toggle='modal'><i class='fa fa-trash' aria-hidden='true'></i></a>
                    </td>";
                      echo "</tr>";
                    } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>


  </div>

</div>
</div>