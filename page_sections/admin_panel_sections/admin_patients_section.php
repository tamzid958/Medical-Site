<?php
require_once '../../controller/Controller.php';
$patients = getAllPatients();
?>
<div class="card">
    <div class="card-body">
        <div class="">
            <div class="row">
                <div class="col-md-10">
                    <h3 class="total-admin-badge">Patients <span class="badge badge-dark"><?php echo $_SESSION['patientsCounter'] ?></span> Total </h3>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary my-1" data-toggle="modal" data-target="#exampleModalLongpatient">Add New Patient</button>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table" id="myTable">
                                <thead>
                                    <tr>
                                        <td>#ID</td>
                                        <td>NAME</td>
                                        <td>PHONE</td>
                                        <td>EMAIL</td>
                                        <td></td>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    foreach ($patients as $patient) {

                                        echo "<tr>";
                                        echo "<td>" . $patient["id"] . "</td>";
                                        echo "<td>" . $patient["full_name"] . "</td>";
                                        echo "<td >" . $patient["phone"] . "</td>";
                                        echo "<td>" . $patient["email"] . "</td>";
                                        echo "<td>";
                                        echo "<button type='button' class='btn btn-outline-primary editPatient_btn' id=" . $patient["id"] . ">Edit</button>";
                                        echo "</td>";
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
    <div class="modal fade" id="exampleModalLongpatient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add New Patient</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="" method="post">
                            <input class="form-control form-control-lg" type="text" name="name" placeholder="Patient Name" required>
                            <br>
                            <input class="form-control form-control-lg" type="email" name="email" placeholder="Email Address" required>
                            <br>
                            <input class="form-control form-control-lg" type="tel" name="tel" placeholder="Phone Number" required>
                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="admin_patient_create" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleEditModalLongpatient">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Patient Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="" method="post">
                            <div class="patient_details">
                                <input type="hidden" name="id" id="patient_id" value="">
                                <input class="form-control form-control-lg" id="edit_name" type="text" name="name" value="" placeholder="Patient Name" required>
                                <br>
                                <input class="form-control form-control-lg" id="edit_mail" type="email" name="email" value="" placeholder="Email Address" required>
                                <br>
                                <input class="form-control form-control-lg" id="edit_tel" type="tel" name="tel" value="" placeholder="Phone Number" required>
                                <br>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="admin_patient_edit" class="btn btn-primary">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(".editPatient_btn").click(function() {
            var patient_id = $(this).attr("id");
            $.ajax({
                url: "../../controller/Controller.php",
                method: "post",
                dataType: "json",
                data: {
                    patient_id: patient_id,
                },
                success: function(data) {
                    $('#patient_id').val(data.id);
                    $('#edit_name').val(data.full_name);
                    $('#edit_mail').val(data.email);
                    $('#edit_tel').val(data.phone);
                    $("#exampleEditModalLongpatient").modal("show");

                }
            });
        });
    });
</script>