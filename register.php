<?php 
header("Content-type: text/html; charset=utf-8");
session_start();
$id_number=$_POST["id_number"];
$password=$_POST["password"];
$rpassword=$_POST["rpassword"];
$authcode=$_POST["authcode"];
//数据库连接
require_once'config.php';
mysqli_query($conn,"SET NAMES 'utf8'");

//非空判断

if($id_number==""||$password==""||$rpassword=="")
    echo "<script>alert('信息填写不完整，请您重新填写！');history.go(-1);</script>";
else if ($authcode!=$_SESSION["authcode"])
	 echo "<script>alert('验证码不正确！');history.go(-1);</script>";
//学号判断
else if(strlen($id_number)!=6 && strlen($id_number)!=10){
 	echo "<script>alert('您的学/工号有误，请重新填写！');history.go(-1);</script>";
}
else if(!preg_match('/^[0-9]*$/i',$id_number))
	{
		echo "<script>alert('您的学/工号含有非法字段！');history.go(-1);</script>";
		$phonenumber=trim($_POST["phonenumber"]);
	}
//密码判断

else if($password!=$rpassword)
	echo "<script>alert('您输入密码前后不一致，请重新输入！');history.go(-1);</script>";
else if(!preg_match("/^[\w\_]{6,20}$/u",$password))
	echo "<script>alert('您输入的密码不合法，请重新输入！');history.go(-1);</script>";


//判断用户名和密码是否存在
else{
		
	if (strlen($id_number) == 6) {
 		$class = 0;
 	}else{
 		$class = 1;
 	}

	$query ="SELECT * FROM als_signup where id_number='$id_number'";
	$result=mysqli_query($conn,$query);
	$num=mysqli_num_rows($result);
	if($num!=0)
		echo "<script>alert('用户名已存在'); history.go(-1);</script>";
    else{
//插入数据
$query ="insert into als_signup (id_number,password,class) values('$id_number','$password','$class')";
 mysqli_query($conn,$query);
 
 $_SESSION["id_number"]=$id_number;	
 $_SESSION["head_portrait"]="image/default.jpg";
 $_SESSION["username"]="完善信息";
}
  echo "<script>alert('注册成功！');window.location='index.php';</script>"; 
}


 ?>