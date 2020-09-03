<?php
include('../includes/header.php');
require_once '../controller/Controller.php';
$doctor_id = $_REQUEST["id"];
$doctor = getDoctor($doctor_id);
$doctor_appointments = getDoctorAppointments($doctor_id);
getDoctorNewAppointments($doctor_id);
?>

<body>

  <div class="jumbotron jumbotron-fluid single-patient-hero" style="background-image:url(/assets/images/view-of-operating-room-247786.jpg)">
  </div>


  <div class="container">

    <h1 class="display-4 patient-post-title "><?php echo $doctor["full_name"] ?>




      <button type="button" class="btn btn-info btn-doctor-new">
        New <span class="badge badge-light"><?php echo $_SESSION['appointmentNewCounter'] ?></span>
      </button>

      <button type="button" class="btn btn-success btn-doctor-completed">
        Completed <span class="badge badge-light"><?php echo $_SESSION['appointmentCompletedCounter'] ?></span>
      </button>

      <button type="button" class="btn btn-danger btn-doctor-cancelled">
        Cancelled <span class="badge badge-light"><?php echo $_SESSION['appointmentCancelledCounter']  ?></span>
      </button>

      <button type="button" class="btn btn-dark btn-secondary btn-change-pass-doc">Settings</button>
      <button type="button" class="btn btn-dark btn-logout">Log Out</button>


    </h1>

    <div id="doctor-panel-switcher">



      <div class="container d-flex justify-content-left patient-card">
        <div class="row">
          <?php
          if ($doctor_appointments > 0) {
            foreach ($doctor_appointments as $doctor_appointment) {
              echo "<div class='col-sm-6'>";
              echo "<div class='card p-3 patient-single-card'>";
              echo " <div class='d-flex flex-row justify-content-between text-align-center'> <img src='/assets/images/black_logo.png'></div>";
              echo "<p class='text-dark'> #ID- " . $doctor_appointment["appointment_id"] . "<br>
          <span class='text-dark'> #STATUS- " . $doctor_appointment["service_status"] . "</span> 
           <span class='text-dark'> #SERVICE- " . $doctor_appointment["service_service"] . "</span> <br>
          <span class='text-dark'>#PATIENT NAME- " . $doctor_appointment["patient_name"] . "</span> </p>";
              echo " <div class='card-bottom pt-3 px-3 mb-2 patient-single-card-bottom'>
          <div class='d-flex flex-row justify-content-between text-align-center'>";

              if ($doctor_appointment["service_status"] === "Approved") {
                echo "  <p> <span class='text-white'> Date: " . $doctor_appointment["service_date"] . " || Time: " . $doctor_appointment["service_time"] .    " <br>         
            </span> <button type='button' class='btn btn-danger cancel-power-doc-btn' value='Rejected' id=" . $doctor_appointment["appointment_id"] . ">Reject</button>
            <button type='button' class='btn btn-success complete-power-doc-btn' value='Completed' id=" . $doctor_appointment["appointment_id"] . ">Mark As Complete</button>
            </p>";
              } else if ($doctor_appointment["service_status"] === "Completed") {
                echo "  <p> <span class='text-white'> Date: " . $doctor_appointment["service_date"] . " || Time: " . $doctor_appointment["service_time"] .    "</p>";
              } else if ($doctor_appointment["service_status"] === "Cancelled") {
                echo "  <p> <span class='text-white'> Date: " . $doctor_appointment["service_date"] . " || Time: " . $doctor_appointment["service_time"] .    "</p>";
              } else if ($doctor_appointment["service_status"] === "Rejected") {
                echo "  <p> <span class='text-white'> Date: " . $doctor_appointment["service_date"] . " || Time: " . $doctor_appointment["service_time"] .    " <br>
            </span> <button type='button' class='btn btn-warning cancel-power-doc-btn'>Pending</button>
            </p>";
              } else {
                echo "  <p> <span class='text-white'> Date: " . $doctor_appointment["service_date"] . " || Time: " . $doctor_appointment["service_time"] .    " <br>
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




</body>



<?php
include('../includes/footer.php');
?>

<script>
  $(document).ready(function() {
    var appointment_status;


    $('.cancel-power-doc-btn').click(function() {
      appointment_status = $('.cancel-power-doc-btn').val();
      var appointment_id_doc_side = $(this).attr("id");
      console.log(appointment_status);


      $.ajax({
        url: "../controller/Controller.php",
        method: "post",
        data: {
          appointment_status: appointment_status,
          appointment_id_doc_side: appointment_id_doc_side,
        },
        success: function(data) {

          //alert("Sucessfully Deleted");
          location.reload();
          return false;
        }
      });
    });


    $('.complete-power-doc-btn').click(function() {
      appointment_status = $('.complete-power-doc-btn').val();
      var appointment_id_doc_side = $(this).attr("id");
      $.ajax({
        url: "../controller/Controller.php",
        method: "post",
        data: {
          appointment_status: appointment_status,
          appointment_id_doc_side: appointment_id_doc_side,
        },
        success: function(data) {
          location.reload();
          return false;
        }
      });
    });






  });
</script>