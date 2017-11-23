<?php
if (!isset($_GET["id_numberl"])) {
	echo "学号不能为空";
}else{
$id_numberl=$_GET["id_numberl"];
require_once'config.php';
mysqli_query($conn,"SET NAMES 'utf8'");
$query="SELECT * FROM als_signup where id_numberl='$id_numberl'";
$result=mysqli_query($conn,$query);
@$num=mysqli_num_rows($result);
if (strlen($id_numberl)!=10 && strlen($id_numberl)!=6)
	echo "该id不存在";
else if($num)
	echo "这个id已经存在";
}
?>