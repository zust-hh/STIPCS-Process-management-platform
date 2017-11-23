<?php 
    session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>过程化管理</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/head.css">
    <link rel="stylesheet" href="css/manage.css">
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/manage.js"></script>
    <script src="js/WdatePicker.js"></script>

</head>
<body>
<?php require_once 'tou.php'; ?>
<!-- manage -->
<div class="container-fluid  tab-block" id="tab-block">
    <div class="manage-menu">
        <?php require_once 'navleft.php'; ?>
    </div>
    <div class="tab-cont manage-content">
        <div class="tab-pane">
             <div class="manage-content-t" id="manage-content-t">
                 <h3>所有项目</h3>
                 <ul>
                     <li class="selected1" id="one3" onclick="setTab('one',3)" style="width: 100px;"><a href="#">正在进行</a></li>
                     <li class="selected1" id="one2" onclick="setTab('one',2)"><a href="#">已结题</a></li>
                      <li class="selected" id="one1" onclick="setTab('one',1)"><a href="#">全部</a></li>
                 </ul>
             </div>
            <div class="manage-content-b" id="con_one_1">
                



            </div>
            <div class="manage-content-b" id="con_one_2">
                



            </div>
            <div class="manage-content-b" id="con_one_3">
               




            </div>
        </div>
        <div class="tab-pane">
            <div class="manage-content-t">
                <h3>个人正在进行项目</h3>
            </div>
            <div class="manage-content-b" id="c1">
          



            </div>
        </div>
        <div class="tab-pane">
            <div class="manage-content-t">
                <h3>个人已完成项目</h3>
            </div>
            <div class="manage-content-b" id="c2" >
           



            </div>
        </div>
        <div class="tab-pane">
            <div class="manage-content-t">
                <h3>个人未完成项目</h3>
            </div>
            <div class="manage-content-b" id="c3">
           

           
            </div>
        </div>
    </div>
</div>
<!-- manage over -->

<!-- plus  -->
<div class="plus">
    <ul class="menu2">
        <li class="main_nav"><a href="#"  style="margin-left:-10px;color: #3DA8F5;border-radius: 3px;background-color: rgba(0,0,0,0);border: 1px solid #3da8f5; display: inline-block; padding: 4px 8px;overflow: hidden; text-decoration: none; text-indent: 0; line-height: 20px;">创建项目</a>
            <ul class="submenu">
                <li id="sub-gc"><a href="#">国创</a></li>
                <li id="sub-xm"><a href="#">新苗</a></li>
                <li id="sub-cm"><a href="#">春萌</a></li>
                <li id="sub-qt"><a href="#">其他</a></li>
            </ul>
        </li>
        <div class="cd-user-modal">
            <div class="cd-user-modal-container">
                <ul class="cd-switcher">
                    <li><a href="javascript:void(0)">添加项目</a></li>
                </ul>
                <div id="cd-create">
                    <form class="cd-form" action="doaction.php" method="post" enctype="multipart/form-data" name="form0" onsubmit="return myCheck()">
                        <div class="create-one">
                            <div class="create-one-t">
                                <a href="#"><img src="images/3.jpg"></a>
                            </div>
                            <input type="text" placeholder="添加项目名称" id="create-name" name="create_name">
                            <select name="type" id="create-type1" name="create-type1" onchange="other(this.value);">
                                <option value="国创">国创</option>
                                <option value="新苗">新苗</option>
                                <option value="春萌">春萌</option>
                                <option value="4">其他</option>
                            </select>
                            <input type="text" id="create-type" name="create_type" placeholder="项目类型" style="display: none">
                        </div>
                        <div class="create-two">
                            <span>负责人：</span>
                            <a href="#" class="create-two-t">
                             		<?php echo "<img src=\"".$_SESSION["head_portrait"]."\">
                                <div>".$_SESSION["username"]."</div>"; ?>
                            </a>
                        </div>
                           <div class="create-two-r">
                            <span>项目编号：</span>
                          <input type="text" placeholder="项目编号" id="create-number" name="create_number">
                        </div>
                        <div class="create-three">
                            <div style="float: left;margin-top: 12px;margin-right: 20px">
                                <span class="glyphicon glyphicon-file"></span>
                                <span >项目申报书：</span>
                            </div>
                            <div style="float: left;margin-top: 11px">
                                <input type="file" id="file" name="myfile">
                            </div>
                        </div>
                        <div class="create-three-r">
                            <span>所属学院：</span>
                            <select name="owner" id="college">
                                <option value="1">信息学院</option>
                                <option value="2">经管学院</option>
                                <option value="3">艺术学院</option>
                                <option value="4">理学院</option>
                                <option value="5">机械学院</option>
                                <option value="6">土木学院</option>
                                <option value="7">生化学院</option>
                                <option value="8">电气学院</option>
                                <option value="9">外国语学院</option>
                            </select>
                        </div>
                    <div class="create-four" onmouseover="button()" onmouseout="button1()">
                            <span>指导教师工号：</span>
                            <div id="org0"></div>
                            <input type="button" onclick="add1();" value="+" id="add-input">
                            <input type="button" onclick="myFunction()" value="删" id="reduce-input">
                        </div>
                        <div class="create-four">
                            <span>指&nbsp&nbsp导&nbsp&nbsp&nbsp教&nbsp&nbsp师：</span>
                            <div id="org"></div>
                        </div>
                        <div class="create-five" onmouseover="button2()" onmouseout="button3()">
                            <span>参与人员学号：</span>
                            <div id="org1"></div>
                            <input type="button" onclick="add2();" value="+" id="add-input1">
                            <input type="button" onclick="myFunction1()" value="删" id="reduce-input1">
                        </div>
                        <div class="create-five">
                            <span>参&nbsp&nbsp与&nbsp&nbsp&nbsp人&nbsp&nbsp员：</span>
                            <div id="org2"></div>
                        </div>

                        <div class="create-six">
                            <span>项目实施时间：</span>
                            <input type="text" class="Wdate" onclick="WdatePicker({lang:'zh-cn'})" name="begintime">-<input type="text" class="Wdate" onFocus="WdatePicker({lang:'zh-cn'})" name="finnishtime">
                        </div>
                        <div class="create-seven">
                            <span>项目简介：</span>
                            <br>
                            <textarea name="abstract" id="abstract" cols="auto" rows="auto"></textarea>
                        </div>
                        <div><input type="submit" class="create-sub"></div>
                    </form>
                </div>
            </div>
        </div>
    </ul>
</div>
<div>
<a href="writeForProBook.php" style="right:50px;bottom:50px;color: #3DA8F5;border-radius: 3px;background-color: #ffffff;border: 1px solid #3da8f5; margin-left: 30px;position: absolute; display: inline-block; padding: 4px 8px;overflow: hidden; text-decoration: none; text-indent: 0; line-height: 20px;">填写申报书</a>
<!-- plus end-->
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
    });
</script>
<script>
    
        function ajx1(page){
        var request = new XMLHttpRequest();
        request.open("GET", "pcenter1.php?p=" + page+"&sid="+Math.random());
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                    document.getElementById("con_one_1").innerHTML = request.responseText;
                } else {
                    alert("发生错误：" + request.status);
                }
            }
        }
    }

        function ajx2(page){
        var request = new XMLHttpRequest();
        request.open("GET", "pcenter2.php?p=" + page+"&sid="+Math.random());
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                    document.getElementById("con_one_2").innerHTML = request.responseText;
                } else {
                    alert("发生错误：" + request.status);
                }
            }
        }
    }
         function ajx3(page){
        var request = new XMLHttpRequest();
        request.open("GET", "pcenter3.php?p=" + page+"&sid="+Math.random());
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                    document.getElementById("con_one_3").innerHTML = request.responseText;
                } else {
                    alert("发生错误：" + request.status);
                }
            }
        }
    }
     function ajx4(page){
        var request = new XMLHttpRequest();
        request.open("GET", "pcenter4.php?p=" + page+"&sid="+Math.random());
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                    document.getElementById("c1").innerHTML = request.responseText;
                } else {
                    alert("发生错误：" + request.status);
                }
            }
        }
    }

    function ajx5(page){
        var request = new XMLHttpRequest();
        request.open("GET", "pcenter5.php?p=" + page+"&sid="+Math.random());
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                    document.getElementById("c2").innerHTML = request.responseText;
                } else {
                    alert("发生错误：" + request.status);
                }
            }
        }
    }

        function ajx6(page){
        var request = new XMLHttpRequest();
        request.open("GET", "pcenter6.php?p=" + page+"&sid="+Math.random());
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                    document.getElementById("c3").innerHTML = request.responseText;
                } else {
                    alert("发生错误：" + request.status);
                }
            }
        }
    }
    ajx1(1);
    ajx2(1);
    ajx3(1);
    ajx4(1);
    ajx5(1);
    ajx6(1);



    function aajjxx(){
        var ss0="";
        var ss1="";
        var ss2="";
        var ss3="";
        var ss4="";
        if (document.getElementById("plusthree0")) {
            ss0=document.getElementById("plusthree0").value;
        }

         if (document.getElementById("plusthree1")) {
            ss1=document.getElementById("plusthree1").value;
        }

         if (document.getElementById("plusthree2")) {
            ss2=document.getElementById("plusthree2").value;
        }
         if (document.getElementById("plusthree3")) {
            ss3=document.getElementById("plusthree3").value;
        }
         if (document.getElementById("plusthree4")) {
            ss4=document.getElementById("plusthree4").value;
        }

 var request = new XMLHttpRequest();
request.open("GET", "json1.php?s0="+ss0+"&s1="+ss1 +"&s2="+ss2 +"&s3="+ss3 +"&s4="+ss4);
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
            
                    var jsonn = JSON.parse(request.responseText);

                    if (document.getElementById("plusthree0")) {
                        document.getElementById("s0").value=jsonn.s0;
                    }

                    if (document.getElementById("plusthree1")) {
                        document.getElementById("s1").value=jsonn.s1;
                    }


                    if (document.getElementById("plusthree2")) {
                        document.getElementById("s2").value=jsonn.s2;
                    }


                    if (document.getElementById("plusthree3")) {
                        document.getElementById("s3").value=jsonn.s3;
                    }

                    if (document.getElementById("plusthree4")) {
                        document.getElementById("s4").value=jsonn.s4;
                    }

 
                } else {
                    alert("发生错误：" + request.status);
                }
            }
        }
    } 

function aaajjjxxx(){
        var tt0="";
        var tt1="";
        var tt2="";
        var tt3="";
        var tt4="";
        if (document.getElementById("pluszero0")) {
            tt0=document.getElementById("pluszero0").value;
        }

         if (document.getElementById("pluszero1")) {
            tt1=document.getElementById("pluszero1").value;
        }
         if (document.getElementById("pluszero2")) {
            tt2=document.getElementById("pluszero2").value;
        }
         if (document.getElementById("pluszero3")) {
            tt3=document.getElementById("pluszero3").value;
        }
         if (document.getElementById("pluszero4")) {
            tt4=document.getElementById("pluszero4").value;
        }

        var request = new XMLHttpRequest();
request.open("GET", "json2.php?t0="+tt0+"&t1="+tt1 +"&t2="+tt2 +"&t3="+tt3 +"&t4="+tt4 +"&sid="+Math.random());
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                     var jsonn = JSON.parse(request.responseText);

                    if (document.getElementById("pluszero0")) {
                        document.getElementById("t0").value=jsonn.t0;
                    }

                    if (document.getElementById("pluszero1")) {
                        document.getElementById("t1").value=jsonn.t1;
                    }


                    if (document.getElementById("pluszero2")) {
                        document.getElementById("t2").value=jsonn.t2;
                    }


                    if (document.getElementById("pluszero3")) {
                        document.getElementById("t3").value=jsonn.t3;
                    }

                    if (document.getElementById("pluszero4")) {
                        document.getElementById("t4").value=jsonn.t4;
                    }

                } else {
                    alert("发生错误：" + request.status);
                }
            }
        }
    } 



</script>
</body>
</html>	