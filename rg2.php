<?php
$password=$_GET["password"];
$rpassword=$_GET["rpassword"];
if (strlen($password)<6)
	echo "您的密码位数过短，请重新设置密码。";
else if($password!=$rpassword)
 echo "前后输入的密码不一致";
else if(!preg_match("/^[\w\_]{6,20}$/u",$password))
	echo "您输入的密码不合法，请重新输入！";
?>