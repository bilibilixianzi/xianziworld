<?php
	session_start();
	if(!isset($_SESSION['id'])){
		header("http://www.xianziworld.club/login.html");
		exit();
	}
	date_default_timezone_set('prc');
	$timestamp=time();
	/*id username webs*/
	include('conn.php');
	$id=$_SESSION['id'];$username=$_SESSION['id'];
	$worksname=$_POST['tatle'];$workstext=$_POST['introduction'];
	$type=$_POST['type'];
	$sel=$_POST['carline'];
	if($type=="photo"){
		if($sel=="bgimg"){
			$stype="bgimg";
			$ssql="bglan";
			$webs="http://www.xianziworld.cn/pivauer/read/bgread.php";
		}elseif($sel=="cos"){
			$stype="cos";
			$ssql="coslan";
			$webs="http://www.xianziworld.cn/pivauer/read/cosread.php";
		}else{
			$stype="photo";
			$ssql="photolan";
			$webs="http://www.xianziworld.cn/pivauer/read/tpread.php";
		}
	}elseif($type=="xs"){
		if($sel=="longxs"){
			$stype="longxs";
			$ssql="longxslan";
			$webs="http://www.xianziworld.cn/xs/read/longread.php";
		}elseif($sel=="xsing"){
			$stype="xsing";
			$ssql="xsinglan";
			$webs="http://www.xianziworld.cn/xs/read/xsingread.php";
		}else{
			$stype="smallxs";
			$ssql="smallxslan";
			$webs="http://www.xianziworld.cn/xs/read/smallread.php";
		}
	}elseif($type=="dm"){
		$stype="dm";
		$ssql="workslan";
		$webs="http://www.xianziworld.cn/dm/read/dmread.php";
	}else{
		/*跳转404界面*/
	}
	$txt='';
	for($i=0; $i<count($_FILES['upload']['name']); $i++) {
 		$tmpFilePath = $_FILES['upload']['tmp_name'][$i];
 		if ($tmpFilePath != ""){
 			$t=(int)$timestamp+$i;
 			$newPath="../../../firesworld/".$id."/".$type."/".$stype."/".$worksname."/";
 			$newFilePath = "../../../firesworld/".$id."/".$type."/".$stype."/".$worksname."/".$t.strrchr($_FILES['upload']['name'][$i],'.');
			$txt=$newFilePath;
			if(is_dir($newPath)){
			}
			else{
				mkdir($newPath,0777,true);
			}
 			if(move_uploaded_file($tmpFilePath, $newFilePath)) {	
 			}else{
 				header("http://www.xianziworld.cn/otherhtml/404.html");
 				
 			}
		}
	}
	$workspath="../../../firesworld/".$id."/".$type."/".$stype."/".$worksname."/";
	if($type=='xs'){
		$workspath=$txt;
	}
	$tFilePath=$_FILES['fengmian']['tmp_name'];
	$weFilePath="../../../firesworld/".$id."/".$type."/".$stype."/".$_FILES['fengmian']['name'];
	if(move_uploaded_file($tFilePath,$weFilePath)){
		$fengmian="../../../firesworld/".$id."/".$type."/".$stype."/".$_FILES['fengmian']['name'];
	}else{
		header("http://www.xianziworld.cn/otherhtml/404.html");
	}
	$sql="INSERT INTO $ssql(id,username,worksname,workstext,webs,fengmian,workspath,timestamp,dianji,zan)
	VALUES('$id','$username','$worksname','$workstext','$webs','$fengmian','$workspath','$timestamp','0','0')";
	if(mysqli_query($conn, $sql)){
		header("http://www.xianziworld.cn/otherhtml/center.php?id=$id");
	}else{
		echo $sql;
		header("http://www.xianziworld.cn/otherhtml/404.html");
	}
	mysqli_close($conn);
?>