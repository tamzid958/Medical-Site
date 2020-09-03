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
                    foreach ($categories as $category) {
                      echo "<option>" . $category["category_name"] . "</option>";
                    } ?>
                  </select>
                  </select>
                </div>
                <div class="col-md-6">
                  <select class="custom-select mr-sm-2 form-trans" id="service_select_patient" required>
                    <option value="" disabled selected>Select Service</option>
                    <?php

                    foreach ($services as $service) {
                      echo "<option>" . $service["service_name"] . "</option>";
                    } ?>

                  </select>
                  </select>
                </div>
                <div class="col-md-6">
                  <select class="custom-select mr-sm-2 form-trans" id="doctor_select_patient" required>
                    <option value="" disabled selected>Select Doctor</option>
                    <?php
                    foreach ($doctors as $doctor) {
                      echo "<option>" . $doctor["full_name"] . "</option>";
                    } ?>
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
                  <button type="button" class="btn btn-outline-light" id="payBtn">Book an Appointment</button>
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