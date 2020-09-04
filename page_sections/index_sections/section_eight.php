<?php
require_once './controller/Controller.php';
$patients = getAllPatients();
$doctors = getAllDoctors();
$categories = getAllCategory();
$services = getAllService();
$appointments = getAllAppointments();
?>
<section class="form-section">
  <div class="container form-container">
    <div class="row">
      <div class="col-sm-6">
        <form id="appointment_from">
          <div class="form-row">
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
              <button type="button" class="btn btn-outline-light" id="payBtn">Book an Appointment</button>
              <button type="button" name="unavailable" class="btn btn-outline-light" id="unavailable" disabled hidden>This time is not available for this doctor</button>
            </div>

        </form>
      </div>
    </div>
    <div class="col-sm-6">
      <h6 class="prof">FAQ
        <h4>Have some Questions?</h4>
      </h6>
      <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Collapsible Group Item #1
              </button>
            </h2>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Collapsible Group Item #2
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Collapsible Group Item #3
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</section>
<section class="brand-section">
  <h4 class="partner prof">Partners</h4>
  </h6>
  <ul class="brand brand-carousel section-padding owl-carousel">
    <li><a class="single-logo"><img src="/assets/images/black_logo.png"></a>
    <li><a class="single-logo"><img src="/assets/images/black_logo.png"></a>
    <li><a class="single-logo"><img src="/assets/images/black_logo.png"></a>
    <li><a class="single-logo"><img src="/assets/images/black_logo.png"></a>
    <li><a class="single-logo"><img src="/assets/images/black_logo.png"></a>
    <li><a class="single-logo"><img src="/assets/images/black_logo.png"></a>
  </ul>
</section>




<!-- Modal -->
<div class="modal fade pay-modal" id="myModal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <form>
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
          <button type="button" value="1" class="btn btn-primary" name="continuebtn_index" id="continuebtn">Pay</button>

        </div>

      </div>
    </form>
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
      console.log(counter1);
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
      console.log(counter2);
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
      if (category == null || category == "", service == null || service == "", doctor == null || doctor == "", phone_number == null || phone_number == "", email == null || email == "", date == null || date == "" || time == null || time == "") {

        return false;
      } else {


        $.ajax({
          url: "./controller/Controller.php",
          method: "post",
          dataType: "json",
          data: {
            service: service,
          },
          success: function(data) {
            console.log(data.cost);
            document.getElementById('service_cost').innerHTML = data.cost;

            $('#myModal').modal('toggle');
          }
        });
      }


      $('#continuebtn').click(function() {
        var payment_verify = $('#continuebtn').val();
        var payment_number = $('#patient_payment_number').val();
        var trans_id = $('#patient_trans_id').val();

        if (payment_number == null || payment_number == "", trans_id == null || trans_id == "", payment_verify == null || payment_verify == "") {
          return false;
        } else {
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
        }


      });



    });

  });
</script>