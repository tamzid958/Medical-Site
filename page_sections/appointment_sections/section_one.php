<?php
require_once './controller/Controller.php';
$patients = getAllPatients();
$doctors = getAllDoctors();
$categories = getAllCategory();
$services = getAllService();
$appointments = getAllAppointments();
?>

<section>
  <div class="jumbotron jumbotron-fluid appointment-hero">
    <div class="container">


      <div class="container">
        <div class="row">
          <div class="col-sm-6 appointment-form-left">




          </div>
          <div class="col-sm-6 appointment-form-right">
            <form>
              <div class="form-row appointment-form">
                <h2 class="appointment-head">Book an Appointment</h2>
                <div class="col-md-6">
                  <select class="custom-select mr-sm-2 form-trans" id="category_select_patient" required>
                    <option value="" disabled selected>Select Category</option>
                    <?php
                    if ($categories > 0) {

                      foreach ($categories as $category) {
                        echo "<option>" . $category["category_name"] . "</option>";
                      }
                    } ?>
                  </select>
                  </select>
                </div>
                <div class="col-md-6">
                  <select class="custom-select mr-sm-2 form-trans" id="service_select_patient" required>
                    <option value="" id="select_category_first" disabled selected>Select Service</option>

                  </select>
                  </select>
                </div>
                <div class="col-md-6">
                  <select class="custom-select mr-sm-2 form-trans" id="doctor_select_patient" required>
                    <option value="" id="select_service_first" disabled selected>Select Doctor</option>

                  </select>

                </div>

                <div class="col-md-6">
                  <input type="text" class="form-control form-trans" placeholder="Full name" id="patient_name_patient" required>
                </div>
                <div class="col-md-6">
                  <input type="tel" class="form-control form-trans" placeholder="Phone number" id="phone_number_patient" required>
                </div>

                <div class="col-md-6">
                  <input type="email" class="form-control form-trans" placeholder="Email Address" id="email_patient" required>
                </div>
                <div class="col-md-6">
                  <input type="date" class="form-control form-trans" placeholder="Date" id="date_patient" required>
                </div>
                <div class="col-md-6">
                  <input type="time" class="form-control form-trans" name="time" id="time_patient" required>
                </div>
                <div class="col-md-6">

                  <button type="button" name="payBtn" class="btn btn-outline-light" id="payBtn">Book an Appointment</button>
                  <button type="button" name="unavailable" class="btn btn-outline-light" id="unavailable" disabled hidden>This time is not available for this doctor</button>
                </div>

            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>


  <!-- Modal -->
  <div class="modal fade pay-modal" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Proccess Payment <span class=lead>Powered by T&C <span></h4>
        </div>
        <div class="modal-body">
          <p class="lead"> Your bill : <span>$<b id="service_cost">00.00</b><span> <br>
                Please complete your payment at first. <br>
                Payment Number: 018999999127
          </P> <br>
          <input type="number" class="form-control pay-form" id="patient_payment_number" placeholder="Payment Number" required> <br>
          <input type="text" class="form-control pay-form" id="patient_trans_id" placeholder="Transaction ID" required>



        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" value="1" class="btn btn-primary" name="continuebtn_index" id="continuebtn">Pay</button>
        </div>
      </div>
    </div>
  </div>


  <style>
    .pay-modal {
      z-index: 99999999999999999999;
    }

    .pay-form::placeholder {
      color: black !important;
    }
  </style>



  <script>
    $('document').ready(function() {

      $('#time_patient').on('change', function() {



        var doctor_checker = $("#doctor_select_patient").val();
        var date_checker = $("#date_patient").val();
        var time_checker = $("#time_patient").val();

        $.ajax({
            url: "./controller/Controller.php",
            method: "post",
            dataType: "json",
            data: {
              doctor_checker: doctor_checker,
              date_checker: date_checker,
              time_checker: time_checker
            },
            success: function(data) {

              console.log(typeof(data.count), data.count);

              if (data.count != "0") {
                $('#payBtn').attr("disabled", "disabled");
                $('#payBtn').attr("hidden", "hidden");
                $('#unavailable').removeAttr("hidden");

              } else {
                $("#payBtn").removeAttr("disabled");
                $('#payBtn').removeAttr("hidden");
                $('#unavailable').attr("hidden", "hidden");
              }
            }
          }

        );
      });

















      var i = 0;
      var category_val;
      var service_val;
      document.getElementById('service_select_patient').disabled = true;
      document.getElementById('select_category_first').innerHTML = "Select Category At First";

      document.getElementById('doctor_select_patient').disabled = true;
      document.getElementById('select_service_first').innerHTML = "Select Service At First";

      var counter1 = 0;
      $('#category_select_patient').on('change', function() {
        category_val = $(this).val();
        counter1++;

        if (counter1 > 1) {
          location.reload();
          return false;
        }

        if (category_val) {
          //console.log(category_val);
          $.ajax({
            url: "./controller/Controller.php",
            method: "post",
            dataType: "json",
            data: {
              category_val: category_val
            },
            success: function(data) {

              document.getElementById('service_select_patient').disabled = false;
              document.getElementById('select_category_first').innerHTML = "Select Service";


              $('#service_select_patient').find('option').not(':selected').remove();
              if (data != null && data.length > 0) {
                for (i = 0; i < data.length; i++) {
                  var opt = data[i].service_name;
                  document.getElementById('service_select_patient').innerHTML += "<option>" + opt + "</option>";
                  //console.log(data[i].service_name);
                }
              } else {
                var opt = data.service_name;
                document.getElementById('service_select_patient').innerHTML += "<option>" + opt + "</option>";
              }

            }

          });




        }

      });

      var counter2 = 0;

      $('#service_select_patient').on('change', function() {
        service_val = $(this).val();

        counter2++;

        if (counter2 > 1) {
          location.reload();
          return false;
        }


        if (service_val) {

          $.ajax({
            url: "./controller/Controller.php",
            method: "post",
            dataType: "json",
            data: {
              service_val: service_val
            },
            success: function(data) {
              document.getElementById('doctor_select_patient').disabled = false;
              document.getElementById('select_service_first').innerHTML = "Select Doctor";

              $('#doctor_select_patient').find('option').not(':selected').remove();


              if (data != null && data.length > 0) {
                for (i = 0; i <= data.length; i++) {
                  var opt = data[i].full_name;
                  document.getElementById('doctor_select_patient').innerHTML += "<option>" + opt + "</option>";
                  //console.log(data[i].full_name);
                }
              } else {
                var opt = data.full_name;
                document.getElementById('doctor_select_patient').innerHTML += "<option>" + opt + "</option>";

              }

            }

          });
        }
      });










      $('#payBtn').on('click', function(e) {

        e.preventDefault();

        var category = $("#category_select_patient").val();
        var service = $("#service_select_patient").val();
        var doctor = $("#doctor_select_patient").val();
        var patient_name = $("#patient_name_patient").val();
        var phone_number = $("#phone_number_patient").val();
        var email = $("#email_patient").val();
        var date = $("#date_patient").val();
        var time = $("#time_patient").val();


        $.ajax({
          url: "./controller/Controller.php",
          method: "post",
          dataType: "json",
          data: {
            service: service,
          },
          success: function(data) {
            //console.log(data.cost);
            document.getElementById('service_cost').innerHTML = data.cost;
            //$("#service_cost").innerHTML(data.cost);
            $('#myModal').modal('toggle');
          }
        });

        $('#continuebtn').click(function() {
          var payment_verify = $('#continuebtn').val();
          var payment_number = $('#patient_payment_number').val();
          var trans_id = $('#patient_trans_id').val();


          $.ajax({
            url: "./controller/Controller.php",
            method: "post",
            data: {
              category: category,
              service: service,
              doctor: doctor,
              patient_name: patient_name,
              phone_number: phone_number,
              email: email,
              date: date,
              time: time,
              payment_verify: payment_verify,
              payment_number: payment_number,
              trans_id: trans_id
            },
            success: function(data) {



              $('form').submit();
              //console.log(category, service, doctor, patient_name, phone_number, email, date, time);
              //console.log(payment_verify, payment_number, trans_id);

            }




          })


        });



      });

    });
  </script>
</section>