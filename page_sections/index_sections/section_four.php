<?php
require_once './controller/Controller.php';
$posts = getAllPost();

?>
<section>

  <div class="container news-cour">
    <div class="row">
      <div class="col-sm side-news">
        <ul class="list-group list-group-flush news-cat">
          <li class="list-group-item cat-main-news">Featured News</li>
          <?php
          $limit = 0;
          if ($posts > 0) {
            foreach ($posts as $post) {
              if ($limit > 3 && $limit < 7) {
                echo "<a href='./templates/blog_post_template.php?id=" . $post["post_id"] . "'  name='id'>";
                echo " <li class='list-group-item'>" . $post["post_title"] . "</li>";
                echo "</a>";
              }
              $limit++;
            }
          } ?>
        </ul>
      </div>
      <div class="col-sm">

        <div class="container cour-news ">
          <div class="row  ">

            <?php
            $limit = 0;
            if ($posts > 0) {
              foreach ($posts as $post) {
                if ($limit < 3) {
                  echo "<div class='col-sm-4'>";
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
                $limit++;
              }
            } ?>

          </div>
        </div>
      </div>
</section>