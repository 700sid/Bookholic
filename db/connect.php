<?php

//Connecting Server
$con=mysqli_connect("localhost","root","","bookholic");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>