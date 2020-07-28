<?php

$connection_string = "localhost";

$database_name = "osca";

$username ="root";

$pass= "";




$connect = mysqli_connect($connection_string,$username,$pass,$database_name);


if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
  }
  
  $sql = "SELECT `userType`, `userName`, `userPass` FROM `user` WHERE 1";
  $result = $connect->query($sql);
  
  if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
      echo "userType: " . $row["userType"]. " - userName: " . $row["userName"]. " -userPass: " . $row["userPass"]. "<br>";

      $str = 'pass';

     if (sha1($str) === $row["userPass"]) {
    echo "pass valid";
     }

     else{
         echo "invalid";
     }
    }
  } else {
    echo "0 results";
  }
  $connect->close();

?>