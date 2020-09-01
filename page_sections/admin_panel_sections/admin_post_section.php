<?php
require_once '../../controller/Controller.php';
$posts = getAllPost();
?>
<div id="admin-new-service">

  <div id="left">

    <h3 class="total-admin-badge">Posts <span class="badge badge-light"><?php echo  $_SESSION['postCounter'] ?></span> Total </h3>

  </div>

  <div id="right">

    <a href="#" class="btn btn-primary btn-lg active admin-add-new-post-btn" role="button" aria-pressed="true" data-toggle="modal" data-target="#exampleModalLongpost"> + Add New Post </a>
  </div>




  <div class="modal fade" id="exampleModalLongpost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add New Post</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">

            <form action="" method="post">
              <img id="blah" src="https://dummyimage.com/450X300/cfcfcf.png" alt="" />

              <br><br>



              <div class="custom-file">

                <input type="file" class="custom-file-input" id="inputGroupFile02" name="post_feature_pic" placeholder="Featured Image" onchange="readURL(this);" required>
                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
              </div>

              <br><br>


              <input class="form-control form-control-lg" type="text" name="post_title" placeholder="Post Title" required>

              <br><br>

              <textarea id="" class="form-control form-control-lg" name="post_description" rows="5" cols="5" placeholder="Post Description" required></textarea>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="post_create" class="btn btn-primary">Publish</button>
              </div>

            </form>


          </div>

          <script>
            function readURL(input) {
              if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                  $('#blah')
                    .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
              }
            }
          </script>

        </div>

      </div>
    </div>
  </div>

</div>

<?php

foreach ($posts as $post) {
  echo "<div id='old-post-list'>
  <div id='left' class='post_admin_loop'>
  <div class='card' style='width: 18rem;'>";
  echo "<img src='https://dummyimage.com/300x300/cfcfcf.png' class='card-img-top' alt=''>";
  echo " <div class='card-body'>";
  echo "<h3>" . $post["post_title"] . "</h3>";
  echo "<a href='#' class='btn btn-warning' data-toggle='modal' data-target=''><i class='fa fa-pencil' aria-hidden='true'></i></a>";
  echo "<a href='#' class='btn btn-danger'><i class='fa fa-trash' aria-hidden='true'></i></a>";
  echo "</div>
  </div>
</div>
</div>";
} ?>