<?php
session_start();
ob_start();
$_SESSION["logged_in"] = false;
$_SESSION['user_Type'] == null;
session_destroy();
header("Location: ../login.php");
