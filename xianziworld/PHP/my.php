<?php
	session_start();
	if(!isset($_SESSION['id'])){
		header("http://www.xianziworld.club/login.html");
		exit();
	}
	include('conn.php');
	$userid=$_SESSION['id'];
	$x=(int)($userid);
	$username=$_SESSION['username'];
	$user_query=mysql_query("SELECT * FROM userxx WHERE id=$x limit 1;")
	$row=mysql_fetch_array($user_query);
?>