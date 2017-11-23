<?php
    
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>科技创新</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dwf/study.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="imagesbootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/head.css">
    <link rel="stylesheet" type="text/css" href="css/dwf/use.css">
    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
body
{
    background:url(images/3.jpg );
            background-repeat: no-repeat;
            background-attachment:fixed;
}
    </style>

</head>
<body>
     <?php require_once 'tou.php'; ?>
   <div class="container-fluid middle" style="margin-top:50px;background-color:white">
      
            <div class="col-md-2 first" >    
              <nav class="accordion arrows">
                    <input type="radio" name="accordion" id="cb1" />
                    <section class="box">
                        <label class="box-title" for="cb1">项目介绍</label>
                        <label class="box-close" for="acc-close"></label>
                        <div class="box-content">
                            <ul class="nav navbar-nav">
                                    <li><a class="sscroll" href="study-guochuang.php">新苗</a>
                                    </li>
                                    <li><a class="sscroll" href="study-guochuang.php">国创</a></li>
                                    <li><a class="sscroll" href="study-guochuang.php">春萌</a></li>
                                    <li><a class="sscroll" href="study-guochuang.php">其他</a></li>
                            </ul>
                        </div>
                    </section>
                    <input type="radio" name="accordion" id="cb2"/>
                    <section class="box">
                        <label class="box-title" for="cb2"><a href="study-environment.php">实践环境</a></label>
                        <label class="box-close" for="acc-close"></label>
                        <div class="box-content">
                            <ul class="nav navbar-nav">
                                    <li><a class="sscroll" href="study-environment.php">蓝色空间</a>
                                    </li>
                                    <li><a class="sscroll" href="study-environment.php">软工实验室</a></li>
                                    <li><a class="sscroll" href="study-environment.php">苹果机房</a></li>
                                    <li><a class="sscroll" href="study-environment.php">计算机机房</a></li>
                            </ul>
                        </div>
                    </section>
                    <input type="radio" name="accordion" id="cb3" />
                    <section class="box">
                        <label class="box-title" for="cb3"><a href="study-zhuanti.php">专题讲座</a></label>
                        
                        <label class="box-close" for="acc-close"></label>
                        <div class="box-content">
                            <ul class="nav navbar-nav">
                                    <li><a class="sscroll" href="study-zhuanti.php">各类讲座</a>
                                    </li>
                                    
                            </ul>
                        </div>
                    </section>

                         <input type="radio" name="accordion" id="cb4" />
                    <section class="box">
                        <label class="box-title" for="cb4"><a href="study-tools.php">学习工具</a></label>
                        <label class="box-close" for="acc-close"></label>
                        <div class="box-content">
                            <ul class="nav navbar-nav">
                                    <li><a class="sscroll" href="study-tools.php">TOOLS</a></li>
                                    <li><a class="sscroll" href="study-tools.php">C</a></li>
                                    <li><a class="sscroll" href="study-tools.php">JAVA</a></li>
                                    <li><a class="sscroll" href="study-tools.php">WEB</a></li>
                                    <li><a class="sscroll" href="study-tools.php">UI</a></li>
                            </ul>
                        </div>
                    </section>

                        </nav>
           
        </div>
            <div class="col-md-8 col-md-offset-2 ">
                <div id="intro1">
                         <div class="item-intro"  style="">
                            <h1 class="page-header" >项目介绍<small>——introduce</small></h1>
                            <div class="col-md-4"   style="backdround-color:">
                                <h2>计划内容</h2>
                                   <p>国家级大学生创新创业训练计划内容包括创新训练项目、创业训练项目和创业实践项目三类。</p>

                            </div>

                            <div class="col-md-4" style="backdround-color:">
                                 <h2>计划内容</h2>
                                 <p>创新训练项目是本科生个人或团队，在导师指导下，自主完成创新性研究项目设计、研究条件准备和项目实施、数据处理与分析、研究报告撰写、成果（学术）交流等工作。</p>
                            </div>

                            <div class="col-md-4" style="backdround-color:">
                                 <h2>计划内容</h2>
                                    <p>创业实践项目是学生团队，在学校导师和企业导师的共同指导下，采用前期创新训练项目（或创新性实验）的成果，提出一项具有市场前景的创新性产品或者服务，以此为基础开展创业实践活动。</p>

                            </div>
                         </div>
                </div>
                <div id="intro2">         
                          <div class="item-intro" style="">
                             <h1 class="page-header"  >基本信息<small>——introduce</small></h1>

                            <div class="col-md-4"  >
                             <h2> 立项名额及申报</h2>
                             <p>2012年学校拟立项资助大学生创新创业训练计划项目105项，其中创新训练项目90项、创业训练项目10项左右、创业实践项目5项左右。创新训练项目和创业训练项目拟资助经费1万元/项左右，创业实践项目拟资助经费5万元/项左右。</p>
                            </div>

                            <div class="col-md-4" >
                                <h2> 立项名额及申报</h2>
                                <p>创新训练项目由各学院根据学校分配的名额组织立项评审，具体立项名额分配情况见附件，学校要求各学院申报项目的名额与立项项目名额的比例不低于1.5:1，联合申报的创新训练项目在项目负责人所在学院进行申报。</p>
                            </div>

                            <div class="col-md-4" >
                                <h2> 立项名额及申报</h2>
                                <p>创业训练项目和创业实践项目，由教务处统一组织评审，全校学生均可申报，学校鼓励学生跨院系、跨专业进行联合申报。创业训练项目和创业实践项目，由教务处统一组织评审，全校学生均可申报，学校鼓励学生跨院系、跨专业进行联合申报。</p>
                            </div>
                          </div>
                </div>
                <div id="intro3">
                         <div class="item-intro"   style="">
                            <h1 class="page-header"  >项目内容<small >——introduce</small></h1>

                            <div class="col-md-4"   style="backdround-color:">
                                <h2>项目申报具体要求</h2>
                                <p>1. 立项资助对象是品学兼优，学有余力，对科学研究、创造发明或创业实践具有浓厚兴趣，善于独立思考，有较强创新意识、科研精神和初步创业能力的学生。凡我校全日制本科生均可申请，原则上以一至三年级的学生为主，四年级学生可作为项目成员参与但不能作为项目负责人。</p>
                            </div>

                            <div class="col-md-4" style="backdround-color:">
                                <h2>项目申报具体要求</h2>
                                <p>1. 立项资助对象是品学兼优，学有余力，对科学研究、创造发明或创业实践具有浓厚兴趣，善于独立思考，有较强创新意识、科研精神和初步创业能力的学生。凡我校全日制本科生均可申请，原则上以一至三年级的学生为主，四年级学生可作为项目成员参与但不能作为项目负责人。</p>
                            </div>

                            <div class="col-md-4" style="backdround-color:">

                                <h2>项目申报具体要求</h2>
                                <p>1. 立项资助对象是品学兼优，学有余力，对科学研究、创造发明或创业实践具有浓厚兴趣，善于独立思考，有较强创新意识、科研精神和初步创业能力的学生。凡我校全日制本科生均可申请，原则上以一至三年级的学生为主，四年级学生可作为项目成员参与但不能作为项目负责人。</p>
                            </div>

                        </div>
                </div>

                <div id="intro4">
                         <div class="item-intro"   style="">
                            <h1 class="page-header"  >如何申报<small >——introduce</small></h1>

                            <div class="col-md-4"   style="backdround-color:">
                                <h2>项目申报具体要求</h2>
                                <p>1. 立项资助对象是品学兼优，学有余力，对科学研究、创造发明或创业实践具有浓厚兴趣，善于独立思考，有较强创新意识、科研精神和初步创业能力的学生。凡我校全日制本科生均可申请，原则上以一至三年级的学生为主，四年级学生可作为项目成员参与但不能作为项目负责人。</p>
                            </div>

                            <div class="col-md-4" style="backdround-color:">
                                <h2>项目申报具体要求</h2>
                                <p>1. 立项资助对象是品学兼优，学有余力，对科学研究、创造发明或创业实践具有浓厚兴趣，善于独立思考，有较强创新意识、科研精神和初步创业能力的学生。凡我校全日制本科生均可申请，原则上以一至三年级的学生为主，四年级学生可作为项目成员参与但不能作为项目负责人。</p>
                            </div>

                            <div class="col-md-4" style="backdround-color:">

                                <h2>项目申报具体要求</h2>
                                <p>1. 立项资助对象是品学兼优，学有余力，对科学研究、创造发明或创业实践具有浓厚兴趣，善于独立思考，有较强创新意识、科研精神和初步创业能力的学生。凡我校全日制本科生均可申请，原则上以一至三年级的学生为主，四年级学生可作为项目成员参与但不能作为项目负责人。</p>
                            </div>

                        </div>
                </div>
                <div id="intro5">
                         <div class="item-intro"   style="">
                            <h1 class="page-header"  >过程化管理<small >——introduce</small></h1>

                            <div class="col-md-4"   style="backdround-color:">
                                <h2>项目申报具体要求</h2>
                                <p>1. 立项资助对象是品学兼优，学有余力，对科学研究、创造发明或创业实践具有浓厚兴趣，善于独立思考，有较强创新意识、科研精神和初步创业能力的学生。凡我校全日制本科生均可申请，原则上以一至三年级的学生为主，四年级学生可作为项目成员参与但不能作为项目负责人。</p>
                            </div>

                            <div class="col-md-4" style="backdround-color:">
                                <h2>项目申报具体要求</h2>
                                <p>1. 立项资助对象是品学兼优，学有余力，对科学研究、创造发明或创业实践具有浓厚兴趣，善于独立思考，有较强创新意识、科研精神和初步创业能力的学生。凡我校全日制本科生均可申请，原则上以一至三年级的学生为主，四年级学生可作为项目成员参与但不能作为项目负责人。</p>
                            </div>

                            <div class="col-md-4" style="backdround-color:">

                                <h2>项目申报具体要求</h2>
                                <p>1. 立项资助对象是品学兼优，学有余力，对科学研究、创造发明或创业实践具有浓厚兴趣，善于独立思考，有较强创新意识、科研精神和初步创业能力的学生。凡我校全日制本科生均可申请，原则上以一至三年级的学生为主，四年级学生可作为项目成员参与但不能作为项目负责人。</p>
                            </div>

                        </div>
                </div>


           </div>
           <div class="col-md-2 third" style="height:1000px;">
                  
           
                <div class="collapse navbar-collapse  pull-right pull2 " id="bs-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="sscroll" href="#intro1">项目介绍</a>
                        </li>
                        <li><a class="sscroll" href="#intro2">基本信息</a></li>
                        <li><a class="sscroll" href="#intro3">项目内容</a></li>
                        <li><a class="sscroll" href="#intro4">如何申报</a></li>
                        <li><a class="sscroll" href="#intro5">过程化管理</a></li>
                    </ul>
                </div>
           </div>
            
     </div>
     <div class="container-fluid foot" style="backdround-color:black;height:300px;">
     </div>
 

   
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-1.7.2.min.js"></script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>
