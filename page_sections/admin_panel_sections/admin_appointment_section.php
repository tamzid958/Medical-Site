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
                    <h4 class="card-title">OSCA | Appointment </h4>

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
                        foreach ($patients as $patient) {
                            echo "<option>" . $patient["full_name"] . "</option>";
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
                        foreach ($doctors as $doctor) {
                            echo "<option>" . $doctor["full_name"] . "</option>";
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


                                    foreach ($appointments as $appointment) {
                                        echo "<tr>";
                                        echo "<td>" . $appointment["appointment_id"] . "</td>";
                                        echo "<td>" . $appointment["patient_name"] . "</td>";
                                        echo "<td>" . $appointment["doctor_name"] . "</td>";
                                        echo "<td>" . $appointment["service_service"] . "</td>";
                                        echo "<td>" . $appointment["service_date"] . "</td>";
                                        echo "<td>" . $appointment["service_time"] . "</td>";
                                        echo "<td>" . $appointment["service_status"] . "</td>";
                                        echo "
                                        <td>
                                        <button class='btn btn-outline-primary editButton' data-toggle='modal' data-target=''>Edit</button>
                                    </td>";
                                        echo "</tr>";
                                    } ?>

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

                        <select class="form-control" name="patient_name">
                            <option value="" disabled selected>Select Patient</option>
                            <?php
                            foreach ($patients as $patient) {
                                echo "<option>" . $patient["full_name"] . "</option>";
                            } ?>

                        </select>
                        <br>
                        <select class="form-control" name="service_category">
                            <option value="" disabled selected>Select Category</option>
                            <?php
                            foreach ($categories as $category) {
                                echo "<option>" . $category["category_name"] . "</option>";
                            } ?>
                        </select>
                        <br>
                        <select class="form-control" name="service_service">
                            <option value="" disabled selected>Select Service</option>
                            <?php

                            foreach ($services as $service) {
                                echo "<option>" . $service["service_name"] . "</option>";
                            } ?>

                        </select>
                        <br>
                        <select class="form-control" name="doctor_name">
                            <option value="" disabled selected>Select Doctor</option>

                            <?php
                            foreach ($doctors as $doctor) {
                                echo "<option>" . $doctor["full_name"] . "</option>";
                            } ?>
                        </select>

                        <br>
                        <input type="date" class="form-control form-trans" placeholder="Date" name="date">
                        <br>
                        <input type="time" class="form-control form-trans" name="time" placeholder="Time" />
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
                        <input type="tel" class="form-control form-trans" placeholder="Payment Number" name="payment_number"> <br>
                        <input type="text" class="form-control form-trans" placeholder="Transaciton ID" name="transaction_id">
                        <br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" name="appointment_create_admin" class="btn btn-primary">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>