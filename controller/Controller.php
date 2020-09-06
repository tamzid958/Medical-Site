<?php
require_once 'config.inc.php';

$err_invalid = "";
if (isset($_POST["register_btn"])) {
    duplicateSearch($_POST["email"]);
    if ($_SESSION['Duplicate'] > 0) {
        $err_invalid = "This Email is already registered.";
    } else {
        insertUser($_POST["name"], $_POST["email"], $_POST["tel"], $_POST["password"]);
        header("location: login.php");
    }
}
if (isset($_POST["admin_patient_create"])) {
    duplicateSearch($_POST["email"]);
    if ($_SESSION['Duplicate'] > 0) {
        echo "<script type='text/javascript'>";
        echo "alert('This Email is already registered.')";
        echo "</script>";
    } else {
        $password = randomPassword();
        insertUserWithoutPassword($_POST["name"], $_POST["email"], $_POST["tel"], $password);
    }
}

if (isset($_POST["create_doctor_btn"])) {
    duplicateSearch($_POST["doctor_email"]);
    if ($_SESSION['Duplicate'] > 0) {
        echo "<script type='text/javascript'>";
        echo "alert('This Email is already registered.')";
        echo "</script>";
    } else {
        $password = randomPassword();

        $file = $_FILES['doctor_pic'];

        $fileName = $_FILES['doctor_pic']['name'];
        $fileTmpName = $_FILES['doctor_pic']['tmp_name'];
        $fileError = $_FILES['doctor_pic']['error'];
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png');
        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = '../assets/images/uploaded_images/doctor_images/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);

                insertDoctorWithoutPassword($fileNameNew, $_POST["doctor_name"], $_POST["doctor_email"], $_POST["doctor_phone"], $_POST["doctor_category"], $_POST["doctor_service"], $_POST["doctor_description"], $password);
            } else {
                echo "Error Uploading File";
            }
        } else {
            echo "You cannot upload files of this type!";
        }




        //$target = "/assets/images/uploaded_images/" . basename($_FILES['doctor_pic']['name']);

    }
}

if (isset($_POST["forget_pass_btn"])) {
    forgotPassword($_POST["forget_mail"]);
    $err_invalid = "If the mail is correct, The password already sent to your mail";
}

if (isset($_POST["login_btn"])) {
    if (authenticate($_POST["email"], $_POST["password"])) {

        $id = $_SESSION['id'];
        if ($_SESSION['user_Type']  == "patient") {
            $_SESSION["logged_in"] = true;
            header("Location: templates/user_panel_template.php?id=$id");
        } else if ($_SESSION['user_Type']  == "doctor") {
            $_SESSION["logged_in"] = true;
            header("Location: templates/doctor_panel_template.php?id=$id");
        } else if ($_SESSION['user_Type']  == "admin") {
            $_SESSION["logged_in"] = true;
            header("Location: templates/admin_panel_template.php?id=$id");
        } else {
            $err_invalid =  " Invalid Username password";
        }
    } else {
        $err_invalid =  " Invalid Username password";
    }
}
if (isset($_POST['category_create_btn'])) {
    createCategory($_POST['category_name']);
}
if (isset($_POST['service_create_btn'])) {
    createService($_POST['service_name'], $_POST['service_category'], $_POST['service_cost']);
}
if (isset($_POST['post_create'])) {
    $file = $_FILES['post_feature_pic'];

    $fileName = $_FILES['post_feature_pic']['name'];
    $fileTmpName = $_FILES['post_feature_pic']['tmp_name'];
    $fileError = $_FILES['post_feature_pic']['error'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            $fileNameNew = uniqid('', true) . "." . $fileActualExt;
            $fileDestination = '../assets/images/uploaded_images/post_images/' . $fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
            createPost($fileNameNew, $_POST['post_title'], $_POST['post_description']);
        } else {
            echo "Error Uploading File";
        }
    } else {
        echo "You cannot upload files of this type!";
    }
}

if (isset($_POST["appointment_create_admin"])) {
    createAppointment($_POST["patient_name"], $_POST["service_category"], $_POST["service_service"], $_POST["doctor_name"], $_POST["date"], $_POST["time"], $_POST["status"], $_POST["payment_number"], $_POST["transaction_id"]);
}

if (isset($_POST["patient_id"])) {
    editPatient($_POST["patient_id"]);
}
if (isset($_POST["admin_patient_edit"])) {

    updatePatientDetails($_POST["id"], $_POST["name"], $_POST["email"], $_POST["tel"]);
}
if (isset($_POST["doctor_id"])) {
    editDoctor($_POST["doctor_id"]);
}
if (isset($_POST["edit_doctor_btn"])) {

    updateDoctorDetails($_POST["id"], $_POST["doctor_name"], $_POST["doctor_email"], $_POST["doctor_phone"], $_POST["doctor_category"], $_POST["doctor_service"], $_POST["doctor_description"]);
}
if (isset($_POST["category_id"])) {
    editCategory($_POST["category_id"]);
}
if (isset($_POST["category_update_btn"])) {
    updateCategory($_POST["id"], $_POST["category_name"]);
}
if (isset($_POST["post_delete_id"])) {
    delete_post($_POST["post_delete_id"]);
}

if (isset($_POST["category_delete_id"])) {
    delete_category($_POST["category_delete_id"]);
}

if (isset($_POST["service_delete_id"])) {
    delete_service($_POST["service_delete_id"]);
}
if (isset($_POST["service_id"])) {
    editService($_POST["service_id"]);
}

if (isset($_POST["service_update_btn"])) {
    updateService($_POST["service_edit_id"], $_POST["service_edit_name"], $_POST["service_edit_category"], $_POST["service_edit_cost"]);
}
if (isset($_POST["change_password_admin"])) {
    changePassword($_POST["confirm_password"], $_POST["old_password"]);
}
if (isset($_POST["appointment_id"])) {
    editAppointment($_POST["appointment_id"]);
}
if (isset($_POST["appointment_update_admin"])) {
    updateAppointment($_POST["appointment_edit_id"], $_POST["patient_name_edit"], $_POST["appointment_service_category_edit"], $_POST["appointment_service_service_edit"], $_POST["appointment_doctor_name_edit"], $_POST["appointment_date_edit"], $_POST["appointment_time_edit"], $_POST["appointment_status_edit"], $_POST["appoint_payment_number_edit"], $_POST["appointment_transaction_id_edit"]);
}
if (isset($_POST["post_edit_id"])) {
    editPost($_POST["post_edit_id"]);
}
if (isset($_POST["post_edit_btn"])) {
    updatePost($_POST["post_id_edit"], $_POST["post_title_edit"], $_POST["post_description_edit"]);
}
if (isset($_POST["sub_button"])) {
    insertSub($_POST["sub_mail"]);
}
if (isset($_POST["contact_btn"])) {
    askforContact($_POST["contact_full_name"], $_POST["contact_email_address"]);
}
if (isset($_POST["service"])) {

    serviceCost($_POST["service"]);
}

if (isset($_POST["payment_verify"])) {
    duplicateSearch($_POST["email"]);
    if ($_SESSION['Duplicate'] > 0) {
        createAppointmentfromPatientIfmailExist($_POST["category"], $_POST["service"], $_POST["doctor"], $_POST["patient_name"], $_POST["phone_number"], $_POST["email"], $_POST["date"], $_POST["time"], $_POST["payment_number"], $_POST["trans_id"]);
    } else {

        createAppointmentfromPatient($_POST["category"], $_POST["service"], $_POST["doctor"], $_POST["patient_name"], $_POST["phone_number"], $_POST["email"], $_POST["date"], $_POST["time"], $_POST["payment_number"], $_POST["trans_id"]);
    }
}

if (isset($_POST["appointment_id_doc_side"])) {

    updateAppointmentStatusbyDoc($_POST["appointment_id_doc_side"], $_POST["appointment_status"]);
}

if (isset($_POST["appointment_id_p_side"])) {

    updateAppointmentStatusbyP($_POST["appointment_id_p_side"], $_POST["appointment_status_p"]);
}
if (isset($_POST["category_val"])) {
    findService($_POST["category_val"]);
}

if (isset($_POST["service_val"])) {
    findDoctor($_POST["service_val"]);
}

if (isset($_POST["time_checker"])) {
    duplicateAppointment($_POST["doctor_checker"], $_POST["date_checker"], $_POST["time_checker"]);
}

if (isset($_POST["doctor_id_status"])) {
    doctorStatusChange($_POST["doctor_id_status"], $_POST["active_status"]);
}
function doctorStatusChange($doctor_id, $active_status)
{
    $query = "UPDATE `user` SET `active_status`= '$active_status' WHERE `id` = '$doctor_id' ";
    execute($query);
}

function duplicateAppointment($doctor_name, $date, $time)
{
    $query = "SELECT COUNT(*) as count FROM `appointment` WHERE `service_date` = '$date' AND `service_time` ='$time' AND `doctor_name` ='$doctor_name' AND `service_status` != 'Cancelled'";
    $duplicate_appointment = getArray($query);
    $_SESSION['DuplicateAppointment'] = $duplicate_appointment[0]['count'];
    echo json_encode($duplicate_appointment);
}


function findService($category)
{
    $query = "SELECT `service_name` FROM `service` WHERE `category_name`='$category' ";
    $findService = getArray($query);
    echo json_encode($findService);
}

function findDoctor($service)
{
    $query = "SELECT `full_name` FROM `user` WHERE `service`='$service' ";
    $findDoctor = getArray($query);
    echo json_encode($findDoctor);
}

function updateAppointmentStatusbyP($appointment_id, $appoint_status)
{

    $query = "UPDATE `appointment` SET `service_status`= '$appoint_status' WHERE `appointment_id` = '$appointment_id' ";
    execute($query);
}


function updateAppointmentStatusbyDoc($appointment_id, $appoint_status)
{

    $query = "UPDATE `appointment` SET `service_status`= '$appoint_status' WHERE `appointment_id` = '$appointment_id' ";
    execute($query);
}

function createAppointmentfromPatientIfmailExist($category, $service, $doctor, $patient_name, $phone_number, $email, $date, $time, $payment_number, $trans_id)
{

    $query = "INSERT INTO `appointment`(`appointment_id`, `patient_name`, `service_category`, `service_service`, `doctor_name`, `service_date`, `service_time`, `service_status`, `payment_number`, `transaction_id`) VALUES (NULL,'$patient_name','$category','$service','$doctor','$date','$time','Approved','$payment_number','$trans_id')";
    execute($query);
}

function createAppointmentfromPatient($category, $service, $doctor, $patient_name, $phone_number, $email, $date, $time, $payment_number, $trans_id)
{
    $password = randomPassword();
    $password = base64_encode($password);
    $query = "INSERT INTO `user`(`id`, `user_type`, `full_name`, `email`, `phone`, `password`) VALUES (NULL,'patient','$patient_name','$email','$phone_number','$password')";
    execute($query);


    $password = base64_decode($password);
    $to = $email;
    $email_subject = "Your Password | OSCA";
    $email_body = "Your Password is $password";
    //mail($to, $email_subject, $email_body);

    $query = "INSERT INTO `appointment`(`appointment_id`, `patient_name`, `service_category`, `service_service`, `doctor_name`, `service_date`, `service_time`, `service_status`, `payment_number`, `transaction_id`) VALUES (NULL,'$patient_name','$category','$service','$doctor','$date','$time','Approved','$payment_number','$trans_id')";
    execute($query);
}

function serviceCost($service)
{
    $query = "SELECT * FROM `service` WHERE `service_name` = '$service'";
    $service_cost = getArray($query);
    echo json_encode($service_cost);
}

function askforContact($contact_full_name, $contact_email_address)
{
    $to = "tamjidahmed958@gmail.com";
    $from = $contact_email_address;
    $email_subject = "ASKING FOR CONTACT";
    $email_body = "$contact_full_name asking for contact. Email ID: $from";
    //mail($to, $email_subject, $email_body);
}
function insertSub($sub_mail)
{
    $query = "INSERT INTO `subscribe`(`subscribe_id`, `subscribe_mail`) VALUES (NULL,'$sub_mail')";
    execute($query);
}

function updatePost($post_edit_id, $post_title, $post_description)
{
    $query = "UPDATE `post` SET `post_title`= '$post_title',`post_description`= '$post_description' WHERE `post_id`='$post_edit_id'";
    execute($query);
}

function editPost($post_id)
{
    $query = "SELECT * FROM `post` WHERE `post_id`= '$post_id'";
    $post_details =  getArray($query);
    echo json_encode($post_details);
}


function editAppointment($appointment_id)
{
    $query = "SELECT * FROM `appointment` WHERE `appointment_id`= '$appointment_id'";
    $appointment_details =  getArray($query);
    echo json_encode($appointment_details);
}

function changePassword($confirm_password, $old_password)
{
}

function insertUser($name, $email, $tel, $password)
{
    $password = base64_encode($password);
    $query = "INSERT INTO `user`(`id`, `user_type`, `full_name`, `email`, `phone`, `password`, `description`, `profile_picture`) VALUES (NULL,'patient', '$name','$email', $tel, '$password', NULL, NULL)";
    execute($query);
}

function insertDoctorWithoutPassword($doctor_pic, $doctor_name, $doctor_email, $doctor_phone, $doctor_category, $doctor_service, $doctor_description, $password)
{
    $password = base64_encode($password);
    $query = "INSERT INTO `user`(`id`, `user_type`, `full_name`, `email`, `phone`, `password`, `description`,`category`, `service`, `profile_picture`) VALUES(NULL,'doctor','$doctor_name','$doctor_email','$doctor_phone','$password','$doctor_description','$doctor_category','$doctor_service','$doctor_pic')";
    execute($query);

    $password = base64_decode($password);
    $to = $doctor_email;
    $email_subject = "Your Password | OSCA";
    $email_body = "Your Password is $password";
    //mail($to, $email_subject, $email_body);
}

function duplicateSearch($email)
{
    $query = "SELECT COUNT(*) as count FROM `user` WHERE `email` = '$email' ";
    $duplicate = getArray($query);
    $_SESSION['Duplicate'] = $duplicate[0]['count'];
    return $duplicate;
}

function forgotPassword($email)
{
    $query = "SELECT `password` FROM `user` WHERE `email`= '$email'";
    $password = getArray($query);
    $password = $password[0]['password'];
    $password = base64_decode($password);
    $to = $email;
    $email_subject = "Forget Password | OSCA";
    $email_body = "Your Password is $password";
    //mail($to, $email_subject, $email_body);
}
/*function authenticate($email, $password)
{

    $password = base64_encode($password);
    $query = "SELECT `id`, `email`,`user_type` from `user` WHERE `email`='$email' and `password`='$password'";
    $user = getArray($query);
    if (!empty($user['user_type'])) {
        $_SESSION['user_Type'] = $user['user_type'];
        $_SESSION['id'] = $user['id'];
    } else {
        $_SESSION['user_Type'] = null;
    }
    return $user;
}*/
function authenticate($email, $password)
{

    $password = base64_encode($password);
    $query = "SELECT `id`, `email`,`user_type` from `user` WHERE `email`='$email' AND `password`='$password'";
    $user = getArray($query);
    if ($user) {
        $user = $user[0];
        if (!empty($user['user_type'])) {
            $_SESSION['user_Type'] = $user['user_type'];
            $_SESSION['id'] = $user['id'];
        } else {
            $_SESSION['user_Type'] = null;
        }
    }

    return $user;
}
function randomPassword()
{
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
function insertUserWithoutPassword($name, $email, $tel, $password)
{

    $password = base64_encode($password);
    $query = "INSERT INTO `user`(`id`, `user_type`, `full_name`, `email`, `phone`, `password`, `description`, `profile_picture`) VALUES (NULL,'patient', '$name','$email', $tel, '$password', NULL, NULL)";
    execute($query);

    $password = base64_decode($password);
    $to = $email;
    $email_subject = "Your Password | OSCA";
    $email_body = "Your Password is $password";
    //mail($to, $email_subject, $email_body);
}
function getAllPatients()
{
    $query = "SELECT * FROM `user` WHERE `user_type`= 'patient'";
    $patients = getArray($query);
    $query = "SELECT COUNT(*) as count FROM `user` WHERE `user_type` = 'patient' ";
    $patientsCounter = getArray($query);
    $_SESSION['patientsCounter'] = $patientsCounter[0]['count'];
    return $patients;
}

function getAllDoctors()
{
    $query = "SELECT * FROM `user` WHERE `user_type`= 'doctor'";
    $doctors = getArray($query);
    $query = "SELECT COUNT(*) as count FROM `user` WHERE `user_type` = 'doctor' ";
    $doctorsCounter = getArray($query);
    $_SESSION['doctorsCounter'] = $doctorsCounter[0]['count'];
    return $doctors;
}


function createCategory($category_name)
{
    $query = "INSERT INTO `category` (`category_id`, `category_name`) VALUES (NULL , '$category_name')";
    execute($query);
}

function getAllCategory()
{
    $query = "SELECT * FROM `category`";
    $categories = getArray($query);
    $query = "SELECT COUNT(*) as count FROM `category` ";
    $categoriesCounter = getArray($query);
    $_SESSION['categoriesCounter'] = $categoriesCounter[0]['count'];
    return $categories;
}

function createService($service_name, $service_category, $service_cost)
{
    $query = "INSERT INTO `service`(`service_ID`, `service_name`, `category_name`, `cost`) VALUES (NULL,'$service_name','$service_category','$service_cost')";
    execute($query);
}
function getAllService()
{
    $query = "SELECT * FROM `service`";
    $services = getArray($query);
    $query = "SELECT COUNT(*) as count FROM `service` ";
    $serviceCounter = getArray($query);
    $_SESSION['serviceCounter'] = $serviceCounter[0]['count'];
    return $services;
}
function createPost($post_pic, $post_title, $post_description)
{
    $query = "INSERT INTO `post`(`post_id`, `post_dir`, `post_title`, `post_description`) VALUES (NULL,'$post_pic','$post_title','$post_description')";
    execute($query);
}
function getAllPost()
{
    $query = "SELECT * FROM `post`";
    $posts = getArray($query);
    $query = "SELECT COUNT(*) as count FROM `post` ";
    $postCounter = getArray($query);
    $_SESSION['postCounter'] = $postCounter[0]['count'];
    return $posts;
}
function createAppointment($patient_name, $service_category, $service_service, $doctor_name, $date, $time, $status, $payment_number, $transaction_id)
{
    $query = "INSERT INTO `appointment`(`appointment_id`, `patient_name`, `service_category`, `service_service`, `doctor_name`, `service_date`, `service_time`, `service_status`, `payment_number`, `transaction_id`) VALUES (NULL,'$patient_name','$service_category','$service_service','$doctor_name','$date','$time','$status','$payment_number','$transaction_id')";
    execute($query);
}
function updateAppointment($appointment_id, $patient_name, $service_category, $service_service, $doctor_name, $date, $time, $status, $payment_number, $transaction_id)
{
    $query = "UPDATE `appointment` SET `patient_name`='$patient_name',`service_category`='$service_category',`service_service`='$service_service',`doctor_name`='$doctor_name',`service_date`='$date',`service_time`='$time',`service_status`='$status',`payment_number`='$payment_number',`transaction_id`='$transaction_id' WHERE `appointment_id`='$appointment_id'";
    execute($query);
}
function getAllAppointments()
{
    $query = "SELECT * FROM `appointment`";
    $appointments = getArray($query);
    $query = "SELECT COUNT(*) as count FROM `appointment` ";
    $appointmentCounter = getArray($query);
    $_SESSION['appointmentCounter'] = $appointmentCounter[0]['count'];
    return $appointments;
}

function editPatient($patient_id)
{
    $query = "SELECT * FROM user WHERE id='$patient_id'";
    $patient_details = getArray($query);

    echo json_encode($patient_details);
}
function updatePatientDetails($id, $full_name, $email, $phone)
{
    $query = "UPDATE `user` SET `full_name`= '$full_name',`email`='$email',`phone`='$phone' WHERE `id`='$id' ";
    execute($query);
}

function editDoctor($doctor_id)
{

    $query = "SELECT * FROM user WHERE id='$doctor_id'";
    $doctor_details = getArray($query);
    echo json_encode($doctor_details);
}
function  updateDoctorDetails($id, $doctor_name, $doctor_email, $doctor_phone, $doctor_category, $doctor_service, $doctor_description)
{
    $query = "UPDATE `user` SET `full_name`='$doctor_name',`email`='$doctor_email',`phone`='$doctor_phone',`description`='$doctor_description',`category`='$doctor_category',`service`='$doctor_service' WHERE `id`='$id'";
    execute($query);
}

function editCategory($category_id)
{
    $query = "SELECT * FROM `category` WHERE `category_id`= '$category_id'";
    $category_details =  getArray($query);
    echo json_encode($category_details);
}
function editService($service_id)
{
    $query = "SELECT * FROM `service` WHERE `service_ID`= '$service_id'";
    $service_details =  getArray($query);
    echo json_encode($service_details);
}

function updateCategory($id, $category_name)
{
    $query = "SELECT `category_name` FROM `category` WHERE `category_id`='$id' ";
    $category_name_old = getArray($query);
    $category_name_old = $category_name_old["category_name"];

    $query = "UPDATE `category` SET `category_name`= '$category_name' WHERE `category_id`='$id' ";
    execute($query);


    $query = " UPDATE `service` SET `category_name` = '$category_name' WHERE `category_name` = '$category_name_old' ";
    execute($query);
}

function delete_post($post_delete_id)
{
    $query = "DELETE  FROM `post` WHERE `post_id`= '$post_delete_id'";
    execute($query);
}
function delete_category($category_delete_id)
{
    $query = "SELECT `category_name` FROM `category` WHERE `category_id`= '$category_delete_id'";
    $category_name = getArray($query);
    $category_name = $category_name[0]["category_name"];

    $query = "DELETE  FROM `service` WHERE `category_name`= '$category_name'";
    execute($query);

    $query = "DELETE  FROM `category` WHERE `category_id`= '$category_delete_id'";
    execute($query);
}
function delete_service($service_delete_id)
{
    $query = "DELETE  FROM `service` WHERE `service_ID`= '$service_delete_id'";
    execute($query);
}

function updateService($service_id, $service_name, $service_category, $service_cost)
{
    $query = "UPDATE `service` SET `service_name`='$service_name',`category_name`='$service_category',`cost`='$service_cost' WHERE `service_ID`='$service_id'";
    execute($query);
}

function getPost($post_id)
{
    $query = "SELECT * FROM `post` WHERE `post_id` = '$post_id' ";
    $post = getArray($query);
    return $post;
}
function getDoctor($doctor_id)
{
    $query = "SELECT * FROM `user` WHERE `id` = '$doctor_id' ";
    $doctor = getArray($query);
    return $doctor;
}

function getPatient($patient_id)
{
    $query = "SELECT * FROM `user` WHERE `id` = '$patient_id' ";
    $patient = getArray($query);
    return $patient;
}
function getDoctorAppointments($doctor_id)
{
    $query = "SELECT * FROM `user` WHERE `id` = '$doctor_id' ";
    $doctor = getArray($query);
    $doctor = $doctor[0]['full_name'];
    $query = "SELECT * FROM `appointment` WHERE `doctor_name` = '$doctor'";
    $DoctorAppointments = getArray($query);
    return $DoctorAppointments;
}

function getPatientAppointments($patient_id)
{
    $query = "SELECT * FROM `user` WHERE `id` = '$patient_id' ";
    $patient = getArray($query);
    $patient = $patient[0]['full_name'];
    $query = "SELECT * FROM `appointment` WHERE `patient_name` = '$patient'";
    $PatientAppointments = getArray($query);
    return $PatientAppointments;
}
function getDoctorNewAppointments($doctor_id)
{
    $query = "SELECT * FROM `user` WHERE `id` = '$doctor_id' ";
    $doctor = getArray($query);
    $doctor = $doctor[0]['full_name'];

    $query = "SELECT COUNT(*) as count FROM `appointment`  WHERE `doctor_name` = '$doctor' AND `service_status` = 'Approved' ";
    $appointmentNewCounter = getArray($query);
    $_SESSION['appointmentNewCounter'] = $appointmentNewCounter[0]['count'];

    $query = "SELECT COUNT(*) as count FROM `appointment`  WHERE `doctor_name` = '$doctor' AND `service_status` = 'Completed' ";
    $appointmentCompletedCounter = getArray($query);
    $_SESSION['appointmentCompletedCounter'] = $appointmentCompletedCounter[0]['count'];

    $query = "SELECT COUNT(*) as count FROM `appointment`  WHERE `doctor_name` = '$doctor' AND `service_status` = 'Cancelled' ";
    $appointmentCancelledCounter = getArray($query);
    $_SESSION['appointmentCancelledCounter'] = $appointmentCancelledCounter[0]['count'];
}

function getPatientNewAppointments($patient_id)
{
    $query = "SELECT * FROM `user` WHERE `id` = '$patient_id' ";
    $patient = getArray($query);
    $patient = $patient[0]['full_name'];

    $query = "SELECT COUNT(*) as count FROM `appointment`  WHERE `patient_name` = '$patient' AND `service_status` = 'Approved' ";
    $appointmentNewCounter = getArray($query);
    $_SESSION['pappointmentNewCounter'] = $appointmentNewCounter[0]['count'];

    $query = "SELECT COUNT(*) as count FROM `appointment`  WHERE `patient_name` = '$patient' AND `service_status` = 'Completed' ";
    $appointmentCompletedCounter = getArray($query);
    $_SESSION['pappointmentCompletedCounter'] = $appointmentCompletedCounter[0]['count'];

    $query = "SELECT COUNT(*) as count FROM `appointment`   WHERE `patient_name` = '$patient' AND `service_status` = 'Cancelled' ";
    $appointmentCancelledCounter = getArray($query);
    $_SESSION['pappointmentCancelledCounter'] = $appointmentCancelledCounter[0]['count'];
}
