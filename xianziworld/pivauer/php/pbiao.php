<?php
function getRow($x,$sty,$Da,$biao){
	include('conn.php');
	$sql_biao="SELECT * FROM $biao ORDER BY $sty $Da";
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
?>