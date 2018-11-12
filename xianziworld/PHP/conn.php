<?php
$servername = "localhost";
$username = "xianzi";
$password = "794262305";
$dbname="user";
$conn =mysqli_connect($servername,$username,$password,$dbname);
if (!$conn)
  {
  die('Could not connect: ' .  mysqli_connect_error());
  }
  mysqli_query($conn, "set names utf8");
?>