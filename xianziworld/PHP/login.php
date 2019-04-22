<?php
	/*if(!isset($_POST['submit'])){
		exit('非法访问!');
	}*/
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	include('conn.php');
	$result=null;
	$check_query=mysqli_query($conn,"SELECT id FROM userxx WHERE username= $username AND password= $password ");
	$result=mysqli_fetch_all($check_query);
	if($result!=null){
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
	mysqli_close($conn);
?>