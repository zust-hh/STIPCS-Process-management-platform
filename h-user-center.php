<?php 
header("Access-Control-Allow-Origin: *");
	date_default_timezone_set('PRC');
    session_start();
    
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户中心-好友</title>
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
            <li><a href="z-user-center.php"><i class="glyphicon glyphicon-home"></i><span>主页</span><b class="glyphicon glyphicon-play"></b></a></li>
            <li><a href="x-user-center.php"><i class="glyphicon glyphicon-book"></i><span>项目</span><b class="glyphicon glyphicon-play"></b></a></li>
            <li><a href="h-user-center.php" id="user-on"><i class="glyphicon glyphicon-fire"></i><span>好友</span><b class="glyphicon glyphicon-play"></b></a></li>
        </ul>
    </div>
    <div class="body-right">
        <ul class="youFriend-head">
            <li><a href="#Team" class="active" id="myTeam" data-toggle="tab">我的关注</a></li>
            <li><a href="#Follow" id="myFollow" data-toggle="tab">我的队友</a></li>
        </ul>
        <div class="youFriend tab-content" id="myTabContent">
           <?php 
           //echo "string";
            echo "<div class=\"tab-pane active fade in\" id=\"Team\">";
           if (sizeof($arrayForCare) != 0) {
           
                foreach($arrayForCare as $value){
                    $sql = "SELECT * FROM als_signup WHERE id_number = '$value'";
                    $query = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_array($query);
                    echo "
                            <div class=\"oneFriend\">
                                <div class=\"friend-img\">
                                    <img src=\"".$row["head_portrait"]."\" alt=\"头像\">
                                </div>
                                <div class=\"friend-body\">
                                    <div class=\"friend-name\">
                                        <a href=\"#\">".$row["username"]."</a>
                                        <a class=\"delFriend\" name=\"".$row["id_number"]."\" style=\"cursor:pointer;\">删除</a>
                                    </div>
                                    <div class=\"friendSpe\">
                                        <p>".$row["workdirection"]."</p>
                                    </div>
                                     <div class=\"friend-proNum\">
                                        <b>学院：</b>
                                        <span>".$row["college"]."</span>
                                    </div>
                                    <div class=\"privateLetter\"  onclick = \"affffk("."'".$row['username']."'".",".$row["id_number"].")\">
                                         <a href=\"#\">私信</a>
                                    </div>
                                </div>
                            </div>             
                    ";
                }
            }
            echo "</div>";
            echo"<div class=\"tab-pane fade in\" id=\"Follow\">";
            if (sizeof($arrayteamworktrue)!=0) {
                foreach($arrayteamworktrue as $value){
                    $sql = "SELECT * FROM als_signup WHERE id_number = '$value'";
                    $query = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_array($query);
                    echo "
                            <div class=\"oneFriend\">
                                <div class=\"friend-img\">
                                    <img src=\"".$row["head_portrait"]."\" alt=\"头像\">
                                </div>
                                <div class=\"friend-body\">
                                    <div class=\"friend-name\">
                                        <a href=\"#\">".$row["username"]."</a>
                                    </div>
                                    <div class=\"friendSpe\">
                                        <p>".$row["workdirection"]."</p>
                                    </div>
                                     <div class=\"friend-proNum\">
                                        <b>学院</b>
                                        <span>".$row["college"].":</span>
                                     </div>
                                    <div class=\"privateLetter\" onclick = \"affffk("."'".$row['username']."'".",".$row["id_number"].")\">
                                        <a href=\"#\" >私信</a>
                                    </div>
                                </div>
                            </div>             
                    ";
                }
            } 
            echo "</div>";               
            ?>
        </div>
    </div>
</div>
<!--私信弹窗-->
    <div class="prilet-popover">
        <div class="prilet-poptit">
            <a href="javascript:;" title="关闭" class="close" onclick="asx()">×</a>
            <h3>私信</h3>
        </div>
        <div class="prilet-popbod">
            <div class="let-bod-l">
                <div class="let-bod-ll">
                    <div class="one-user">
                        <div class="one-user-bod">
                            <div class="one-user-l">
                                <img src="images/blue.jpg" alt="touxiang">
                            </div>
                            <div class="one-user-r">
                                <span class="uName" id="laji">胡昊</span>
                                <p class="theLastsx">在吗？</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="let-bod-r">
                <div class="let-bod-r-t" id = "chatBody">
    
                </div>
                <div class="let-bod-r-b" >
                    <input type="text"  id="chatText" placeholder="请输入你要发送的私信。。。">
                    <a href="#" id = "chatTest">发送</a>
                </div>
            </div>
        </div>
    </div>
    <div class="prilet-mask"></div>

<script>
    $(document).ready(function(){

        var tabWrapper = $('#tab-block'),
                tabMnu = tabWrapper.find('.tab-mnu  li'),
                tabContent = tabWrapper.find('.tab-cont > .tab-pane');

        tabContent.not(':first-child').hide();

        tabMnu.each(function(i){
            $(this).attr('data-tab','tab'+i);
        });
        tabContent.each(function(i){
            $(this).attr('data-tab','tab'+i);
        });

        tabMnu.click(function(){
            var tabData = $(this).data('tab');
            tabWrapper.find(tabContent).hide();
            tabWrapper.find(tabContent).filter('[data-tab='+tabData+']').show();
        });

        $('.tab-mnu > li').click(function(){
            var before = $('.tab-mnu li.active');
            before.removeClass('active');
            $(this).addClass('active');
        });

    });
</script>
 <script type="text/javascript">
        $(function(){
        	var t="<?php echo $_SESSION["head_portrait"];?>";
        	var g="<?php echo $_SESSION["username"];?>";
            $("[rel=drevil]").popover({
                trigger:'manual',
                placement : 'bottom',
                title : '<div>' +
                '<div class="poptitle"><a href=""><img src="'+t+'"></a>' +
                '<a href="#" class="poptitle-admin">'+g+'</a></div></div>',
                html: 'true',
                content : '<div id="popOverBox"><div id="popOverBox-t">正在进行：<br /></a></div>' +
                '<div id="popOverBox-b"><a href="unset.php">退出</a></div></div>',
                animation: false
            }).on("mouseenter", function () {
                var _this = this;
                $(this).popover("show");
                $(this).siblings(".popover").on("mouseleave", function () {
                    $(_this).popover('hide');
                });
            }).on("mouseleave", function () {
                var _this = this;
                setTimeout(function () {
                    if (!$(".popover:hover").length) {
                        $(_this).popover("hide");
                    }
                }, 100);
            });
        $("[rel=drevil1]").popover({
        trigger:'manual',
        placement : 'auto',
        title : '<div id="popsx">私信</div>',
        html: 'true',
        content : '<div id="popOverBox1">' +
        '<div class="sxbody" id= "hhsb">' +
       
    <?php 
    $page = 1;
    $ID =$_SESSION["id_number"];
    require_once'config.php';
    mysqli_query($conn,"SET NAMES UTF8");
    $sql = "SELECT distinct (sendUN),content,createDate,sendUI FROM message WHERE getUI = '$ID' group by sendUN ORDER by createDate desc LIMIT ".(($page-1)*3).",3";
    $re = mysqli_query($conn,$sql);
    $totlal = ceil((mysqli_num_rows($re)+1)/3);
        while ($row = mysqli_fetch_array($re)) {
        echo "
        '<div class=\"onesx Priletter\" onclick = affffk("."\"".$row['sendUN']."\"".",".$row["sendUI"].")>' +
        '<div class=\"onesx-l\">' +
        '<div class=\"onesx-l-t\"><span>".$row["sendUN"]."</span></div>' +
        '<div class=\"onesx-l-b\"><span>最近</span></div>' +
        '</div>' +
        '<div class=\"onesx-r\">' +
        '<p>".$row["content"]."</p>'+
        '</div>'+
        '</div>' +
        ";
    }
    ?>
        '<div class="sxfoot"><a href="#" id="previous"><span class="glyphicon glyphicon-chevron-left" onclick = "afjj(<?php echo $page.",".$_SESSION["id_number"].",".$totlal; ?>)"></span></a><div id="y-num"><span id="dqy">1</span> / <span id="ally"><?php echo $totlal; ?></span></div><a href="#" id="nexty"><span class="glyphicon glyphicon-chevron-right" onclick = afja(<?php echo "\"".$page."\"".",".$_SESSION["id_number"].",".$totlal; ?>)></span></a></div>' +
        '</div>',
        animation: false       
    }).on("mouseenter", function () {
        var _this = this;
        $(this).popover("show");
        $(this).siblings(".popover").on("mouseleave", function () {
            $(_this).popover('hide');
        });
        $('.Priletter').click(function(){
            $('.prilet-mask').fadeIn(100);
            $('.prilet-popover').slideDown(200);
        });
        $('.prilet-poptit .close').click(function(){
            $('.prilet-mask').fadeOut(100);
            $('.prilet-popover').slideUp(200);
        });
    }).on("mouseleave", function () {
        var _this = this;
        setTimeout(function () {
            if (!$(".popover:hover").length) {
                $(_this).popover("hide");
            }
        }, 100);
    });
        });
        
    </script>
    <script>
        var id_numbe = "";
        var nam ="";
        var flag = 0 ;
    function affffk(name,id_number){
        document.getElementById("laji").innerHTML = name;
        nam = name;
        id_numbe = id_number;
        flag = 1;
        chat();
}

        
    function afjj(page,id,ta){
        var request = new XMLHttpRequest();
        request.open("GET", "ssT.php?page=" + page + "&getID=" + id +"&ta=" +ta) ;
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                     document.getElementById("hhsb").innerHTML = request.responseText;
                } else {
                    alert("发生错误：" + request.status);
                }
            }
        }
    }

    function afja(page,id,ta){
        var request = new XMLHttpRequest();
        request.open("GET", "ssX.php?page=" + page + "&getID=" + id +"&ta=" +ta) ;
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                     document.getElementById("hhsb").innerHTML = request.responseText;
                } else {
                    alert("发生错误：" + request.status);
                }
            }
        }
    }



        $("#chatTest").click(function(){
        $("#chatBody").append(" <div class=\"myP\"><div class=\"myP-r\"><img src=\"images/blue1.jpg\" alt=\"touxiang\"></div><div class=\"myP-c\"><div class=\"m-xingxi\">"+document.getElementById("chatText").value+"</div> </div><div class=\"myP-l\"><div class=\"sxtime\"><p class=\"T-time\"><span class=T-\"year\">2017</span>-<span class=\"T-month\">10</span>-<span class=\"T-day\">23</span> <span class=\"T-hour\">22:23</span></p></div></div></div>");
        var div = document.getElementById('chatBody'); 
        div.scrollTop = div.scrollHeight;
        var request = new XMLHttpRequest();
        request.open("GET", "chatT.php?getId=" + id_numbe + "&getNM=" + nam + "&content=" + document.getElementById("chatText").value);
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                    // alert(request.responseText);
                    document.getElementById("chatText").value = "";
                } else {
                    alert("发生错误：" + request.status);
                }
            }
        }
    });

function chat(){
	$.ajax({
		type:"get",
		url:"chatM.php?getID=" + id_numbe,
		async:true,
		success:function(data){
			document.getElementById("chatBody").innerHTML = data;
            var div = document.getElementById('chatBody'); 
            div.scrollTop = div.scrollHeight;
		},
		error: function(jqXHR) {
			alert("发生错误：" + jqXHR.status);
		},
	});
        if (flag) { setTimeout("chat()", 5000);}
       
}
function asx(){
    flag = 0;
}
</script>
</body>
</html>	