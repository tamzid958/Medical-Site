<?php
include('includes/header.php');
require_once 'controller/Controller.php';
$doctors = getAllDoctors();
?>

<body>


  <section>
    <div class="jumbotron jumbotron-fluid doctors-hero">
      <div class="container">
        <h1 class="display-4 about-hero-title">Our Doctors</h1>

      </div>
    </div>






    <div class="container">

      <div class="row">
        <?php

        foreach ($doctors as $doctor) {

          echo "<div class='col-sm-4'>";
          echo "<a href='templates/doctor_profile_template.php?id=" . $doctor["id"] . "'  name='id'>";
          echo "<div class='card single-doctor-direct-loop'>";
          echo " <img src='../../assets/images/uploaded_images/doctor_images/" . $doctor["profile_picture"] . "' class='card-img-top' alt=''>";
          echo "<div class='card-body'>";
          echo "<h5 class='card-title'>" . $doctor["full_name"] . "</h5>";
          echo "<p class='card-text'>" . $doctor["description"] .  "</p>";
          echo " <a href='#' class='card-link'>" . $doctor["phone"] .  "</a>";
          echo " <a href='#' class='card-link'>" . $doctor["email"] .  "</a>";
          echo "</div>
          </div>
          </a>
          </div>
          ";
        } ?>


      </div>
    </div>
    </div>
  </section>
</body>






</body>

<?php
include('includes/footer.php');
?>