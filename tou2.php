<?php 
header("Content-type: text/html; charset=utf-8"); 


if (!isset($_SESSION["id_number"])) {
   echo "
     <div class=\"container-fluid navbar-fixed-top\" >
    <div class=\"\">
        <div class=\"nav nav-collapse\">
            <div class=\"menu\" style=\"width:100%\">
                <ul>
                    <li><a  class=\"logo\" href=\"#\"><img src=\"images/logo.png\"></a></li>
                    <li><a href=\"study-environment.html\"><span class=\"glyphicon glyphicon-folder-close\"></span> 实践资料</a></li>
                    <li><a href=\"procedural.php\"><span class=\"glyphicon glyphicon-list-alt\"></span> 过程化管理</a></li>
                    <li><a href=\"partner.php\"><span class=\"glyphicon glyphicon-search\"></span> 队员招募</a></li>
                    <li><a href=\"show-index.php\"><span class=\"glyphicon glyphicon-pencil\"></span> 展示园地</a></li>
                    <li><a href=\"z-user-center.php\"><span class=\"glyphicon glyphicon-user\"></span> 用户中心</a></li>
                </ul>
                <ul class=\"pull-right pull1\">
                    <li id=\"login-main\"><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span>  登录</a></li>
                    <li id=\"register-main\"><a href=\"#\"><span class=\"glyphicon glyphicon-adjust\"></span>  注册</a></li>
                </ul>
                <div class=\"theme-login-mask\"></div>
                <div class=\"theme-login\">
                    <div class=\"theme-loginpoptit\">
                        <a href=\"javascript:;\" title=\"关闭\" class=\"loginclose\">×</a>
                        <h3>登录</h3>
                    </div>
                    <div class=\"theme-loginpopbod\">
                        <div>
                            <form name=\"form1\" method=\"post\" action=\"logincheck.php\">
                                <input class=\"form-control\" name=\"id_numberl\" type=\"text\" id=\"id_numberl\" placeholder=\"请输入学号\">
                                <p id=\"a7\" class=\"error\">          </p>
                                <input class=\"form-control\" name=\"passwordl\" type=\"password\" id=\"passwordl\" placeholder=\"请输入密码\">
                                <p  class=\"error\">          </p>
                                <div class=\"authcode\" style=\"margin-left: 71px\">
                                    <input class=\"form-control\" type=\"text\" name=\"authcodel\" id=\"authcodel\" placeholder=\"请输入验证码\" style=\"display: inline-block;width: 120px;margin-top: -20px\">
                                    <img id=\"yzm1\" src=\"identifying_code.php?r=<?php echo rand();?>\" style=\"display: inline-block;width: 100px;height: 30px;margin-top: 5px;\">
                                    <a href=\"javascript:void(0)\" style=\"display: inline-block;\" onClick=\"document.getElementById('yzm1').src='identifying_code.php?r='+Math.random()\">换一张？</a><br>
                                    <p id=\"a3\" class=\"error\">          </p>
                                </div>
                                <br>
                                <input type=\"submit\" value=\"登录\" class=\"btn btn-primary\" style=\"border: none;color: white;font-size: 20px;margin-left: 71px\">
                                <br>
                            </form>

                        </div>
                    </div>
                </div>
                <div class=\"theme-register-mask\"></div>
                <div class=\"theme-register\">
                    <div class=\"theme-registerpoptit\">
                        <a href=\"javascript:;\" title=\"关闭\" class=\"registerclose\">×</a>
                        <h3>注册</h3>
                    </div>
                    <div class=\"theme-registerpopbod\">
                        <div>
                            <form name=\"form1\" method=\"post\" action=\"register.php\">
                               <input class=\"form-control\" name=\"id_number\" type=\"text\" id=\"id_number\" placeholder=\"请输入学号\">
                                <p id=\"a1\" class=\"error\">          </p>
                                <input class=\"form-control\" name=\"password\" type=\"password\" id=\"password\" placeholder=\"请输入密码\">
                                <p id=\"a2\" class=\"error\">          </p>
                                <input class=\"form-control\" name=\"rpassword\" type=\"password\" id=\"rpassword\" placeholder=\"请确认密码\">
                                <p  class=\"error\">          </p>
                                <div class=\"authcode\" style=\"margin-left: 73px\">
                                    <input class=\"form-control\" type=\"text\" name=\"authcode\" id=\"authcode\" placeholder=\"请输入验证码\" style=\"display: inline-block;width: 120px;margin-top: -20px\">
                                    <img id=\"yzm\" src=\"identifying_code.php?r=<?php echo rand();?>\" style=\"display: inline-block;width: 100px;height: 30px;margin-top: 5px;\">
                                    <a href=\"javascript:void(0)\" style=\"display: inline-block;\" onClick=\"document.getElementById('yzm').src='identifying_code.php?r='+Math.random()\">换一张？</a><br>
                                    <p id=\"a4\" class=\"error\">          </p>
                                </div>
                                <br>
                                <input type=\"submit\" value=\"注册\" class=\"btn btn-primary\" style=\"border: none;color: white;font-size: 20px;margin-left: 73px\">
                                <br>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type=\"text/javascript\">
    document.getElementById(\"id_number\").onblur = function() {
        var request = new XMLHttpRequest();
        request.open(\"GET\", \"rg1.php?id_number=\" + document.getElementById(\"id_number\").value);
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                    document.getElementById(\"a1\").innerHTML = request.responseText;
                } else {
                    alert(\"发生错误：\" + request.status);
                }
            }
        }
    }
    // 1


    document.getElementById(\"rpassword\").onblur = function() {
        var request = new XMLHttpRequest();
        request.open(\"GET\", \"rg2.php?password=\" + document.getElementById(\"password\").value + \"&rpassword=\"+document.getElementById(\"rpassword\").value);
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                    document.getElementById(\"a2\").innerHTML = request.responseText;
                } else {
                    alert(\"发生错误：\" + request.status);
                }
            }
        }
    }
    //2


    document.getElementById(\"phonenumber\").onblur = function() {
        var request = new XMLHttpRequest();
        request.open(\"GET\", \"rg3.php?phonenumber=\" + document.getElementById(\"phonenumber\").value);
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                    document.getElementById(\"a3\").innerHTML = request.responseText;
                } else {
                    alert(\"发生错误：\" + request.status);
                }
            }
        }
    }
    //3



    document.getElementById(\"mailadress\").onblur = function() {
        var request = new XMLHttpRequest();
        request.open(\"GET\", \"rg4.php?mailadress=\" + document.getElementById(\"mailadress\").value);
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                    document.getElementById(\"a4\").innerHTML = request.responseText;
                } else {
                    alert(\"发生错误：\" + request.status);
                }
            }
        }
    }
    //4
    document.getElementById(\"authcode\").onblur = function() {
        var request = new XMLHttpRequest();
        request.open(\"GET\", \"rg5.php?authcode=\" + document.getElementById(\"authcode\").value);
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                    document.getElementById(\"a5\").innerHTML = request.responseText;
                } else {
                    alert(\"发生错误：\" + request.status);
                }
            }
        }
    }


</script>
     ";
        }
else{
    require_once'config.php';
mysqli_query($conn,"set names utf8");
$id_number=$_SESSION["id_number"];
$sql="SELECT * FROM project WHERE `position`='0' AND (`host`='$id_number' OR `joiner1`='$id_number' OR `joiner2`='$id_number' OR `joiner3`='$id_number' OR `joiner4`='$id_number') ORDER BY rand() 	limit 1";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo "<div class=\"container-fluid navbar-fixed-top\" >
    <div class=\"\">
        <div class=\"nav nav-collapse\">
            <div class=\"menu\" style=\"width:100%\">
                <ul class=\"pull-left\">
                    <li><a  class=\"logo\" href=\"#\"><img src=\"images/logo.png\"></a></li>
                    <li><a href=\"study-environment.html\"><span class=\"glyphicon glyphicon-folder-close\"></span> 实践资料</a></li>
                    <li><a href=\"procedural.php\"><span class=\"glyphicon glyphicon-list-alt\"></span> 过程化管理</a></li>
                    <li><a href=\"partner.php\"><span class=\"glyphicon glyphicon-search\"></span> 队员招募</a></li>
                    <li><a href=\"show-index.php\"><span class=\"glyphicon glyphicon-pencil\"></span> 展示园地</a></li>
                    <li><a href=\"z-user-center.php\"><span class=\"glyphicon glyphicon-user\"></span> 用户中心</a></li>
                </ul>
               <div class=\"pull-right pulltwo\" style=\"float:left\">
                <ul class=\"pull-right pullone\">
                    <li><a   href=\"#\" rel=\"drevil\"><img src=\"".$_SESSION["head_portrait"]."\" class=\"img-circle\" style=\"width:80%;height:80%;margin-top:4px;\"></a></li>
                    <li><a   href=\"#\"><span class=\"glyphicon glyphicon-comment\"></span></a></li>
                </ul>
            </div>
            </div>
        </div>      
    </div>
</div>";
echo "<script>$(function(){
        $(\"[rel=drevil]\").popover({
            trigger:'manual',
            placement : 'bottom', //placement of the popover. also can use top, bottom, left or right
            title : '<div style=\"text-align:center; color:red; text-decoration:underline; font-size:14px;background: url(images/hideback.jpg);background-size: 100% 100%;\">' +
            '<div style=\"height: 100px;width: 300px;\"><a href=\"\"><img src=\"".$_SESSION["head_portrait"]."\" style=\"float: left;width: 64px;height: 64px;border-radius: 32px;color: white;margin-left: 20px;margin-top: 20px;border: 2px solid #fff;\"></a>' +
            '<a href=\"#\" style=\"display:block;width: 150px; font-size: 18px;margin-top: 26px\">欢迎".$_SESSION["username"]."</a></div></div>', //this is the top title bar of the popover. add some basic css
            html: 'true', //needed to show html of course
            content : '<div id=\"popOverBox\"><div id=\"popOverBox-t\" style=\"color: rgb(120,153,172);padding-left: 10px\">正在进行：<br><a href=\"#\" style=\"color: grey;width: 250px;text-align: left\">".$row["title"]."</a></div>' +
            '<div id=\"popOverBox-b\"><a href=\"zhuxiao.php\"  style=\"color: grey;margin-left: 240px\">退出</a></div></div>', //this is the content of the html box. add the image here or anything you want really.
            animation: false
        }).on(\"mouseenter\", function () {
                    var _this = this;
                    $(this).popover(\"show\");
                    $(this).siblings(\".popover\").on(\"mouseleave\", function () {
                        $(_this).popover('hide');
                    });
                }).on(\"mouseleave\", function () {
                    var _this = this;
                    setTimeout(function () {
                        if (!$(\".popover:hover\").length) {
                            $(_this).popover(\"hide\")
                        }
                    }, 100);
                });
    });

</script>";
}
 ?>