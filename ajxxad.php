<?php 
	header("Content-type: text/html; charset=utf-8"); 
	session_start();
	$iid = $_SESSION["iid"];
	$id = $_GET["id"];
	require_once'config.php';
	mysqli_query($conn,"SET NAMES UTF8");
	$sql = "SELECT * FROM als_signup WHERE id_number = '$id'";
	$query = mysqli_query($conn,$sql);
	if (mysqli_num_rows($query)) {
		$row = mysqli_fetch_array($query);
		$username = $row["username"];
		$sql = "SELECT * FROM project WHERE project_id = '$iid'";
		$query = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($query);
		$flag = 0;
		if ($row["joiner1"] == "" ) {
			$sql = "UPDATE project set joiner1 = '$id' , name1 = '$username' WHERE project_id = '$iid'";
			$flag=1;
		}else if($row["joiner2"] == ""){
			$sql = "UPDATE project set joiner2 = '$id' , name2 = '$username' WHERE project_id = '$iid'";
			$flag=1;
		} else if($row["joiner3"] == ""){
			$sql = "UPDATE project set joiner3 = '$id' , name3 = '$username' WHERE project_id = '$iid'";
			$flag=1;
		} else if($row["joiner4"] == ""){
			$sql = "UPDATE project set joiner4 = '$id' , name4 = '$username' WHERE project_id = '$iid'";
			$flag=1;
		} else if($row["joiner5"] == ""){
			$sql = "UPDATE project set joiner5 = '$id' , name5 = '$username' WHERE project_id = '$iid'";
			$flag=1;
		} 
		if ($flag) {
			mysqli_query($conn,$sql);
			echo $username;
		}else{
			echo "邀请失败!队伍已满!";
		}
	}else{
		echo "邀请失败!";
	}

 ?>