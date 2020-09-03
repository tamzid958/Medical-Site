<?php
require_once './controller/Controller.php';
$doctors = getAllDoctors();


?>


<section class="doctor-section">
  <div class="container doctor-container">
    <h6 class="prof">Professionals
      <h4>We Care About You</h4>
    </h6>
    <div class="row">
      <?php
      $limit = 0;
      if ($doctors > 0) {
        foreach ($doctors as $doctor) {
          if ($limit < 3) {
            echo "<div class='col-sm-4'>";
            echo "<a href='templates/doctor_profile_template.php?id=" . $doctor["id"] . "'  name='id'>";
            echo "<div class='card single-doctor-direct-loop'>";
            echo " <img src='../../assets/images/uploaded_images/doctor_images/" . $doctor["profile_picture"] . "' class='card-img-top' alt=''>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>" . $doctor["full_name"] . "</h5>";
            $truncated = (strlen($doctor["description"]) > 95) ? substr($doctor["description"], 0, 95) . '...' : $doctor["description"];
            echo "<p class='card-text loop-text'>" . $truncated .  "</p>";
            echo "<br><br>";
            echo " <a href='tel:" . $doctor["phone"] . " ' class='card-link'>" . $doctor["phone"] .  "</a>";
            echo " <a href='mailto: " . $doctor["email"] . " ' class='card-link'>" . $doctor["email"] .  "</a>";
            echo "</div>
             </div>
               </a>
             </div>
                ";
          }
          $limit++;
        }
      } ?>

    </div>
  </div>

</section>