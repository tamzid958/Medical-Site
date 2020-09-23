<?php
session_start();
ob_start();
$_SESSION["logged_in"] = false;
$_SESSION['user_Type'] == null;
session_destroy();

$past = time() - 86400 * 30;
foreach ($_COOKIE as $key => $value) {
    setcookie($key, $value, $past, '/');
}
header("Location: ../login.php");
