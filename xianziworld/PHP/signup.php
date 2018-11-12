<?php
	$username1=htmlspecialchars($_POST['username']);
	$password1=md5($_POST['password']);
	$email1=$_POST['email'];
	include('conn.php');
	$sql="INSERT INTO userxx(username,password,email)
	VALUES('$username1','$password1','$email1')";
	if (mysqli_query($conn, $sql)){
		echo "<script>alert('注册成功!')</script>";
		sleep(5);
		header("location:http://127.0.0.1/xianziworld/xianziworld/login.html");
	}else{
		echo "Error: ".$sql."<br>".mysqli_error($conn);
		echo "<script>alert('注册失败!')</script>";
		sleep(5);
		header("location:http://127.0.0.1/xianziworld/xianziworld/signup.html");
	}
	mysqli_close($conn);
?> 