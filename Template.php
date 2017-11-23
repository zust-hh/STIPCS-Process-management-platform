<?php
//header("Content-type: text/html; charset=utf-8"); 
session_start();

require_once 'PHPWord.php';

$Tttt1 = " ";
$Tttt2 = " ";
$Tttt3 = " ";

if ($_POST["lei"] == "1") {
	$Tttt1 = "√";
}else if ($_POST["lei"] == "2") {
	$Tttt2 = "√";
}else if ($_POST["lei"] == "3") {
	$Tttt3 = "√";
}

$PHPWord = new PHPWord();

$document = $PHPWord->loadTemplate('template.docx');
$document->setValue('recSchool', $_POST["recSchool"]);
$document->setValue('proName',  $_POST["proName"]);
$document->setValue('collegeIncharge',  $_POST["collegeIncharge"]);
$document->setValue('personIncharge',  $_POST["personIncharge"]);
$document->setValue('personInchargeTel',  $_POST["personInchargeTel"]);
$document->setValue('pointerTeacher',  $_POST["pointerTeacher"]);
$document->setValue('pointerTeacherTel',  $_POST["pointerTeacherTel"]);
$document->setValue('applyDate',  $_POST["applyDate"]);
$document->setValue('Value9',  $_POST["collegeIncharge"]);
$document->setValue('Value10', $_POST["proName"]);

$document->setValue('T1', $Tttt1);
$document->setValue('T2', $Tttt2);
$document->setValue('T3', $Tttt3);


$document->setValue('yearB', $_POST["yearB"]);
$document->setValue('monthB', $_POST["monthB"]);
$document->setValue('yearF', $_POST["yearF"]);
$document->setValue('monthF', $_POST["monthF"]);
$document->setValue('proInFo', $_POST["proInFo"]);

$document->setValue('hostName1', $_POST["hostName1"]);
$document->setValue('hostLevel1', $_POST["hostLevel1"]);
$document->setValue('hostNumber1', $_POST["hostNumber1"]);
$document->setValue('hostColl1', $_POST["hostColl1"]);
$document->setValue('hostTel1', $_POST["hostTel1"]);
$document->setValue('hostEmail1', $_POST["hostEmail1"]);



$document->setValue('hostName2', $_POST["hostName2"]);
$document->setValue('hostLevel2', $_POST["hostLevel2"]);
$document->setValue('hostNumber2', $_POST["hostNumber2"]);
$document->setValue('hostColl2', $_POST["hostColl2"]);
$document->setValue('hostTel2', $_POST["hostTel2"]);
$document->setValue('hostEmail2', $_POST["hostEmail2"]);

$document->setValue('joinName1', $_POST["joinName1"]);
$document->setValue('joinLevel1', $_POST["joinLevel1"]);
$document->setValue('joinNumber1', $_POST["joinNumber1"]);
$document->setValue('joinColl1', $_POST["joinColl1"]);
$document->setValue('joinTel1', $_POST["joinTel1"]);
$document->setValue('joinEmail1', $_POST["joinEmail1"]);


$document->setValue('joinName2', $_POST["joinName2"]);
$document->setValue('joinLevel2', $_POST["joinLevel2"]);
$document->setValue('joinNumber2', $_POST["joinNumber2"]);
$document->setValue('joinColl2', $_POST["joinColl2"]);
$document->setValue('joinTel2', $_POST["joinTel2"]);
$document->setValue('joinEmail2', $_POST["joinEmail2"]);

$document->setValue('joinName3', $_POST["joinName3"]);
$document->setValue('joinLevel3', $_POST["joinLevel3"]);
$document->setValue('joinNumber3', $_POST["joinNumber3"]);
$document->setValue('joinColl3', $_POST["joinColl3"]);
$document->setValue('joinTel3', $_POST["joinTel3"]);
$document->setValue('joinEmail3', $_POST["joinEmail3"]);

$document->setValue('joinName4', $_POST["joinName4"]);
$document->setValue('joinLevel4', $_POST["joinLevel4"]);
$document->setValue('joinNumber4', $_POST["joinNumber4"]);
$document->setValue('joinColl4', $_POST["joinColl4"]);
$document->setValue('joinTel4', $_POST["joinTel4"]);
$document->setValue('joinEmail4', $_POST["joinEmail4"]);

$document->setValue('pointerName1', $_POST["pointerName1"]);
$document->setValue('pointerPart1', $_POST["pointerPart1"]);
$document->setValue('pointerAge1', $_POST["pointerAge1"]);
$document->setValue('pointerJob1', $_POST["pointerJob1"]);
$document->setValue('pointerInFo1', $_POST["pointerInFo1"]);

$document->setValue('pointerName2', $_POST["pointerName2"]);
$document->setValue('pointerPart2', $_POST["pointerPart2"]);
$document->setValue('pointerAge2', $_POST["pointerAge2"]);
$document->setValue('pointerJob2', $_POST["pointerJob2"]);
$document->setValue('pointerInFo2', $_POST["pointerInFo2"]);

$document->setValue('applyReason', $_POST["applyReason"]);

$document->setValue('finishWay', $_POST["finishWay"]);

$document->setValue('environmentSchool', $_POST["environmentSchool"]);

$document->setValue('goal', $_POST["goal"]);

$document->setValue('totalMoney', $_POST["totalMoney"]);
$document->setValue('governmentMoney', $_POST["governmentMoney"]);
$document->setValue('schoolMoney', $_POST["schoolMoney"]);
$document->setValue('includeDetail', $_POST["includeDetail"]);

$document->setValue('recommendReason', $_POST["recommendReason"]);


$s = "&".md5(rand(0,5));
$String =iconv("UTF-8", "GB2312", "createWord/".$_POST["proName"].$s.".docx");
$document->save($String);
$String = "createWord/".$_POST["proName"].$s.".docx";
/*
	打开数据库将数据将文档路径存入用户的
 */

require_once'config.php';
mysqli_query($conn,"SET NAMES UTF8");
$sql = "SELECT * FROM als_signup WHERE `id_number` = '".$_SESSION["id_number"]."'";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);
if ($row["fileposition"] == "") {
	$arr = array ($String); 
	$res = json_encode($arr);
	$res = addslashes($res);
	$sql = "UPDATE als_signup SET `fileposition` = '$res' WHERE `id_number` = '".$_SESSION["id_number"]."'";
	$query = mysqli_query($conn,$sql);
}else{
	$result = $row["fileposition"];
	$result = trim($result,chr(239).chr(187).chr(191));
	$array = json_decode($result,true);
	array_push($array, $String);
	$res = json_encode($array);
	$res = addslashes($res);
	$sql = "UPDATE als_signup SET `fileposition` = '$res' WHERE `id_number` = '".$_SESSION["id_number"]."'";
	$query = mysqli_query($conn,$sql);
}

echo json_encode("<a href='".$String."'>点击下载生成的文件</a>");


?>