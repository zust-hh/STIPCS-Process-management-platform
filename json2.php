<?php 
header("Content-type:application/json; charset=utf-8");
ini_set('display_errors','Off');
$t0="";
$t1="";
$t2="";
$t3="";
$t4="";
if (isset($_GET["t0"])) {
	$t0=$_GET["t0"];
}

if (isset($_GET["t1"])) {
	$t1=$_GET["t1"];
}
if (isset($_GET["t2"])) {
	$t2=$_GET["t2"];
}
if (isset($_GET["t3"])) {
	$t3=$_GET["t3"];
}
if (isset($_GET["t4"])) {
	$t4=$_GET["t4"];
}



$array1 = array();

require_once'config.php';
mysqli_query($conn,"set names utf8");
$sql = "SELECT username FROM als_signup WHERE `id_number`=".$t0."";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if ($row["username"]) {
	$array1['t0']=$row["username"];
}
else
	$array1['t0']="该id不存在";


$sql = "SELECT username FROM als_signup WHERE `id_number`=".$t1."";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if ($row["username"]) {
	$array1['t1']=$row["username"];
}
else
	$array1['t1']="该id不存在";

$sql = "SELECT username FROM als_signup WHERE `id_number`=".$t2."";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if ($row["username"]) {
	$array1['t2']=$row["username"];
}
else
	$array1['t2']="该id不存在";
$sql = "SELECT username FROM als_signup WHERE `id_number`=".$t3."";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if ($row["username"]) {
	$array1['t3']=$row["username"];
}
else
	$array1['t3']="该id不存在";

$sql = "SELECT username FROM als_signup WHERE `id_number`=".$t4."";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if ($row["username"]) {
	$array1['t4']=$row["username"];
}
else
	$array1['t4']="该id不存在";


foreach ( $array1 as $key => $value ) {  
        $array1[$key] = urlencode ( $value );  
    }  
echo urldecode (json_encode($array1));
 ?>