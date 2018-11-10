<?php
$servername = "localhost";
$username = "root";
$password = "";
$con = new mysqli($servername,$username,$password);
if ($con->connect_error)
  {
  die('Could not connect: ' . $con->connect_error);
  }
  echo "ok";
?>