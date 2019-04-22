<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>漫画</title>
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<?php
	include('../PHP/biao.php');
	function getArray($x,$thing){
		$sty="dianji";
		$Da="ASC";
		$x=$x-1;
		if(getRow($x,$sty,$Da)!=null){
			$Row=array();
			$Row=getRow($x,$sty,$Da);
		}else{
			$Row=array("id"=>"","worksname"=>"暂无数据","webs"=>"","fengmian"=>"../../../img/204621_Q4IV_2353203.png");
		}
		return $Row["$thing"];
	}
?>
<div id="slider">
	<ul class="slides clearfix">
		<li><img class="responsive" src="img/1.jpg"></li>
		<li><img class="responsive" src="img/2.jpg"></li>
		<li><img class="responsive" src="img/3.jpg"></li>
		<li><img class="responsive" src="img/4.jpg"></li>
	</ul>
	<ul class="controls">
		<li><img src="img/prev.png" alt="previous"></li>
		<li><img src="img/next.png" alt="next"></li>
	</ul>
	<ul class="pagination">
		<li class="active"></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
<div>
	<span>推荐</span>
	<table>
		<tr>
			<td background="<?php echo getArray(1,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(1,"webs");?>?id=<?php echo getArray(1,"id");?>"><?php echo getArray(1,"worksname");?></a></center></td>
			<td background="<?php echo getArray(2,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(2,"webs");?>?id=<?php echo getArray(2,"id");?>"><?php echo getArray(2,"worksname");?></a></center></td>
			<td background="<?php echo getArray(3,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(3,"webs");?>?id=<?php echo getArray(3,"id");?>"><?php echo getArray(3,"worksname");?></a></center></td>
		</tr>
		<tr>
			<td background="<?php echo getArray(4,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(4,"webs");?>?id=<?php echo getArray(4,"id");?>"><?php echo getArray(4,"worksname");?></a></center></td>
			<td background="<?php echo getArray(5,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(5,"webs");?>?id=<?php echo getArray(5,"id");?>"><?php echo getArray(5,"worksname");?></a></center></td>
			<td background="<?php echo getArray(6,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(6,"webs");?>?id=<?php echo getArray(6,"id");?>"><?php echo getArray(6,"worksname");?></a></center></td>
		</tr>
	</table>
</div>
<div>
	<span>&nbsp;</span>
	<table>
		<tr>
			<td background="<?php echo getArray(7,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(7,"webs");?>?id=<?php echo getArray(7,"id");?>"><?php echo getArray(7,"worksname");?></a></center></td>
			<td background="<?php echo getArray(8,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(8,"webs");?>?id=<?php echo getArray(8,"id");?>"><?php echo getArray(8,"worksname");?></a></center></td>
			<td background="<?php echo getArray(9,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(9,"webs");?>?id=<?php echo getArray(9,"id");?>"><?php echo getArray(9,"worksname");?></a></center></td>
		</tr>
		<tr>
			<td background="<?php echo getArray(10,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(10,"webs");?>?id=<?php echo getArray(10,"id");?>"><?php echo getArray(10,"worksname");?></a></center></td>
			<td background="<?php echo getArray(11,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(11,"webs");?>?id=<?php echo getArray(11,"id");?>"><?php echo getArray(11,"worksname");?></a></center></td>
			<td background="<?php echo getArray(12,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(12,"webs");?>?id=<?php echo getArray(12,"id");?>"><?php echo getArray(12,"worksname");?></a></center></td>
		</tr>
	</table>
</div>
<div>
	<span>&nbsp;</span>
	<table>
		<tr>
			<td background="<?php echo getArray(13,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(13,"webs");?>?id=<?php echo getArray(13,"id");?>"><?php echo getArray(13,"worksname");?></a></center></td>
			<td background="<?php echo getArray(14,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(14,"webs");?>?id=<?php echo getArray(14,"id");?>"><?php echo getArray(14,"worksname");?></a></center></td>
			<td background="<?php echo getArray(15,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(15,"webs");?>?id=<?php echo getArray(15,"id");?>"><?php echo getArray(15,"worksname");?></a></center></td>
		</tr>
		<tr>
			<td background="<?php echo getArray(16,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(16,"webs");?>?id=<?php echo getArray(16,"id");?>"><?php echo getArray(16,"worksname");?></a></center></td>
			<td background="<?php echo getArray(17,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(17,"webs");?>?id=<?php echo getArray(17,"id");?>"><?php echo getArray(17,"worksname");?></a></center></td>
			<td background="<?php echo getArray(18,"fengmian");?>" valign="bottom"><center><a href="<?php echo getArray(18,"webs");?>?id=<?php echo getArray(18,"id");?>"><?php echo getArray(18,"worksname");?></a></center></td>
		</tr>
	</table>
</div>
<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="dist/easySlider.js"></script>
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

</body>
</html>