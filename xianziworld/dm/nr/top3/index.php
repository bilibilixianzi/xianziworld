<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>排行榜</title>
		<link rel="stylesheet" href="css/top3.css">
	</head>
	<body>
		<!--<div id="top">
			<span id="tap"><a href="../top1/index.html">首页</a></span>
			<span id="tap"><a href="../top2/index.html">日漫</a></span>
			<span id="tap"><a href="../top3/index.html">排行</a></span>
			<span id="tap"><a href="../top4/index.html">资讯</a></span>
			<span id="tap"><a href="../top5/index.html">个人中心</a></span>
		</div>-->
		<?php
			include('../PHP/biao.php');
			function getArray($x,$thing,$t){
				if($t==1){
					$sty="timestamp";
					$Da="DESC";
				}
				elseif($t==2){
					$sty="dianji";
					$Da="ASC";
				}
				elseif($t==3){
					$sty="zan";
					$Da="DESC";
				}
				else{
					$sty="id";
					$Da="ASC";
				}
				$x=$x-1;
				if(getRow($x,$sty,$Da)!=null){
					$Row=array();
					$Row=getRow($x,$sty,$Da);
				}else{
					$Row=array("nob"=>"","id"=>"","worksname"=>"","webs"=>"","fengmian"=>"../../../img/204621_Q4IV_2353202.jpg");
				}
				return $Row["$thing"];
			}
		?>
		<div id="tap1">
			<table>
				<tr>
					<td align="center" colspan="2" height="40px" style="border-bottom:1px dashed #c2c2c2;">最新发布</td><td></td>
				</tr>
				<tr>
					<td id="td3">1</td><td id="td1"><center><a href="<?php echo getArray(1,"webs",1);?>?nob=<?php echo getArray(1,"nob",1);?>"><?php echo getArray(1,"worksname",1);?></a></center></td>
				</tr>
				<tr>
					<td id="td3">2</td><td id="td1"><center><a href="<?php echo getArray(2,"webs",1);?>?nob=<?php echo getArray(2,"nob",1);?>"><?php echo getArray(2,"worksname",1);?></a></center></td>
				</tr>
				<tr>
					<td id="td3">3</td><td id="td1"><center><a href="<?php echo getArray(3,"webs",1);?>?nob=<?php echo getArray(3,"nob",1);?>"><?php echo getArray(3,"worksname",1);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">4</td><td id="td1"><center><a href="<?php echo getArray(4,"webs",1);?>?nob=<?php echo getArray(4,"nob",1);?>"><?php echo getArray(4,"worksname",1);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">5</td><td id="td1"><center><a href="<?php echo getArray(5,"webs",1);?>?nob=<?php echo getArray(5,"nob",1);?>"><?php echo getArray(5,"worksname",1);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">6</td><td id="td1"><center><a href="<?php echo getArray(6,"webs",1);?>?nob=<?php echo getArray(6,"nob",1);?>"><?php echo getArray(6,"worksname",1);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">7</td><td id="td1"><center><a href="<?php echo getArray(7,"webs",1);?>?nob=<?php echo getArray(7,"nob",1);?>"><?php echo getArray(7,"worksname",1);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">8</td><td id="td1"><center><a href="<?php echo getArray(8,"webs",1);?>?nob=<?php echo getArray(8,"nob",1);?>"><?php echo getArray(8,"worksname",1);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">9</td><td id="td1"><center><a href="<?php echo getArray(9,"webs",1);?>?nob=<?php echo getArray(9,"nob",1);?>"><?php echo getArray(9,"worksname",1);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">10</td><td id="td1"><center><a href="<?php echo getArray(10,"webs",1);?>?nob=<?php echo getArray(10,"nob",1);?>"><?php echo getArray(10,"worksname",1);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">11</td><td id="td1"><center><a href="<?php echo getArray(11,"webs",1);?>?nob=<?php echo getArray(11,"nob",1);?>"><?php echo getArray(11,"worksname",1);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">12</td><td id="td1"><center><a href="<?php echo getArray(12,"webs",1);?>?nob=<?php echo getArray(12,"nob",1);?>"><?php echo getArray(12,"worksname",1);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">13</td><td id="td1"><center><a href="<?php echo getArray(13,"webs",1);?>?nob=<?php echo getArray(13,"nob",1);?>"><?php echo getArray(13,"worksname",1);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">14</td><td id="td1"><center><a href="<?php echo getArray(14,"webs",1);?>?nob=<?php echo getArray(14,"nob",1);?>"><?php echo getArray(14,"worksname",1);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">15</td><td id="td1"><center><a href="<?php echo getArray(15,"webs",1);?>?nob=<?php echo getArray(15,"nob",1);?>"><?php echo getArray(15,"worksname",1);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">16</td><td id="td1"><center><a href="<?php echo getArray(16,"webs",1);?>?nob=<?php echo getArray(16,"nob",1);?>"><?php echo getArray(16,"worksname",1);?></a></center></td>
				</tr>
			</table>
		</div>
		<div id="tap2">
			<table>
				<tr>
					<td align="center" colspan="2" height="40px" style="border-bottom:1px dashed #c2c2c2;">点击量排行</td><td></td>
				</tr>
				<tr>
					<td id="td3">1</td><td id="td1"><center><a href="<?php echo getArray(1,"webs",2);?>?nob=<?php echo getArray(1,"nob",2);?>"><?php echo getArray(1,"worksname",2);?></a></center></td>
				</tr>
				<tr>
					<td id="td3">2</td><td id="td1"><center><a href="<?php echo getArray(2,"webs",2);?>?nob=<?php echo getArray(2,"nob",2);?>"><?php echo getArray(2,"worksname",2);?></a></center></td>
				</tr>
				<tr>
					<td id="td3">3</td><td id="td1"><center><a href="<?php echo getArray(3,"webs",2);?>?nob=<?php echo getArray(3,"nob",2);?>"><?php echo getArray(3,"worksname",2);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">4</td><td id="td1"><center><a href="<?php echo getArray(4,"webs",2);?>?nob=<?php echo getArray(4,"nob",2);?>"><?php echo getArray(4,"worksname",2);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">5</td><td id="td1"><center><a href="<?php echo getArray(5,"webs",2);?>?nob=<?php echo getArray(5,"nob",2);?>"><?php echo getArray(5,"worksname",2);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">6</td><td id="td1"><center><a href="<?php echo getArray(6,"webs",2);?>?nob=<?php echo getArray(6,"nob",2);?>"><?php echo getArray(6,"worksname",2);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">7</td><td id="td1"><center><a href="<?php echo getArray(7,"webs",2);?>?nob=<?php echo getArray(7,"nob",2);?>"><?php echo getArray(7,"worksname",2);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">8</td><td id="td1"><center><a href="<?php echo getArray(8,"webs",2);?>?nob=<?php echo getArray(8,"nob",2);?>"><?php echo getArray(8,"worksname",2);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">9</td><td id="td1"><center><a href="<?php echo getArray(9,"webs",2);?>?nob=<?php echo getArray(9,"nob",2);?>"><?php echo getArray(9,"worksname",2);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">10</td><td id="td1"><center><a href="<?php echo getArray(10,"webs",2);?>?nob=<?php echo getArray(10,"nob",2);?>"><?php echo getArray(10,"worksname",2);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">11</td><td id="td1"><center><a href="<?php echo getArray(11,"webs",2);?>?nob=<?php echo getArray(11,"nob",2);?>"><?php echo getArray(11,"worksname",2);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">12</td><td id="td1"><center><a href="<?php echo getArray(12,"webs",2);?>?nob=<?php echo getArray(12,"nob",2);?>"><?php echo getArray(12,"worksname",2);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">13</td><td id="td1"><center><a href="<?php echo getArray(13,"webs",2);?>?nob=<?php echo getArray(13,"nob",2);?>"><?php echo getArray(13,"worksname",2);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">14</td><td id="td1"><center><a href="<?php echo getArray(14,"webs",2);?>?nob=<?php echo getArray(14,"nob",2);?>"><?php echo getArray(14,"worksname",2);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">15</td><td id="td1"><center><a href="<?php echo getArray(15,"webs",2);?>?nob=<?php echo getArray(15,"nob",2);?>"><?php echo getArray(15,"worksname",2);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">16</td><td id="td1"><center><a href="<?php echo getArray(16,"webs",2);?>?nob=<?php echo getArray(16,"nob",2);?>"><?php echo getArray(16,"worksname",2);?></a></center></td>
				</tr>
			</table>
		</div>
		<div id="tap3">
			<table>
				<tr>
					<td align="center" colspan="2" height="40px" style="border-bottom:1px dashed #c2c2c2;">综合榜</td><td></td>
				</tr>
				<tr>
					<td id="td3">1</td><td id="td1"><center><a href="<?php echo getArray(1,"webs",3);?>?nob=<?php echo getArray(1,"nob",3);?>"><?php echo getArray(1,"worksname",3);?></a></center></td>
				</tr>
				<tr>
					<td id="td3">2</td><td id="td1"><center><a href="<?php echo getArray(2,"webs",3);?>?nob=<?php echo getArray(2,"nob",3);?>"><?php echo getArray(2,"worksname",3);?></a></center></td>
				</tr>
				<tr>
					<td id="td3">3</td><td id="td1"><center><a href="<?php echo getArray(3,"webs",3);?>?nob=<?php echo getArray(3,"nob",3);?>"><?php echo getArray(3,"worksname",3);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">4</td><td id="td1"><center><a href="<?php echo getArray(4,"webs",3);?>?nob=<?php echo getArray(4,"nob",3);?>"><?php echo getArray(4,"worksname",3);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">5</td><td id="td1"><center><a href="<?php echo getArray(5,"webs",3);?>?nob=<?php echo getArray(5,"nob",3);?>"><?php echo getArray(5,"worksname",3);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">6</td><td id="td1"><center><a href="<?php echo getArray(6,"webs",3);?>?nob=<?php echo getArray(6,"nob",3);?>"><?php echo getArray(6,"worksname",3);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">7</td><td id="td1"><center><a href="<?php echo getArray(7,"webs",3);?>?nob=<?php echo getArray(7,"nob",3);?>"><?php echo getArray(7,"worksname",3);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">8</td><td id="td1"><center><a href="<?php echo getArray(8,"webs",3);?>?nob=<?php echo getArray(8,"nob",3);?>"><?php echo getArray(8,"worksname",3);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">9</td><td id="td1"><center><a href="<?php echo getArray(9,"webs",3);?>?nob=<?php echo getArray(9,"nob",3);?>"><?php echo getArray(9,"worksname",3);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">10</td><td id="td1"><center><a href="<?php echo getArray(10,"webs",3);?>?nob=<?php echo getArray(10,"nob",3);?>"><?php echo getArray(10,"worksname",3);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">11</td><td id="td1"><center><a href="<?php echo getArray(11,"webs",3);?>?nob=<?php echo getArray(11,"nob",3);?>"><?php echo getArray(11,"worksname",3);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">12</td><td id="td1"><center><a href="<?php echo getArray(12,"webs",3);?>?nob=<?php echo getArray(12,"nob",3);?>"><?php echo getArray(12,"worksname",3);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">13</td><td id="td1"><center><a href="<?php echo getArray(13,"webs",3);?>?nob=<?php echo getArray(13,"nob",3);?>"><?php echo getArray(13,"worksname",3);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">14</td><td id="td1"><center><a href="<?php echo getArray(14,"webs",3);?>?nob=<?php echo getArray(14,"nob",3);?>"><?php echo getArray(14,"worksname",3);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">15</td><td id="td1"><center><a href="<?php echo getArray(15,"webs",3);?>?nob=<?php echo getArray(15,"nob",3);?>"><?php echo getArray(15,"worksname",3);?></a></center></td>
				</tr>
				<tr>
					<td id="td2">16</td><td id="td1"><center><a href="<?php echo getArray(16,"webs",3);?>?nob=<?php echo getArray(16,"nob",3);?>"><?php echo getArray(16,"worksname",3);?></a></center></td>
				</tr>
			</table>
		</div>
	</body>
</html>
