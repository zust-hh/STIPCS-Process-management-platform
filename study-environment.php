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
  <script src="js/jquery-1.11.1.min.js"></script>  <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dwf/study.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/head.css">
    <link rel="stylesheet" type="text/css" href="css/dwf/use.css">
    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
body
{
    background:url(images/3.jpg );
}
blockquote
{
    background:#f9f9f9;
    border-left:10px solid #ccc;
    margin:1em 10px;
    padding:1.5em 10px;
    quotes:"\201C""\201D""\2018""\2019";
    line-height: 25px;
    display: block;
}
img
{
    width: 100%;

}
.thumbnails li img
{
 height: 200px;
}
#tea{
    margin: 0  15px;
}
   </style>

</head>
<body>
    <!--<div class="container-fluid navbar-fixed-top" >
        <div class="">
            <div class="nav nav-collapse">
                <div class="menu" style="width:100%">
                    <ul>
                        <li><a  class="logo" href="#"><img src="images/logo.png"></a></li>
                        <li><a href="javascript:void(0)"><span class="glyphicon glyphicon-folder-close"></span> 实践资料</a></li>
                        <li><a href="procedural.php"><span class="glyphicon glyphicon-list-alt"></span> 过程化管理</a></li>
                        <li><a href="partner.php"><span class="glyphicon glyphicon-search"></span> 队员招募</a></li>
                        <li><a href="show_index.html"><span class="glyphicon glyphicon-pencil"></span> 展示园地</a></li>            
                    </ul>

                    <ul class="pull-right pull1">
                        <li><a   href="#"><span class="glyphicon glyphicon-user"></span>  登录</a></li>
                        <li><a   href="#"><span class="glyphicon glyphicon-adjust"></span>  注册</a></li>   
                    </ul>  
                </div>
            </div> 
        </div>

                <div >       
                </div>
   </div>-->
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
                                 <li><a class="sscroll" href="study-tools.php">TOOLS</a>
                                    </li>
                                    <li><a class="sscroll" href="https://sourceforge.net/projects/orwelldevcpp/">C</a>
                                    </li>
                                    <li><a class="sscroll" href="www.eclipse.org">JAVA</a></li>
                                    <li><a class="sscroll" href="http://www.w3school.com.cn/">WEB</a></li>
                                    <li><a class="sscroll" href="http://www.imooc.com/course/landingpagephp?from=phpkecheng">UI</a></li>
                            </ul>
                        </div>
                    </section>

                        </nav>
           
        </div>
            <div class="col-md-8 col-md-offset-2 ">
                <div id="intro1">
                         <div class="item-intro"  style="">
                            <h1 class="page-header" >蓝色空间<small>——introduce</small></h1>
                            <div class="col-md-12">
                                <blockquote>蓝色空间是浙江科技学院安吉校区劲竹书院旗下的创新基地，位于劲竹书院229室，拥有浓厚的学习氛围，一流的硬件设备，雄厚的师资力量，是科技创新，技术交流的不二场所
                                </blockquote>   
                            </div>
                                 <div class="col-md-4">
                                    <img src="images/blue.jpg" style="height:280px">
                                </div>
                                
                                <div class="col-md-4">
                                    <img src="images/blue2.jpg" style="height:280px">
                                </div>
                          
                                <div class="col-md-4">
                                    <img src="images/blue1.jpg" style="height:280px">
                                </div>

                              
                    
                         </div>
                </div>
                <div id="intro2">         
                          <div class="item-intro" style="">
                             <h1 class="page-header"  >软工实验室<small>——introduce</small></h1>
                             <div class="col-md-12">
                                <blockquote>软工实验室是浙江科技学院的创新基地，拥有一流的设备与器材。
                                    是学习，交流，实践的绝好去处。
                                </blockquote>   
                            </div>
                                 <div class="col-md-4">
                                    <img src="images/rg4.jpg">
                                </div>
                                
                                <div class="col-md-4">
                                    <img src="images/rg5.jpg">
                                </div>
                          
                                <div class="col-md-4">
                                    <img src="images/rg6.jpg">
                                </div>

                         
                          </div>
                </div>
                <div id="intro3">
                         <div class="item-intro"   style="">
                            <h1 class="page-header"  >苹果机房<small >——introduce</small></h1>

                             <div class="col-md-12">
                               <blockquote>苹果机房是浙江科技学院的创新基地，拥有一流的设备与器材。舒适的环境，还有专业书籍免费借阅。是学习，交流，实践的绝好去处。
                                </blockquote>  
                            </div>

                                 <div class="col-md-4" style="height:280px;" >
                                    <img src="images/rg1.jpg" style="height:100%;">
                                </div>
                                
                                <div class="col-md-4">
                                    <img src="images/rg2.jpg">
                                </div>
                          
                                <div class="col-md-4">
                                    <img src="images/rg3.jpg">
                                </div>

                   

                        </div>
                </div>

                <div id="intro4">
                         <div class="item-intro"   style="">
                            <h1 class="page-header"  >计算机机房<small >——introduce</small></h1>
                            <div class="col-md-12">
                               <blockquote>苹果机房是浙江科技学院的创新基地，拥有一流的设备与器材。舒适的环境，还有专业书籍免费借阅。是学习，交流，实践的绝好去处。
                                </blockquote>  
                            </div>

                                 <div class="col-md-4">
                                    <img src="images/rg4.jpg">
                                </div>
                                
                                <div class="col-md-4">
                                    <img src="images/rg5.jpg">
                                </div>
                          
                                <div class="col-md-4">
                                    <img src="images/rg6.jpg">
                                </div>



                        </div>
                </div>
                <div id="intro5" style="height:700px">
                         <div class="item-intro"   style=""> 
                            <h1 class="page-header"  >师资力量<small >——introduce</small></h1>

                            <div class="col-md-12">
                                <blockquote>浙江科技学院在科技创新方面这块领域，拥有强大的师资力量。给予同学们一定的指导，教学，监督，完善。好好好好好好好好!好好好好好好好好!
                                </blockquote>   
                            </div>

                            <div class="col-md-2" id="tea">
                                 <ul class="thumbnails">
                                    <li> <a class="thumbnail" href="http://itee.zust.edu.cn/About/index/xid/5"><img src="images/tea2.jpg"></a></li>

                                    <li> <a class="thumbnail" href="http://itee.zust.edu.cn/About/index/xid/5"><img src="images/tea4.jpg"></a></li>


                                  
                                </ul>
                                
                               
                            </div>
                            <div class="col-md-2" id="tea">
                                 <ul class="thumbnails">
                                    <li> <a class="thumbnail" href="http://itee.zust.edu.cn/About/index/xid/5"><img src="images/tea1.jpg"></a></li>

                                    <li> <a class="thumbnail" href="http://itee.zust.edu.cn/About/index/xid/5"><img src="images/tea5.jpg"></a></li>

                                </ul>
                                
                               
                            </div>

                            <div class="col-md-2" id="tea">
                                 <ul class="thumbnails">
                                    <li> <a class="thumbnail" href="http://itee.zust.edu.cn/About/index/xid/5"><img src="images/tea7.jpg"></a></li>

                                    <li> <a class="thumbnail" href="http://itee.zust.edu.cn/About/index/xid/5"><img src="images/tea8.jpg"></a></li>


                                     
                                </ul>
                                
                               
                            </div>
                             <div class="col-md-2" id="tea">
                                 <ul class="thumbnails">
                                    <li> <a class="thumbnail" href="http://itee.zust.edu.cn/About/index/xid/5"><img src="images/tea6.jpg"></a></li>
                                    <li> <a class="thumbnail" href="http://itee.zust.edu.cn/About/index/xid/5"><img src="images/tea9.jpg"></a></li>                                  
                                </ul>             
                            </div>

                             <div class="col-md-2" id="tea">
                                 <ul class="thumbnails">
                                    <li> <a class="thumbnail" href="http://itee.zust.edu.cn/About/index/xid/5"><img src="images/tea3.jpg"></a></li>
                                    <li> <a class="thumbnail" href="http://itee.zust.edu.cn/About/index/xid/5"><img src="images/tea10.jpg"></a></li>
                                                                  
                                </ul>             
                            </div>


                            

                            

                        </div>
                </div>


           </div>
           <div class="col-md-2 third" style="height:1000px;">
                  
           
                <div class="collapse navbar-collapse  pull-right pull2 " id="bs-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="sscroll" href="#intro1">蓝色空间</a>
                        </li>
                        <li><a class="sscroll" href="#intro2">软工实验室</a></li>
                        <li><a class="sscroll" href="#intro3">苹果机房</a></li>
                        <li><a class="sscroll" href="#intro4">计算机机房</a></li>
                        <li><a class="sscroll" href="#intro5">师资力量</a></li>
                    </ul>
                </div>
           </div>
            
     </div>
     <div class="container-fluid foot" style="backdround-color:black;height:300px;">
     </div>
 



<script src="js/bootstrap.min.js"></script>

</body>
</html>
