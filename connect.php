<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="hotel_reservation";

$conn = new mysqli($servername, $username, $password,$db);
if($conn->connect_error)
{
  echo("<script> window.alert('Connection failed');</script>");
}
// if($conn){
//   echo("<script> window.alert('Connection okkkkkkkkkkkk');</script>");
// }

?>