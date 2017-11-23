<?php 
	header("Content-type: text/html; charset=utf-8"); 
	session_start();
	//var_dump($_POST);
	$username = isset($_POST['username'])? $_POST['username'] : ''; 
	$sex = isset($_POST['sex'])? $_POST['sex'] : ''; 
	$college = isset($_POST['college'])? $_POST['college'] : ''; 
	$className = isset($_POST['className'])? $_POST['className'] : ''; 
	$workdirection = isset($_POST['workdirection'])? $_POST['workdirection'] : ''; 
	$advantages = isset($_POST['advantages'])? $_POST['advantages'] : ''; 
	$phonenumber = isset($_POST['phonenumber'])? $_POST['phonenumber'] : ''; 
	$openset0 = isset($_POST['openset0'])? $_POST['openset0'] : ''; 
	$QQnumber = isset($_POST['QQnumber'])? $_POST['QQnumber'] : ''; 
	$openset = isset($_POST['openset'])? $_POST['openset'] : ''; 
	$mailadress = isset($_POST['mailadress'])? $_POST['mailadress'] : ''; 
	
	if($username == ""){
		$username = $_SESSION["username"];
	}else{
		$_SESSION["username"] = $username;
	}

	if ($sex == "") {
		$sex = 0;
	}else if ($sex == "男") {
		$sex = 1;
	}else if ($sex == "女") {
		$sex = 2;
	}else{
		$sex = 0;
	}

	require_once'config.php';
	mysqli_query($conn,"set names utf8");
	$sql = "UPDATE  als_signup SET `username` = '$username',`sex` = '$sex',`college` = '$college',`className` = '$className',`workdirection` = '$workdirection',`advantages`='$advantages',`phonenumber`='$phonenumber',`phonecondition`='$openset0',`QQnumber`='$QQnumber',`QQcondition`='$openset',`mailadress` = '$mailadress' WHERE `id_number` ='".$_SESSION["id_number"]."'";
	mysqli_query($conn,$sql);
	 echo "<script>alert('修改成功!');window.location='".$_SERVER['HTTP_REFERER']."'</script>";
	

 ?>