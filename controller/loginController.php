<?php
require_once 'database/config.inc.php';
$err_invalid = "";
if (isset($_POST["register_btn"])) {

    insertUser($_POST["name"], $_POST["email"], $_POST["password"]);
}
if (isset($_POST["forget_pass_btn"])) {
    forgotPassword($_POST["forget_mail"]);
}

if (isset($_POST["login_btn"])) {
    if (authenticate($_POST["email"], $_POST["password"])) {
        if ($_SESSION['user_Type']  == "patient") {
            header("Location: templates/user_panel_template");
        } else if ($_SESSION['user_Type']  == "doctor") {
            header("Location: templates/doctor_panel_template");
        } else if ($_SESSION['user_Type']  == "admin") {
            header("Location: templates/admin_panel_template.php");
        }
        $err_invalid = $user_Type;
    } else {
        $err_invalid =  "Username password invalid";
    }
}
function insertUser($name, $email, $password)
{
    $password = md5($password);
    $query = "INSERT INTO `user`(`id`, `user_type`, `full_name`, `email`, `phone`, `password`, `description`, `profile_picture`) VALUES (NULL,'patient', '$name','$email', NULL, '$password', NULL, NULL)";
    execute($query);
    header("Location: login.php");
}

function forgotPassword($email)
{
    $query = "SELECT `password` FROM `user` WHERE `email`= $email";
    $password = getArray($query);
    $to = $email;
    $email_subject = "Forget Password | OSCA";
    $email_body = "Your Password is $password";
    mail($to, $email_subject, $email_body);
    header("Location: login.php");
}
function authenticate($email, $password)
{

    $password = md5($password);
    $query = "SELECT `email`,`user_type` from `user` WHERE `email`='$email' and `password`='$password'";
    $user = getArray($query);
    $_SESSION['user_Type'] = $user['user_type'];
    return $user;
}
