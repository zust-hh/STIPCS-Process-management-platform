<?php
session_start();
require_once'config.php';
mysqli_query($conn,"SET NAMES UTF8");
$pi = $_SESSION["iid"];
$s = "SELECT * FROM projectnews WHERE `project_id` = '$pi' AND `project_step` ='-1'";
$q = mysqli_query($conn,$s);
$num = mysqli_num_rows($q);

		$time = date("Y-m-d");
   		$String = "结题";
					 $sql = "SELECT * FROM project WHERE project_id = '$pi'";
					 $queryForC = mysqli_query($conn,$sql);
					 $rowForC = mysqli_fetch_array($queryForC);
					 if(!$num){
					 $sql = "INSERT INTO `projectnews`(`project_id`,`project_name`,`project_step`,`op_pid`,`op_pname`,`op_content`,`op_time`) VALUES('$pi','".$rowForC["title"]."','-1','".$rowForC["host"]."','".$rowForC["hostname"]."','$String',now())";
					 mysqli_query($conn,$sql);
					 }
								
							 	$messageID = mysqli_insert_id($conn);
							 	$arrayi = array();
							 	array_push($arrayi,$rowForC["host"]);
								array_push($arrayi,$rowForC["pointer"]);
								array_push($arrayi,$rowForC["pointer2"]);
								array_push($arrayi,$rowForC["joiner1"]);
								array_push($arrayi,$rowForC["joiner2"]);
								array_push($arrayi,$rowForC["joiner3"]);
								array_push($arrayi,$rowForC["joiner4"]);
								array_push($arrayi,$rowForC["joiner5"]);
								for($i = 0 ; $i <= 7 ;$i++){
							 		if ($arrayi[$i] != "") {
							 			$sql = "SELECT * FROM als_signup WHERE `id_number` = '$arrayi[$i]'";
										$quer = mysqli_query($conn,$sql);
										$rowForC = mysqli_fetch_array($quer);
										if ($rowForC["message"] == "") {
											$arr = array ($messageID); 
											$res = json_encode($arr);
											$res = addslashes($res);
											$sql = "UPDATE als_signup SET `message` = '$res' WHERE `id_number` = '$arrayi[$i]'";
											$quer = mysqli_query($conn,$sql);
										}else{
											$result = $rowForC["message"];
											$result = trim($result,chr(239).chr(187).chr(191));
											$array = json_decode($result,true);
											array_push($array, $messageID);
											$res = json_encode($array);
											$res = addslashes($res);
											$sql = "UPDATE als_signup SET `message` = '$res' WHERE `id_number` = '$arrayi[$i]'";
											$quer = mysqli_query($conn,$sql);
							 			}
							 		}
							 	}
?>