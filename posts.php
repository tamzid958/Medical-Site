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
      <div class="row row-eq-height ">
        <?php
        if ($posts > 0) {
          foreach ($posts as $post) {

            echo "<div class='col-sm-3'>";
            echo "<div class='grid-loop'>";
            echo "<a href='templates/blog_post_template.php?id=" . $post["post_id"] . "'  name='id'>";
            echo "<div class='card single-blog-direct-loop'>";
            echo "<img src='../../assets/images/uploaded_images/post_images/" . $post["post_dir"] . "' class='card-img-top' alt=''>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>" . $post["post_title"] . "</h5>";
            $truncated = (strlen($post["post_description"]) > 95) ? substr($post["post_description"], 0, 95) . '...' : $post["post_description"];
            echo "<p class='card-text loop-text'>" . $truncated .  "</p>";
            echo " </div>
          </div>
          </a>
          </div>
        </div>";
          }
        } ?>

      </div>
    </div>
    </div>




</body>

<?php
include('includes/footer.php');
?>