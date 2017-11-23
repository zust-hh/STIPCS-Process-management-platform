<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>登录</title>
		<style>
			html {
				width: 100%;
				height: 100%;
			}
			body {
				width: 98%;
				height: 98%;
				background: url(images/login.jpg) no-repeat;
				background-size: 100% 100%;
			}
			.top {
				width: 100%;
    			height: 190px;
    			background-position: center bottom;
				background-size: cover;
				position: relative;
			}
			.topimg {
				position: absolute;
			    width: 100%;
			    bottom: 25px;
			    text-align: center;
			}
			.topimg img {
				width: 187px;
				background-size: 187px 30px;
				display: block;
			    height: 46px;
			    margin: 0 auto 20px;
			    background-position: center bottom;
			    background-repeat: no-repeat;
			}
			.loginBody {
				margin-bottom: 100px;
				width: 100%;
			    max-width: 360px;
			    margin: 0 auto;
			    padding: 0 10px;
			}
			.loginBody form {
				display: block;
    			margin-top: 0em;
    			font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
			    font-size: 14px;
			    line-height: 1.42857143;
			    color: #383838;
			}
			.loginBody input {
				font-family: "微软雅黑";
				font-weight:400;
				height: auto;
			    width: 100%;
			    margin-bottom: 25px;
			    padding: 12px;
			    font-size: 16px;
			    line-height: 20px;
			    -webkit-appearance: none;
			    border: 1px solid #d9d9d9;
			    border-radius: 3px;
			}
			.form-control::-webkit-input-placeholder {
			  color: rgb(217,217,224);
			}
			.form-control:-moz-placeholder {
			  color: rgb(217,217,224);
			}
			.form-control:-ms-input-placeholder {
			  color: rgb(217,217,224);
			}
			#loginbtn {
				width: 384px;
				border: 1px solid #03A9F4 !important;
				display: inline-block;
				text-decoration: none;
			    margin-bottom: 0;
			    font-weight: 400;
			    text-align: center;
			    vertical-align: middle;
			    cursor: pointer;
			    border: 1px solid transparent;
			    white-space: nowrap;
			    color: #03A9F4 !important;
			    background-color: transparent;
			    transition: all 218ms cubic-bezier(.42,0,.58,1);
			    border-radius: 3px;
			    padding: 8px 14px;
			}
			#loginbtn:hover {
				color: #fff !important;
			    background-color: #0ab1fc;
			    border-color: #0ab1fc;
			}
		</style>
	</head>
	<body>
		<div class="top">
			<div class="topimg">
				<img src="images/logo1.png" alt="index" />
			</div>
		</div>
		<div class="loginBody">
			<form name="form1" method="post" action="logincheck.php">
                <input class="form-control" name="id_numberl" type="text" id="id_numberl" placeholder="请输入学号">
                <p id="a7" class="error">          </p>
                <input class="form-control" name="passwordl" type="password" id="passwordl" placeholder="请输入密码">
                <p class="error">          </p>
                <div class="authcode" style="position: relative;">
                <input class="form-control" type="text" name="authcodel" id="authcodel" placeholder="请输入验证码" style="display: inline-block;width: 200px;top: 0;position: absolute;">
                <img id="yzm1" src="identifying_code.php?r=<?php echo rand();?>" style="display: inline-block;width: 150px;height: 45px;margin-left: 230px;" onClick="document.getElementById('yzm1').src='identifying_code.php?r='+Math.random()"><br />
                <p id="a3" class="error">          </p>
                </div>
                <br>
                <input type="submit" value="登录" class="btn btn-primary" style="border: none;color: white;font-size: 20px" id="loginbtn">
                <br>
            </form>
		</div>
	</body>
</html>