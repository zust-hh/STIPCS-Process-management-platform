<?php 
	session_start();
	require_once'config.php';
    mysqli_query($conn,"SET NAMES UTF8");
    date_default_timezone_set('Asia/Shanghai');
    $time = date("Y-m-d H:i");
   	echo $time;
 	$getID = $_GET["getId"];
 	$getNM = $_GET["getNM"];
 	$sendID=$_SESSION["id_number"];
 	$sendNM= $_SESSION["username"];
 	$content = $_GET["content"];
 	$sql = "INSERT INTO `message`(`sendUI`, `sendUN`, `getUI`, `getUN`, `createDate`, `content`) VALUES ('$sendID','$sendNM','$getID','$getNM','$time','$content')";
 	mysqli_query($conn,$sql);
 ?>