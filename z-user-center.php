<?php 
    session_start();    
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户中心-主页</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/head.css">
    <link rel="stylesheet" href="css/user-center.css">
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/user-center.js"></script>
</head>
<body>
<div class="container-fluid navbar-fixed-top" >
 <?php 
    require_once 'tou.php';
  ?>
</div>

<!--    user-top   -->
<div class="userCenter-top">
    <?php 
     require_once'config.php';
     mysqli_query($conn,"SET NAMES UTF8");

                    $sql = "SELECT * FROM als_signup WHERE `id_number` = '".$_SESSION["id_number"]."'";
                    $query = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_array($query);
                    $result = $row["careyou"];
                    $result = trim($result,chr(239).chr(187).chr(191));
                    $arrayForCare = json_decode($result,true);
                    if ($row["sex"] == 1 ) {
                        $sex = "男";
                    }else if ($row["sex"] == 2) {
                        $sex = "女";
                    }else{
                        $sex = "";
                    }
                    if ($row["class"] == 0) {
                        $class = "老师";
                    }else{
                        $class = "学生";
                    }
                    $workdirection = $row["workdirection"];
                    $head_pic = $row["head_portrait"];
    $arrayteamwork = array();
    $arrayteamworktrue = array();
     $sql = "SELECT * FROM project WHERE (`host`='$id_number' OR `joiner1`='$id_number' OR `joiner2`='$id_number' OR `joiner3`='$id_number' OR `joiner4`='$id_number' OR `joiner5`='$id_number')";
    $query = mysqli_query($conn,$sql);
    $flag = 0;
    $flag1 = 0;
    $flag2 = 0;
    $flag3 = 0;
    $flag4 = 0;
    $flag5 = 0;
    $flag6 = 0;
    $flag7 = 0;
    $flag8 = 0;
    while ($row = mysqli_fetch_array($query)) {
        $arrayteamwork = array();
        foreach($arrayteamworktrue as $value) {
            array_push($arrayteamwork,$value);
        }


        if(!$flag){
            $flag=1;
            if ($row["host"] != "") {
                array_push($arrayteamworktrue,$row["host"]);
            }if ($row["joiner1"] != "") {
                array_push($arrayteamworktrue,$row["joiner1"]);
            }if ($row["joiner2"] != "") {
                array_push($arrayteamworktrue,$row["joiner2"]);
            }if ($row["joiner3"] != "") {
                array_push($arrayteamworktrue,$row["joiner3"]);
            }if ($row["joiner4"] != "") {
                array_push($arrayteamworktrue,$row["joiner4"]);
            }if ($row["joiner5"] != "") {
                array_push($arrayteamworktrue,$row["joiner5"]);
            }if ($row["pointer"] != "") {
                array_push($arrayteamworktrue,$row["pointer"]);
            }if ($row["pointer2"] != "") {
                array_push($arrayteamworktrue,$row["pointer2"]);
            }
        }else{
            foreach($arrayteamwork as $value) {
                if ($value == $row["host"] || $row["host"] == "") {
                    $flag6 = 1;
                }if ($value == $row["joiner1"] || $row["joiner1"] == "") {
                    $flag1 = 1;
                }if ($value == $row["joiner2"] || $row["joiner2"] == "") {
                    $flag2 = 1;
                }if ($value == $row["joiner3"] || $row["joiner3"] == "") {
                    $flag3 = 1;
                }if ($value == $row["joiner4"] || $row["joiner4"] == "") {
                    $flag4 = 1;
                }if ($value == $row["joiner5"] || $row["joiner5"] == "") {
                    $flag5 = 1;
                }if ($value == $row["pointer"] || $row["pointer"] == "") {
                    $flag7 = 1;
                }if ($value == $row["pointer2"] || $row["pointer2"] == "") {
                    $flag8 = 1;
                }
            }
            if (!$flag6) {
                array_push($arrayteamworktrue,$row["host"]);
            }if (!$flag1) {
                array_push($arrayteamworktrue,$row["joiner1"]);
            }if (!$flag2) {
                array_push($arrayteamworktrue,$row["joiner2"]);
            }if (!$flag3) {
                array_push($arrayteamworktrue,$row["joiner3"]);
            }if (!$flag4) {
                array_push($arrayteamworktrue,$row["joiner4"]);
            }if (!$flag5) {
                array_push($arrayteamworktrue,$row["joiner5"]);
            }if (!$flag7) {
                array_push($arrayteamworktrue,$row["pointer"]);
            }if (!$flag8) {
                array_push($arrayteamworktrue,$row["pointer2"]);
            }
    $flag1 = 0;
    $flag2 = 0;
    $flag3 = 0;
    $flag4 = 0;
    $flag5 = 0;
    $flag6 = 0;
    $flag7 = 0;
    $flag8 = 0;   
        }
    } 
     
   ///var_dump($arrayteamworktrue);


    echo "
     <div class=\"user-pic\">
        <img src=\"".$head_pic."\" alt=\"#\">
        <div class=\"set-btn\">
            <a href=\"set-user.php\"><span class=\"glyphicon glyphicon-asterisk\"></span></a>
        </div>
    </div>
    <div class=\"user-info\">
        <h3 id=\"user-name\">".$_SESSION["username"]."</h3>
        <p id=\"info\">
            <span class=\"gender\">".$sex."</span>
            <span class=\"vocation\">".$class."</span>
            <span class=\"skill\">".$workdirection."</span>
        </p>
        <p class=\"user-desc\" >这个人很懒，没有留言</p>
    </div>
    <div class=\"user-friend\">
        <div id=\"follow\">
            <a href=\"#\">".sizeof($arrayForCare)."</a>
            <span>关注</span>
        </div>
        <div id=\"teamMate\">
            <a href=\"#\">".sizeof($arrayteamworktrue)."</a>
            <span>队友</span>
        </div>
    </div>
    ";

     ?>
</div>
<!--   user-body  -->
<div class="userCenter-body">
    <div class="body-leftMenu">
        <ul>
            <li><a href="z-user-center.php" id="user-on"><i class="glyphicon glyphicon-home"></i><span>主页</span><b class="glyphicon glyphicon-play"></b></a></li>
            <li><a href="x-user-center.php"><i class="glyphicon glyphicon-book"></i><span>项目</span><b class="glyphicon glyphicon-play"></b></a></li>
            <li><a href="h-user-center.php"><i class="glyphicon glyphicon-fire"></i><span>好友</span><b class="glyphicon glyphicon-play"></b></a></li>
        </ul>
    </div>
    <div class="body-right">
        <div class="new-dynamic-head">
            <p>最新动态</p>
        </div>
        <div class="new-dynamic-body">
            <?php 
            $sql = "SELECT * FROM als_signup WHERE `id_number` = '".$_SESSION["id_number"]."'";
                    $query = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_array($query);
                    $result = $row["message"];
                    $result = trim($result,chr(239).chr(187).chr(191));
                    $arrayms = json_decode($result,true);
            for ($i = sizeof($arrayms)-1;$i >= 0 ; $i--) {
                $sql = "SELECT * FROM projectnews WHERE `id` = '$arrayms[$i]'";
                $query = mysqli_query($conn,$sql);
                $res = mysqli_fetch_array($query);
                if ($res["op_content"] == "创建") {
                    echo "
                        <div class=\"uploadFile-dynamic\">
                            <div class=\"uploadFile-dynamic-head\">
                                <a href=\"#\">
                                    <img src=\"images/10.jpg\" alt=\"头像\">
                                </a>
                                <a href=\"#\" class=\"dynamic-user-name\" style=\"color: black\">".$res["op_pname"]."</a>
                                <span class=\"dynamic-time\">".$res["op_time"]."</span>
                            </div>
                            <div class=\"uploadFile-dynamic-body\">
                                <img src=\"images/12.jpg\" alt=\"项目\">
                                <div>
                                    <h3>上传附件</h3>
                                    <span>在</span><a href=\"procedural.php\">".$res["project_name"]."</a><span>创建了</span><i><a href=\"".$res["attachment"]."\">项目</a></i><span>。</span>
                                </div>
                            </div>
                        </div>";
                }else if ($res["op_content"] == "步骤") {
                    echo "
                        <div class=\"uploadFile-dynamic\">
                            <div class=\"uploadFile-dynamic-head\">
                                <a href=\"#\">
                                    <img src=\"images/3.jpg\" alt=\"头像\">
                                </a>
                                <a href=\"#\" class=\"dynamic-user-name\" style=\"color: black\">".$res["op_pname"]."</a>
                                <span class=\"dynamic-time\">".$res["op_time"]."</span>
                            </div>
                            <div class=\"uploadFile-dynamic-body\">
                                <img src=\"images/1.jpg\" alt=\"项目\">
                                <div>
                                    <h3>过程进度更新</h3>
                                    <span>在</span><a href=\"manage_pro.php?project_id=".$res["project_id"]."&step_pos=1\">".$res["project_name"]."</a><i>步骤制定</i><span>过程完成。</span>
                                </div>
                            </div>
                        </div>
                    ";
                    
                }else if ($res["op_content"] == "待审核") {
                    echo "
                        <div class=\"uploadFile-dynamic\">
                            <div class=\"uploadFile-dynamic-head\">
                                <a href=\"#\">
                                    <img src=\"images/10.jpg\" alt=\"头像\">
                                </a>
                                <a href=\"#\" class=\"dynamic-user-name\" style=\"color: black\">".$res["op_pname"]."</a>
                                <span class=\"dynamic-time\">".$res["op_time"]."</span>
                            </div>
                            <div class=\"uploadFile-dynamic-body\">
                                <img src=\"images/12.jpg\" alt=\"项目\">
                                <div>
                                    <h3>上传附件</h3>
                                    <span>在</span><a href=\"manage_pro.php?project_id=".$res["project_id"]."&step_pos=1\">".$res["project_name"]."</a><span>上传</span><i><a href=\"".$res["attachment"]."\">".$res["project_step"]."</a></i><span>步骤附件。</span>
                                </div>
                            </div>
                        </div>";
                }else if ($res["op_content"] == "步骤改") {
                    echo "
                        <div class=\"uploadFile-dynamic\">
                            <div class=\"uploadFile-dynamic-head\">
                                <a href=\"#\">
                                    <img src=\"images/3.jpg\" alt=\"头像\">
                                </a>
                                <a href=\"#\" class=\"dynamic-user-name\" style=\"color: black\">".$res["op_pname"]."</a>
                                <span class=\"dynamic-time\">".$res["op_time"]."</span>
                            </div>
                            <div class=\"uploadFile-dynamic-body\">
                                <img src=\"images/1.jpg\" alt=\"项目\">
                                <div>
                                    <h3>过程进度更新</h3>
                                    <span>在</span><a href=\"#\">".$res["project_name"]."</a>中进行了<i>步骤修改</i><span>。</span>
                                </div>
                            </div>
                        </div>
                    ";
                    
                }else if ($res["op_content"] == "过期") {
                    echo "
                        <div class=\"uploadFile-dynamic\">
                            <div class=\"uploadFile-dynamic-head\">
                                <a href=\"#\">
                                    <img src=\"images/8.jpg\" alt=\"头像\">
                                </a>
                                <a href=\"#\" class=\"dynamic-user-name\" style=\"color: black\">提醒</a>
                                <span class=\"dynamic-time\">".$res["op_time"]."</span>
                            </div>
                            <div class=\"uploadFile-dynamic-body\">
                                <img src=\"images/12.jpg\" alt=\"项目\">
                                <div>
                                    <h3>过程完成日期提醒</h3>
                                    <span>在</span><a href=\"manage_pro.php?project_id=".$res["project_id"]."&step_pos=1\">".$res["project_name"]."</a><span>中".$res["op_pname"]."负责的</span><i>".$res["project_step"]."</i><span>已经到达预定完成日期，请尽块提交完成附件。</span>
                                </div>
                            </div>
                        </div>
                    ";
                }else if ($res["op_content"] == "通过") {
                    echo "
                        <div class=\"uploadFile-dynamic\">
                            <div class=\"uploadFile-dynamic-head\">
                                <a href=\"#\">
                                    <img src=\"images/3.jpg\" alt=\"头像\">
                                </a>
                                <a href=\"#\" class=\"dynamic-user-name\" style=\"color: black\">".$res["op_pname"]."</a>
                                <span class=\"dynamic-time\">".$res["op_time"]."</span>
                            </div>
                            <div class=\"uploadFile-dynamic-body\">
                                <img src=\"images/1.jpg\" alt=\"项目\">
                                <div>
                                    <h3>过程进度更新</h3>
                                    <span>在</span><a href=\"#\">".$res["project_name"]."</a><span>确认</span><i>".$res["project_step"]."</i><span>过程完成。</span>
                                </div>
                            </div>
                        </div>
                    ";
                }else if ($res["op_content"] == "不通过") {
                    echo "
                        <div class=\"uploadFile-dynamic\">
                            <div class=\"uploadFile-dynamic-head\">
                                <a href=\"#\">
                                    <img src=\"images/3.jpg\" alt=\"头像\">
                                </a>
                                <a href=\"#\" class=\"dynamic-user-name\" style=\"color: black\">".$res["op_pname"]."</a>
                                <span class=\"dynamic-time\">".$res["op_time"]."</span>
                            </div>
                            <div class=\"uploadFile-dynamic-body\">
                                <img src=\"images/1.jpg\" alt=\"项目\">
                                <div>
                                    <h3>过程进度更新</h3>
                                    <span>在</span><a href=\"#\">".$res["project_name"]."</a><span></span><i>".$res["project_step"]."</i><span>未通过审核</span>
                                </div>
                            </div>
                        </div>
                    ";
                }
                
                else if ($res["op_content"] == "结题") {
                    echo "
                        <div class=\"uploadFile-dynamic\">
                            <div class=\"uploadFile-dynamic-head\">
                                <a href=\"#\">
                                    <img src=\"images/3.jpg\" alt=\"头像\">
                                </a>
                                <a href=\"#\" class=\"dynamic-user-name\" style=\"color: black\">".$res["op_pname"]."</a>
                                <span class=\"dynamic-time\">".$res["op_time"]."</span>
                            </div>
                            <div class=\"uploadFile-dynamic-body\">
                                <img src=\"images/1.jpg\" alt=\"项目\">
                                <div>
                                    <h3>过程进度更新</h3>
                                    <span>在</span><a href=\"#\">".$res["project_name"]."</a><span></span><i>提交申请</i><span>结题</span>
                                </div>
                            </div>
                        </div>
                    ";
                }

            }
             ?>
        </div>
    </div>
</div>
</body>
</html>