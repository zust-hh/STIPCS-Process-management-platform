<?php 
session_start();
$id = $_GET["id"];
require_once'config.php';
mysqli_query($conn,"SET NAMES UTF8");
$sql = "SELECT * FROM als_signup WHERE `id_number` = '".$_SESSION["id_number"]."'";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);
if ($row["careyou"] == "") {
	$arr = array ($id); 
	$res = json_encode($arr);
	$res = addslashes($res);
	$sql = "UPDATE als_signup SET `careyou` = '$res' WHERE `id_number` = '".$_SESSION["id_number"]."'";
	$query = mysqli_query($conn,$sql);
	$String = "关注成功!";
}else{
	$result = $row["careyou"];
	$result = trim($result,chr(239).chr(187).chr(191));
	$array = json_decode($result,true);
	$flag = 0;
	for ($i=0; $i < sizeof($array); $i++) { 
		if ($array[$i] == $id) {
			$flag = 1;
			break;
		}
	}

	if ($flag) {
		$String = "已关注过!";
	}else{
		array_push($array, $id);
		$res = json_encode($array);
		$res = addslashes($res);
		$sql = "UPDATE als_signup SET `careyou` = '$res' WHERE `id_number` = '".$_SESSION["id_number"]."'";
		$query = mysqli_query($conn,$sql);
		$String = "关注成功!";	
	}
}
echo $String;
 ?>