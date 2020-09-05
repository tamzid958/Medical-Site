<?php
include('../includes/header.php');
require_once '../controller/Controller.php';

if ($_SESSION["logged_in"] && $_REQUEST["id"] && $_SESSION['user_Type'] == 'patient') {
  $patient_id = $_REQUEST["id"];
  $patient = getPatient($patient_id);
  $patient_appointments = getPatientAppointments($patient_id);
  getPatientNewAppointments($patient_id);
} else {
  header("Location:/login.php");
  exit();
}
?>

<body>

  <div class="jumbotron jumbotron-fluid single-patient-hero" style="background-image:url(/assets/images/view-of-operating-room-247786.jpg)">
  </div>


  <div class="container">

    <h1 class="display-4 patient-post-title "><?php echo $patient["full_name"] ?>




      <button type="button" class="btn btn-info btn-user-new">
        New <span class="badge badge-light"><?php echo $_SESSION['pappointmentNewCounter'] ?></span>
      </button>

      <button type="button" class="btn btn-success btn-user-completed">
        Completed <span class="badge badge-light"><?php echo $_SESSION['pappointmentCompletedCounter'] ?></span>
      </button>

      <button type="button" class="btn btn-danger btn-user-cancelled">
        Cancelled <span class="badge badge-light"><?php echo $_SESSION['pappointmentCancelledCounter']  ?></span>
      </button>

      <button type="button" class="btn btn-dark btn-secondary btn-settings-user">Settings</button>
      <button type="button" class="btn btn-dark btn-logout">Log Out</button>


    </h1>

    <div id="user-panel-switcher">


      <div class="container d-flex justify-content-left patient-card">
        <div class="row">
          <?php
          if ($patient_appointments > 0) {

            foreach ($patient_appointments as $patient_appointment) {
              echo "<div class='col-sm-6'>";
              echo "<div class='card p-3 patient-single-card'>";
              echo " <div class='d-flex flex-row justify-content-between text-align-center'> <img src='/assets/images/black_logo.png'></div>";
              echo "<p class='text-dark'> #ID- " . $patient_appointment["appointment_id"] . "<br>
          <span class='text-dark'> #STATUS- " . $patient_appointment["service_status"] . "</span> 
           <span class='text-dark'> #SERVICE- " . $patient_appointment["service_service"] . "</span> <br>
          <span class='text-dark'>#DOCTOR NAME- " . $patient_appointment["doctor_name"] . "</span> </p>";
              echo " <div class='card-bottom pt-3 px-3 mb-2 patient-single-card-bottom'>
          <div class='d-flex flex-row justify-content-between text-align-center'>";

              if ($patient_appointment["service_status"] === "Approved") {
                echo "  <p> <span class='text-white'> Date: " . $patient_appointment["service_date"] . " || Time: " . $patient_appointment["service_time"] .    " <br>         
            </span> <button type='button' class='btn btn-danger cancel-power-p-btn' value='Cancelled' id=" . $patient_appointment["appointment_id"] . ">Cancel</button>
            <button type='button' class='btn btn-success complete-power-p-btn' value='Completed' id=" . $patient_appointment["appointment_id"] . ">Mark As Complete</button>
            </p>";
              } else if ($patient_appointment["service_status"] === "Completed") {
                echo "  <p> <span class='text-white'> Date: " . $patient_appointment["service_date"] . " || Time: " . $patient_appointment["service_time"] .    "</p>";
              } else if ($patient_appointment["service_status"] === "Cancelled") {
                echo "  <p> <span class='text-white'> Date: " . $patient_appointment["service_date"] . " || Time: " . $patient_appointment["service_time"] .    "</p>";
              } else if ($patient_appointment["service_status"] === "Rejected") {
                echo "  <p> <span class='text-white'> Date: " . $patient_appointment["service_date"] . " || Time: " . $patient_appointment["service_time"] .    " <br>
            </span> <button type='button' class='btn btn-warning cancel-power-doc-btn'>Pending</button>
            </p>";
              } else {
                echo "  <p> <span class='text-white'> Date: " . $patient_appointment["service_date"] . " || Time: " . $patient_appointment["service_time"] .    " <br>
            </span> <button type='button' class='btn btn-info cancel-power-doc-btn'>Decision Pending</button>
            </p>";
              }

              echo "  </div></div>
          </div>
        </div>";
            }
          } ?>
        </div>
      </div>



    </div>




  </div>

  </div>




</body>



<?php
include('../includes/footer.php');
?>

<script>
  $(document).ready(function() {
    var appointment_status_p;


    $('.cancel-power-p-btn').click(function() {
      appointment_status_p = $('.cancel-power-p-btn').val();
      var appointment_id_p_side = $(this).attr("id");
      console.log(appointment_status_p);


      $.ajax({
        url: "../controller/Controller.php",
        method: "post",
        data: {
          appointment_status_p: appointment_status_p,
          appointment_id_p_side: appointment_id_p_side,
        },
        success: function(data) {

          //alert("Sucessfully Deleted");
          location.reload();
          return false;
        }
      });
    });


    $('.complete-power-p-btn').click(function() {
      appointment_status_p = $('.complete-power-p-btn').val();
      var appointment_id_p_side = $(this).attr("id");
      $.ajax({
        url: "../controller/Controller.php",
        method: "post",
        data: {
          appointment_status_p: appointment_status_p,
          appointment_id_p_side: appointment_id_p_side,
        },
        success: function(data) {
          location.reload();
          return false;
        }
      });
    });






  });
</script>