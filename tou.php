<?php 
//header("Content-type: text/html; charset=utf-8"); 
require_once'config.php';
mysqli_query($conn,"set names utf8");
$id_number=$_SESSION["id_number"];
$sql="SELECT * FROM project WHERE `position`='0' AND (`host`='$id_number' OR `joiner1`='$id_number' OR `joiner2`='$id_number' OR `joiner3`='$id_number' OR `joiner4`='$id_number' OR `pointer` = '$id_number' OR `pointer2` = '$id_number') ORDER BY rand() limit 1";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

echo "<div class=\"container-fluid navbar-fixed-top\" >
    <div class=\"\">
        <div class=\"nav nav-collapse\">
            <div class=\"menu\" style=\"width:100%\">
                <ul class=\"pull-left\">
                    <li><a  class=\"logo\" href=\"javascrpt:void(0)\"><img src=\"images/logo.png\"></a></li>
                    <li><a href=\"study-environment.php\"><span class=\"glyphicon glyphicon-folder-close\"></span> 实践资料</a></li>
                    <li><a href=\"procedural.php\"><span class=\"glyphicon glyphicon-list-alt\"></span> 过程化管理</a></li>
                    <li><a href=\"partner.php\"><span class=\"glyphicon glyphicon-search\"></span> 队员招募</a></li>
                    <li><a href=\"show-index.php\"><span class=\"glyphicon glyphicon-pencil\"></span> 展示园地</a></li>
                    <li><a href=\"z-user-center.php\"><span class=\"glyphicon glyphicon-user\"></span> 用户中心</a></li>
                </ul>
               <div class=\"pull-right pulltwo\" style=\"float:left\">
                <ul class=\"pull-right pullone\">
                    <li><a   href=\"#\" rel=\"drevil\"><img src=\"".$_SESSION["head_portrait"]."\" class=\"img-circle\" style=\"width:80%;margin-top:4px;\"></a></li>
                    <li><a   href=\"#\" rel=\"drevil1\"><span class=\"glyphicon glyphicon-comment\"></span></a></li>
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
            '<div id=\"popOverBox-b\"><a href=\"unset.php\" style=\"color: grey;margin-left: 240px\">退出</a></div></div>', //this is the content of the html box. add the image here or anything you want really.
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
 ?>