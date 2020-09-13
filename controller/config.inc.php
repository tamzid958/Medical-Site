<?php
$servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "osca_new";
function execute($query)
{ //this one is for insert, update ,delete,
  global $servername, $db_username, $db_password, $db_name;
  $conn = mysqli_connect($servername, $db_username, $db_password, $db_name);
  $result = mysqli_query($conn, $query);
}
function getResult($query)
{ //this one is for select query
  global $servername, $db_username, $db_password, $db_name;
  $conn = mysqli_connect($servername, $db_username, $db_password, $db_name);
  $result = mysqli_query($conn, $query);
  return $result;
}
/*function getArray($query)
{
  global $servername, $db_username, $db_password, $db_name;
  $conn = mysqli_connect($servername, $db_username, $db_password, $db_name);
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) < 2) {
    return mysqli_fetch_assoc($result);
  }
  $data = array();
  while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
  }
  return $data;
}*/
function getArray($query)
{
  global $servername, $db_username, $db_password, $db_name;
  $conn = mysqli_connect($servername, $db_username, $db_password, $db_name);
  $data = array();
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $data[] = $row;
    }
  }
  return $data;
}
