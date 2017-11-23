<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新头</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/head.css">
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/head.js"></script>
</head>
<body>
<div class="container-fluid navbar-fixed-top" >
    <div class="">
        <div class="nav nav-collapse">
            <div class="menu" style="width:100%">
                <ul>
                    <li><a  class="logo" href="#"><img src="images/logo.png"></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-leaf" ></span>   首页</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-folder-close"></span> 实践资料</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> 过程化管理</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-search"></span> 队员招募</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-pencil"></span> 展示园地</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> 用户中心</a></li>
                </ul>
                <ul class="pull-right pull1">
                    <li id="login-main"><a href="#"><span class="glyphicon glyphicon-user"></span>  登录</a></li>
                    <li id="register-main"><a href="#"><span class="glyphicon glyphicon-adjust"></span>  注册</a></li>
                </ul>
                <div class="theme-login-mask"></div>
                <div class="theme-login">
                    <div class="theme-loginpoptit">
                        <a href="javascript:;" title="关闭" class="loginclose">×</a>
                        <h3>登录</h3>
                    </div>
                    <div class="theme-loginpopbod">
                        <div>
                            <form name="form1" method="post" action="logincheck.php">
                                <input class="form-control" name="id_numberl" type="text" id="id_numberl" placeholder="请输入学号">
                                <p id="a7" class="error">          </p>
                                <input class="form-control" name="passwordl" type="password" id="passwordl" placeholder="请输入密码">
                                <p  class="error">          </p>
                                <div class="authcode" style="margin-left: 71px">
                                    <input class="form-control" type="text" name="authcodel" id="authcodel" placeholder="请输入验证码" style="display: inline-block;width: 120px;margin-top: -20px">
                                    <img id="yzm1" src="identifying_code.php?r=<?php echo rand();?>" style="display: inline-block;width: 100px;height: 30px;margin-top: 5px;">
                                    <a href="javascript:void(0)" style="display: inline-block;" onClick="document.getElementById('yzm1').src='identifying_code.php?r='+Math.random()">换一张？</a><br>
                                    <p id="a3" class="error">          </p>
                                </div>
                                <br>
                                <input type="submit" value="登录" class="btn btn-primary" style="border: none;color: white;font-size: 20px;margin-left: 71px">
                                <br>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="theme-register-mask"></div>
                <div class="theme-register">
                    <div class="theme-registerpoptit">
                        <a href="javascript:;" title="关闭" class="registerclose">×</a>
                        <h3>注册</h3>
                    </div>
                    <div class="theme-registerpopbod">
                        <div>
                            <form name="form1" method="post" action="register.php">
                               <input class="form-control" name="id_number" type="text" id="id_number" placeholder="请输入学号">
                                <p id="a1" class="error">          </p>
                                <input class="form-control" name="password" type="password" id="password" placeholder="请输入密码">
                                <p id="a2" class="error">          </p>
                                <input class="form-control" name="rpassword" type="password" id="rpassword" placeholder="请确认密码">
                                <p  class="error">          </p>
                                <div class="authcode" style="margin-left: 73px">
                                    <input class="form-control" type="text" name="authcode" id="authcode" placeholder="请输入验证码" style="display: inline-block;width: 120px;margin-top: -20px">
                                    <img id="yzm" src="identifying_code.php?r=<?php echo rand();?>" style="display: inline-block;width: 100px;height: 30px;margin-top: 5px;">
                                    <a href="javascript:void(0)" style="display: inline-block;" onClick="document.getElementById('yzm').src='identifying_code.php?r='+Math.random()">换一张？</a><br>
                                    <p id="a4" class="error">          </p>
                                </div>
                                <br>
                                <input type="submit" value="注册" class="btn btn-primary" style="border: none;color: white;font-size: 20px;margin-left: 73px">
                                <br>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    document.getElementById("id_number").onblur = function() {
        var request = new XMLHttpRequest();
        request.open("GET", "rg1.php?id_number=" + document.getElementById("id_number").value);
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                    document.getElementById("a1").innerHTML = request.responseText;
                } else {
                    alert("发生错误：" + request.status);
                }
            }
        }
    }
    // 1


    document.getElementById("rpassword").onblur = function() {
        var request = new XMLHttpRequest();
        request.open("GET", "rg2.php?password=" + document.getElementById("password").value + "&rpassword="+document.getElementById("rpassword").value);
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                    document.getElementById("a2").innerHTML = request.responseText;
                } else {
                    alert("发生错误：" + request.status);
                }
            }
        }
    }
    //2


    document.getElementById("phonenumber").onblur = function() {
        var request = new XMLHttpRequest();
        request.open("GET", "rg3.php?phonenumber=" + document.getElementById("phonenumber").value);
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                    document.getElementById("a3").innerHTML = request.responseText;
                } else {
                    alert("发生错误：" + request.status);
                }
            }
        }
    }
    //3



    document.getElementById("mailadress").onblur = function() {
        var request = new XMLHttpRequest();
        request.open("GET", "rg4.php?mailadress=" + document.getElementById("mailadress").value);
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                    document.getElementById("a4").innerHTML = request.responseText;
                } else {
                    alert("发生错误：" + request.status);
                }
            }
        }
    }
    //4
    document.getElementById("authcode").onblur = function() {
        var request = new XMLHttpRequest();
        request.open("GET", "rg5.php?authcode=" + document.getElementById("authcode").value);
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                    document.getElementById("a5").innerHTML = request.responseText;
                } else {
                    alert("发生错误：" + request.status);
                }
            }
        }
    }


</script>
</body>

</html>