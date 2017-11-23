<?php 
header("Content-type:application/json; charset=utf-8");
ini_set('display_errors','Off');
$s0="";
$s1="";
$s2="";
$s3="";
$s4="";
if (isset($_GET["s0"])) {
	$s0=$_GET["s0"];
}

if (isset($_GET["s1"])) {
	$s1=$_GET["s1"];
}
if (isset($_GET["s2"])) {
	$s2=$_GET["s2"];
}
if (isset($_GET["s3"])) {
	$s3=$_GET["s3"];
}
if (isset($_GET["s4"])) {
	$s4=$_GET["s4"];
}



$array1 = array();

require_once'config.php';
mysqli_query($conn,"set names utf8");
$sql = "SELECT username FROM als_signup WHERE `id_number`=".$s0."";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if ($row["username"]) {
	$array1['s0']=$row["username"];
}
else
	$array1['s0']="该id不存在";


$sql = "SELECT username FROM als_signup WHERE `id_number`=".$s1."";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if ($row["username"]) {
	$array1['s1']=$row["username"];
}
else
	$array1['s1']="该id不存在";

$sql = "SELECT username FROM als_signup WHERE `id_number`=".$s2."";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if ($row["username"]) {
	$array1['s2']=$row["username"];
}
else
	$array1['s2']="该id不存在";
$sql = "SELECT username FROM als_signup WHERE `id_number`=".$s3."";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if ($row["username"]) {
	$array1['s3']=$row["username"];
}
else
	$array1['s3']="该id不存在";

$sql = "SELECT username FROM als_signup WHERE `id_number`=".$s4."";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if ($row["username"]) {
	$array1['s4']=$row["username"];
}
else
	$array1['s4']="该id不存在";


foreach ( $array1 as $key => $value ) {  
        $array1[$key] = urlencode ( $value );  
    }  
echo urldecode (json_encode($array1));
 ?>