<?php 
	session_start();
	header("Content-type: text/html; charset=utf-8"); 
	$step_id = $_GET["step_id"];
	$iid =$_SESSION["iid"];

	require_once'config.php';
	mysqli_query($conn,"SET NAMES UTF8");
	$sql = "SELECT * From project_step WHERE `project_id`='$iid' AND `step_id` = '$step_id'";
	$query = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($query);
	$result = $row["fileposition"];

	$result = trim($result,chr(239).chr(187).chr(191));
	$array = json_decode($result,true);

	echo "<tr>
            <th id=\"filename\">文件名</th>
            <th id=\"uptime\">上传日期</th>
            <th id=\"filedl\">下载</th>
           </tr>";
 	foreach($array as $value) {  

 	$start = mb_strpos($value,'/',0,"utf-8")+1;
	$end = mb_strpos($value,'+',0,"utf-8");
	$t2 = mb_substr($value,$start,$end-$start,'utf-8');
 

	$start1 = mb_strpos($value,'+',0,"utf-8")+1;
	$end1 = mb_strlen($value,"utf-8")-1;
	$t1 = mb_substr($value,$start1,$end1-$start1,'utf-8');
     
       echo "
		 <tr class=\"onefile\">
            <td>".$t1."</td>
            <td>".$t2."</td>
            <td><a href=\"".$value."\">下载</a></td>
         </tr>
          ";
    }



 ?>