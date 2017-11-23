<?php
header("Content-type: text/html; charset=utf-8");

                    if (!isset($_SESSION["id_number"])) {
                        echo "<div class=\"container-fluid header\">
    <div class=\"row\">
        <div class=\"col-md-2\">
            <img src=\"images/logo.png\" alt=\"logo\" style=\"height: 100%;width: 100%\">
        </div><div class=\"col-md-2 col-md-offset-8\">
            <div class=\"lore\"><div class=\"login\">
                    <a href=\"#login\" data-toggle=\"modal\">登录</a>
                    <div class=\"modal loginpop\" id=\"login\"  style=\"overflow-y: hidden\">
                        <div class=\"modal-header\">
                            <a href=\"#\" class=\"close\" data-dismiss=\"modal\">×</a>
                            <h4>登录</h4>
                        </div>
                        <div class=\"modal-body\">
                            <form name=\"form1\" method=\"post\" action=\"logincheck.php\">
                                <input class=\"form-control\" name=\"id_numberl\" type=\"text\" id=\"id_numberl\" placeholder=\"请输入学号\">
                                <p id=\"a7\" class=\"error\">          </p>
                                <input class=\"form-control\" name=\"passwordl\" type=\"password\" id=\"passwordl\" placeholder=\"请输入密码\">
                                <p class=\"error\">          </p>
                                <div class=\"authcode\">
                                    <input class=\"form-control\" type=\"text\" name=\"authcodel\" id=\"authcodel\" placeholder=\"请输入验证码\" style=\"display: inline-block;width: 120px;margin-top: -20px\">
                                    <img id=\"yzm1\" src=\"identifying_code.php?r=<?php echo rand();?>\" style=\"display: inline-block;width: 100px;height: 30px;margin-top: 5px;\">
                                    <a href=\"javascript:void(0)\" style=\"display: inline-block;\" onClick=\"document.getElementById('yzm1').src='identifying_code.php?r='+Math.random()\">换一张？</a><br>
                                    <p id=\"a3\" class=\"error\">          </p>
                                </div>
                                <br>
                                <input type=\"submit\" value=\"登录\" class=\"btn btn-primary\" style=\"border: none;color: white;font-size: 20px\">
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
  <div class=\"register\">
                    <a href=\"#register\" data-toggle=\"modal\">注册</a>
                    <div class=\"modal registerpop\" id=\"register\"  style=\"overflow-y: hidden\">
                        <div class=\"modal-header\">
                            <a href=\"#\" class=\"close\" data-dismiss=\"modal\">×</a>
                            <h4>注册</h4>
                        </div>
                        <div class=\"modal-body\">
                            <form name=\"form1\" method=\"post\" action=\"register.php\">
                                <input class=\"form-control\" name=\"id_number\" type=\"text\" id=\"id_number\" placeholder=\"请输入学号\">
                                <p id=\"a1\" class=\"error\">          </p>
                                <input class=\"form-control\" name=\"password\" type=\"password\" id=\"password\" placeholder=\"请输入密码\">
                                <p id=\"a2\" class=\"error\">          </p>
                                <input class=\"form-control\" name=\"rpassword\" type=\"password\" id=\"rpassword\" placeholder=\"请确认密码\">
                                <p class=\"error\">          </p>
                                <div class=\"authcode\">
                                    <input class=\"form-control\" type=\"text\" name=\"authcode\" id=\"authcode\" placeholder=\"请输入验证码\" style=\"display: inline-block;width: 120px;margin-top: -20px\">
                                    <img id=\"yzm\" src=\"identifying_code.php?r=<?php echo rand();?>\" style=\"display: inline-block;width: 100px;height: 30px;margin-top: 5px;\">
                                    <a href=\"javascript:void(0)\" style=\"display: inline-block;\" onClick=\"document.getElementById('yzm').src='identifying_code.php?r='+Math.random()\">换一张？</a><br>
                                    <p id=\"a4\" class=\"error\">          </p>
                                </div>
                                <br>
                                <input type=\"submit\" value=\"注册\" class=\"btn btn-primary\" style=\"border: none;color: white;font-size: 20px\">
                                <br>
                            </form>
                        </div>
                    </div>
                </div>         </div>
            <div class=\"admin\">

            </div>
        </div>
    </div>
    ";
                    }
                    else{
require_once'config.php';
mysqli_query($conn,"set names utf8");
$id_number=$_SESSION["id_number"];
$sql="SELECT * FROM project WHERE `position`='0' AND (`host`='$id_number' OR `joiner1`='$id_number' OR `joiner2`='$id_number' OR `joiner3`='$id_number' OR `joiner4`='$id_number') ORDER BY rand() limit 1";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
                        
                       echo "<div class=\"container-fluid header\">
                  <div class=\"row\">
        <div class=\"col-md-2\">
            <img src=\"\" alt=\"logo\" style=\"height: 100%;width: 100%\">
        </div>
        <div class=\"col-md-2 col-md-offset-8\">
            <div class=\"pulltwo\">
                <ul class=\"pullone\">
                    <li class=\"pullone-li\"><a   href=\"#\" rel=\"drevil\"><img src=\"".$_SESSION["head_portrait"]."\" class=\"img-circle\" style=\"width:40px;height: 40px;margin-top:4px;margin-left: -10px\"></a></li>
                    <li class=\"pullone-li\"><a   href=\"#\" rel=\"drevil1\" id=\"h-comment\" style = \"padding-bottom:15px\"><span class=\"glyphicon glyphicon-comment\"></span></a></li>
                          <li class=\"pullone-li\"><a   href=\"#\"><span class=\"glyphicon glyphicon-envelope\"></span></a></li>
                </ul>
            </div>
        </div>
    </div>";}//用户logout  ;
?>