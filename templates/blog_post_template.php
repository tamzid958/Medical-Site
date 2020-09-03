<?php
include('../includes/header.php');
require_once '../controller/Controller.php';
$post_id = $_REQUEST["id"];
$post = getPost($post_id);
?>

<body>

  <div class="jumbotron jumbotron-fluid single-blog-hero" style="background-image:linear-gradient(9deg, rgba(24,25,28,1) 0%, rgba(25,26,30,0.5578606442577031) 100%),url(/assets/images/uploaded_images/post_images/<?php echo $post["post_dir"] ?>)">
    <div class="container">
    </div>
  </div>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4 blog-post-tile"><?php echo $post["post_title"] ?></h1>
      <p class="lead blog-post-p">
        <?php echo $post["post_description"] ?>
      </p>
      <!-- AddToAny BEGIN -->
      <div class="a2a_kit a2a_kit_size_32 a2a_default_style blog-post-share">
        <a class="a2a_button_twitter"></a>
        <a class="a2a_button_email"></a>
        <a class="a2a_button_linkedin"></a>
      </div>
      <script async src="https://static.addtoany.com/menu/page.js"></script>
      <!-- AddToAny END -->
    </div>


  </div>



</body>

<?php
include('../includes/footer.php');
?>