<?php 
    session_start();
    $id_number = $_SESSION["id_number"]; 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户中心-项目</title>
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
        }
    } 
     
    


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
            <a href=\"#\">".sizeof($arrayteamwork)."</a>
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
            <li><a href="z-user-center.php"><i class="glyphicon glyphicon-home"></i><span>主页</span><b class="glyphicon glyphicon-play"></b></a></li>
            <li><a href="x-user-center.php" id="user-on"><i class="glyphicon glyphicon-book"></i><span>项目</span><b class="glyphicon glyphicon-play"></b></a></li>
            <li><a href="h-user-center.php"><i class="glyphicon glyphicon-fire"></i><span>好友</span><b class="glyphicon glyphicon-play"></b></a></li>
        </ul>
    </div>
    <div class="body-right">
        <div class="youJoinPro-head">
            <p>您参加的项目</p>
        </div>
    
        <?php 
        $arr = array();
        $arrpic = array();
        $arrhost = array();
        $arr1 = array();
        $arr2 = array();
        $arr3 = array();
        $arr4 = array();
        $arrtitle = array();
        $sql = "SELECT * FROM project WHERE `position` = '0' AND(`host`='$id_number' OR `joiner1`='$id_number' OR `joiner2`='$id_number' OR `joiner3`='$id_number' OR `joiner4`='$id_number' OR `joiner5`='$id_number')";
        $query = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_array($query)) {
            if($row["step_pos"] == 0){
                 echo "
                    <div class=\"onePro\">
                        <img src=\"".$row["head_pic"]."\" alt=\"#\">
                        <div class=\"onePro-body\">
                            <h3 class=\"proName\">".$row["title"]."</h3>
                            <div class=\"proMember\"><span>".$row["hostname"]."</span>、<span>".$row["name1"]."</span>、<span>".$row["name2"]."</span>、<span>".$row["name3"]."</span>、<span>".$row["name4"]."</span></div>
                            <div class=\"proCompletion\"><span>已完成0%</span></div>
                            <a href=\"manage_pro.php?project_id=".$row["project_id"]."&step_pos=".$row["step_pos"]."\" class=\"Reading\">点击查看</a>
                        </div>
                    </div>
                ";
            }else if ($row["step_pos"] == 1) {
                 array_push($arr, $row["project_id"]);
                 array_push($arrpic, $row["head_pic"]);
                 array_push($arrhost, $row["hostname"]);
                 array_push($arr1, $row["name1"]);
                 array_push($arr2, $row["name2"]);
                 array_push($arr3, $row["name3"]);
                 array_push($arr4, $row["name4"]);
                 array_push($arrtitle, $row["title"]);
            }
        }

        for($i = 0 ; $i < sizeof($arr) ; $i++) { 
            $sql = "SELECT project_id FROM project_step WHERE project_id = '$arr[$i]'";
            $query = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($query);
            $sql = "SELECT project_id FROM project_step WHERE project_id = '$arr[$i]' AND step_statue = '2'";
            $query = mysqli_query($conn,$sql);
            $num1 = mysqli_num_rows($query);
            $num2 = $num1*100/$num; 
             echo "
                    <div class=\"onePro\">
                        <img src=\"".$arrpic[$i]."\" alt=\"#\">
                        <div class=\"onePro-body\">
                            <h3 class=\"proName\">".$arrtitle[$i]."</h3>
                            <div class=\"proMember\"><span>".$arrhost[$i]."</span>、<span>".$arr1[$i]."</span>、<span>".$arr2[$i]."</span>、<span>".$arr3[$i]."</span>、<span>".$arr4[$i]."</span></div>
                            <div class=\"proCompletion\"><span>已完成".floor($num2)."%</span></div>
                            <a href=\"manage_pro.php?project_id=".$arr[$i]."&step_pos=1\" class=\"Reading\">点击查看</a>
                        </div>
                    </div>
                ";
        }



        $sql = "SELECT * FROM project WHERE `position`!= '0' AND(`host`='$id_number' OR `joiner1`='$id_number' OR `joiner2`='$id_number' OR `joiner3`='$id_number' OR `joiner4`='$id_number' OR `joiner5`='$id_number')";
        $query = mysqli_query($conn,$sql);    
        while ($row = mysqli_fetch_array($query)) {
            if ($row["position"] == 1) {
                echo "
                    <div class=\"onePro\">
                        <img src=\"".$row["head_pic"]."\" alt=\"#\">
                        <div class=\"onePro-body\">
                            <h3 class=\"proName\">".$row["title"]."</h3>
                            <div class=\"proMember\"><span>".$row["hostname"]."</span>、<span>".$row["name1"]."</span>、<span>".$row["name2"]."</span>、<span>".$row["name3"]."</span>、<span>".$row["name4"]."</span></div>
                            <div class=\"proCompletion\"><span>已完成100%</span></div>
                            <a href=\"manage_pro.php?project_id=".$row["project_id"]."&step_pos=".$row["step_pos"]."\" class=\"Reading\">点击查看</a>
                        </div>
                    </div>
                ";
            }else if ($row["position"] == 2) {
                 echo "
                    <div class=\"onePro\">
                        <img src=\"".$row["head_pic"]."\" alt=\"#\">
                        <div class=\"onePro-body\">
                            <h3 class=\"proName\">".$row["title"]."</h3>
                            <div class=\"proMember\"><span>".$row["hostname"]."</span>、<span>".$row["name1"]."</span>、<span>".$row["name2"]."</span>、<span>".$row["name3"]."</span>、<span>".$row["name4"]."</span></div>
                            <div class=\"proCompletion\"><span>未完成</span></div>
                            <a href=\"manage_pro.php?project_id=".$row["project_id"]."&step_pos=".$row["step_pos"]."\" class=\"Reading\">点击查看</a>
                        </div>
                    </div>
                ";
            }
        }



         ?>    

    </div>
</div>
</body>
</html>