<?php
require_once '../../controller/Controller.php';
$categories = getAllCategory();
$services = getAllService();
?>
<div style="position: absolute; z-index:100;" role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="false">
  <div class="toast-header">
    <strong class="mr-auto">Message</strong>
    <small>1 sec ago</small>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="toast-body">
    Successfully Deleted
  </div>
</div>

<div id="admin-new-service">

  <div id="left">

    <h3 class="total-admin-badge">Services <span class="badge badge-dark"><?php echo  $_SESSION['serviceCounter'] ?></span> Total </h3>

  </div>


  <div id="right">
    <div class="container">

      <div class="row">
        <div class="col-md-6">
          <a class="btn btn-primary  active admin-add-new-service-btn" role="button" aria-pressed="true" data-toggle="modal" data-target="#exampleModalLong"> + Add New Service </a>
          <br><br>
        </div>
        <div class="col-md-6">
          <a class="btn btn-primary active" data-toggle="modal" role="button" aria-pressed="true" data-target="#exampleModal">
            Create New Category
          </a>
        </div>
      </div>

    </div>


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
              if ($categories > 0) {

                foreach ($categories as $category) {
                  echo "<option>" . $category["category_name"] . "</option>";
                }
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
                  <table class="table">
                    <thead>
                      <tr>
                        <td>CATEGORY ID</td>
                        <td>CATEGORY NAME</td>
                        <td>EDIT / DELETE</td>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                      if ($categories > 0) {

                        foreach ($categories as $category) {
                          echo "<tr>";
                          echo " <td>" . $category["category_id"] . "</td>";
                          echo "<td>" . $category["category_name"] . "</td> ";
                          echo "<td>
                        <button type='button' class='btn btn-warning category_edit' data-toggle='modal' id=" . $category["category_id"] . "><i class='fa fa-pencil' aria-hidden='true'></i></button>
                        <button type='button' class='btn btn-danger category_delete_btn' id=" . $category["category_id"] . "><i class='fa fa-trash' aria-hidden='true'></i></button>
                      </td>";
                          echo "</tr>";
                        }
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
                <table class="table">
                  <thead>
                    <tr>
                      <td>SERVICE ID</td>
                      <td>SERVICE NAME</td>
                      <td>CATEGORY</td>
                      <td>COST</td>
                      <td>EDIT / DELETE</td>
                    </tr>
                  </thead>

                  <tbody id="myTable">
                    <?php
                    if ($services > 0) {
                      foreach ($services as $service) {
                        echo "<tr>";
                        echo "<td>" . $service["service_ID"] . "</td>";
                        echo "<td>" . $service["service_name"] . "</td>";
                        echo "<td>" . $service["category_name"] . "</td>";
                        echo "<td>$ " . $service["cost"] . "</td>";
                        echo "                      <td>
                      <button type='button' class='btn btn-warning edit_service_btn' id=" . $service["service_ID"] . " data-toggle='modal'><i class='fa fa-pencil' aria-hidden='true'></i></button>
                      <button type='button' class='btn btn-danger delete_service_btn' id=" . $service["service_ID"] . "><i class='fa fa-trash' aria-hidden='true'></i></button>
                    </td>";
                        echo "</tr>";
                      }
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


<div class="modal fade" id="exampleeditCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Category Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="">

          <input type="hidden" id="category_edit_id" name="id" value="" required>
          <input class="form-control" id="category_edit_name" type="text" name="category_name" value="" placeholder="Category Name" required>


          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="category_update_btn" class="btn btn-primary">Edit</button>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>





<div class="modal fade" id="exampleeditServiceModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Service Detials</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <input type="hidden" name="service_edit_id" id="service_edit_id" value="">
          <input class="form-control" type="text" id="service_edit_name" value="" name="service_edit_name" placeholder="Service Name" required>
          <br>
          <select class="form-control" id="service_edit_category" value="" name="service_edit_category" required>
            <option value="" disabled selected>Select Category</option>
            <?php
            if ($services > 0) {
              foreach ($categories as $category) {
                if ($category["category_name"] == $service["category_name"]) {
                  echo "<option selected>" . $category["category_name"] . "</option>";
                } else {
                  echo "<option>" . $category["category_name"] . "</option>";
                }
              }
            } ?>

          </select>

          <br>

          <input class="form-control" id="service_edit_cost" name="service_edit_cost" type="number" placeholder="Cost" required>


          <br>


          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="service_update_btn" class="btn btn-primary">Edit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>









<script>
  $(document).ready(function() {
    $(".category_edit").click(function() {
      var category_id = $(this).attr("id");
      $.ajax({
        url: "../../controller/Controller.php",
        method: "post",
        dataType: "json",
        data: {
          category_id: category_id,
        },
        success: function(data) {
          $('#category_edit_id').val(data[0].category_id);
          $('#category_edit_name').val(data[0].category_name);
          $("#exampleeditCategoryModal").modal("show");
        }
      });
    });



    $(".category_delete_btn").click(function() {
      var category_delete_id = $(this).attr("id");
      $.ajax({
        url: "../../controller/Controller.php",
        method: "post",
        data: {
          category_delete_id: category_delete_id,
        },
        success: function(data) {
          $('.toast').toast('show');
          return false;
        }
      });
    });

    $(".edit_service_btn").click(function() {
      var service_id = $(this).attr("id");
      $.ajax({
        url: "../../controller/Controller.php",
        method: "post",
        dataType: "json",
        data: {
          service_id: service_id,
        },
        success: function(data) {
          //console.log(service_id);
          $('#service_edit_id').val(data[0].service_ID);
          $('#service_edit_name').val(data[0].service_name);
          $('#service_edit_category').val(data[0].category_name);
          $('#service_edit_cost').val(data[0].cost);
          $("#exampleeditServiceModal").modal("show");
        }
      });
    });





    $(".delete_service_btn").click(function() {
      var service_delete_id = $(this).attr("id");
      $.ajax({
        url: "../../controller/Controller.php",
        method: "post",
        data: {
          service_delete_id: service_delete_id,
        },
        success: function(data) {
          $('.toast').toast('show');
          return false;
        }
      });
    });



  });
</script>