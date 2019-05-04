<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>长篇</title>
		<link rel="stylesheet" href="css/head.css">
		<script src="jqery/jquery-1.9.1.min.js"></script>
		<script>
			$(document).ready(function(){
				$("#s-1").hover(function(){
					$("#s-1").css("background-position","left");
				});
				$("#s-1").mouseleave(function(){
					$("#s-1").css("background-position","right");
				});
				/*$("#s-2").hover(function(){
					$("#s-2").css("background-position","left");
				});
				$("#s-2").mouseleave(function(){
					$("#s-2").css("background-position","right");
				});*/
				$("#s-3").hover(function(){
					$("#s-3").css("background-position","left");
				});
				$("#s-3").mouseleave(function(){
					$("#s-3").css("background-position","right");
				});
				$("#s-4").hover(function(){
					$("#s-4").css("background-position","left");
				});
				$("#s-4").mouseleave(function(){
					$("#s-4").css("background-position","right");
				});
				$("#s-5").hover(function(){
					$("#s-5").css("background-position","left");
				});
				$("#s-5").mouseleave(function(){
					$("#s-5").css("background-position","right");
				});
				$("#s-8").hover(function(){
					$("#s-8").css("background-position","left");
				});
				$("#s-8").mouseleave(function(){
					$("#s-8").css("background-position","right");
				});
				$("#s-6").hover(function(){
					$("#s-6").css("background-position","left");
				});
				$("#s-6").mouseleave(function(){
					$("#s-6").css("background-position","right");
				});
				$("#s-7").hover(function(){
					$("#s-7").css("background-position","left");
				});
				$("#s-7").mouseleave(function(){
					$("#s-7").css("background-position","right");
				});
			});
		</script>
		<script type="text/javascript">var a_idx =0;jQuery(document).ready(function($) {$("body").click(function(e) {var a =new Array("芳文大法好","百合赛高","萝莉即正义","2333","文明","和谐","自由","平等","公正","法治","爱国","敬业","诚信","友善","Xianziworld","Anko赛高");var $i =$("<span/>").text(a[a_idx]);a_idx =(a_idx + 1) % a.length;var x =e.pageX,y =e.pageY;$i.css({"z-index":999999999999999999999999999999999999999999999999999999999999999999999,"top":y - 20,"left":x,"position":"absolute","font-weight":"bold","color":"#ff6651" 
		});$("body").append($i);$i.animate({"top":y - 180,"opacity":0 
		},1500,function() {$i.remove();});});});</script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-105835493-1', 'auto');
		  ga('send', 'pageview');
		
		</script>
	</head>
	<body>
		<?php
			include('../php/biao.php');
			function getArray($x,$thing,$t){
			if($t==1){
			$sty="timestamp";
		}elseif($t==2){
			$sty="dianji";
		}else{
			$sty="zan";
		}
		$Da="DESC";
		$x=$x-1;
		$biao="longxslan";
		if(getRow($x,$sty,$Da,$biao)!=null){
			$Row=array();
			$Row=getRow($x,$sty,$Da,$biao);
		}else{
			$Row=array("nob"=>"","id"=>"","username"=>"暂无数据","worksname"=>"","workstext"=>"暂无数据","webs"=>"","fengmian"=>"../../img/204621_Q4IV_2353203.png");
		}
		return $Row["$thing"];
	}
?>
		<div>
			<a style="margin-left: 300px;" href="../../index.html"><img width="180px" src="../../img/a.png" /></a>
		</div>
		<div class="container">
		    <form action="" class="parent">
		        <input type="text" class="search" placeholder="搜索">
		        <input type="button" name="" id="" class="btn">
		    </form>
		</div>
		<div class="container-1">
			热搜:
			<a href="<?php echo getArray(1,"webs",3); ?>?nob=<?php echo getArray(1,"nob",3);?>" style="margin-right: 10px;"><?php echo getArray(1,"worksname",3); ?></a>
			<a href="<?php echo getArray(2,"webs",3); ?>?nob=<?php echo getArray(2,"nob",3);?>" style="margin-right: 10px;"><?php echo getArray(2,"worksname",3); ?></a>
			<a href="<?php echo getArray(3,"webs",3); ?>?nob=<?php echo getArray(3,"nob",3);?>" style="margin-right: 10px;"><?php echo getArray(3,"worksname",3); ?></a>
			<a href="<?php echo getArray(4,"webs",3); ?>?nob=<?php echo getArray(4,"nob",3);?>" style="margin-right: 10px;"><?php echo getArray(4,"worksname",3); ?></a>
		</div>
		<div id = "head-1">
			<a href="../index.php"><span id ="s-1">首页</span></a><a href="index.php"><span id ="s-2">长篇</span></a><a href="../xq/index.php"><span id ="s-3">短篇</span></a><a href="../wx/index.php"><span id ="s-4">连载</span></a>
			<div id = "son">
				当前位置：首页>长篇
			</div>
			<div id = "son-1">
				<table id = "t" border="1" cellpadding="0" cellspacing="0">
					<tr>
						<td rowspan="5" width="25%" style="background: url(<?php echo getArray(1,'fengmian',1); ?>);"></td>
						<td colspan="3"><center>
							<table>
								<tr>
									<td colspan="2" style="text-align: center;"><?php echo getArray(1,"worksname",1);?></td>
									<td><?php echo getArray(1,"username",1);?></td>
								</tr>
							</table></center>
						</td>
					</tr>
					<tr>
						<td colspan="3" rowspan="3"><?php echo getArray(1,"workstext",1);?></td>
					</tr>
					<tr></tr><tr></tr>
					<tr>
						<td colspan="3"><a href="<?php echo getArray(1,'webs',1);?>?nob=<?php echo getArray(1,"nob",1);?>" >开始阅读</a></td>
					</tr>
				</table>
				
				
				<table id = "t" border="1" cellpadding="0" cellspacing="0">
					<tr>
						<td rowspan="5" width="25%" style="background: url(<?php echo getArray(2,'fengmian',1); ?>);"></td>
						<td colspan="3"><center>
							<table>
								<tr>
									<td colspan="2" style="text-align: center;"><?php echo getArray(2,"worksname",1);?></td>
									<td><?php echo getArray(2,"username",1);?></td>
								</tr>
							</table></center>
						</td>
					</tr>
					<tr>
						<td colspan="3" rowspan="3"><?php echo getArray(2,"workstext",1);?></td>
					</tr>
					<tr></tr><tr></tr>
					<tr>
						<td colspan="3"><a href="<?php echo getArray(2,'webs',1);?>?nob=<?php echo getArray(2,"nob",1);?>" >开始阅读</a></td>
					</tr>
				</table>
				
				
				<table id = "t" border="1" cellpadding="0" cellspacing="0">
					<tr>
						<td rowspan="5" width="25%" style="background: url(<?php echo getArray(3,'fengmian',1); ?>);"></td>
						<td colspan="3"><center>
							<table>
								<tr>
									<td colspan="2" style="text-align: center;"><?php echo getArray(3,"worksname",1);?></td>
									<td><?php echo getArray(3,"username",1);?></td>
								</tr>
							</table></center>
						</td>
					</tr>
					<tr>
						<td colspan="3" rowspan="3"><?php echo getArray(3,"workstext",1);?></td>
					</tr>
					<tr></tr><tr></tr>
					<tr>
						<td colspan="3"><a href="<?php echo getArray(3,'webs',1);?>?nob=<?php echo getArray(3,"nob",1);?>" >开始阅读</a></td>
					</tr>
				</table>
				
				
				<table id = "t" border="1" cellpadding="0" cellspacing="0">
					<tr>
						<td rowspan="5" width="25%" style="background: url(<?php echo getArray(4,'fengmian',1); ?>);"></td>
						<td colspan="3"><center>
							<table>
								<tr>
									<td colspan="2" style="text-align: center;"><?php echo getArray(4,"worksname",1);?></td>
									<td><?php echo getArray(4,"username",1);?></td>
								</tr>
							</table></center>
						</td>
					</tr>
					<tr>
						<td colspan="3" rowspan="3"><?php echo getArray(4,"workstext",1);?></td>
					</tr>
					<tr></tr><tr></tr>
					<tr>
						<td colspan="3"><a href="<?php echo getArray(4,'webs',1);?>?nob=<?php echo getArray(4,"nob",1);?>" >开始阅读</a></td>
					</tr>
				</table>
				
				<table id = "t" border="1" cellpadding="0" cellspacing="0">
					<tr>
						<td rowspan="5" width="25%" style="background: url(<?php echo getArray(5,'fengmian',1); ?>);"></td>
						<td colspan="3"><center>
							<table>
								<tr>
									<td colspan="2" style="text-align: center;"><?php echo getArray(5,"worksname",1);?></td>
									<td><?php echo getArray(5,"username",1);?></td>
								</tr>
							</table></center>
						</td>
					</tr>
					<tr>
						<td colspan="3" rowspan="3"><?php echo getArray(5,"workstext",1);?></td>
					</tr>
					<tr></tr><tr></tr>
					<tr>
						<td colspan="3"><a href="<?php echo getArray(5,'webs',1);?>?nob=<?php echo getArray(5,"nob",1);?>" >开始阅读</a></td>
					</tr>
				</table>
				
				
				<table id = "t" border="1" cellpadding="0" cellspacing="0">
					<tr>
						<td rowspan="5" width="25%" style="background: url(<?php echo getArray(6,'fengmian',1); ?>);"></td>
						<td colspan="3"><center>
							<table>
								<tr>
									<td colspan="2" style="text-align: center;"><?php echo getArray(6,"worksname",1);?></td>
									<td><?php echo getArray(6,"username",1);?></td>
								</tr>
							</table></center>
						</td>
					</tr>
					<tr>
						<td colspan="3" rowspan="3"><?php echo getArray(6,"workstext",1);?></td>
					</tr>
					<tr></tr><tr></tr>
					<tr>
						<td colspan="3"><a href="<?php echo getArray(6,'webs',1);?>?nob=<?php echo getArray(6,"nob",1);?>" >开始阅读</a></td>
					</tr>
				</table>
				
				
				<table id = "t" border="1" cellpadding="0" cellspacing="0">
					<tr>
						<td rowspan="5" width="25%" style="background: url(<?php echo getArray(7,'fengmian',1); ?>);"></td>
						<td colspan="3"><center>
							<table>
								<tr>
									<td colspan="2" style="text-align: center;"><?php echo getArray(7,"worksname",1);?></td>
									<td><?php echo getArray(7,"username",1);?></td>
								</tr>
							</table></center>
						</td>
					</tr>
					<tr>
						<td colspan="3" rowspan="3"><?php echo getArray(7,"workstext",1);?></td>
					</tr>
					<tr></tr><tr></tr>
					<tr>
						<td colspan="3"><a href="<?php echo getArray(7,'webs',1);?>?nob=<?php echo getArray(7,"nob",1);?>" >开始阅读</a></td>
					</tr>
				</table>
				
				
				<table id = "t" border="1" cellpadding="0" cellspacing="0">
					<tr>
						<td rowspan="5" width="25%" style="background: url(<?php echo getArray(8,'fengmian',1); ?>);"></td>
						<td colspan="3"><center>
							<table>
								<tr>
									<td colspan="2" style="text-align: center;"><?php echo getArray(8,"worksname",1);?></td>
									<td><?php echo getArray(8,"username",1);?></td>
								</tr>
							</table></center>
						</td>
					</tr>
					<tr>
						<td colspan="3" rowspan="3"><?php echo getArray(8,"workstext",1);?></td>
					</tr>
					<tr></tr><tr></tr>
					<tr>
						<td colspan="3"><a href="<?php echo getArray(8,'webs',1);?>?nob=<?php echo getArray(8,"nob",1);?>" >开始阅读</a></td>
					</tr>
				</table>
				
				
				<table id = "t" border="1" cellpadding="0" cellspacing="0">
					<tr>
						<td rowspan="5" width="25%" style="background: url(<?php echo getArray(9,'fengmian',1); ?>);"></td>
						<td colspan="3"><center>
							<table>
								<tr>
									<td colspan="2" style="text-align: center;"><?php echo getArray(9,"worksname",1);?></td>
									<td><?php echo getArray(9,"username",1);?></td>
								</tr>
							</table></center>
						</td>
					</tr>
					<tr>
						<td colspan="3" rowspan="3"><?php echo getArray(9,"workstext",1);?></td>
					</tr>
					<tr></tr><tr></tr>
					<tr>
						<td colspan="3"><a href="<?php echo getArray(9,'webs',1);?>?nob=<?php echo getArray(9,"nob",1);?>" >开始阅读</a></td>
					</tr>
				</table>
				
			</div>
			<div id="son-2">
				<span>&nbsp;&nbsp;&nbsp;点击榜&nbsp;&nbsp;&nbsp;</span>
				<table>
					<tr>
						<td id="td3">1</td>
						<td id="td2"><center><a href="<?php echo getArray(1,'webs',2);?>?nob=<?php echo getArray(1,"nob",2);?>"><?php echo getArray(1,"worksname",2);?></a></center></td>
					</tr>
					<tr>
						<td id="td3">2</td>
						<td id="td2"><center><a href="<?php echo getArray(2,'webs',2);?>?nob=<?php echo getArray(2,"nob",2);?>"><?php echo getArray(2,"worksname",2);?></a></center></td>
					</tr>
					<tr>
						<td id="td3">3</td>
						<td id="td2"><center><a href="<?php echo getArray(3,'webs',2);?>?nob=<?php echo getArray(3,"nob",2);?>"><?php echo getArray(3,"worksname",2);?></a></center></td>
					</tr>
					<tr>
						<td id="td1">4</td>
						<td id="td2"><center><a href="<?php echo getArray(4,'webs',2);?>?nob=<?php echo getArray(4,"nob",2);?>"><?php echo getArray(4,"worksname",2);?></a></center></td>
					</tr>
					<tr>
						<td id="td1">5</td>
						<td id="td2"><center><a href="<?php echo getArray(5,'webs',2);?>?nob=<?php echo getArray(5,"nob",2);?>"><?php echo getArray(5,"worksname",2);?></a></center></td>
					</tr>
					<tr>
						<td id="td1">6</td>
						<td id="td2"><center><a href="<?php echo getArray(6,'webs',2);?>?nob=<?php echo getArray(6,"nob",2);?>"><?php echo getArray(6,"worksname",2);?></a></center></td>
					</tr>
					<tr>
						<td id="td1">7</td>
						<td id="td2"><center><a href="<?php echo getArray(7,'webs',2);?>?nob=<?php echo getArray(7,"nob",2);?>"><?php echo getArray(7,"worksname",2);?></a></center></td>
					</tr>
					<tr>
						<td id="td1">8</td>
						<td id="td2"><center><a href="<?php echo getArray(8,'webs',2);?>?nob=<?php echo getArray(8,"nob",2);?>"><?php echo getArray(8,"worksname",2);?></a></center></td>
					</tr>
					<tr>
						<td id="td1">9</td>
						<td id="td2"><center><a href="<?php echo getArray(9,'webs',2);?>?nob=<?php echo getArray(9,"nob",2);?>"><?php echo getArray(9,"worksname",2);?></a></center></td>
					</tr>
					<tr>
						<td id="td1">10</td>
						<td id="td2"><center><a href="<?php echo getArray(10,'webs',2);?>?nob=<?php echo getArray(10,"nob",2);?>"><?php echo getArray(10,"worksname",2);?></a></center></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>
