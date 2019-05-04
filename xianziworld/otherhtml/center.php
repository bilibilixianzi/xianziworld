<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>个人中心</title>
<style>
	<?php
  	include('../php/center.php');
	function gettitle($x){
		//$id=$_GET['id'];
		$id=null;
		if($id==null){
			if($x=='title')
				return "../img/2.jpg";
			return null;
		}
		if(getPath($id,$x)!=null){
			$Row=getPath($id,$x);
		}else{
			$Row=null;
		}
		return $Row;
	}
	function getArray($x,$biao){
		$sty="timestamp";
		$Row=array();
		if(getRow($x,$sty,$biao)!=null){
			$Row=getRow($x,$sty,$biao);
		}else{
			$Row=null;
		}
		return $Row;
	}
	?>
	body{
		background-color: #FF9E7B;
	}
	.p1{
		margin-left:300px;
		width:1000px;
		height:170px;
		margin-top: 100px;
		background-color:#FFFFFF;
	}
	.p2{
		margin-left:300px;
		margin-top:10px;
		width:1000px;
		height:auto;
		background-color:#FFFFFF;
	}
	.p3{
		margin-top: 10px;
		margin-left: 300px;
		width: 1000px;
		height: auto;
		background-color: #FFFFFF;
	}
	.p4{
		margin-top: 10px;
		margin-left: 300px;
		width: 1000px;
		height: auto;
		background-color: #FFFFFF;
	}
	.b1{
		float: left;
		margin-left: 0px;
		width: 170px;
		height: 170px;
		background-color: #E0E0E0;
	}
	.b2{
		float: right;
		margin-right: 0px;
		width: auto;
		height: 170px;
		background-color: #E0E0E0;
	}.b3{
		float: inherit;
		width: auto;
		height: 170px;
		background-color: #E0E0E0;
		text-align: center;
		font-size: 30px;
		font-family: "宋体";
	}
	.c1{
		width: 60px;
		height: 100%;
		background-color: #EB939A;
		font-family: "仿宋";
		font-size: 30px ;
		
	}
	.c2{
		position: absolute;
		top: 280px;
		height: 170px;
		width: 170px;
		background-color:#00FFFF;
		float: left;
	}
	.c3{
		position: absolute;
		top: 460px;
		height: 170px;
		width: 170px;
		background-color:#00FFFF;
		float: left;
	}
	.c4{
		position: absolute;
		top: 640px;
		height: 170px;
		width: 170px;
		background-color:#00FFFF;
		float: left;
	}
	 span{
  position:absolute;
  bottom:0px;
}
</style>
</head>
<body>
	<div class="p1">
		<div class="b1"><img style="margin: 10px 10px;" width="150px" height="150px" src="<?php echo gettitle('title');?>" /></div>
		<div class="b2"><a href="http://www.xianziworld.cn"><img style="margin: 10px 10px;" width="auto" height="150px" src="../img/a.png"/></a></div>
		<div class="b3"><br><br><?php echo gettitle('username');?></div>
	</div>
    <div class="p2">
    	<div class="c1"><b><br>&nbsp;漫<br><br>&nbsp;画<br>&nbsp;</b></div>
    	<?php for($i=0;$i<5;$i++){
    		$ml=75;
			$mll=185;
			$biao='workslan';
			$row=getArray($i,$biao);
			if($row==null){
				break;
			}
			$img=$row['fengmian'];
			$worksname=$row['workname'];
			$web=$row['web'];
			$nob=$row['nob'];
			echo "<div style='margin-left:$mlpx;background: url($img);' class='c2'><a href='$web?nob=$nob';><center><span>$worksname</span></center></a></div>";
    		$ml=$ml+$mll;
		}?>
    </div>
    <div class="p3">
    	<div class="c1"><b><br>&nbsp;小<br><br>&nbsp;说<br>&nbsp;</b></div>
    	<?php for($i=0;$i<5;$i++){
    		$ml=75;
			$mll=185;
			$biao='smallxslan';
			$row=getArray($i,$biao);
			if($row==null){
				if($biao=='xsinglan'){
					break;
				}
				if($biao=='longxslan'){
					$biao='xsinglan';
					continue;
				}else{
					$biao='longxslan';
					continue;
				}
			}
			$img=$row['fengmian'];
			$worksname=$row['workname'];
			$web=$row['web'];
			$nob=$row['nob'];
			echo "<div style='margin-left:$mlpx;background: url($img);' class='c3'><a href='$web?nob=$nob';><center><span>$worksname</span></center></a></div>";
    		$ml=$ml+$mll;
		}?>
    </div>
    <div class="p4">
    	<div class="c1"><b><br>&nbsp;图<br><br>&nbsp;片<br>&nbsp;</b></div>
    	<?php for($i=0;$i<5;$i++){
    		$ml=75;
			$mll=185;
			$biao='photolan';
			$row=getArray($i,$biao);
			if($row==null){
				if($biao=='bglan'){
					break;
				}
				if($biao=='coslan'){
					$biao='bglan';
					continue;
				}else{
					$biao='coslan';
					continue;
				}
			}
			$img=$row['fengmian'];
			$worksname=$row['workname'];
			$web=$row['web'];
			$nob=$row['nob'];
			echo "<div style='margin-left:$mlpx;background: url($img);' class='c4'><a href='$web?nob=$nob';><center><span>$worksname</span></center></a></div>";
    		$ml=$ml+$mll;
		}?>
    </div>
</body>
</html>
