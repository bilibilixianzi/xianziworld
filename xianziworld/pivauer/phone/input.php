<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>图片World</title>
		<link rel="stylesheet" type="text/css" href="../css/css-head.css"/>
		<script src="../jqery/jquery-1.9.1.min.js"></script>
	</head>
	<body>
		<!--/*<script>
			$(document).ready(function(){
				$("#t1").hover(function(){
					$("#t1").css("background-image","url(../img/1.png)")
				});
				$("#t1").mouseleave(function(){
					$("#t1").css("background-image","url(../img/2.png)")
				});
				$("#t2").hover(function(){
					$("#t2").css("background-image","url(../img/1.png)")
				});
				$("#t2").mouseleave(function(){
					$("#t2").css("background-image","url(../img/2.png)")
				});
				$("#t3").hover(function(){
					$("#t3").css("background-image","url(../img/1.png)")
				});
				$("#t3").mouseleave(function(){
					$("#t3").css("background-image","url(../img/2.png)")
				});
				$("#t4").hover(function(){
					$("#t4").css("background-image","url(../img/1.png)")
				});
				$("#t4").mouseleave(function(){
					$("#t4").css("background-image","url(../img/2.png)")
				});
			});
		</script>-->
		<?php
	include('../php/pbiao.php');
	function getArray($x,$thing,$t){
		if($t==1){
			$sty="timestamp";
		}elseif($t==2){
			$sty="dianji";
		}
		$Da="DESC";
		$x=$x-1;
		$biao="coslan";
		if(getRow($x,$sty,$Da,$biao)!=null){
			$Row=array();
			$Row=getRow($x,$sty,$Da);
		}else{
			$Row=array("nob"=>"","id"=>"","worksname"=>"","webs"=>"","fengmian"=>"../../img/204621_Q4IV_2353203.png");
		}
		return $Row["$thing"];
	}
?>
		<div class = "nav">
			<ul>
				<li style="margin-right: 500px"><a href="../../index.html" ><span id = "t1">返回主页</span></a></li>
				<li><a href="../head/input.php" ><span id = "t1">图片</span></a></li>
				<li><a href="../PC/input.php" ><span id = "t1">壁纸</span></a></li>
				<li><a href="input.php" ><span id = "t1">COS</span></a></li>
			</ul>	
		</div>
		<div class="head-2">
			<a class="main" href="<?php echo getArray(1,"webs",1);?>?nob=<?php echo getArray(1,"nob",1);?>" style="padding-top:165px;background-image: url(<?php echo getArray(1,"fengmian",1);?>);">
				<!--<img src="<?php echo getArray(1,"fengmian",1);?>"/>-->
				<span><?php echo getArray(1,"worksname",1);?></span>
			</a>
			<a class="main" href="<?php echo getArray(2,"webs",1);?>?nob=<?php echo getArray(2,"nob",1);?>" style="padding-top:165px;background-image: url(<?php echo getArray(2,"fengmian",1);?>);">
				<!--<img src="<?php echo getArray(1,"fengmian",1);?>"/>-->
				<span><?php echo getArray(2,"worksname",1);?></span>
			</a>
			<a class="main" href="<?php echo getArray(3,"webs",1);?>?nob=<?php echo getArray(3,"nob",1);?>" style="padding-top:165px;background-image: url(<?php echo getArray(3,"fengmian",1);?>);">
				<!--<img src="<?php echo getArray(1,"fengmian",1);?>"/>-->
				<span><?php echo getArray(3,"worksname",1);?></span>
			</a>
			<a class="main" href="<?php echo getArray(4,"webs",1);?>?nob=<?php echo getArray(4,"nob",1);?>" style="padding-top:165px;background-image: url(<?php echo getArray(4,"fengmian",1);?>);">
				<!--<img src="<?php echo getArray(1,"fengmian",1);?>"/>-->
				<span><?php echo getArray(4,"worksname",1);?></span>
			</a>
			<a class="main" href="<?php echo getArray(5,"webs",1);?>?nob=<?php echo getArray(5,"nob",1);?>" style="padding-top:165px;background-image: url(<?php echo getArray(5,"fengmian",1);?>);">
				<!--<img src="<?php echo getArray(1,"fengmian",1);?>"/>-->
				<span><?php echo getArray(5,"worksname",1);?></span>
			</a>
			<a class="main" href="<?php echo getArray(6,"webs",1);?>?nob=<?php echo getArray(6,"nob",1);?>" style="padding-top:165px;background-image: url(<?php echo getArray(6,"fengmian",1);?>);">
				<!--<img src="<?php echo getArray(1,"fengmian",1);?>"/>-->
				<span><?php echo getArray(6,"worksname",1);?></span>
			</a>	
			<a class="main" href="<?php echo getArray(7,"webs",1);?>?nob=<?php echo getArray(7,"nob",1);?>" style="padding-top:165px;background-image: url(<?php echo getArray(7,"fengmian",1);?>);">
				<!--<img src="<?php echo getArray(1,"fengmian",1);?>"/>-->
				<span><?php echo getArray(7,"worksname",1);?></span>
			</a>
			<a class="main" href="<?php echo getArray(8,"webs",1);?>?nob=<?php echo getArray(8,"nob",1);?>" style="padding-top:165px;background-image: url(<?php echo getArray(8,"fengmian",1);?>);">
				<!--<img src="<?php echo getArray(1,"fengmian",1);?>"/>-->
				<span><?php echo getArray(8,"worksname",1);?></span>
			</a>
			<a class="main" href="<?php echo getArray(9,"webs",1);?>?nob=<?php echo getArray(9,"nob",1);?>" style="padding-top:165px;background-image: url(<?php echo getArray(9,"fengmian",1);?>);">
				<!--<img src="<?php echo getArray(1,"fengmian",1);?>"/>-->
				<span><?php echo getArray(9,"worksname",1);?></span>
			</a>
			<a class="main" href="<?php echo getArray(10,"webs",1);?>?nob=<?php echo getArray(10,"nob",1);?>" style="padding-top:165px;background-image: url(<?php echo getArray(10,"fengmian",1);?>);">
				<!--<img src="<?php echo getArray(1,"fengmian",1);?>"/>-->
				<span><?php echo getArray(10,"worksname",1);?></span>
			</a>
			<a class="main" href="<?php echo getArray(11,"webs",1);?>?nob=<?php echo getArray(11,"nob",1);?>" style="padding-top:165px;background-image: url(<?php echo getArray(11,"fengmian",1);?>);">
				<!--<img src="<?php echo getArray(1,"fengmian",1);?>"/>-->
				<span><?php echo getArray(11,"worksname",1);?></span>
			</a>
			<a class="main" href="<?php echo getArray(12,"webs",1);?>?nob=<?php echo getArray(12,"nob",1);?>" style="padding-top:165px;background-image: url(<?php echo getArray(12,"fengmian",1);?>);">
				<!--<img src="<?php echo getArray(1,"fengmian",1);?>"/>-->
				<span><?php echo getArray(12,"worksname",1);?></span>
			</a>
			<a class="main" href="<?php echo getArray(13,"webs",1);?>?nob=<?php echo getArray(13,"nob",1);?>" style="padding-top:165px;background-image: url(<?php echo getArray(13,"fengmian",1);?>);">
				<!--<img src="<?php echo getArray(1,"fengmian",1);?>"/>-->
				<span><?php echo getArray(13,"worksname",1);?></span>
			</a>
			<a class="main" href="<?php echo getArray(14,"webs",1);?>?nob=<?php echo getArray(14,"nob",1);?>" style="padding-top:165px;background-image: url(<?php echo getArray(14,"fengmian",1);?>);">
				<!--<img src="<?php echo getArray(1,"fengmian",1);?>"/>-->
				<span><?php echo getArray(14,"worksname",1);?></span>
			</a>
			<a class="main" href="<?php echo getArray(15,"webs",1);?>?nob=<?php echo getArray(15,"nob",1);?>" style="padding-top:165px;background-image: url(<?php echo getArray(15,"fengmian",1);?>);">
				<!--<img src="<?php echo getArray(1,"fengmian",1);?>"/>-->
				<span><?php echo getArray(15,"worksname",1);?></span>
			</a>
			<a class="main" href="<?php echo getArray(16,"webs",1);?>?nob=<?php echo getArray(16,"nob",1);?>" style="padding-top:165px;background-image: url(<?php echo getArray(16,"fengmian",1);?>);">
				<!--<img src="<?php echo getArray(1,"fengmian",1);?>"/>-->
				<span><?php echo getArray(16,"worksname",1);?></span>
			</a>
			<a class="main" href="<?php echo getArray(17,"webs",1);?>?nob=<?php echo getArray(17,"nob",1);?>" style="padding-top:165px;background-image: url(<?php echo getArray(17,"fengmian",1);?>);">
				<!--<img src="<?php echo getArray(1,"fengmian",1);?>"/>-->
				<span><?php echo getArray(17,"worksname",1);?></span>
			</a>
			<a class="main" href="<?php echo getArray(18,"webs",1);?>?nob=<?php echo getArray(18,"nob",1);?>" style="padding-top:165px;background-image: url(<?php echo getArray(18,"fengmian",1);?>);">
				<!--<img src="<?php echo getArray(1,"fengmian",1);?>"/>-->
				<span><?php echo getArray(18,"worksname",1);?></span>
			</a>
			<a class="main" href="<?php echo getArray(19,"webs",1);?>?nob=<?php echo getArray(19,"nob",1);?>" style="padding-top:165px;background-image: url(<?php echo getArray(19,"fengmian",1);?>);">
				<!--<img src="<?php echo getArray(1,"fengmian",1);?>"/>-->
				<span><?php echo getArray(19,"worksname",1);?></span>
			</a>
			<a class="main" href="<?php echo getArray(20,"webs",1);?>?nob=<?php echo getArray(20,"nob",1);?>" style="padding-top:165px;background-image: url(<?php echo getArray(20,"fengmian",1);?>);">
				<!--<img src="<?php echo getArray(1,"fengmian",1);?>"/>-->
				<span><?php echo getArray(20,"worksname",1);?></span>
			</a>
			<a class="main" href="<?php echo getArray(21,"webs",1);?>?nob=<?php echo getArray(21,"nob",1);?>" style="padding-top:165px;background-image: url(<?php echo getArray(21,"fengmian",1);?>);">
				<!--<img src="<?php echo getArray(1,"fengmian",1);?>"/>-->
				<span><?php echo getArray(21,"worksname",1);?></span>
			</a>
			<a class="main" href="<?php echo getArray(22,"webs",1);?>?nob=<?php echo getArray(22,"nob",1);?>" style="padding-top:165px;background-image: url(<?php echo getArray(22,"fengmian",1);?>);">
				<!--<img src="<?php echo getArray(1,"fengmian",1);?>"/>-->
				<span><?php echo getArray(22,"worksname",1);?></span>
			</a>
			<a class="main" href="<?php echo getArray(23,"webs",1);?>?nob=<?php echo getArray(23,"nob",1);?>" style="padding-top:165px;background-image: url(<?php echo getArray(23,"fengmian",1);?>);">
				<!--<img src="<?php echo getArray(1,"fengmian",1);?>"/>-->
				<span><?php echo getArray(23,"worksname",1);?></span>
			</a>
			<a class="main" href="<?php echo getArray(24,"webs",1);?>?nob=<?php echo getArray(24,"nob",1);?>" style="padding-top:165px;background-image: url(<?php echo getArray(24,"fengmian",1);?>);">
				<!--<img src="<?php echo getArray(1,"fengmian",1);?>"/>-->
				<span><?php echo getArray(24,"worksname",1);?></span>
			</a>
		</div>
		<div class = "head-3">
			<div>排&nbsp;行&nbsp;榜</div>
			<ul>
				<li>1、<a href="<?php echo getArray(1,"webs",2);?>?nob=<?php echo getArray(1,"nob",2);?>"><?php echo getArray(1,"worksname",2);?></a></li>
				<li>2、<a href="<?php echo getArray(2,"webs",2);?>?nob=<?php echo getArray(2,"nob",2);?>"><?php echo getArray(2,"worksname",2);?></a></li>
				<li>3、<a href="<?php echo getArray(3,"webs",2);?>?nob=<?php echo getArray(3,"nob",2);?>"><?php echo getArray(3,"worksname",2);?></a></li>
				<li>4、<a href="<?php echo getArray(4,"webs",2);?>?nob=<?php echo getArray(4,"nob",2);?>"><?php echo getArray(4,"worksname",2);?></a></li>
				<li>5、<a href="<?php echo getArray(5,"webs",2);?>?nob=<?php echo getArray(5,"nob",2);?>"><?php echo getArray(5,"worksname",2);?></a></li>
				<li>6、<a href="<?php echo getArray(6,"webs",2);?>?nob=<?php echo getArray(6,"nob",2);?>"><?php echo getArray(6,"worksname",2);?></a></li>
				<li>7、<a href="<?php echo getArray(7,"webs",2);?>?nob=<?php echo getArray(7,"nob",2);?>"><?php echo getArray(7,"worksname",2);?></a></li>
				<li>8、<a href="<?php echo getArray(8,"webs",2);?>?nob=<?php echo getArray(8,"nob",2);?>"><?php echo getArray(8,"worksname",2);?></a></li>
				<li>9、<a href="<?php echo getArray(9,"webs",2);?>?nob=<?php echo getArray(9,"nob",2);?>"><?php echo getArray(9,"worksname",2);?></a></li>
				<li>10、<a href="<?php echo getArray(10,"webs",2);?>?nob=<?php echo getArray(10,"nob",2);?>"><?php echo getArray(10,"worksname",2);?></a></li>
			</ul>
		</div>
	</body>
</html>
