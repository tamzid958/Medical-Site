<?php
  include('../includes/header.php');
?>
<body>
    
<div class="jumbotron jumbotron-fluid single-doctor-hero" style="background-image:url(https://dummyimage.com/1920X1080/000/ffffff.png)">
  <div class="container">
  </div>
</div>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 doctor-post-title">Dummy Doctor Name</h1>
    <p class="lead doctor-post-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum massa vel enim feugiat gravida. Phasellus velit risus, euismod a lacus et, mattis condimentum augue. Vivamus fermentum ex quis imperdiet sodales. Sed aliquam nibh tellus, a rutrum turpis pellentesque ac. Nulla nibh libero, tincidunt cursus gravida ut, sodales ut magna. Sed sodales libero sapien, et rutrum mi placerat eget. Nulla vestibulum lacus vel eros eleifend molestie.

Sed rutrum, libero non pretium tristique, arcu mi sollicitudin ex, quis venenatis orci tellus vel dolor. Donec gravida, dolor ut auctor facilisis, enim dolor pellentesque lectus, nec vehicula nibh risus ac leo. Mauris volutpat aliquam tellus nec rhoncus. Aliquam et nibh pulvinar, sodales nibh et, pretium urna. Vivamus quam augue, maximus in consequat imperdiet, iaculis non nibh. Aliquam erat volutpat. Curabitur venenatis massa sed lacus tristique, non auctor nisl sodales. Sed ultricies lacus ut libero faucibus fringilla. Ut nisi tellus, posuere vel mattis nec, convallis a metus. Nullam elementum molestie felis nec lobortis. Cras at justo eu elit semper tempor sed quis orci. In risus magna, malesuada vel elementum ut, finibus et nunc.

Cras dapibus ullamcorper dictum. Vivamus nec erat placerat felis scelerisque porttitor in ac turpis. In nec imperdiet turpis. Suspendisse quis orci ut orci pulvinar eleifend. Nulla eu mattis ipsum. Integer eget sagittis nulla. Praesent consectetur lacus et maximus eleifend. Integer non lacus dui. Mauris tortor diam, laoreet quis commodo vitae, sodales vel augue.

</p>
<button type="button" class="btn btn-primary doctor-mail">sample@email.com</button>
<button type="button" class="btn btn-success doctor-tel">+19283746812</button>
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


<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="107467831029040"
  theme_color="#00c4cc">
      </div>


</body>

<?php
  include('../includes/footer.php');
?>
