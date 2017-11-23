<?php 
header("Content-type:application/json; charset=utf-8");
require_once'config.php';
mysqli_query($conn,"set names utf8");
$sql = "SELECT username FROM als_signup WHERE `id_number`=".$_GET["id"]."";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if($row["username"]){
	echo $row["username"];
}else
	echo "不存在";

 ?>