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
    <link rel="stylesheet" type="text/css" href="imagesbootstrap-theme.min.css">
    <link rel="stylesheet" href="css/dwf/study.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">  
    <link rel="stylesheet" type="text/css" href="css/head.css">
    <link rel="stylesheet" type="text/css" href="css/dwf/use.css">
    <link rel="stylesheet" type="text/css" href="css/dwf/tools.css">
    <style type="text/css">
        body
        {
            background:url(images/3.jpg ) ;
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
                            <h1 class="page-header" >前端<small>——introduce</small></h1>
                            <div class="col-md-4"   style="backdround-color:">
                                <ul class="thumbnails">
                                    <li> <a class="thumbnail" href="#"><img src="images/6.jpg"></a></li>

                                    <li> <a class="thumbnail" href="#"><img src="images/9.jpg"></a></li>
                                     
                                </ul>

                            </div>

                            <div class="col-md-4" style="backdround-color:">
                                <ul class="thumbnails">
                                    <li> <a class="thumbnail" href="#"><img src="images/6.jpg"></a></li>

                                    <li> <a class="thumbnail" href="#"><img src="images/9.jpg"></a></li>
                                     
                                </ul>
                            </div>

                            <div class="col-md-4" style="backdround-color:">
                                <ul class="thumbnails">
                                    <li> <a class="thumbnail" href="#"><img src="images/6.jpg"></a></li>

                                    <li> <a class="thumbnail" href="#"><img src="images/9.jpg"></a></li>
                                     
                                </ul>
                            </div>
                         </div>
                </div>
                <div id="intro2">         
                          <div class="item-intro" style="">
                             <h1 class="page-header"  >后台<small>——introduce</small></h1>

                            <div class="col-md-4"  style="backdround-color:">
                                <ul class="thumbnails">
                                    <li> <a class="thumbnail" href="#" rel="drevil"><img src="images/8.jpg"></a></li>
                                    <li><a class="thumbnail" href="#" rel="drevil"><img src="images/10.jpg"></a></li>
                                </ul>
                            </div>

                            <div class="col-md-4" style="backdround-color:">
                                 <ul class="thumbnails">
                                    <li> <a class="thumbnail" href="#" rel="drevil"><img src="images/8.jpg"></a></li>
                                    <li><a class="thumbnail" href="#" rel="drevil"><img src="images/10.jpg"></a></li>
                                </ul>
                            </div>

                            <div class="col-md-4" style="backdround-color:">
                                <ul class="thumbnails">
                                    <li> <a class="thumbnail" href="#" rel="drevil"><img src="images/8.jpg"></a></li>
                                    <li><a class="thumbnail" href="#" rel="drevil"><img src="images/10.jpg"></a></li>
                                </ul>
                            </div>
                          </div>
                </div>
                <div id="intro3">
                         <div class="item-intro"   style="">
                            <h1 class="page-header"  >UI设计<small >——introduce</small></h1>

                            <div class="col-md-4"   style="backdround-color:">
                              <ul class="thumbnails">
                                    <li> <a class="thumbnail" href="#"><img src="images/11.jpg"></a></li>
                                    <li><a class="thumbnail" href="#"><img src="images/12.jpg"></a></li>
                                </ul>
                            </div>

                            <div class="col-md-4" style="backdround-color:">
                                <ul class="thumbnails">
                                    <li> <a class="thumbnail" href="#"><img src="images/11.jpg"></a></li>
                                    <li><a class="thumbnail" href="#"><img src="images/12.jpg"></a></li>
                                </ul>
                            </div>

                            <div class="col-md-4" style="backdround-color:">
                                
                                <ul class="thumbnails">
                                    <li> <a class="thumbnail" href="#"><img src="images/11.jpg"></a></li>
                                    <li><a class="thumbnail" href="#"><img src="images/12.jpg"></a></li>
                                </ul>
                            </div>

                        </div>
                </div>

                <div id="intro5">
                         <div class="item-intro"   style="">
                            <h1 class="page-header"  >移动端开发<small >——introduce</small></h1>

                            <div class="col-md-4"   style="backdround-color:">
                                 <ul class="thumbnails">
                                    <li> <a class="thumbnail" href="#"><img src="images/7.jpg">
                                          <span>www.baidu.com
                                           
                                        </span></a></li>
                                    <li><a class="thumbnail" href="#"><img src="images/13.jpg">
                                          <span>www.baidu.com
                                           
                                        </span></a></li>
                                </ul>
                            </div>

                            <div class="col-md-4" style="backdround-color:">
                                 <ul class="thumbnails">
                                    <li> <a class="thumbnail" href="#"><img src="images/7.jpg"><span>www.baidu.com
                                           
                                        </span></a>

                                          </li>
                                    <li><a class="thumbnail" href="#"><img src="images/13.jpg"><span>www.baidu.com
                                           
                                        </span></a>
                                    
                                          </li>
                                </ul>
                            </div>

                            <div class="col-md-4" style="backdround-color:">
                                 <ul class="thumbnails">
                                    <li> 
                                        <a class="thumbnail" href="#"><img src="images/7.jpg">
                                          <span>www.baidu.com
                                           
                                        </span>

                                        </a>
                                    </li>
                                    <li>
                                        <a class="thumbnail" href="#">
                                            <img src="images/13.jpg">
                                            <span>www.baidu.com</span>
                                        </a>
                                    </li>
                                </ul>

                            </div>

                        </div>
                </div>


           </div>
           <div class="col-md-2 third" style="height:1000px;">
                  
           
                <div class="collapse navbar-collapse  pull-right pull2 " id="bs-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="sscroll" href="#intro1">前端</a>
                        </li>
                        <li><a class="sscroll" href="#intro2">后台</a></li>
                        <li><a class="sscroll" href="#intro3">UI设计</a></li>
                        <li><a class="sscroll" href="#intro5">移动端开发</a></li>
                    </ul>
                </div>
           </div>
            
     </div>
     <div class="container-fluid foot" >
     </div>
 

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
$(function(){
        $("[rel=drevil]").popover({
            trigger:'manual',
            placement : 'left', //placement of the popover. also can use top, bottom, left or right
            title : '<div style="text-align:center; color:red; text-decoration:underline; font-size:14px;"> www.baidu.com</div>', //this is the top title bar of the popover. add some basic css
            html: 'true', //needed to show html of course
            content : '<div id="popOverBox"><img src="images/7.jpg" width="220" height="150" /></div>', //this is the content of the html box. add the image here or anything you want really.
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
                            $(_this).popover("hide")
                        }
                    }, 100);
                });
    });

</script>
</body>
</html>
