<?php
	date_default_timezone_set('prc');
	$timestamp=time();
	/*id username webs*/
	include('conn.php');
	$id="1";$username="xianzi";
	$worksname=$_POST['tatle'];$workstext=$_POST['introduction'];
	$type=$_POST['type'];
	$sel=$_POST['carline'];
	if($type=="photo"){
		if($sel=="bgimg"){
			$stype="bgimg";
			$ssql="bglan";
			$webs="";
		}elseif($sel=="cos"){
			$stype="cos";
			$ssql="coslan";
			$webs="";
		}else{
			$stype="photo";
			$ssql="photolan";
			$webs="";
		}
	}elseif($type=="xs"){
		if($sel=="longxs"){
			$stype="longxs";
			$ssql="longxslan";
			$webs="";
		}elseif($sel=="xsing"){
			$stype="xsing";
			$ssql="xsinglan";
			$webs="";
		}else{
			$stype="smallxs";
			$ssql="smallxslan";
			$webs="";
		}
	}elseif($type=="dm"){
		$stype="dm";
		$ssql="workslan";
		$webs="";
	}else{
		/*跳转404界面*/
	}
	for($i=0; $i<count($_FILES['upload']['name']); $i++) {
 		$tmpFilePath = $_FILES['upload']['tmp_name'][$i];
 		if ($tmpFilePath != ""){
 			$t=(int)$timestamp+$i;
 			$newPath="../../../firesworld/".$id."/".$type."/".$stype."/".$worksname."/";
 			$newFilePath = "../../../firesworld/".$id."/".$type."/".$stype."/".$worksname."/".$t.strrchr($_FILES['upload']['name'][$i],'.');
			if(is_dir($newPath)){
			}
			else{
				mkdir($newPath,0777,true);
			}
 			if(move_uploaded_file($tmpFilePath, $newFilePath)) {	
 			}else{
 				header("location:http://127.0.0.1/xianziworld/xianziworld/404.html");
 				
 			}
		}
	}
	$workspath="../../../firesworld/".$id."/".$type."/".$stype."/".$worksname."/";
	$tFilePath=$_FILES['fengmian']['tmp_name'];
	$weFilePath="../../../firesworld/".$id."/".$type."/".$stype."/".$_FILES['fengmian']['name'];
	if(move_uploaded_file($tFilePath,$weFilePath)){
		$fengmian="../../../firesworld/".$id."/".$type."/".$stype."/".$_FILES['fengmian']['name'];
	}else{
		header("location:http://127.0.0.1/xianziworld/xianziworld/404.html");
	}
	$sql="INSERT INTO $ssql(id,username,worksname,workstext,webs,fengmian,workspath,timestamp,dianji,zan)
	VALUES('$id','$username','$worksname','$workstext','$webs','$fengmian','$workspath','$timestamp','0','0')";
	if(mysqli_query($conn, $sql)){
		/*跳转个人中心*/
	}else{
		echo $sql;
		header("location:http://127.0.0.1/xianziworld/xianziworld/404.html");
	}
	mysqli_close($conn);
?>