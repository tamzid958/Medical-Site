<?php
include('includes/header.php');
require_once 'controller/Controller.php';
$posts = getAllPost();
?>

<body>


  <section>
    <div class="jumbotron jumbotron-fluid posts-hero">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="row ">
        <?php

        foreach ($posts as $post) {

          echo "<div class='col-sm-3'>";
          echo "<a href='templates/blog_post_template.php?id=" . $post["post_id"] . "'  name='id'>";
          echo "<div class='card single-blog-direct-loop'>";
          echo "<img src='../../assets/images/uploaded_images/post_images/" . $post["post_dir"] . "' class='card-img-top' alt=''>";
          echo "<div class='card-body'>";
          echo "<h5 class='card-title'>" . $post["post_title"] . "</h5>";
          echo "<p class='card-text'>" . $post["post_description"] . "</p>";
          echo " </div>
          </div>
          </a>
        </div>";
        } ?>

      </div>
    </div>
    </div>




</body>

<?php
include('includes/footer.php');
?>