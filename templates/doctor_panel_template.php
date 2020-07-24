<?php
  include('../includes/header.php');
?>
<body>
    
<div class="jumbotron jumbotron-fluid single-patient-hero" style="background-image:url(/assets/images/view-of-operating-room-247786.jpg)">
</div>


  <div class="container">
   
  <h1 class="display-4 patient-post-title ">Dummy Doctor Name</h1>

  <div class="container d-flex justify-content-left patient-card">
    <div class="card p-3 patient-single-card">
        <div class="d-flex flex-row justify-content-between text-align-center"> <img src="/assets/images/black_logo.png"></div>
        <p class="text-dark">Dummy Appointment Number and Name</p>
        <div class="card-bottom pt-3 px-3 mb-2 patient-single-card-bottom">
            <div class="d-flex flex-row justify-content-between text-align-center">
               
                    <p> <span class="text-white">Date: 12 Dec '20 || Time: 12:30 PM</span> <button type="button" class="btn btn-danger cancel-power-doc-btn">Cancel</button></p>
                   
            </div>
         </div>
       </div>

    </div>
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
