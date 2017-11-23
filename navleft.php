<?php 

$id_number=$_SESSION["id_number"];
   	require_once'config.php';
 	mysqli_query($conn,"SET NAMES UTF8");
	mysqli_select_db($conn,"xiangmu");
	$query="SELECT * FROM project";
	$result=mysqli_query($conn,$query);
	$num=mysqli_num_rows($result);
	echo "<ul class=\"tab-mnu\">";
	echo "<li id=\"number\" class=\"selected\"><a href=\"#\"> 所有项目<span>".$num."</span></a></li>";
	$query="SELECT * FROM project WHERE (`host`='$id_number' OR `joiner1`='$id_number' OR `joiner2`='$id_number' OR `joiner3`='$id_number' OR `joiner4`='$id_number' OR `pointer` ='$id_number' OR `pointer2` = '$id_number') AND `position`='0'";
	$result=mysqli_query($conn,$query);
	$num=mysqli_num_rows($result);
	echo "  <li id=\"number\"><a href=\"#\">个人正在进行项目<span>".$num."</span></a></li>";
	$query="SELECT * FROM project WHERE (`host`='$id_number' OR `joiner1`='$id_number' OR `joiner2`='$id_number' OR `joiner3`='$id_number' OR `joiner4`='$id_number' OR `pointer` ='$id_number' OR `pointer2` = '$id_number') AND `position`='1'";
	$result=mysqli_query($conn,$query);
	$num=mysqli_num_rows($result);
	echo " <li id=\"number\"><a href=\"#\">个人已完成项目<span>".$num."</span></a></li>";
	$query="SELECT * FROM project WHERE (`host`='$id_number' OR `joiner1`='$id_number' OR `joiner2`='$id_number' OR `joiner3`='$id_number' OR `joiner4`='$id_number' OR `pointer` ='$id_number' OR `pointer2` = '$id_number') AND `position`='2'";
	$result=mysqli_query($conn,$query);
	$num=mysqli_num_rows($result);
	echo "<li id=\"number\"><a href=\"#\">个人未完成项目<span>".$num."</span></a></li>";
	echo "</ul>";


 ?>