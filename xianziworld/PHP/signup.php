<?php
	date_default_timezone_set('prc');
	$timestamp=time();
	require_once 'xzmailer.php';
	$username1=htmlspecialchars($_POST['username']);
	$password1=md5($_POST['password']);
	$email1=$_POST['email'];
	include('conn.php');
	$sql="INSERT INTO userxx(username,password,email,reg_date)
	VALUES('$username1','$password1','$email1','$timestamp')";
	if ($username1!="" && $username1!=null && mysqli_query($conn, $sql)){
		$sql1="SELECT * FROM userxx WHERE username= '$username1'";
		$result=mysqli_query($conn,$sql1);
		$row=mysqli_fetch_assoc($result);
		$id=$row['id'];
		$time=date("Y-m-d H:i:s",$timestamp);
		echo "<center><h2>注册成功!</h2></center>";
		$mailer =new QQMailer(true);
		$mailer->addFile('../img/cursor/1.jpg');
		$title='XianziWorld官方';
		$content = "<center><h1><font color='#0000FF'>Welcome to Xianworld</font></h1></center>
         <center><h2>您的专属ID是:$id</h5></center>
         <center><h3>您的用户名是:$username1</h5></center>
         <center>您的邮箱是:$email1</center>
         <center>您的注册时间为:$time</center>
         <br>
         <br>
         <center>请保管好您的信息，如果您不小心忘记了密码<br>您需要详细信息才能找回您的账号!</center>
         <center><h3>请记住我们的网址:www.xianziworld.com</h3></center>
         <center>项目详情：https://github.com/bilibilixianzi/xianziworld</center>";
		$mailer->send($email1,$title,$content);
		sleep(2);
		header("www.xianziworld.cn/login.html");
	}else{
		//echo "Error: ".$sql."<br>".mysqli_error($conn);
		echo"<h1>注册失败!'</h1>";
		sleep(2);
		header("www.xianziworld.cn/signup.html");
	}
	mysqli_close($conn);
?>