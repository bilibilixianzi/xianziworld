<!DOCTYPE  html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>漫画</title>
<style>
.main{
	position:absolute;
	left:150px;
	top:150px;
	float: left;
	width: 1500px;
	height: auto;
	background-color: rgba(102, 146, 191, 0.44);
	/*边框*/
	border: solid 1px rgba(102, 146, 191, 0.68);
	/*边角弧度*/
	border-radius: 10px;
	/*阴影*/
	-moz-box-shadow:2px 2px 5px #9999cc;
	-webkit-box-shadow:2px 2px 5px #9999cc; 
	box-shadow: 7px 15px 30px #9999cc;
	-moz-box-sizing:border-box; /* Firefox */
	-webkit-box-sizing:border-box;
	-o-box-sizing:border-box; /* Opera */
	transition: all 0.3s linear;/*0.3s过渡时间*/
	-moz-transition: all 0.3s linear; /* Firefox 4 */
	-webkit-transition: all 0.3s linear; /* Safari 和 Chrome */ 
	text-align:center;
}
.main:hover{
	/*边框*/
	border: solid 1px rgba(102, 146, 191, 0.68);
	/*边角弧度*/
	border-radius: 20px;
	box-shadow: 7px 15px 30px #EBD3E8;
}
a{text-decoration:none;color:#000000;}
a:link {color:#000000;text-decoration:none;}
a:visited {color:#000000;text-decoration:none;}
a:hover {color:#000000;text-decoration:none;}
a:active {color:#000000;text-decoration:none;}
.d1{
	position:absolute;
	width:110px;
	height:110px;
	left:0px;
	top:9px;
	background-color: #000000;
}
.d2{
	position:absolute;
	width:1500px;
	height:100px;
	left:200px;
	top:0px;
}
.d3{
	position:absolute;
	width:200px;
	height:900px;
	left:0px;
	top:100px;
}
.n1{
	position:absolute;
	width: auto;
	height: auto;
	left: 130px;
	top: 30px;
	color: #E06410;
}
.n2{
	position:absolute;
	width: auto;
	height: auto;
	left: 750px;
	top: 40px;
	font-size: 40px;
}
.n3{
	position:absolute;
	width: auto;
	height: 105px;
	left: 1500px;
	top: 10px;
}
</style></head>
<body>
	<?php
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
		$biao="workslan";
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
<hr style="position:absolute;width:100%;height:10px;top:-10px;left: -10px;background-color:#000" />
<hr style="position:absolute;width:100%;height:3px;top:110px;left: -10px;background-color:#000" />
<hr style="position:absolute;width:3px;height:980px;left:110px;top:1px;background-color:#000" />
<div class="d1"><img width="100%" height="100%" src="<?php $a=getArray('id'); echo gettitle($a); ?>" /></div>
<div class="n1">作者：<a href="../../otherhtml/input.php?id=<?php echo getArray('id') ?>"><?php echo getArray('username');?></a><br><br></div>
<div class="n2"><?php echo getArray('worksname');?></div>
<div class="n3"><a href="http://www.xianziworld.cn"><img height="100%" src="../../img/a.png" /></a></div>
<div class="main">
	<?php
				$str=getArray('workspath');
				
				if($str==null){
						echo "<div style='width: 1400px;height: 550px;'><br><br><br><br><br><br><br><br><br>                                <a href='../index.html'><font size='20px' color='blue'>返回</font></a></div>";
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
