<?php
	if(!isset($_POST['submit'])){
		exit('非法访问!');
	}
	$username=htmlspecialchars($_post['username']);
	$password=md5($_POST['password']);
	include('conn.php');
	$check_query=mysql_query($conn,"SELECT id FROM userxx WHERE username= $username AND password= $password ");
	if($result = mysql_fetch_array($check_query)){
		session_start();
		$_SESSION['username']=$username;
		$_SESSION['userid']=$result['id'];
		echo $username,'<a href="my.php">用户中心</a><br />';
		echo '点击此处 <a href="login.php?action=logout">注销</a> 登录!<br />';
		exit;
	}else{
		exit('登录失败! 点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
	}
	if($_GET['action']=="logout"){
		unset($_SESSION['id']);
		unset($_SESSION['username']);
		echo '注销成功! 点击此处登录 <a href="../login.html">登录</a>';
		exit;
	}
?>