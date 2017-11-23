<?php 
	  session_start();
	  $iid = $_SESSION["iid"];
	  $id = $_GET["id"];
	  require_once'config.php';
      mysqli_query($conn,"SET NAMES UTF8");
      $sql = "SELECT * FROM project WHERE `project_id`='$iid' ";
      $query = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($query);
      if ($row["joiner1"] == $id) {
      	$sql = "UPDATE project set `joiner1` ='',`name1` = '' WHERE project_id = '$iid'";
      }else if ($row["joiner2"] == $id) {
      	$sql = "UPDATE project set `joiner2` ='',`name2` = '' WHERE project_id = '$iid'";
      }else if ($row["joiner3"] == $id) {
      	$sql = "UPDATE project set `joiner3` ='',`name3` = '' WHERE project_id = '$iid'";
      }else if ($row["joiner4"] == $id) {
      	$sql = "UPDATE project set `joiner4` ='',`name4` = '' WHERE project_id = '$iid'";
      }else if($row["joiner5"] == $id) {
      	$sql = "UPDATE project set `joiner5` ='',`name5` = '' WHERE project_id = '$iid'";
      }
      mysqli_query($conn,$sql);
 ?>