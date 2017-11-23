<?php 
header("Content-type: text/html; charset=utf-8"); 
session_start();
	$filename=$_FILES['myfile']['name'];
	$type=$_FILES['myfile']['type'];
	$tmp_name=$_FILES['myfile']['tmp_name'];
	$size=$_FILES['myfile']['error'];


	$upload_file = iconv("UTF-8", "GB2312",md5(rand(5,10)).$_FILES["myfile"]["name"]);
		if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"projectimg/".$upload_file)){
			$upload_file = iconv("GB2312", "UTF-8",$upload_file);
			$head_pic="projectimg/".$upload_file;
			$response['isSuccess'] = true;  
			$response['myfile'] = $head_pic;  
		}
	echo json_encode($response);  


	require_once'config.php';
	mysqli_query($conn,"SET NAMES UTF8");
	$sql = "UPDATE  project SET `head_pic` = '$head_pic' WHERE `project_id` ='".$_SESSION["iid"]."'";
    $query = mysqli_query($conn,$sql);



 ?>