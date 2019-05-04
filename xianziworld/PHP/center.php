<?php
function getRow($x,$sty,$biao){
	include('conn.php');
	$sql_biao="SELECT * FROM $biao ORDER BY $sty DESC";
	$check_query_biao=mysqli_query($conn, $sql_biao);
	$list=array();
	if (mysqli_num_rows($check_query_biao)>0) {
    	// 输出数据
    	while($row = mysqli_fetch_assoc($check_query_biao)) {
    		$list[]=$row;
		} 
	}
	/*for($x=0;$x<count($list);$x++){
    	echo $list[$x]['id'];
	}*/
	if($x<count($list)){
			return $list[$x];
	}else
			return null;
	mysqli_close($conn);
}
function getPath($id,$x){
	include('conn.php');
	$sql_read="SELECT * FROM userxx ORDER BY $id DESC";
	$res=mysqli_query($conn,$sql_read);
	if(mysqli_num_rows($res)>0){
		$Row=mysqli_fetch_assoc($res);
		return $Row[$x];
	}else{
		return null;
	}
	mysqli_close($conn);
}
?>