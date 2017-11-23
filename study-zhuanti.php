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
    <link rel="stylesheet" type="text/css" href="css/dwf/video.css">
    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
        body
        {
            background:url(images/4.jpg );
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
                            <h1 class="page-header" >专题讲座<small>——video</small></h1>
                            <figure id="video_player">
                              <div id="video_container">
                              <video controls poster="http://thenewcode.com/assets/images/vid-glacier.jpg">
                                <source src="http://thenewcode.com/assets/videos/glacier.mp4" type="video/mp4">
                                <source src="http://thenewcode.com/assets/videos/glacier.webm" type="video/webm">
                            </video>
                            </div>
                            <figcaption>
                              <a href="http://thenewcode.com/assets/videos/glacier.mp4" class="currentvid">
                                <img src="http://thenewcode.com/assets/images/vid-glacier.jpg" alt="Athabasca Glacier">
                              </a>
                              <a href="http://thenewcode.com/assets/videos/lake.mp4">
                                <img src="http://thenewcode.com/assets/images/vid-lake.jpg" alt="Athabasca Lake">
                              </a>
                              <a href="http://thenewcode.com/assets/videos/mountain.mp4">
                                <img src="http://thenewcode.com/assets/images/vid-mountain.jpg" alt="Mountain">
                              </a>
                            </figcaption>
                            </figure>  
                       </div>
                </div>
                <div id="intro2">         
                          <div class="item-intro" style="">
                             <h1 class="page-header"  >基本信息<small>——introduce</small></h1>
                                      <figure id="video_player">
                              <div id="video_container">
                              <video controls poster="http://thenewcode.com/assets/images/vid-glacier.jpg">
                                <source src="http://thenewcode.com/assets/videos/glacier.mp4" type="video/mp4">
                                <source src="http://thenewcode.com/assets/videos/glacier.webm" type="video/webm">
                            </video>
                            </div>
                            <figcaption>
                              <a href="http://thenewcode.com/assets/videos/glacier.mp4" class="currentvid">
                                <img src="http://thenewcode.com/assets/images/vid-glacier.jpg" alt="Athabasca Glacier">
                              </a>
                              <a href="http://thenewcode.com/assets/videos/lake.mp4">
                                <img src="http://thenewcode.com/assets/images/vid-lake.jpg" alt="Athabasca Lake">
                              </a>
                              <a href="http://thenewcode.com/assets/videos/mountain.mp4">
                                <img src="http://thenewcode.com/assets/images/vid-mountain.jpg" alt="Mountain">
                              </a>
                            </figcaption>
                            </figure>  
                          </div>
                </div>
                <div id="intro3">
                         <div class="item-intro"   style="">
                            <h1 class="page-header"  >项目内容<small >——introduce</small></h1>
                                  <figure id="video_player">
                              <div id="video_container">
                              <video controls poster="http://thenewcode.com/assets/images/vid-glacier.jpg">
                                <source src="http://thenewcode.com/assets/videos/glacier.mp4" type="video/mp4">
                                <source src="http://thenewcode.com/assets/videos/glacier.webm" type="video/webm">
                            </video>
                            </div>
                            <figcaption>
                              <a href="http://thenewcode.com/assets/videos/glacier.mp4" class="currentvid">
                                <img src="http://thenewcode.com/assets/images/vid-glacier.jpg" alt="Athabasca Glacier">
                              </a>
                              <a href="http://thenewcode.com/assets/videos/lake.mp4">
                                <img src="http://thenewcode.com/assets/images/vid-lake.jpg" alt="Athabasca Lake">
                              </a>
                              <a href="http://thenewcode.com/assets/videos/mountain.mp4">
                                <img src="http://thenewcode.com/assets/images/vid-mountain.jpg" alt="Mountain">
                              </a>
                            </figcaption>
                            </figure>  

                        </div>
                </div>

                <div id="intro4">
                         <div class="item-intro"  style="height:100%">
                            <h1 class="page-header" >如何申报<small>——introduce</small></h1>
                                     <figure id="video_player">
                              <div id="video_container">
                              <video controls poster="http://thenewcode.com/assets/images/vid-glacier.jpg">
                                <source src="http://thenewcode.com/assets/videos/glacier.mp4" type="video/mp4">
                                <source src="http://thenewcode.com/assets/videos/glacier.webm" type="video/webm">
                            </video>
                            </div>
                            <figcaption>
                              <a href="http://thenewcode.com/assets/videos/glacier.mp4" class="currentvid">
                                <img src="http://thenewcode.com/assets/images/vid-glacier.jpg" alt="Athabasca Glacier">
                              </a>
                              <a href="http://thenewcode.com/assets/videos/lake.mp4">
                                <img src="http://thenewcode.com/assets/images/vid-lake.jpg" alt="Athabasca Lake">
                              </a>
                              <a href="http://thenewcode.com/assets/videos/mountain.mp4">
                                <img src="http://thenewcode.com/assets/images/vid-mountain.jpg" alt="Mountain">
                              </a>
                            </figcaption>
                            </figure>  
                           

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
<script src="js/dwf/video.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
