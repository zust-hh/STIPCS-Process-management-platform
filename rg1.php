<?php
$id_number=$_GET["id_number"];
/*$conn=mysqli_connect("sql211.byethost18.com","b18_20001084","cjn123456","b18_20001084_localhost");
mysqli_query($conn,"SET NAMES 'utf8'");
$query="SELECT * FROM als_signup where id_number='$id_number'";
$result=mysqli_query($conn,$query);
$num=mysqli_num_rows($result);*/
if (strlen($id_number)!=10 && strlen($id_number)!=6)
	echo "该id不存在";
//else if($num)
//	echo "这个id已经存在";

?>