<?php
   include('./includes/arrays.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font awesome link connected-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- bootstrap link connected-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- chrome browser address bar color-->
    <meta name="theme-color" content="#00c4cc">
    <!-- favicon-->
    <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./assets/images/favicon.ico" type="image/x-icon">

    <!-- stylesheet connected-->

    <link rel="stylesheet" href="./assets/css/styles.css">
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <?php include('./includes/nav.php'); ?>
    </nav>
    <?php
            foreach($navItems as $item)
            {
                echo "<title> OSCA | $item[title]</title>";
            }
    ?>
</head>

    
   
