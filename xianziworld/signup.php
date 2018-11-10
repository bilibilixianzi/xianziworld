<!DOCTYPE HTML>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>XianWorld-Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <!--<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>-->
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/supersized.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <style>
        	.error{color: red;}
        </style>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>
    	<?php
    		$username=$password=$conpassword=$email="";
    		$nameerr=$passworderr=$emailerr="";
    		if($_SERVER["REQUEST_METHOD"]=="POST"){
    			if(empty($_POST["username"])){
    				$nameerr="Username不能为空";
    			}
    			else{
    				$username=test_input($_POST["username"]);
    				if (strlen($username)<=5)
    					$nameerr="Username长度不能小于5";
    			}
    		
    			if(empty($_REQUEST["password"]) and empty($_REQUEST["confirmpassword"])){
    				$passworderr="密码不能为空";
    			}
    			else{
    				$password=test_input($_POST["password"]);
    				$conpassword=test_input($_POST["confirmpassword"]);
    				if ($password!==$conpassword){
    					$passworderr="两次密码不一致";
    				}
    			}
    			if(empty($_REQUEST["email"])){
    				$email="邮箱不能为空";
    			}
    			else{
    				$email = test_input($_POST["email"]);
    				if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
            			$emailerr = "非法邮箱格式"; 
        			}
    			}
    		}
    		function test_input($data){
    			$data = trim($data);
    			$data = stripslashes($data);
    			$data = htmlspecialchars($data);
    			return $data;
			}
    	?>
        <div class="page-container">
            <h1>Sign Up</h1>
            <form action="PHP/signup.php" method="post">
                <input type="text" name="username" class="username" placeholder="Username" value="<?php echo $username ?>"><span class="error"><?php echo $nameerr ?></span>
                <input type="password" name="password" class="password" placeholder="Password" value="<?php echo $password ?>">
                <input type="password" name="confirmpassword" class="password" placeholder="Confirm Password" value="<?php echo $conpassword ?>"><span class="error"><?php echo $passworderr  ?></span>
                <input type="text" name="email" class="username" placeholder="Email" value="<?php echo $email ?>"><span class="error"><?php echo $emailerr ?></span>
                <button type="submit">Sign up</button>
                <div class="error"><span>+</span></div>
            </form>
            
        </div>
        <br>
        <br>
        <div align="center">Registration Failed？<a href="aboutweb.html#toubiao" target="_blank" title="XianziWorld">Contact Us</a></div>
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>
</html>