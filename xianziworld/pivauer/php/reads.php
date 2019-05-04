<?php
function getRow($x,$sty,$biao){
	include('conn.php');
	$sql_biao="SELECT * FROM $biao ORDER BY $sty DESC";
	$result=mysqli_query($conn, $sql_biao);
	if(mysqli_num_rows($result)>0){
		$row=mysqli_fetch_assoc($result);
		return $row[$x];
	}else{
		return null;
	}
	mysqli_close($conn);
}
function getPath($id){
	include('conn.php');
	$sql_read="SELECT * FROM userxx ORDER BY $id DESC";
	$res=mysqli_query($conn,$sql_read);
	if(mysqli_num_rows($res)>0){
		$Row=mysqli_fetch_assoc($res);
		return $Row['title'];
	}else{
		return null;
	}
	mysqli_close($conn);
}
?>