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
        //$target = "/assets/images/uploaded_images/" . basename($_FILES['doctor_pic']['name']);
        insertDoctorWithoutPassword("pic_dir", $_POST["doctor_name"], $_POST["doctor_email"], $_POST["doctor_phone"], $_POST["doctor_category"], $_POST["doctor_service"], $_POST["doctor_description"], $password);
    }
}

if (isset($_POST["forget_pass_btn"])) {
    forgotPassword($_POST["forget_mail"]);
    $err_invalid = "If the mail is correct, The password already sent to your mail";
}

if (isset($_POST["login_btn"])) {
    if (authenticate($_POST["email"], $_POST["password"])) {
        $_SESSION["logged_in"] = true;
        if ($_REQUEST['user_Type']  == "patient") {
            header("Location: templates/user_panel_template.php");
        } else if ($_REQUEST['user_Type']  == "doctor") {
            header("Location: templates/doctor_panel_template.php");
        } else if ($_REQUEST['user_Type']  == "admin") {
            header("Location: templates/admin_panel_template.php");
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
    createPost("post_dir", $_POST['post_title'], $_POST['post_description']);
}

if (isset($_POST["appointment_create_admin"])) {
    createAppointment($_POST["patient_name"], $_POST["service_category"], $_POST["service_service"], $_POST["doctor_name"], $_POST["date"], $_POST["time"], $_POST["status"], $_POST["payment_number"], $_POST["transaction_id"]);
}

if (isset($_POST["patient_id"])) {
    $output = '';
    editPatient($_POST["patient_id"]);
}
if (isset($_POST["admin_patient_edit"])) {
    updatePatientDetails($_POST["id"], $_POST["name"], $_POST["email"], $_POST["tel"]);
}
if (isset($_POST["doctor_id"])) {
    $output = '';
    editDoctor($_POST["doctor_id"]);
}
if (isset($_POST["edit_doctor_btn"])) {
    updateDoctorDetails($_POST["id"], "pic_dir", $_POST["doctor_name"], $_POST["doctor_email"], $_POST["doctor_phone"], $_POST["doctor_category"], $_POST["doctor_service"], $_POST["doctor_description"]);
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
}

function duplicateSearch($email)
{
    $query = "SELECT COUNT(*) as count FROM `user` WHERE `email` = '$email' ";
    $duplicate = getArray($query);
    $_SESSION['Duplicate'] = $duplicate['count'];
    return $duplicate;
}

function forgotPassword($email)
{
    $query = "SELECT `password` FROM `user` WHERE `email`= '$email'";
    $password = getArray($query);
    $password = $password['password'];
    $password = base64_decode($password);
    $to = $email;
    $email_subject = "Forget Password | OSCA";
    $email_body = "Your Password is $password";
    //mail($to, $email_subject, $email_body);
}
function authenticate($email, $password)
{

    $password = base64_encode($password);
    $query = "SELECT `id`, `email`,`user_type` from `user` WHERE `email`='$email' and `password`='$password'";
    $user = getArray($query);
    if (!empty($user['user_type'])) {
        $_REQUEST['user_Type'] = $user['user_type'];
    } else {
        $_REQUEST['user_Type'] = null;
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
    $_SESSION['patientsCounter'] = $patientsCounter['count'];
    return $patients;
}

function getAllDoctors()
{
    $query = "SELECT * FROM `user` WHERE `user_type`= 'doctor'";
    $doctors = getArray($query);
    $query = "SELECT COUNT(*) as count FROM `user` WHERE `user_type` = 'doctor' ";
    $doctorsCounter = getArray($query);
    $_SESSION['doctorsCounter'] = $doctorsCounter['count'];
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
    $_SESSION['categoriesCounter'] = $categoriesCounter['count'];
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
    $_SESSION['serviceCounter'] = $serviceCounter['count'];
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
    $_SESSION['postCounter'] = $postCounter['count'];
    return $posts;
}
function createAppointment($patient_name, $service_category, $service_service, $doctor_name, $date, $time, $status, $payment_number, $transaction_id)
{
    $query = "INSERT INTO `appointment`(`appointment_id`, `patient_name`, `service_category`, `service_service`, `doctor_name`, `service_date`, `service_time`, `service_status`, `payment_number`, `transaction_id`) VALUES (NULL,'$patient_name','$service_category','$service_service','$doctor_name','$date','$time','$status','$payment_number','$transaction_id')";
    execute($query);
}
function getAllAppointments()
{
    $query = "SELECT * FROM `appointment`";
    $appointments = getArray($query);
    $query = "SELECT COUNT(*) as count FROM `appointment` ";
    $appointmentCounter = getArray($query);
    $_SESSION['appointmentCounter'] = $appointmentCounter['count'];
    return $appointments;
}

function editPatient($patient_id)
{
    $query = "SELECT * FROM user WHERE id='$patient_id'";
    $patient_details = getArray($query);
    $output = '
    <input type="hidden" name="id" value="' . $patient_details["id"] . '">
    <input class="form-control form-control-lg" id="edit_name" type="text" name="name" value="' . $patient_details["full_name"] . '" placeholder="Patient Name" required>
    <br>
    <input class="form-control form-control-lg" id="edit_mail" type="email" name="email" value="' . $patient_details["email"] . '" placeholder="Email Address" required>
    <br>
    <input class="form-control form-control-lg" id="edit_tel" type="tel" name="tel" value="' . $patient_details["phone"] . '" placeholder="Phone Number" required>
    <br>       
    ';
    echo $output;
}
function updatePatientDetails($id, $full_name, $email, $phone)
{
    $query = "UPDATE `user` SET `full_name`= '$full_name',`email`='$email',`phone`='$phone' WHERE `id`='$id' ";
    execute($query);
}

function editDoctor($doctor_id)
{
    $categories = getAllCategory();
    $services = getAllService();
    $query = "SELECT * FROM user WHERE id='$doctor_id'";
    $doctor_details = getArray($query);
    $output = '
    <div class="form-row">
    <input type="hidden" name="id" value="' . $doctor_details["id"] . '">
    <div class="col-md-2">
        <img id="blah" class="doctor-avatar" src="https://dummyimage.com/450X300/cfcfcf.png" alt="" />
    </div>
    <div class="col-md-10 doctor-name-input">
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="doctor_pic" id="inputGroupFile02" placeholder="Featured Image" onchange="readURL(this);" required>
            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
        </div>

    </div>
</div>
<br><br>
<input class="form-control" type="text" name="doctor_name" value="' . $doctor_details["full_name"] . '" placeholder="Doctor Name" required>

<br>

<input class="form-control" type="email" name="doctor_email" value="' . $doctor_details["email"] . '" placeholder="Email Address" required>
<br>
<input class="form-control" type="tel" name="doctor_phone" value="' . $doctor_details["phone"] . '" placeholder="Phone Number" required>
<br>
<select class="form-control" name="doctor_category" value="' . $doctor_details["category"] . '" id="inlineFormCustomSelect" required>
    <option value="" disabled selected>Select Category</option>
     <?php
    foreach ($categories as $category) {
        if($category["category_name"]==' . $doctor_details["category"] . '){
            echo "<option selected>" . $category["category_name"] . "</option>";
       }
        else{
        echo "<option>" . $category["category_name"] . "</option>";
        }
    }
    ?>
</select>
</select>
<br><br>
<select class="form-control" name="doctor_service" id="exampleFormControlSelect1" value="' . $doctor_details["service"] . '" required>
    <option value="" disabled selected>Select Service</option>
    <?php
    foreach ($services as $service) {
        if($service["service_name"] == ' . $doctor_details["service"] . ')
        {
            echo ""<option selected>" . $service["service_name"] . "</option>"";
        }
        else{
            echo ""<option>" . $service["service_name"] . "</option>"";
        }
        
    } ?>
</select>

<br>
<textarea id="" class="form-control" name="doctor_description" value="' . $doctor_details["description"] . '" rows="5" cols="5" placeholder="Doctor Description" required></textarea>
<br>
    ';
    echo $output;
}
function  updateDoctorDetails($id, $doctor_pic, $doctor_name, $doctor_email, $doctor_phone, $doctor_category, $doctor_service, $doctor_description)
{
    $query = "UPDATE `user` SET `full_name`='$doctor_name',`email`='$doctor_email',`phone`='$doctor_phone',`description`='$doctor_description',`category`='$doctor_category',`service`='$doctor_service',`profile_picture`='$doctor_pic' WHERE `id`='$id'";
    execute($query);
}
