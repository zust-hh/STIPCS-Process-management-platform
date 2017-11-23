<?php
session_start();
header("Content-type: text/html; charset=utf-8"); 
$flag=0;
$flag1=0;
$owner=$_POST["owner"];
$host=$_SESSION["id_number"];
$hostname=$_SESSION["username"];
$pointer="";
$pointername="";
$pointer2="";
$pointername2="";
$joiner1="";
$joiner2="";
$joiner3="";
$joiner4="";
$joiner5="";
$name1="";
$name2="";
$name3="";
$name4="";
$name5="";
//确认post信息
if ($_POST["create_name"]=="") {
	echo "<script>alert('未添加项目名称');</script>";
	 exit();
}
else
	$create_name=$_POST["create_name"];

if ($_POST["create_number"]=="") {
	echo "<script>alert('未添加项目编号');</script>";
	 exit();
}
else
	$create_number=$_POST["create_number"];

if ($_POST["begintime"]=="") {
	echo "<script>alert('未添加项目起始日期');</script>";
	 exit();
}
else
	$begintime=$_POST["begintime"];

if ($_POST["finnishtime"]=="") {
	echo "<script>alert('未添加终止日期');</script>";
	 exit();
}
else
	$finnishtime=$_POST["finnishtime"];

if ($_POST["abstract"]=="") {
	echo "<script>alert('未添加项目简介');</script>";
	 exit();
}
else
	$abstract=$_POST["abstract"];


if (isset($_POST["t0"])&&$_POST['t0']!=""&&$_POST["t0"]!="该id不存在") {
	$pointer=$_POST["teacher0"];
	$pointername=$_POST["t0"];
	$flag1++;
}
if (isset($_POST["t1"])&&$_POST['t1']!=""&&$_POST["t1"]!="该id不存在") {
	$pointer2=$_POST["teacher1"];
	$pointername2=$_POST["t1"];
	$flag1++;
}


if (isset($_POST["s0"])&&$_POST['s0']!=""&&$_POST["s0"]!="该id不存在") {
	$joiner1=$_POST["student0"];
	$name1=$_POST["s0"];
	$flag++;
}
if (isset($_POST["s1"])&&$_POST['s1']!=""&&$_POST["s1"]!="该id不存在") {
	$joiner2=$_POST["student1"];
	$name2=$_POST["s1"];
	$flag++;
}
if (isset($_POST["s2"])&&$_POST['s2']!=""&&$_POST["s2"]!="该id不存在") {
	$joiner3=$_POST["student2"];
	$name3=$_POST["s2"];
	$flag++;
}
if (isset($_POST["s3"])&&$_POST['s3']!=""&&$_POST["s3"]!="该id不存在") {
	$joiner4=$_POST["student3"];
	$name4=$_POST["s3"];
	$flag++;
}
if (isset($_POST["s4"])&&$_POST['s4']!=""&&$_POST["s4"]!="该id不存在") {
	$joiner5=$_POST["student4"];
	$name5=$_POST["s4"];
	$flag++;
}


if ($flag==0||$flag1==0) {
	echo "<script>alert('项目成员信息错误');</script>";
	 exit();
}




//文件上传块
$filename=$_FILES['myfile']['name'];
$type=$_FILES['myfile']['type'];
$tmp_name=$_FILES['myfile']['tmp_name'];
$size=$_FILES['myfile']['error'];
$flag=0;
if (!preg_match("/doc/", $filename)&&!preg_match("/docx/", $filename)&&!preg_match("/pdf/", $filename)) {
	$flag=1;
	echo "<script>alert('只支持上传doc、docx、pdf类型文件');</script>";
	exit(0);
}
if($flag==0)
	{
		$upload_file = iconv("UTF-8", "GB2312", $create_number.".".$_FILES["myfile"]["name"]);
		move_uploaded_file($_FILES["myfile"]["tmp_name"],"shenqingshu/".$upload_file);
		$upload_file = iconv("GB2312", "UTF-8",$upload_file);
		$shenqingshu="shenqingshu/".$upload_file;
	}
//文件上传块
	
	

	if ($_POST["type"]==4 && !$_POST["create_type"]=="") {
		$class=$_POST["create_type"];
	}
	else if ($_POST["type"]=="新苗") {
		$class="新苗";
	}
	else if ($_POST["type"]=="春萌") {
		$class="春萌";
	}
	else{
		$class="国创";
	}






	require_once'config.php';
	mysqli_query($conn,"SET NAMES UTF8");
	$sql="INSERT INTO project(`project_id`,`title`,`class`,`host`,`hostname`,`pointer`,`pointername`,`pointer2`,`pointername2`,`joiner1`,`name1`,`joiner2`,`name2`,`joiner3`,`name3`,`joiner4`,`name4`,`joiner5`,`name5`,`owner`,`begin_time`,`finnish_time`,`easy_introduce`,`shenqingshu`,`step_pos`) VALUES ('$create_number','$create_name','$class','$host','$hostname','$pointer','$pointername','$pointer2','$pointername2','$joiner1','$name1','$joiner2','$name2','$joiner3','$name3','$joiner4','$name4','$joiner5','$name5','$owner','$begintime','$finnishtime','$abstract','$shenqingshu','0')";
 	mysqli_query($conn,$sql);
 	/*
 	消息生成
 	 */
 	$String = "创建";
 	$sql = "INSERT INTO `projectnews`(`project_id`,`project_name`,`op_pid`,`op_pname`,`op_content`,`op_time`,`attachment`) VALUES('$create_number','$create_name','$host','$hostname','$String',now(),'$shenqingshu')";
 	mysqli_query($conn,$sql);
 	$messageID = mysqli_insert_id($conn);
 	$arrayi = array();
 	array_push($arrayi,$host);
 	array_push($arrayi,$pointer);
 	array_push($arrayi,$pointer2);
 	array_push($arrayi,$joiner1);
 	array_push($arrayi,$joiner2);
 	array_push($arrayi,$joiner3);
 	array_push($arrayi,$joiner4);
 	array_push($arrayi,$joiner5);
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

	echo "<script>alert('提交成功');window.location='procedural.php'</script>";



 ?>