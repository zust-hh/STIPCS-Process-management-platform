<?php 
	header("Content-type:text/html;charset=utf-8");
	session_start();
	if(!sizeof($_POST)){
		echo "<script>alert('未提交内容。');history.go(-1);</script>";
	}
	require_once'config.php';
	mysqli_query($conn,"set names utf8");


$pi = $_SESSION["iid"];
$id = $_SESSION["id_number"];
//判断是否已经上传过。
$sql= "SELECT * FROM project_step WHERE `project_id` = '$pi'";
$res = mysqli_query($conn,$sql);
$row = mysqli_num_rows($res);

if ($row) {
	echo "<script>alert('已经上传过过程化步骤请勿重复上传！');window.location='index.php';</script>";
	exit(0);
}



//判断是不是负责人进行项目的步骤上传
$sql= "SELECT * FROM project WHERE `project_id` = '$pi' AND `host` = '$id'";
$res = mysqli_query($conn,$sql);
$row = mysqli_num_rows($res);

if(!$row)
	echo "<script>alert('你没有权限进行过程化上传。');history.go(-1);</script>";

else{
	$arrId =  array();
	$arrName=  array();
	$arrGoal =  array();
	$arrDate =  array();
	for($i = 0;$i<sizeof($_POST)/3;$i++){
		$ss = "ass".($i+1);
		$arrId[$i] =$_POST[$ss];
		$sql= "SELECT * FROM als_signup WHERE `id_number`= '$arrId[$i]'";
		$res = mysqli_query($conn,$sql);
		if(!mysqli_num_rows($res)){
			echo "<script>alert('未注册的学号或者学号非法。');history.go(-1);</script>";
			exit(0);
		}
		else{
			$row=mysqli_fetch_array($res);
			//$ii= $i+1;
			$arrName[$i] = $row["username"];
			//echo $arrName[$i];
			$sss = "as".($i+1);
			$ssss = "asd".($i+1);
			$arrGoal[$i] = $_POST[$sss];
			$arrDate[$i] = $_POST[$ssss];	
		}
	}

	for($j = 0; $j<sizeof($_POST)/3 ; $j++){
		$jj = $j+1;
		$query = "insert into project_step(project_id,step_id,operate_last_time,step_content,blame_person,person_id) values('$pi','$jj','$arrDate[$j]','$arrGoal[$j]','$arrName[$j]','$arrId[$j]')";
		mysqli_query($conn,$query);
	}

 	$sql = "UPDATE project SET `step_pos` = '1' WHERE `project_id` ='$pi'";
 	mysqli_query($conn,$sql);
/*
消息生成装置

 */ $sql = "SELECT * FROM project WHERE project_id = '$pi'";
 	$query = mysqli_query($conn,$sql);
 	$row = mysqli_fetch_array($query);
	$String = "步骤";
 	$sql = "INSERT INTO `projectnews`(`project_id`,`project_name`,`op_pid`,`op_pname`,`op_content`,`op_time`) VALUES('$pi','".$row["title"]."','".$row["host"]."','".$row["hostname"]."','$String',now())";
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



 	echo "<script>alert('上传成功。');window.location='manage_pro.php?project_id=".$_SESSION["iid"]."&step_pos=1';</script>";
}
 ?>