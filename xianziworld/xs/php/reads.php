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
?>