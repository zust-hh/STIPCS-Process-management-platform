<?php 
	session_start();
	$deleteNum = $_GET["deleteNum"];
	require_once'config.php';
	mysqli_query($conn,"SET NAMES UTF8");
	$sql = "SELECT * FROM als_signup WHERE `id_number` = '".$_SESSION["id_number"]."'";
	$query = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($query);
	$result = $row["careyou"];
	$result = trim($result,chr(239).chr(187).chr(191));
	$array = json_decode($result,true);
	$arrayUse =array();
	foreach ($array as $value) {
		if ($value != $deleteNum) {
			array_push($arrayUse,$value);
		}
	}
	$res = json_encode($arrayUse);
	$res = addslashes($res);
	$sql = "UPDATE als_signup SET `careyou` = '$res' WHERE `id_number` = '".$_SESSION["id_number"]."'";
	$query = mysqli_query($conn,$sql);
	echo "删除成功!";
 ?>