<?php
require_once '../../controller/Controller.php';
$patients = getAllPatients();
$doctors = getAllDoctors();
$categories = getAllCategory();
$services = getAllService();
$appointments = getAllAppointments();
?>

<div class="card">
    <div class="card-body">
        <div class="">
            <div class="row">
                <div class="col-md-10">
                    <h4 class="card-title">Appointments <span class="badge badge-dark"> <?php echo $_SESSION['appointmentCounter'] ?></span> Total </h4>

                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary my-1" data-toggle="modal" data-target="#appointModal">New Appointment </button>
                </div>
            </div>

        </div>
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option value="" disabled selected>Select Patient</option>

                        <?php
                        if ($patients > 0) {
                            foreach ($patients as $patient) {
                                echo "<option>" . $patient["full_name"] . "</option>";
                            }
                        } ?>


                    </select>

                    <br>
                </div>

            </div>

            <div class="row">

                <div class="col-md-4">
                    <input type="date" class="form-control form-trans" placeholder="Date">
                </div>
                <div class="col-md-4">
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option value="" disabled selected>Select Doctor</option>

                        <?php
                        if ($doctors > 0) {
                            foreach ($doctors as $doctor) {
                                echo "<option>" . $doctor["full_name"] . "</option>";
                            }
                        } ?>
                    </select>
                </div>
                <div class="col-md-4">
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option value="" disabled selected>Select Status</option>
                        <option>Approved</option>
                        <option>Pending</option>
                        <option>Cancelled</option>
                        <option>Rejected</option>
                        <option>Completed</option>
                    </select>
                </div>
            </div>

            <br>


            <div>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table" id="myTable">
                                <thead>
                                    <tr>
                                        <td>#ID</td>
                                        <td>PATIENT NAME</td>
                                        <td>ASSIGNED TO</td>
                                        <td>SERVICE</td>
                                        <td>DATE</td>
                                        <td>TIME</td>
                                        <td>STATUS</td>
                                        <td></td>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php
                                    if ($appointments > 0) {
                                        foreach ($appointments as $appointment) {
                                            echo "<tr>";
                                            echo "<td>" . $appointment["appointment_id"] . "</td>";
                                            echo "<td>" . $appointment["patient_name"] . "</td>";
                                            echo "<td>" . $appointment["doctor_name"] . "</td>";
                                            echo "<td>" . $appointment["service_service"] . "</td>";
                                            echo "<td>" . $appointment["service_date"] . "</td>";
                                            echo "<td>" . $appointment["service_time"] . "</td>";
                                            echo "<td>" . $appointment["service_status"] . "</td>";
                                            echo "<td>
                                        <button class='btn btn-outline-primary editAppointmentButton' data-toggle='modal' id=" . $appointment["appointment_id"] . ">Edit</button>
                                    </td>";
                                            echo "</tr>";
                                        }
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="appointModal" tabindex="-1" role="dialog" aria-labelledby="appointModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="appointModalLabel">New Appointment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post">
                    <div class="modal-body">

                        <select class="form-control" name="patient_name" required>
                            <option value="" disabled selected>Select Patient</option>
                            <?php
                            if ($patients > 0) {
                                foreach ($patients as $patient) {
                                    echo "<option>" . $patient["full_name"] . "</option>";
                                }
                            } ?>

                        </select>
                        <br>
                        <select class="form-control" name="service_category" id="category_select_patient" required>
                            <option value="" disabled selected>Select Category</option>
                            <?php
                            if ($categories > 0) {
                                foreach ($categories as $category) {
                                    echo "<option>" . $category["category_name"] . "</option>";
                                }
                            } ?>
                        </select>
                        <br>
                        <select class="form-control" name="service_service" id="service_select_patient" required>
                            <option value="" id="select_category_first" disabled selected>Select Service</option>

                        </select>
                        <br>
                        <select class="form-control" name="doctor_name" id="doctor_select_patient" required>
                            <option value="" id="select_service_first" disabled selected>Select Doctor</option>

                        </select>

                        <br>
                        <input type="date" class="form-control form-trans" placeholder="Date" name="date" id="date_patient" required>
                        <br>
                        <input type="time" class="form-control form-trans" name="time" placeholder="Time" id="time_patient" required>
                        <br>
                        <select class="form-control" name="status">
                            <option value="" disabled selected>Select Status</option>
                            <option>Approved</option>
                            <option>Pending</option>
                            <option>Cancelled</option>
                            <option>Rejected</option>
                            <option>Completed</option>
                        </select>

                        <br>
                        <input type="tel" class="form-control form-trans" placeholder="Payment Number" name="payment_number" required> <br>
                        <input type="text" class="form-control form-trans" placeholder="Transaciton ID" name="transaction_id" required>
                        <br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="unavailable">Cancel</button>
                            <button type="submit" name="appointment_create_admin" class="btn btn-primary" id="payBtn">Create</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>







<div class="modal fade" id="appointEditModal" tabindex="-1" role="dialog" aria-labelledby="appointModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="appointModalLabel">Edit Appointment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <input type="hidden" name="appointment_edit_id" value="" id="appointment_edit_id" required>
                    <select class="form-control" name="patient_name_edit" value="" id="appointment_patient_name_edit" required>
                        <option value="" disabled selected>Select Patient</option>
                        <?php
                        if ($patients > 0) {
                            foreach ($patients as $patient) {
                                echo "<option>" . $patient["full_name"] . "</option>";
                            }
                        } ?>

                    </select>
                    <br>
                    <select class="form-control" name="appointment_service_category_edit" value="" id="appointment_service_category_edit" required>
                        <option value="" disabled selected>Select Category</option>
                        <?php
                        if ($categories > 0) {
                            foreach ($categories as $category) {
                                echo "<option>" . $category["category_name"] . "</option>";
                            }
                        } ?>
                    </select>
                    <br>
                    <select class="form-control" name="appointment_service_service_edit" value="" id="appointment_service_service_edit" required>
                        <option value="" id="select_category_first_edit" disabled selected>Select Service</option>
                        <?php
                        if ($services > 0) {
                            foreach ($services  as $service) {
                                echo "<option>" . $service["service_name"] . "</option>";
                            }
                        } ?>

                    </select>
                    <br>
                    <select class="form-control" name="appointment_doctor_name_edit" value="" id="appointment_doctor_name_edit" required>
                        <option value="" id="select_service_first_edit" disabled selected>Select Doctor</option>
                        <?php
                        if ($doctors > 0) {
                            foreach ($doctors  as $doctor) {
                                echo "<option>" . $doctor["full_name"] . "</option>";
                            }
                        } ?>
                    </select>

                    <br>
                    <input type="date" class="form-control form-trans" placeholder="Date" value="" name="appointment_date_edit" id="appointment_date_edit" required readonly>
                    <br>
                    <input type="time" class="form-control form-trans" name="appointment_time_edit" value="" id="appointment_time_edit" placeholder="Time" required readonly>
                    <br>
                    <select class="form-control" name="appointment_status_edit" id="appointment_status_edit">
                        <option value="" disabled selected>Select Status</option>
                        <option>Approved</option>
                        <option>Pending</option>
                        <option>Cancelled</option>
                        <option>Rejected</option>
                        <option>Completed</option>
                    </select>

                    <br>
                    <input type="tel" class="form-control form-trans" placeholder="Payment Number" value="" name="appoint_payment_number_edit" id="appoint_payment_number_edit" required> <br>
                    <input type="text" class="form-control form-trans" placeholder="Transaciton ID" value="" name="appointment_transaction_id_edit" id="appointment_transaction_id_edit" required>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="appointment_update_admin" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {


        $('#time_patient').on('change', function() {



            var doctor_checker = $("#doctor_select_patient").val();
            var date_checker = $("#date_patient").val();
            var time_checker = $("#time_patient").val();

            $.ajax({
                    url: "../../controller/Controller.php",
                    method: "post",
                    dataType: "json",
                    data: {
                        doctor_checker: doctor_checker,
                        date_checker: date_checker,
                        time_checker: time_checker
                    },
                    success: function(data) {



                        if (data.count != "0") {
                            $('#payBtn').attr("disabled", "disabled");
                            $('#payBtn').removeClass("btn-primary");
                            $('#payBtn').addClass("btn-danger");
                            $('#payBtn').text("This time is not available for this doctor");
                        } else {
                            $("#payBtn").removeAttr("disabled");
                            $('#payBtn').removeClass("btn-danger");
                            $('#payBtn').addClass("btn-primary");
                            $('#payBtn').text("Create");
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
                    url: "../../controller/Controller.php",
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
                    url: "../../controller/Controller.php",
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


        $(".editAppointmentButton").click(function() {
            var appointment_id = $(this).attr("id");
            $.ajax({
                url: "../../controller/Controller.php",
                method: "post",
                dataType: "json",
                data: {
                    appointment_id: appointment_id,
                },
                success: function(data) {
                    $('#appointment_edit_id').val(data.appointment_id);
                    $('#appointment_patient_name_edit').val(data.patient_name);
                    $('#appointment_service_category_edit').val(data.service_category);
                    $('#appointment_service_service_edit').val(data.service_service);
                    $('#appointment_doctor_name_edit').val(data.doctor_name);
                    $('#appointment_date_edit').val(data.service_date);
                    $('#appointment_time_edit').val(data.service_time);
                    $('#appointment_status_edit').val(data.service_status);
                    $('#appoint_payment_number_edit').val(data.payment_number);
                    $('#appointment_transaction_id_edit').val(data.transaction_id);


                    $("#appointEditModal").modal("show");

                }
            });
        });
    });
</script>