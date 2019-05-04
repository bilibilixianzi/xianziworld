<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>小说world</title>
		<link rel="stylesheet" href="../sy/css/head.css">
		<script src="../sy/jqery/jquery-1.9.1.min.js"></script>
		
		<script>
			$(document).ready(function(){
				$("#s-1").hover(function(){
					$("#s-1").css("background-position","left");
				});
				$("#s-1").mouseleave(function(){
					$("#s-1").css("background-position","right");
				});
				$("#s-2").hover(function(){
					$("#s-2").css("background-position","left");
				});
				$("#s-2").mouseleave(function(){
					$("#s-2").css("background-position","right");
				});
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
		<script type="text/javascript">var a_idx =0;jQuery(document).ready(function($) {$("body").click(function(e) {var a =new Array("哈哈哈","2333","文明","和谐","自由","平等","公正" ,"法治","爱国","敬业","诚信","友善");
		var $i =$("<span/>").text(a[a_idx]);
		a_idx =(a_idx + 1) % a.length;var x =e.pageX,y =e.pageY;
		$i.css({"z-index":1,"top":y - 20,"left":x,"position":"absolute","font-weight":"bold","color":"#ff6651"
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
	<body style="background-color:#CFF">
		<?php
			include('../php/reads.php');
			function getArray($x){
			$nob=$_GET['nob'];
			$biao="smallxslan";
			$sty=$nob;
			if(getRow($x,$sty,$biao)!=null){
				$Row=getRow($x,$sty,$biao);
			}else{
				$Row=null;
			}
			return $Row;
			}
			function getTxtcontent($txtfile){
    		$file = @fopen($txtfile,'r');
    		$content = array();
    		if(!$file){
    		    return 'file open fail';
    		}else{
    		    $i = 0;
    		    while (!feof($file)){
    		        $content[$i] = mb_convert_encoding(fgets($file),"UTF-8","GBK,ASCII,ANSI,UTF-8");
    		        $i++ ;
    		    }
    			    fclose($file);
    			    $content = array_filter($content); //数组去空
    			}return $content;
			}
		?>
		<!--<div class="container">
		    <form action="" class="parent">
		        <input type="text" class="search" placeholder="搜索">
		        <input type="button" name="" id="" class="btn">
		    </form>
		</div>-->
		<!--<div class="container-1">
			热搜:
			<a href="" style="margin-right: 10px;">修真聊天群</a>
			<a href="" style="margin-right: 10px;">恰似寒光遇骄阳</a>
			<a href="" style="margin-right: 10px;">元尊</a>
			<a href="" style="margin-right: 10px;">一世倾城</a>
		</div>-->
		<div>
			<a style="margin-left: 300px;" href="../../index.html"><img width="180px" src="../../img/a.png" /></a>
		</div>
		<div id = "head-1">
			<a href="../index.php"><span id ="s-1" style="background-image:url(../sy/img/bgx.png);background-repeat:no-repeat;background-position:right;">首页</span></a><a href="../ds/index.php"><span id ="s-2">长篇</span></a><a href="../xq/index.php"><span id ="s-3">短篇</span></a><a href="../wx/index.php"><span id ="s-4">连载</span></a>
			</div>
         </div>
         <div style="border:1px solid #0CF;position:relative;width:1080px;height:auto;top:65px;left:210px;">
         	<pre style="WORD-BREAK:break-all; WORD-WRAP: break-word; font-size:25px;background-color:rgb(199,238,206);">&nbsp;&nbsp;<?php
         			$list=array();
					$str=getArray('workspath');
					if($str==null){
						echo "                                <a href='../index.php'>返回</a>";
					}else{
						$list=getTxtcontent($str);
						for($i=0;i<count($list);$i++){
							echo $list[$i];
							echo "<br>";
						}
					}
         		?>
         	</pre>
         </div>
	</body>
</html>