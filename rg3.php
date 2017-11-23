<?php
session_start();
if (!isset($_GET["authcode"])) {
	echo "验证码不能为空！";
}else{
$authcode=$_GET["authcode"];
 if ($authcode!=strtolower($_SESSION["authcode"])){
 	echo "验证码不正确！";
 }
}
?>