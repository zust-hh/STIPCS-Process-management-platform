<?php
session_start();
if (!isset($_GET["authcodel"])) {
	echo "验证码不能为空！";
}else{
$authcodel=$_GET["authcodel"];
 if ($authcodel!=strtolower($_SESSION["authcode"])) {
 	echo "验证码不正确！";
 }
}
?>