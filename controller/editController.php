<?php
require_once 'config.inc.php';
$output = '';
if (isset($_POST["patient_id"])) {
    editPatient($_POST["patient_id"]);
    echo $output;
}
function editPatient($patient_id)
{
    $query = "SELECT * FROM user WHERE id='$patient_id'";
    $patient_details = getArray($query);
    $output = '
    <input type="text" name="id" value="' . $patient_details["id"] . '">;
    <input class="form-control form-control-lg" id="edit_name" type="text" name="name" value="' . $patient_details["full_name"] . '" placeholder="Patient Name" required>
    <br>
    <input class="form-control form-control-lg" id="edit_mail" type="email" name="email" value="' . $patient_details["email"] . '" placeholder="Email Address" required>
    <br>
    <input class="form-control form-control-lg" id="edit_tel" type="tel" name="tel" value="' . $patient_details["phone"] . '" placeholder="Phone Number" required>
    <br>       
    ';
    return $output;
}
