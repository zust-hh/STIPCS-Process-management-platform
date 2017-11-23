<?php
header("Content-type: text/html; charset=utf-8"); 
session_start();
$filename=$_FILES['myfile']['name'];
$type=$_FILES['myfile']['type'];
$tmp_name=$_FILES['myfile']['tmp_name'];
$size=$_FILES['myfile']['error'];
$flag=0;
if ($size) {
	$flag=1;
	 echo "<script>window.location='procedural.php'</script>";
}
if($flag==0)
	{
		date_default_timezone_set('PRC');
   		$showtime = "stepfile/".date("Y年m月d日H时")."+".$_FILES["myfile"]["name"];

		$upload_file = iconv("UTF-8", "GB2312",$showtime);
		move_uploaded_file($_FILES["myfile"]["tmp_name"],$upload_file);


$iid =$_SESSION["iid"];
$num = $_GET["num"];
require_once'config.php';
				  mysqli_query($conn,"SET NAMES UTF8");
				  $sql = "SELECT * From project_step WHERE `project_id`='$iid' AND `step_id` = '$num'";
				  $query = mysqli_query($conn,$sql);
				  $row = mysqli_fetch_array($query);
				 // echo $row["fileposition"];
				if($row["fileposition"] == ""){
				  $arr = array ($showtime); 
				  $res = json_encode($arr);
				  $res = addslashes($res);
				 // echo $res;
				  $sql = "UPDATE project_step SET `fileposition` = '$res',`step_statue`='1' WHERE `step_id` ='$num'";
				  $query = mysqli_query($conn,$sql);
				  }
				else{
				 //	echo $row["fileposition"];
				 	$result = $row["fileposition"];
				 	$result = trim($result,chr(239).chr(187).chr(191));
				  	$array = json_decode($result,true);
				//    var_dump(json_decode($result));
				  	array_push($array, $showtime);
				  	$res = json_encode($array);
				  	$res = addslashes($res);
				  	$sql = "UPDATE project_step SET `fileposition` = '$res',`step_statue`='1' WHERE `step_id` ='$num'";
				    $query = mysqli_query($conn,$sql);

				  }

	/*
	消息产生
	 */	
	$bid = $row["person_id"];
	$bnm = $row["blame_person"];
	$step_content = $row["step_content"];
	$sql = "SELECT * FROM project WHERE project_id = '$iid'";
 	$query = mysqli_query($conn,$sql);
 	$row = mysqli_fetch_array($query);
	$String = "待审核";
	$sql = "INSERT INTO `projectnews`(`project_id`,`project_name`,`project_step`,`op_pid`,`op_pname`,`op_content`,`op_time`,`attachment`) VALUES('$iid','".$row["title"]."','$step_content','$bid','$bnm','$String',now(),'$showtime')";
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

	echo "<script>alert('上传成功。');history.go(-1);</script>";			  
}
 ?>