<?php 
	header("Content-type: text/html; charset=utf-8"); 
	session_start();
	$String = "";

	$projectName = isset($_POST['projectName'])? $_POST['projectName'] : '';  
	$projectIntroduce = isset($_POST['projectIntroduce'])? $_POST['projectIntroduce'] : '';  
	$chose = isset($_POST['chose'])? $_POST['chose'] : '';  
	$changeID = isset($_POST['changeID'])? $_POST['changeID'] : '';  
	$changeName = isset($_POST['changeName'])? $_POST['changeName'] : '';  
	require_once'config.php';
	mysqli_query($conn,"SET NAMES UTF8");
	$sql = "SELECT * From project WHERE `project_id`='".$_SESSION["iid"]."'";
	$query = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($query);
	if($row["host"] != $_SESSION["id_number"]){
		$String = "你没有权限进行此项操作!";
		echo json_encode($String);
		exit(0);
	}else if ($projectName == "") {
		$String = "项目名称不能为空!";
		echo json_encode($String);
		exit(0);
	}else if ($changeName == "不存在") {
		$String = "移交对象不存在!";
		echo json_encode($String);
		exit(0);
	}else if ($chose == "私有项目 (仅项目成员可查看和编辑)") {
		$isOpen = 0;
	}else if ($chose == "公开项目 (所有人都可通过链接访问，仅项目成员可编辑)") {
		$isOpen = 1;
	}
		

	$sql = "UPDATE  project SET `title` = '$projectName',`easy_introduce` = '$projectIntroduce',`isOpen` = '$isOpen',`host` = '$changeID',`hostname` = '$changeName' WHERE `project_id` ='".$_SESSION["iid"]."'";
	mysqli_query($conn,$sql);
	
	echo json_encode("成功啦!");
 ?>