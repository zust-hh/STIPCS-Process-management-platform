<?php 
	session_start();

	 if (!isset($_SESSION["id_number"])) {
    	echo "<script>window.location='login.php'</script>";
    	
    }
    else
		$_SESSION["iid"] = $_GET["project_id"];
	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/head.css">
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/manage_pro.css">
    <script src="js/manage-pro.js"></script>
    <script src="js/WdatePicker.js"></script>
     <script src="js/jquery-1.11.1.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/head.js"></script>

</head>
<body>
<?php 
	require_once 'tou.php';
     require_once'config.php';
     mysqli_query($conn,"SET NAMES UTF8");
     $pi = $_SESSION["iid"];
     $sql = "SELECT * FROM project WHERE `project_id` = '$pi'";
    	$qu = mysqli_query($conn,$sql);
    	$row = mysqli_fetch_array($qu);


 ?>

<!-- MANAGE pro -->
<div class="manage-pro">
    <div class="nav-body" id="nav-body">
        <div class="nav-l">
            <span id="nav-l-img"><img src="images/timg.jpg" alt="pic"></span>
           <?php echo " <span id=\"nav-l-name\">".$row["title"]."</span>"; ?>
        </div>
        <div class="nav-c">
            <ul>
                <li class="bottomstyle" id="one1" onclick="setTab('one',1)">过程</li>
                <li id="one3" onclick="setTab('one',2)">日程</li>
                <li id="one4" onclick="setTab('one',3)">群聊</li>
            </ul>
        </div>
        <div class="nav-r">
            <a href="#" onclick="Menu()" id="pro-setting"><span class="glyphicon glyphicon-tasks"></span>  菜单</a>
        </div>
    </div>
    <div class="subject">
        <div id="con_one_1">
           <?php 
            if ($_GET["step_pos"] == 1) {
               //start-------------------
                echo"<table class=\"table table-striped table-responsive\">
                <thead>
                <tr>
                    <th id=\"pro-target\">阶段目标</th>
                    <th id=\"pro-time\">截止时间</th>
                    <th id=\"pro-state\">阶段状态</th>
                    <th id=\"pro-responsible\">责任人</th>
                    <th id=\"pro-operation\">操作</th>
                </tr>
                </thead>
                <tbody>
               ";
                
                 
                  $iid = $_SESSION["iid"];
                  $sql = "SELECT * From project_step WHERE `project_id`='$iid' ORDER BY `id` ASC";
                  $query = mysqli_query($conn,$sql);

                  while($row = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td class=\"pro-target\" title=\"".$row["step_content"]."\">".$row["step_content"]."</td>";
                    echo "<td class=\"pro-time\">".$row["operate_last_time"]."</td>";
                    if($row["step_statue"] == 0){
                        echo "<td class=\"pro-state\">未完成</td>";
                    }
                    else if ($row["step_statue"] == 1) {
                        echo "<td class=\"pro-state\">待审核</td>";
                    }
                    else
                        echo "<td class=\"pro-state\">已完成</td>";
                  echo "<td class=\"pro-responsible\"><a href=\"#\">".$row["blame_person"]."</a></td>";
                    if($row["step_statue"] == 0){
                        if ($_SESSION["id_number"] != $row["person_id"] && strlen($_SESSION["id_number"]) != 6) {
                            echo "
                            <td class=\"pro-operation\"><form action=\"dealEditor.php\" method=\"post\" enctype=\"multipart/form-data\">
                                <a href=\"#\" class=\"not-file1\">选择附件</a>
                                <a href=\"#\" class=\"not-file\">确认提交</a>
                                <a href=\"#\" class=\"not-file\">下载附件</a>
                                 </form></td>"
                            ;
                            
                        }else if (strlen($_SESSION["id_number"]) == 6) {
                            echo "
                            <td class=\"pro-operation\"><form action=\"dealEditor.php\" method=\"post\" enctype=\"multipart/form-data\">
                                <a href=\"#\" class=\"not-file1\">下载文件</a>
                                <a href=\"#\" class=\"not-file\">通过</a>
                                <a href=\"#\" class=\"not-file\">不通过</a>
                                 </form></td>"
                            ;
                        }
                        else
                            echo "
                                <td><form action=\"dealEditor.php?num=".$row["step_id"]."\" method=\"post\" enctype=\"multipart/form-data\">
                                    <a href=\"#\" class=\"get-file\">选择附件<input type=\"file\" name=\"myfile\"></a>
                                    <input type=\"submit\" value=\"确认提交\" class=\"up-file\">
                                    <a href=\"#\" class=\"not-file\">下载附件</a>
                                    
                                </form></td>";
                    }
                    else if ($row["step_statue"] == 1) {
                        if ($_SESSION["id_number"] != $row["person_id"] && strlen($_SESSION["id_number"]) != 6) {
                        echo "
                        <td><form action=\"dealEditor.php?\" method=\"post\" enctype=\"multipart/form-data\">
                                <a href=\"#\" class=\"not-file1\">选择附件</a>
                                <a href=\"#\" class=\"not-file\">确认提交</a>
                                <a href=\"#\" class=\"download-file\" onclick=\"majx(".$row["step_id"].")\">下载附件</a>
                                
                                 </form></td>
                            ";
                            
                        }else if (strlen($_SESSION["id_number"]) == 6) {
                           echo "
                        <td><form action=\"dealEditor.php?\" method=\"post\" enctype=\"multipart/form-data\">
                         <a href=\"#\" class=\"download-file1\" onclick=\"majx(".$row["step_id"].")\">下载附件</a>
                                <a href=\"#\" class=\"up-file1\" onclick=\"pajx(2,".$row["step_id"].")\">通过</a>
                                <a href=\"#\" class=\"up-file1\" onclick=\"pajx(0,".$row["step_id"].")\">不通过</a>
                                 </form></td>
                            ";
                        }
                        else
                        echo "
                        <td><form action=\"dealEditor.php?num=".$row["step_id"]."\"  method=\"post\" enctype=\"multipart/form-data\">
                            <a href=\"#\" class=\"get-file\">选择附件<input type=\"file\" name=\"myfile\"></a>
                            <input type=\"submit\" value=\"确认提交\" class=\"up-file\">
                            <a href=\"#\" class=\"download-file\" onclick=\"majx(".$row["step_id"].")\">下载附件</a>
                            
                        </form></td>";
                    }
                    else{
                        if (strlen($_SESSION["id_number"]) == 6) {
                           echo "
                         <td><form action=\"dealEditor.php?\" method=\"post\" enctype=\"multipart/form-data\">
                         <a href=\"#\" class=\"download-file1\" onclick=\"majx(".$row["step_id"].")\">下载附件</a>
                                <a href=\"#\" class=\"not-file\">通过</a>
                                <a href=\"#\" class=\"not-file\">不通过</a>
                                 </form></td>
                            ";
                        }
                        else
                        echo " 
                        <td><form action=\"dealEditor.php\"  method=\"post\" enctype=\"multipart/form-data\">
                            <a href=\"#\" class=\"not-file1\">选择附件</a>
                            <a href=\"#\" class=\"not-file\">确认提交</a>
                            <a href=\"#\" class=\"download-file\" onclick=\"majx(".$row["step_id"].")\">下载附件</a>
                            
                        </form></td>";
                     }
                }

                echo "
                </tbody>
            </table>
             <div class=\"download-popover-mask\"></div>
            <div class=\"download-popover\">
                <div class=\"download-poptit\">
                    <a href=\"javascript:;\" title=\"关闭\" class=\"download-close\">×</a>
                    <h3>下载附件1</h3>
                </div>
                <div class=\"download-popbod\">
                    <table class=\"table table-striped table-responsive\" id=\"fileshow\" name=\"fileshow\">
                        <tr>
                            <th id=\"filename\">文件名</th>
                            <th id=\"uptime\">上传日期</th>
                            <th id=\"filedl\">下载</th>
                        </tr>
                        <tr class=\"onefile\">
                            <td>你好.txt</td>
                            <td>2016.1.1  8：30</td>
                            <td><a href=\"#\">下载</a></td>
                        </tr>
                        <tr class=\"onefile\">
                            <td>你好.txt</td>
                            <td>2016.1.1  8：30</td>
                            <td><a href=\"#\">下载</a></td>
                        </tr>
                    </table>
                </div>
            </div>"; 
          
           
           if (strlen($_SESSION["id_number"]) != 6){
           
            echo" <a href=\"#\" onclick=\"jieti()\"><button class=\"end\">申请结题</button></a>
            		<a href=\"pro_redact.php\"><button class=\"end\">阶段编辑</button></a>"; 
            		
            } else{
				$pi = $_SESSION["iid"];
				$s = "SELECT * FROM projectnews WHERE `project_id` = '$pi'  AND `project_step`='-1'";
				$q = mysqli_query($conn,$s);
				$num = mysqli_num_rows($q);
				if($num){	
				echo"
					<a href=\"#\" onclick=\"pppajx(1)\"><button class=\"end\">不通过</button></a>
            		<a href=\"#\" onclick=\"pppajx(0)\"><button class=\"end\">通过</button></a>";
				}
            }
          
               //finish------------------
            }
            if ($_GET["step_pos"]==0) {
                //start
             echo "   
             <div class=\"add-pro\">
                <input type=\"button\" value=\"点击添加过程\" id=\"add-pro\">
            </div>
            <div class=\"add-body\">
                <form action=\"step_create.php\" method=\"post\" name=\"form1\" onsubmit=\"return myCheck()\">
                    <table class=\"table table-striped table-responsive\">
                        <thead>
                        <tr class=\"list\">
                            <th id=\"add-number\">序号</th>
                            <th id=\"add-target\">阶段目标</th>
                            <th id=\"add-comtime\">完成时间</th>
                            <th id=\"add-respeople\">责任人学号</th>
                        </tr>
                        </thead>
                        <tbody id=\"addprobody\">
                        </tbody>
                    </table>
                     <div class=\"add-confirm\">
                <input type=\"submit\" value=\"确认并提交过程\">
            </div>
                </form>
            </div>";
                //finish
            }

            $sql = "SELECT * FROM project WHERE `project_id` = '".$_SESSION["iid"]."'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);
         

            ?>
        </div>
        <div id="con_one_2">
            <div class="date-add">
                <a href="#" class="add-date"><span class="glyphicon glyphicon-plus-sign"></span> 添加日程</a>
            </div>
            <div id="date-pop">
                <div class="pop-close">
                    添加日程<a href="javascript:void(0)" title="关闭窗口" class="close_btn" id="closeBtn">×</a>
                </div>
                <div class="pop-body">
                    <div class="date-name"><input type="text" placeholder="日程标题"></div>
                    <div class="date-address"><input type="text" placeholder="地点"></div>
                    <div class="date-time">
                        <div class="date-begintime">
                            <h6>开始时间</h6>
                            <input type="text" class="Wdate" onfocus="WdatePicker({lang:'zh-cn'})" placeholder="日期">
                            <select name="hour" id="time-hour">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="0">2</option>
                                <option value="0">3</option>
                                <option value="0">4</option>
                                <option value="0">5</option>
                                <option value="0">6</option>
                                <option value="0">7</option>
                                <option value="0">8</option>
                                <option value="0">9</option>
                                <option value="0">10</option>
                                <option value="0">11</option>
                                <option value="0">12</option>
                                <option value="0">13</option>
                                <option value="0">14</option>
                                <option value="0">15</option>
                                <option value="0">16</option>
                                <option value="0">17</option>
                                <option value="0">18</option>
                                <option value="0">19</option>
                                <option value="0">20</option>
                                <option value="0">21</option>
                                <option value="0">22</option>
                                <option value="0">23</option>
                            </select>
                            时
                        </div>
                        <div class="date-endtime">
                            <h6>结束时间</h6>
                            <input type="text" class="Wdate" onfocus="WdatePicker({lang:'zh-cn'})" placeholder="日期">
                            <select name="hour" id="time-hour">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="0">2</option>
                                <option value="0">3</option>
                                <option value="0">4</option>
                                <option value="0">5</option>
                                <option value="0">6</option>
                                <option value="0">7</option>
                                <option value="0">8</option>
                                <option value="0">9</option>
                                <option value="0">10</option>
                                <option value="0">11</option>
                                <option value="0">12</option>
                                <option value="0">13</option>
                                <option value="0">14</option>
                                <option value="0">15</option>
                                <option value="0">16</option>
                                <option value="0">17</option>
                                <option value="0">18</option>
                                <option value="0">19</option>
                                <option value="0">20</option>
                                <option value="0">21</option>
                                <option value="0">22</option>
                                <option value="0">23</option>
                            </select>
                            时
                        </div>
                    </div>
                    <div class="date-remind">
                        <div class="date-remind-l">
                            <h6>提醒</h6>
                            <div class="date-remind-l-body">
                                <ul id="date-remind-nav">
                                    <li onclick="date_nav()" id="date-remind-nav-li"><a id="date-nav-a"><span class="glyphicon glyphicon-time
"></span>   5分钟前</a>
                                        <ul id="date-remind-nav-li-ul">
                                            <li onclick="date_nav_li0()" id="date-remind-nav-li-ul-li0"><span class="glyphicon glyphicon-time
"></span>   关闭提醒</li>
                                            <li onclick="date_nav_li1()" id="date-remind-nav-li-ul-li1"><span class="glyphicon glyphicon-time
"></span>   开始时提醒</li>
                                            <li onclick="date_nav_li2()" id="date-remind-nav-li-ul-li2"><span class="glyphicon glyphicon-time
"></span>   5分钟前</li>
                                            <li onclick="date_nav_li3()" id="date-remind-nav-li-ul-li3"><span class="glyphicon glyphicon-time
"></span>   15分钟前</li>
                                            <li onclick="date_nav_li4()" id="date-remind-nav-li-ul-li4"><span class="glyphicon glyphicon-time
"></span>   30分钟前</li>
                                            <li onclick="date_nav_li5()" id="date-remind-nav-li-ul-li5"><span class="glyphicon glyphicon-time
"></span>   1小时前</li>
                                            <li onclick="date_nav_li6()" id="date-remind-nav-li-ul-li6"><span class="glyphicon glyphicon-time
"></span>   2小时前</li>
                                            <li onclick="date_nav_li7()" id="date-remind-nav-li-ul-li7"><span class="glyphicon glyphicon-time
"></span>   一天前</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="date-remind-r">
                            <h6>重复</h6>
                            <div class="date-remind-r-body">
                                <span></span>
                                <ul id="date-remind-nav">
                                    <li onclick="date_nav1()" id="date-remind-nav-li"><a id="date-nav-a1"><span class="glyphicon glyphicon-repeat"></span>   不重复</a>
                                        <ul id="date-remind-nav-li-ul1">
                                            <li onclick="date_nav_li8()" id="date-remind-nav-li-ul-li8"><span class="glyphicon glyphicon-repeat"></span>   不重复</li>
                                            <li onclick="date_nav_li9()" id="date-remind-nav-li-ul-li9"><span class="glyphicon glyphicon-repeat"></span>   每天重复</li>
                                            <li onclick="date_nav_li10()" id="date-remind-nav-li-ul-li10"><span class="glyphicon glyphicon-repeat"></span>   每周重复</li>
                                            <li onclick="date_nav_li11()" id="date-remind-nav-li-ul-li11"><span class="glyphicon glyphicon-repeat"></span>   每月重复</li>
                                            <li onclick="date_nav_li12()" id="date-remind-nav-li-ul-li12"><span class="glyphicon glyphicon-repeat"></span>   每年重复</li>
                                            <li onclick="date_nav_li13()" id="date-remind-nav-li-ul-li13"><span class="glyphicon glyphicon-repeat"></span>   工作日重复</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="date-summary">
                        <h6>日程内容</h6>
                        <textarea placeholder="简介"></textarea>
                    </div>
                    <div class="date-submit">
                        <a href="#">提交日程</a>
                    </div>
                </div>
            </div>
            <div class="date-menu">
                <span class="glyphicon glyphicon-calendar"></span>
                <p>添加新日程，安排会议或其他活动，添加参与者即可通知其他成员参加。</p>
            </div>
        </div>
        <div id="con_one_3">
            <div class="dialogbody">

            </div>
            <div class="inputbody">
                <div class="inputbox">
                    <div class="inputbox-t">
                        <textarea class="Input_text" placeholder="说点什么..."></textarea>
                    </div>
                    <div class="inputbox-b">
                        <input type="button" value="发送">
                    </div>
                </div>
            </div>
        </div>
        <div id="pro-set">
            <div id="pro-set-title">
                <h4>项目菜单</h4>
                <a href="#" id="pro-setting1">×</a>
            </div>
            <div class="pro-set-main">
                <a href="#" id="mainset"><span class="glyphicon glyphicon-wrench"></span>  项目设置</a>
            </div>
            <div class="theme-popover-mask"></div>
            <div class="theme-popover">
                <div class="theme-poptit">
                    <a href="javascript:;" title="关闭" class="close">×</a>
                    <h3>项目设置</h3>
                </div>



<form id="formaj" name="formaj">
                <div class="theme-popbod">
                    <div class="pro-picset pro-setting">
                        <h4>项目封面</h4>
                        <?php echo"<img  id=\"imgShow\" src=\"".$row["head_pic"]."\" alt=\"pro-pic\">"; ?>
                        <a href="#" class="pic-set-new">
                             选择文件
                             <input type="file" name="myfile" value="" accept="image/gif,image/jpeg,image/jpg,image/png">
                        </a>
                        <input type="button" value="上传图片" onclick="fsubmit()" id="pic-submit">
                    </div>
 </form>
           
        <form name="formaj2" id="formaj2">   
                    <div class="pro-nameset pro-setting">
                        <h4>项目名称</h4>
                        <?php echo"<input type=\"text\" name=\"projectName\" id=\"projectName\" value=\"".$row["title"]."\">";?>
                    </div>
                    <div class="pro-presentset pro-setting">
                        <h4>项目简介</h4>
                        <?php echo"<textarea placeholder=\"介绍一下这个项目\" name=\"projectIntroduce\" id=\"projectIntroduce\" >".$row["easy_introduce"]."</textarea>" ?>
                    </div>
                    <div class="pro-openset pro-setting">
                        <h4>项目公开性</h4>
                        <div class="select_box">
                            <span class="select_txt" name= "use" id="chose">私有项目 (仅项目成员可查看和编辑)</span>
                            <div class="option">
                                <a>公开项目 (所有人都可通过链接访问，仅项目成员可编辑)</a>
                                <a>私有项目 (仅项目成员可查看和编辑)</a>
                            </div>
                        </div>
                    </div>
                    <div class="pro-ownerset pro-setting">
                        <h4>项目拥有者</h4>


                            <img src="images/timg.jpg" alt="admin">
                            <div id="pro-mainname">
                            <?php 

                            $host = $row["host"];
                            $hostname = $row["hostname"];
                            	echo "<span id=\"changeID\" name=\"changeID\">".$host."</span><span id=\"changeName\" name=\"changeName\">".$hostname."</span></div>";

                             ?>
                            <input type="button" value="移交" id="pro-tosb">
                        <div class="theme-popover-maskto"></div>
                        <div class="theme-popoverto">
                            <div class="theme-poptitto">
                                <a href="javascript:void(0);" title="关闭" class="closeto">×</a>
                                <h3>更改负责人</h3>
                            </div>
                            <div class="theme-popbodto">
                                <input type="text" id="tosbtext" placeholder="请选择新的拥有者">
                                <input type="button" id="tosbsub" value="更改" onclick="changeHost()">
                            </div>
                        </div>
                    </div>
                    <div class="proset-save">
                        <input type="button" id="ajxforjquery" value="保存" >
                    </div>
                </div>
            </div>
</form>


            <div class="pro-set-people">
                <a href="#" id="peopleset"><span class="glyphicon glyphicon-user"></span>  项目成员</a>
            </div>
            <div class="theme-popover-mask1"></div>
            <div class="theme-popover1">
                <div class="theme-poptit1">
                    <a href="javascript:;" title="关闭" class="close1">×</a>
                    <h3>项目成员</h3>
                </div>
               <div class="theme-popbod1">
                    <?php 
                        if ($_SESSION["id_number"] == $host) {
                            echo "
                                <input type=\"text\" placeholder=\"邀请新成员，输入学号\" id=\"addnum\">
                                <a href=\"#\" id=\"invite\" onclick=\"ajxxad()\">邀请</a>
                            ";
                        }
                     ?>
                    <div class="allmember">
                        <?php
                            
                            $arrayid = array();
                            $arrayname = array();
                            
                            if ($row["joiner1"] != "") {
                                array_push($arrayid,$row["joiner1"]);
                                array_push($arrayname,$row["name1"]);
                            }
                            if ($row["joiner2"] != "") {
                                array_push($arrayid,$row["joiner2"]);
                                array_push($arrayname,$row["name2"]);
                            }
                            if ($row["joiner3"] != "") {
                                array_push($arrayid,$row["joiner3"]);
                                array_push($arrayname,$row["name3"]);
                            }
                            if ($row["joiner4"] != "") {
                                array_push($arrayid,$row["joiner4"]);
                                array_push($arrayname,$row["name4"]);
                            }
                            if ($row["joiner5"] != "") {
                                array_push($arrayid,$row["joiner5"]);
                                array_push($arrayname,$row["name5"]);
                            }
                            echo "
                                <div class=\"member\">
                                    <img src=\"images/timg.jpg\" alt=\"txiang\">
                                    <span id=\"member-name\">".$row["hostname"]."</span>
                                    <span id=\"member-post\">主持人</span>
                                </div>
                            ";
                           if ($_SESSION["id_number"] == $host) {
                               for($i = 0 ; $i < sizeof($arrayid) ; $i++){
                                echo "
                                    <div class=\"member\">
                                        <img src=\"images/timg.jpg\" alt=\"txiang\">
                                        <span id=\"member-name\">".$arrayname[$i]."</span>
                                        <a href=\"#\" name=\"".$arrayid[$i]."\" class=\"remove\" onclick=\"ajxx(".$arrayid[$i].")\">移除</a>
                                        <span id=\"member-post\">成员</span>
                                    </div>
                                ";
                                }
                           }else{
                                for($i = 0 ; $i < sizeof($arrayid) ; $i++){
                                echo "
                                    <div class=\"member\">
                                        <img src=\"images/tree.jpg\" alt=\"txiang\">
                                        <span id=\"member-name\">".$arrayname[$i]."</span>                                      
                                        <span id=\"member-post\">成员</span>
                                    </div>
                                ";
                           }
                           }
                            echo "
                                </div>
                                    <div class=\"memberfoot\">
                                        <p>项目成员数量 · <span id=\"Just\">".sizeof($arrayid)."</span>/<span>6</span></p>
                                    </div>
                            ";
                        ?>
                    
                </div>
            </div>
            <div style="width: 280px;margin: 10px 10px;border-bottom: 1px solid #e5e5e5;"></div>
            <div class="pro-news">
                <div class="pro-newstitle">
                    <p href="#" id="pronew"><span class="glyphicon glyphicon-align-right"></span>  项目动态</p>
                </div>
                <div class="pro-allnew">
                    <?php 
                    $sql = "SELECT * FROM projectnews WHERE project_id = '".$_SESSION["iid"]."' ORDER BY `op_time` DESC LIMIT 3";
                    $query = mysqli_query($conn,$sql);
                    $i = 0;
                    while ( $ress = mysqli_fetch_array($query)) {
                       
                        if ($ress["op_content"] == "创建") {
                            echo "
                                <div class=\"pro-onenew\">
                                    <div class=\"pro-onenew-l\">
                                        <img src=\"images/64.jpg\" alt=\"user\">
                                    </div>
                                    <div class=\"pro-onenew-r\">
                                        <b id=\"new-name\">负责人:</b>
                                        <span id=\"new-work\">".$ress["op_pname"]."</span><br>
                                        <span id=\"new-main\">创建了项目</span><br>
                                        <span id=\"new-time\">".$ress["op_time"]."</span>
                                    </div>
                                </div>
                            " ;
                        }if ($ress["op_content"] == "步骤") {
                            echo "
                                <div class=\"pro-onenew\">
                                    <div class=\"pro-onenew-l\">
                                        <img src=\"images/64.jpg\" alt=\"user\">
                                    </div>
                                    <div class=\"pro-onenew-r\">
                                        <b id=\"new-name\">负责人:</b>
                                        <span id=\"new-work\">".$ress["op_pname"]."</span><br>
                                        <span id=\"new-main\">创建了项目步骤</span><br>
                                        <span id=\"new-time\">".$ress["op_time"]."</span>
                                    </div>
                                </div>
                            " ;
                        }if ($ress["op_content"] == "待审核") {
                           $start1 = mb_strpos($ress["attachment"],'+',0,"utf-8")+1;
                            $end1 = mb_strlen($ress["attachment"],"utf-8")-1;
                            $t1 = mb_substr($ress["attachment"],$start1,$end1-$start1,'utf-8');
                            echo "
                            <div class=\"pro-onenew\">
                                <div class=\"pro-onenew-l\">
                                    <img src=\"images/hideback.jpg\" alt=\"user\">
                                </div>
                                <div class=\"pro-onenew-r\">
                                    <b id=\"new-name\">".$ress["op_pname"]."</b>
                                    <span id=\"new-work\">提交阶段目标文件：</span><br>
                                    <span id=\"new-main\"><a href=\"".$ress["attachment"]."\">".$t1."</a></span><br>
                                    <span id=\"new-time\">".$ress["op_time"]."</span>
                                </div>
                            </div>";
                        }if ($ress["op_content"] == "步骤改") {
                            echo "
                                <div class=\"pro-onenew\">
                                    <div class=\"pro-onenew-l\">
                                        <img src=\"images/hideback.jpg\" alt=\"user\">
                                    </div>
                                    <div class=\"pro-onenew-r\">
                                        <b id=\"new-name\">负责人:</b>
                                        <span id=\"new-work\">".$ress["op_pname"]."</span><br>
                                        <span id=\"new-main\">修改了项目步骤</span><br>
                                        <span id=\"new-time\">".$ress["op_time"]."</span>
                                    </div>
                                </div>
                            " ;
                        }if ($ress["op_content"] == "过期") {
                            echo "
                                    <div class=\"pro-onenew\">
                                        <div class=\"pro-onenew-l\">
                                            <img src=\"images/64.jpg\" alt=\"user\">
                                        </div>
                                        <div class=\"pro-onenew-r\">
                                            <b id=\"new-name\">".$ress["op_pname"]."</b>
                                            <span id=\"new-work\">负责的步骤：</span><br>
                                            <span id=\"new-main\">".$ress["project_step"]."过期</span><br>
                                            <span id=\"new-time\">".$ress["op_time"]."</span>
                                        </div>
                                    </div>";
                        }if ($ress["op_content"] == "通过") {
                            echo "
                            <div class=\"pro-onenew\">
                                        <div class=\"pro-onenew-l\">
                                            <img src=\"images/timg.jpg\" alt=\"user\">
                                        </div>
                                        <div class=\"pro-onenew-r\">
                                            <b id=\"new-name\">".$ress["op_pname"]."</b>
                                            <span id=\"new-work\">通过了：</span><br>
                                            <span id=\"new-main\">".$ress["project_step"]."</span><br>
                                            <span id=\"new-time\">".$ress["op_time"]."</span>
                                        </div>
                                    </div>";
                        }if ($ress["op_content"] == "不通过") {
                            echo "
                                <div class=\"pro-onenew\">
                                        <div class=\"pro-onenew-l\">
                                            <img src=\"images/timg.jpg\" alt=\"user\">
                                        </div>
                                        <div class=\"pro-onenew-r\">
                                            <b id=\"new-name\">".$ress["op_pname"]."</b>
                                            <span id=\"new-work\">步骤：</span><br>
                                            <span id=\"new-main\">".$ress["project_step"]."审核未通过</span><br>
                                            <span id=\"new-time\">".$ress["op_time"]."</span>
                                        </div>
                                    </div>";
                            
                        }
                    }
                            
                     ?>
                </div>
                <div class="lookallnew">
                    <a href="#"><span class="glyphicon glyphicon-th-large"></span>查看所有项目动态</a>
                </div>
            </div>
    </div>
</div>
<!--  manage pro end -->
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

<!-- ajx 后台-->
<script>
	function majx (step_id){
		var request = new XMLHttpRequest();
        request.open("GET", "majx.php?step_id=" + step_id);
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                    document.getElementById("fileshow").innerHTML = request.responseText;
                } else {
                    alert("发生错误：" + request.status);
                }
            }
        }
	}
</script>

<script>
var t= "<?php echo sizeof($arrayid); ?>"

    function changeHost(){ 
        var id =  document.getElementById("tosbtext").value;
       document.getElementById("changeID").innerHTML = document.getElementById("tosbtext").value;
       var request = new XMLHttpRequest();
        request.open("GET", "selectName.php?id=" + id);
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                    document.getElementById("changeName").innerHTML = request.responseText;
                } else {
                    alert("发生错误：" + request.status);
                }
            }
        }
    }

    function ajxx(g){
        var request = new XMLHttpRequest();
        request.open("GET", "ajxx.php?id=" + g);
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                        document.getElementById("Just").innerHTML = t--;
                        alert("删除成功!");
                } else {
                    alert("发生错误：" + request.status);
                }
            }
        }
    }
    
    
    function jieti(){
        var request = new XMLHttpRequest();
        request.open("GET", "isjieti.php");
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                  
                        alert("请求成功!");
                } else {
                    alert("发生错误：" + request.status);
                }
            }
        }
    }

    function ajxxad(){
        var request = new XMLHttpRequest();
        request.open("GET", "ajxxad.php?id=" + document.getElementById("addnum").value);
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                   
                    if (request.responseText != "邀请失败!队伍已满!" && request.responseText != "邀请失败!") {
                             var div1 = "<div class=\"member\"><img src=\"images/64.jpg\" alt=\"txiang\"><span id=\"member-name\">"+request.responseText+"</span><a href=\"#\" name=\""+document.getElementById("addnum").value+"\" class=\"remove\" onclick=\"ajxx("+document.getElementById("addnum").value+")\">移除</a><span id=\"member-post\">成员</span></div>";
                        $(".allmember").append(div1);
                    }

                    else
                        alert(request.responseText);

                } else {
                    alert("发生错误：" + request.status);
                }
            }
        }
    }
    function pajx(g,d){
        var request = new XMLHttpRequest();
        request.open("GET", "pajx.php?pos=" + g + "&step_id=" + d);
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                        window.location.reload();
                        alert(request.responseText);
                } else {
                    alert("发生错误：" + request.status);
                }
            }
        }
    }
    
    function pppajx(g){
        var request = new XMLHttpRequest();
        request.open("GET", "isAgreejieti.php?pos=" + g );
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                        window.location.reload();
                        alert(request.responseText);
                } else {
                    alert("发生错误：" + request.status);
                }
            }
        }
    }

</script>

  <script type="text/javascript">  
  <!--  
    function fsubmit(){  
        var data = new FormData($('#formaj')[0]);
        //data.append("isOpen","" + document.getElementById("chose").innerHTML + "");
        $.ajax({  
            url: 'uploadProject.php',  
            type: 'POST',  
            data: data,  
            dataType: 'JSON',  
            cache: false,  
            processData: false,  
            contentType: false  
        }).done(function(ret){  
            if(ret['isSuccess']){  
                document.getElementById("imgShow").src = ret['myfile'];
              // window.location='procedural.php';
            }else{  
                alert('提交失敗');  
            }  
        });  
        return false;  
    } 

$(function() {
    $('#ajxforjquery').click(function() {
        $.ajax({
            url: 'changeHost.php',
            type: 'post',
            dataType:'json',
            data: $.param({"chose":"" + document.getElementById("chose").innerHTML +"","projectName":"" + document.getElementById("projectName").value +"","projectIntroduce":"" + document.getElementById("projectIntroduce").value +"","changeID":"" + document.getElementById("changeID").innerHTML +"","changeName":"" + document.getElementById("changeName").innerHTML +"",}),
            success: function(msg) {
               alert(msg);
            }
        });
    });
});

  -->  
  </script>  

</body>
</html>