<?php 
    session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户设置-相关文档</title>
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
     ?>
</div>
<div class="set-user-body">
    <div class="set-user-left">
        <div class="user-imgAndName">
            <div class="user-img">
                <img src="images/10.jpg" alt="name">
            </div>
            <div class="user-name">
                <p>ZUST_hh</p>
            </div>
        </div>
        <div class="set-user-left-b">
            <h2>账户管理</h2>
            <div class="line1"></div>
            <ul class="set-user-menu">
                <li><a href="set-user.php" class="li-off">个人信息<b class="glyphicon glyphicon-play"></b></a></li>
                <li class="li-on"><a href="set-user-download.php"  style="color: white">相关文档<b class="glyphicon glyphicon-play"></b></a></li>
            </ul>
        </div>
    </div>
    <div class="set-user-right">
        <div class="set-user-right-top">
            相关文档
        </div>
        <div class="line2"></div>
        <div class="set-user-right-bottom">
                <?php 
                    $id_number = $_SESSION["id_number"];
                    require_once'config.php';
                    mysqli_query($conn,"SET NAMES UTF8");
                    $sql = "SELECT fileposition FROM als_signup WHERE `id_number` = '".$_SESSION["id_number"]."'";
                    $query = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_array($query);
                    $result = $row["fileposition"];
                    $result = trim($result,chr(239).chr(187).chr(191));
                    $array = json_decode($result,true);
                    if (sizeof($array)!=0) {
                         foreach($array as $value) {  
                        $start = mb_strpos($value,'/',0,"utf-8")+1;
                        $end = mb_strpos($value,'&',0,"utf-8");
                        $t2 = mb_substr($value,$start,$end-$start,'utf-8');
                        echo "
                                <div class=\"info-box\">
                                    <label>生成文档</label>
                                    <div class=\"user-doc\">
                                        <span>".$t2.".doc</span>
                                        <a href=\"".$value."\">下载</a>
                                    </div>
                                </div>
                        ";
                    }
                    }
                    $sql = "SELECT shenqingshu FROM project WHERE (`host`='$id_number' OR `joiner1`='$id_number' OR `joiner2`='$id_number' OR `joiner3`='$id_number' OR `joiner4`='$id_number' OR `joiner5`='$id_number')";

                    $query = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_array($query)){
                       if ($row["shenqingshu"] != "") {
                        $start = mb_strpos($row["shenqingshu"],'.',0,"utf-8")+1;
                        $end = strlen($row["shenqingshu"]);
                        $t1 = mb_substr($row["shenqingshu"],$start,$end-$start,'utf-8');
                        echo "
                            <div class=\"info-box\">
                                <label>申报书</label>
                                <div class=\"user-doc\">
                                    <span>".$t1."</span>
                                    <a href=\"".$row["shenqingshu"]."\">下载</a>
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