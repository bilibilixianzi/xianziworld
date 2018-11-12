<?php
	session_start();
	if(!isset($_SESSION['id'])){
		header("Location:login.html");
		exit();
	}
	include('conn.php');
	$userid=$_SESSION['id'];
	$x=(int)($userid);
	$username=$_SESSION['username'];
	$user_query=mysql_query("SELECT * FROM userxx WHERE id=$x limit 1;")
	$row=mysql_fetch_array($user_query);
	echo '用户信息: <br />';
	echo '用户ID: ',$userid,'<br />';
	echo '用户名: ',$username,'<br />';
	echo '<<a href="../login.php?action=logout">注销</a> 登录<br />'
?>