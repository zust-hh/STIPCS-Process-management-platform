<?php
header("Content-type: text/html; charset=utf-8");
session_start();
$id_number1 = $_POST["id_numberl"];
$password1 = $_POST["passwordl"];
@$authcode1 = $_POST["authcodel"];
if ($authcode1!=$_SESSION["authcode"]) {
	 echo "<script>alert('验证码错误');window.location='".$_SERVER['HTTP_REFERER']."'</script>";
}
else{
	require_once'config.php';
	mysqli_query($conn,"SET NAMES UTF8");
	$query="SELECT * FROM als_signup where id_number='$id_number1'";
	$result=mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result);
		$num=mysqli_num_rows($result);
		if ($num==1&&$password1==$row["password"]) {
			 $_SESSION["id_number"]=$row["id_number"];
			 $_SESSION["head_portrait"]=$row["head_portrait"];
			 $_SESSION["username"]=$row["username"];
			 if ($row["sex"] == 1) {
			 	$_SESSION["sex"] = "男";
			 }else if ($row["sex"] == 2) {
			 	$_SESSION["sex"] = "女";
			 }else{
			 	$_SESSION["sex"] = "未知";
			 }
/*
  遍历过程判断是否有步骤未完成

 */
		$sql = "SELECT * FROM project_step";
		$query = mysqli_query($conn,$sql);
		$time = date("Y-m-d");
   		$String = "过期";
		while ($row = mysqli_fetch_array($query)) {
			$pi = $row["project_id"];
			$step_content = $row["step_content"];
			if(strtotime($row["operate_last_time"]) <= strtotime($time) && $row["step_statue"] != 2){
				$sql = "SELECT * FROM projectnews WHERE `project_step` = '".$row["step_content"]."' AND `project_id` = '$pi' AND `op_content` = '$String'";
				$queryForR = mysqli_query($conn,$sql);
				$num = mysqli_num_rows($queryForR);
				if (!$num) {
					 $sql = "SELECT * FROM project WHERE project_id = '$pi'";
					 $queryForC = mysqli_query($conn,$sql);
					 $rowForC = mysqli_fetch_array($queryForC);
					 $sql = "INSERT INTO `projectnews`(`project_id`,`project_name`,`project_step`,`op_pid`,`op_pname`,`op_content`,`op_time`) VALUES('$pi','".$rowForC["title"]."','".$row["step_content"]."','".$row["person_id"]."','".$row["blame_person"]."','$String',now())";
							 	mysqli_query($conn,$sql);
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



				}
			}	
		}

  			echo "<script>alert('登陆成功');window.location='procedural.php'</script>";
		}
		elseif ($num==1) {
			 echo "<script>alert('密码不正确');window.location='".$_SERVER['HTTP_REFERER']."'</script>";
		}
		else{
			session_unset();
			 echo "<script>alert('不存在该用户');window.location='".$_SERVER['HTTP_REFERER']."'</script>";

		}
	}

?>