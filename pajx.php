<?php 
	header("Content-type: text/html; charset=utf-8"); 
	session_start();
	require_once'config.php';
	mysqli_query($conn,"SET NAMES UTF8");
	$project_id = $_SESSION["iid"];
	$step_id = $_GET["step_id"];
	$step_statue = $_GET["pos"];
	$sql = "UPDATE project_step set step_statue = '$step_statue' WHERE project_id = '$project_id' AND step_id = '$step_id'";
	mysqli_query($conn,$sql);
	/*
	消息产生
	 */
	if($step_statue == 1 ){
		$String = "不通过";
	}else{
		$String = "通过";
	}
	$sql = "SELECT * FROM project WHERE project_id = '$project_id'";
 	$query = mysqli_query($conn,$sql);
 	$row = mysqli_fetch_array($query);
 	$sql = "SELECT * FROM project_step WHERE project_id = '$project_id' AND step_id = '$step_id'";
 	$query = mysqli_query($conn,$sql);
 	$row2 = mysqli_fetch_array($query);
	$sql = "INSERT INTO `projectnews`(`project_id`,`project_name`,`project_step`,`op_pid`,`op_pname`,`op_content`,`op_time`) VALUES('$project_id','".$row["title"]."','".$row2["step_content"]."','".$_SESSION["id_number"]."','".$_SESSION["username"]."','$String',now())";
 	mysqli_query($conn,$sql);
 	$messageID = mysqli_insert_id($conn);
 	$arrayi = array();
 	array_push($arrayi,$row["host"]);
	array_push($arrayi,$row["pointer"]);
	array_push($arrayi,$row["pointer2"]);
	array_push($arrayi,$row["joiner1"]);
	array_push($arrayi,$row["joiner2"]);
	array_push($arrayi,$row["joiner3"]);
	array_push($arrayi,$row["joiner4"]);
	array_push($arrayi,$row["joiner5"]);
 	for($i = 0 ; $i <= 7 ;$i++){
 		if ($arrayi[$i] != "") {
 			$sql = "SELECT * FROM als_signup WHERE `id_number` = '$arrayi[$i]'";
			$query = mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($query);
			if ($row["message"] == "") {
				$arr = array ($messageID); 
				$res = json_encode($arr);
				$res = addslashes($res);
				$sql = "UPDATE als_signup SET `message` = '$res' WHERE `id_number` = '$arrayi[$i]'";
				$query = mysqli_query($conn,$sql);
			}else{
				$result = $row["message"];
				$result = trim($result,chr(239).chr(187).chr(191));
				$array = json_decode($result,true);
				array_push($array, $messageID);
				$res = json_encode($array);
				$res = addslashes($res);
				$sql = "UPDATE als_signup SET `message` = '$res' WHERE `id_number` = '$arrayi[$i]'";
				$query = mysqli_query($conn,$sql);
 			}
 		}
 	}
	echo "操作成功!";			 
 ?>