<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>首页</title>

<link rel="stylesheet" href="../top2/style/css/mdsSlide.css">
<link rel="stylesheet" href="../top2/assets/css/style.css">
<link rel="stylesheet" href="../top2/css/reset.css">
<link rel="stylesheet" href="../top2/css/style.css">
<script type="text/javascript" src="../PHP/biao.php"></script>

</head>
<body>
<br>
<div id="slider">
	<ul class="slides clearfix">
		<li><img class="responsive" src="../images/1.png"></li>
		<li><img class="responsive" src="../images/2.png"></li>
		<li><img class="responsive" src="../images/3.png"></li>
		<li><img class="responsive" src="../images/4.png"></li>
	</ul>
	<ul class="controls">
		<li><img src="../images/prev.png" alt="previous"></li>
		<li><img src="../images/next.png" alt="next"></li>
	</ul>
	<ul class="pagination">
		<li class="active"></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
<script src="../top2/js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="../top2/dist/easySlider.js"></script>
<script type="text/javascript">
	$(function() {
		$("#slider").easySlider( {
			slideSpeed: 500,
			paginationSpacing: "15px",
			paginationDiameter: "12px",
			paginationPositionFromBottom: "20px",
			slidesClass: ".slides",
			controlsClass: ".controls",
			paginationClass: ".pagination"					
		});
	});
</script>
<?php
	include('../PHP/biao.php');
	function getArray($x,$thing){
		$sty="timestamp";
		$Da="DESC";
		$x=$x-1;
		if(getRow($x,$sty,$Da)!=null){
			$Row=array();
			$Row=getRow($x,$sty,$Da);
		}else{
			$Row=array("nob"=>"","id"=>"","worksname"=>"","webs"=>"","fengmian"=>"../../../img/204621_Q4IV_2353203.png");
		}
		return $Row["$thing"];
	}
?>
<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';"><br>
</div>
<div>
	<span>推荐</span>
	<table>
		<tr>
			<td background="<?php echo getArray(1,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(1,"webs");?>?nob=<?php echo getArray(1,"nob");?>"><?php echo getArray(1,"worksname");?></a></center></td>
			<td background="<?php echo getArray(2,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(2,"webs");?>?nob=<?php echo getArray(2,"nob");?>"><?php echo getArray(2,"worksname");?></a></center></td>
			<td background="<?php echo getArray(3,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(3,"webs");?>?nob=<?php echo getArray(3,"nob");?>"><?php echo getArray(3,"worksname");?></a></center></td>
			<td background="<?php echo getArray(4,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(4,"webs");?>?nob=<?php echo getArray(4,"nob");?>"><?php echo getArray(4,"worksname");?></a></center></td>
			<td background="<?php echo getArray(5,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(5,"webs");?>?nob=<?php echo getArray(5,"nob");?>"><?php echo getArray(5,"worksname");?></a></center></td>
		</tr>
		<tr>
			<td background="<?php echo getArray(6,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(6,"webs");?>?nob=<?php echo getArray(6,"nob");?>"><?php echo getArray(6,"worksname");?></a></center></td>
			<td background="<?php echo getArray(7,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(7,"webs");?>?nob=<?php echo getArray(7,"nob");?>"><?php echo getArray(7,"worksname");?></a></center></td>
			<td background="<?php echo getArray(8,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(8,"webs");?>?nob=<?php echo getArray(8,"nob");?>"><?php echo getArray(8,"worksname");?></a></center></td>
			<td background="<?php echo getArray(9,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(9,"webs");?>?nob=<?php echo getArray(9,"nob");?>"><?php echo getArray(9,"worksname");?></a></center></td>
			<td background="<?php echo getArray(10,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(10,"webs");?>?nob=<?php echo getArray(10,"nob");?>"><?php echo getArray(10,"worksname");?></a></center></td>
		</tr>
	</table>
</div>
<div>
	<span></span>
	<table>
		<tr>
			<td background="<?php echo getArray(11,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(11,"webs");?>?nob=<?php echo getArray(11,"nob");?>"><?php echo getArray(11,"worksname");?></a></center></td>
			<td background="<?php echo getArray(12,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(12,"webs");?>?nob=<?php echo getArray(12,"nob");?>"><?php echo getArray(12,"worksname");?></a></center></td>
			<td background="<?php echo getArray(13,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(13,"webs");?>?nob=<?php echo getArray(13,"nob");?>"><?php echo getArray(13,"worksname");?></a></center></td>
			<td background="<?php echo getArray(14,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(14,"webs");?>?nob=<?php echo getArray(14,"nob");?>"><?php echo getArray(14,"worksname");?></a></center></td>
			<td background="<?php echo getArray(15,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(15,"webs");?>?nob=<?php echo getArray(15,"nob");?>"><?php echo getArray(15,"worksname");?></a></center></td>
		</tr>
		<tr>
			<td background="<?php echo getArray(16,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(16,"webs");?>?nob=<?php echo getArray(16,"nob");?>"><?php echo getArray(16,"worksname");?></a></center></td>
			<td background="<?php echo getArray(17,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(17,"webs");?>?nob=<?php echo getArray(17,"nob");?>"><?php echo getArray(17,"worksname");?></a></center></td>
			<td background="<?php echo getArray(18,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(18,"webs");?>?nob=<?php echo getArray(18,"nob");?>"><?php echo getArray(18,"worksname");?></a></center></td>
			<td background="<?php echo getArray(19,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(19,"webs");?>?nob=<?php echo getArray(19,"nob");?>"><?php echo getArray(19,"worksname");?></a></center></td>
			<td background="<?php echo getArray(20,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(20,"webs");?>?nob=<?php echo getArray(20,"nob");?>"><?php echo getArray(20,"worksname");?></a></center></td>
		</tr>
	</table>
</div>
<div>
	<span></span>
	<table>
		<tr>
			<td background="<?php echo getArray(21,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(21,"webs");?>?nob=<?php echo getArray(21,"nob");?>"><?php echo getArray(21,"worksname");?></a></center></td>
			<td background="<?php echo getArray(22,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(22,"webs");?>?nob=<?php echo getArray(22,"nob");?>"><?php echo getArray(22,"worksname");?></a></center></td>
			<td background="<?php echo getArray(23,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(23,"webs");?>?nob=<?php echo getArray(23,"nob");?>"><?php echo getArray(23,"worksname");?></a></center></td>
			<td background="<?php echo getArray(24,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(24,"webs");?>?nob=<?php echo getArray(24,"nob");?>"><?php echo getArray(24,"worksname");?></a></center></td>
			<td background="<?php echo getArray(25,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(25,"webs");?>?nob=<?php echo getArray(25,"nob");?>"><?php echo getArray(25,"worksname");?></a></center></td>
		</tr>
		<tr>
			<td background="<?php echo getArray(26,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(26,"webs");?>?nob=<?php echo getArray(26,"nob");?>"><?php echo getArray(26,"worksname");?></a></center></td>
			<td background="<?php echo getArray(27,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(27,"webs");?>?nob=<?php echo getArray(27,"nob");?>"><?php echo getArray(27,"worksname");?></a></center></td>
			<td background="<?php echo getArray(28,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(28,"webs");?>?nob=<?php echo getArray(28,"nob");?>"><?php echo getArray(28,"worksname");?></a></center></td>
			<td background="<?php echo getArray(29,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(29,"webs");?>?nob=<?php echo getArray(29,"nob");?>"><?php echo getArray(29,"worksname");?></a></center></td>
			<td background="<?php echo getArray(30,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(30,"webs");?>?nob=<?php echo getArray(30,"nob");?>"><?php echo getArray(30,"worksname");?></a></center></td>
		</tr>
	</table>
</div>
<script>
</script>
</body>
</html>