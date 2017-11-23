    <?php 
        session_start();
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户设置-个人信息</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/head.css">
    <link rel="stylesheet" href="css/set-user.css">
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/set-user.js"></script>
</head>
<body>
<div class="container-fluid navbar-fixed-top" >
    <?php 
        require_once 'tou.php';
require_once'config.php';
mysqli_query($conn,"set names utf8");
$sql = "SELECT * FROM als_signup WHERE `id_number`=".$_SESSION["id_number"]."";
$sq = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($sq);
     ?>
</div>
    <div class="set-user-body">
        <div class="set-user-left">
            <div class="user-imgAndName">
                <div class="user-img">
                    <img src="images/10.jpg" alt="name">
                </div>
                <div class="user-name">
                    <p><?php echo $row["username"]; ?></p>
                </div>
            </div>
            <div class="set-user-left-b">
                <h2>账户管理</h2>
                <div class="line1"></div>
                <ul class="set-user-menu">
                    <li class="li-on"><a href="set-user.php" style="color: white">个人信息<b class="glyphicon glyphicon-play"></b></a></li>
                    <li><a href="set-user-download.php" class="li-off">相关文档<b class="glyphicon glyphicon-play"></b></a></li>
                </ul>
            </div>
        </div>
        <div class="set-user-right">
            <div class="set-user-right-top">
                个人信息
                <span onclick="edit()"><i class="glyphicon glyphicon-pencil"></i>   编辑</span>
            </div>
            <div class="line2"></div>

  <div class="set-user-right-bottom">
                <form action="uploadPersonInfo.php" method="post">
                <div class="info-box">
                <?php 

  echo "      <label>学号</label>
                    <input type=\"text\" disabled = \"disabled\" value=\"".$row["id_number"]."\" >
                </div>
                <div class=\"info-box\">
                    <label>姓名</label>
                    <input type=\"text\" disabled = \"disabled\" value=\"".$row["username"]."\" id=\"can-edit0\" name=\"username\">
                </div>
                <div class=\"info-box\">
                    <label>性别</label>";
if($row["sex"] == 0){
   
    $Str = "";
}else if($row["sex"] == 1){
    $Str = "男";
}else{
    $Str = "女";
}



                echo"    
                    <input type=\"text\" disabled = \"disabled\" value=\"".$Str."\" id=\"can-edit1\" name=\"sex\">
                </div>
                <div class=\"info-box\">
                    <label>学院</label>
                    <input type=\"text\" disabled = \"disabled\" value=\"".$row["college"]."\" id=\"can-edit2\" name=\"college\">
                </div>";
if ($row["class"]) {
    $shenf = "学生";
}else{
    $shenf = "老师";
}




                echo "<div class=\"info-box\">
                    <label>身份</label>
                    <input type=\"text\" disabled = \"disabled\" value=\"".$shenf."\">
                </div>";

                echo "
                <div class=\"info-box\">
                    <label>班级</label>
                    <input type=\"text\" disabled = \"disabled\" value=\"".$row["className"]."\" id=\"can-edit3\" name=\"className\">
                </div>
                <div class=\"info-box\">
                    <label>技术方向</label>
                    <input type=\"text\" disabled = \"disabled\" value=\"".$row["workdirection"]."\" id=\"can-edit4\" name=\"workdirection\">
                </div>
                <div class=\"info-box\">
                    <label>特长</label>
                    <input type=\"text\" disabled = \"disabled\" value=\"".$row["advantages"]."\" id=\"can-edit5\" name=\"advantages\">
                </div>
                <div class=\"info-box\">
                    <label>电话号码</label>
                    <input type=\"text\" disabled = \"disabled\" value=\"".$row["phonenumber"]."\" id=\"can-edit6\" name=\"phonenumber\">
                </div>";
                if ($row["phonecondition"]) {
                    echo "
                <div class=\"open-info\">
                    公开：<input type=\"radio\" name=\"openset0\" value=\"1\" checked=\"checked\">
                    不公开：<input type=\"radio\" name=\"openset0\" value=\"0\">
                </div>";
                }else{
                    echo "
                <div class=\"open-info\">
                    公开：<input type=\"radio\" name=\"openset0\" value=\"1\">
                    不公开：<input type=\"radio\" name=\"openset0\" value=\"0\" checked=\"checked\">
                </div>";
                }
                echo "
                <div class=\"info-box\">
                    <label>QQ号码</label>
                    <input type=\"text\" disabled = \"disabled\" value=\"".$row["QQnumber"]."\" id=\"can-edit7\" name=\"QQnumber\">
                </div>";
                if($row["QQcondition"]){
                echo"
                <div class=\"open-info\">
                    公开：<input type=\"radio\" name=\"openset\" value=\"1\" checked=\"checked\">
                    不公开：<input type=\"radio\" name=\"openset\" value=\"0\">
                </div>";
            }
                else{
                    echo "<div class=\"open-info\">
                    公开：<input type=\"radio\" name=\"openset\" value=\"1\">
                    不公开：<input type=\"radio\" name=\"openset\" value=\"0\" checked=\"checked\">
                </div>";
                }

echo "
                <div class=\"info-box\">
                    <label>电子邮件</label>
                    <input type=\"text\" disabled = \"disabled\" value=\"".$row["mailadress"]."\" id=\"can-edit8\" name=\"mailadress\">
                </div>";
                if($row["userlevel"]){
                echo "
                        <div class=\"info-box\">
                            <label>权限</label>
                            <input type=\"text\" disabled = \"disabled\" value=\"管理员\">
                        </div>";
            }else{
                echo "
                        <div class=\"info-box\">
                            <label>权限</label>
                            <input type=\"text\" disabled = \"disabled\" value=\"用户\">
                        </div>";
            }
        echo "
                <input type=\"submit\" value=\"提交\" class=\"set-submit\" id=\"submit\">
                </form>
            </div>";
                 ?>
        </div>
    </div>
</body>
</html>