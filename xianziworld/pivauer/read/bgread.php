<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>图片world</title>
		<link rel="stylesheet" type="text/css" href="../css/css-head.css"/>
		<script src="../js/jquery-1.9.1.min.js"></script>
<!--      <style>
			body{
				background-color:lavenderblush;
			}
			* {
				margin: 0;
				padding: 0;
			}
			ul {
				position: absolute;
				list-style: none;
				left: 50%;
			}
			.nav {
				position: absolute;
				width: 1600px;
				height: 75px;
				background: url(../img/wx.jpg) repeat-x;
			}
			.nav li {
				position: relative;
				display: inline-block;
				margin: 0 10px;
				padding-top: 21px;
				right: 50%;
			}
			.nav li a {
				display: block;
				background: url(../img/2.png) no-repeat;
				color: #fff;
				font-size: 14px;
				line-height: 33px;
				padding-left: 15px;
				text-decoration: none;
			}
			.nav li a:hover {
				background-image: url(../img/1.png);
			}
		
			.nav li a:hover span {  /* 鼠标经过a a里面的span 也要变换背景 */
				background-image: url(../img/1.png);
			}
			.nav li a span {
				display: block;
				line-height: 33px;
				background: url(../img/2.png) no-repeat right center;
				padding-right: 15px;
			}
		a{text-decoration:none}
		a:link {color:#000000;text-decoration:none;}
		a:visited {color:#000000;text-decoration:none;}
		a:hover {color:#000000;text-decoration:none;}
		a:active {color:#000000;text-decoration:none;}-->
        <style>
		.main{
			margin-top:200px;
			margin-left: 150px;
			margin-bottom: 20px;
			float: left;
			width: auto;
			height: auto;
			background-color:white;
			/*边框*/
			border: solid 1px rgba(102, 146, 191, 0.68);
			/*边角弧度*/
			border-radius: 10px;
			/*阴影*/
			-moz-box-shadow:2px 2px 5px #9999cc;
			-webkit-box-shadow:2px 2px 5px #9999cc; 
			box-shadow: 7px 15px 30px #9999cc;
			-moz-box-sizing:border-box;  /*Firefox */
			-webkit-box-sizing:border-box;
			-o-box-sizing:border-box;  /*Opera */
			transition: all 0.3s linear; /*0.3s过渡时间*/
			-moz-transition: all 0.3s linear;  /*Firefox 4*/ 
			-webkit-transition: all 0.3s linear;  /*Safari 和 Chrome  */
		}
		.n1{
			position:absolute;
			width: auto;
			height: auto;
			left: 130px;
			top: 90px;
			color: #E06410;
		}
		.n2{
			position:absolute;
			width: auto;
			height: auto;
			left: 800px;
			top: 110px;
			color: #000000;
			font-size: 40px;
		}
		.n3{
			position:absolute;
			width: auto;
			height: 110px;
			left: 1400px;
			top: 75px;
		}
		</style>
  </head><?php
  	include('../php/reads.php');
	function gettitle($id){
		if($id==null){
			return "../../img/2.jpg";
		}
		if(getPath($id)!=null){
			$Row=getPath($id);
		}else{
			$Row="../../img/2.jpg";
		}
		return $Row;
	}
	function getArray($x){
		$nob=$_GET['nob'];
		$biao="photolan";
		$sty=$nob;
		if(getRow($x,$sty,$biao)!=null){
			$Row=getRow($x,$sty,$biao);
		}else{
			$Row=null;
		}
		return $Row;
	}
    function filenob($pa){
			if(!is_dir($pa)) return null;
			$fil=scandir($pa);
			$n=0;
			foreach($fil as $f){
				if($f=='.'||$f=='..') continue;
				$n++;
			}
			return $n;
		}
	function filesinfo($path){
  		if(!is_dir($path)) return null;
		$files=scandir($path);
		static $count=-1;
		foreach($files as $file){
			if($file=='.'||$file=='..') continue;
			$arr[]=iconv('gbk','utf-8',$file);
		}
		$count += 1;
		return $arr[$count];
	}
	?>
	<body  style="height:800px">
        <hr style="position:absolute;width:1590px;height:3px;top:185px;background-color:#000" />
        <hr style="position:absolute;width:3px;height:100%;left:110px;background-color:#000" />
		<div class = "nav">
			<ul>
				<li style="margin-right: 500px"><a href="../../index.html" ><span id = "t1">返回主页</span></a></li>
				<li><a href="../head/input.php" ><span id = "t1">图片</span></a></li>
				<li><a href="../PC/input.php" ><span id = "t1">壁纸</span></a></li>
				<li><a href="../phone/input.php" ><span id = "t1">COS</span></a></li>
			</ul>	
		</div>
		<div class="n1">作者:<a href="../../otherhtml/input.php?id=<?php echo getArray('id') ?>"><?php echo getArray('username');?></a><br><br></div>
		<div class="n2"><?php echo getArray('worksname');?></div>
		<div class="n3"><a href="http://www.xianziworld.cn"><img height="100%" src="../../img/a.png" /></a></div>
		<div style="background-color:white;width:110px;height:110px;position: absolute;left: 0px;top:75px;"><img height="100%" src="<?php $a=getArray('id'); echo gettitle($a); ?>"><?php echo getArray('username');?></div>
			<div class="main"><br>
				<?php
				$str=getArray('workspath');
				
				if($str==null){
						echo "<div style='width: 1400px;height: 550px;'><br><br><br><br><br><br><br><br><br>                                <a href='../head/input.php'><font size='20px' color='blue'>返回</font></a></div>";
					}else{
						$num=filenob($str);
						for($i=0;$i<$num;$i++){
							$sss=filesinfo($str);
							echo "<img width='1000px' height='auto' src='".$str.$sss."' /><br>";
						}
					}
					?>
			</div>
	</body>
</html>
