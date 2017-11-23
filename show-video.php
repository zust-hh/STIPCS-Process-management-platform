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
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="imagesbootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/head.css">
    <link rel="stylesheet" type="text/css" href="css/dwf/show-video.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/manage.js"></script>
    <script src="js/WdatePicker.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>  
    
</head>
<body>
    
    <?php         
        if(!isset($_SESSION["id_number"])){
            echo "    <div class=\"container-fluid navbar-fixed-top\" >
        <div class=\"\">
            <div class=\"nav nav-collapse\">
                <div class=\"menu\" style=\"width:100%\">
                    <ul>
                        <li><a  class=\"logo\" href=\"#\"><img src=\"images/6.jpg\"></a></li>
                        <li><a href=\"index.php\"><span class=\"glyphicon glyphicon-leaf\" ></span>   首页</a></li>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon-folder-close\"></span> 实践资料</a></li>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon-list-alt\"></span> 过程化管理</a></li>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon-search\"></span> 队员招募</a></li>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon-pencil\"></span> 展示园地</a></li>            
                    </ul>
                    <ul class=\"pull-right pull1\">
                        <li><a   href=\"#\"><span class=\"glyphicon glyphicon-user\"></span>  登录</a></li>
                        <li><a   href=\"#\"><span class=\"glyphicon glyphicon-adjust\"></span>  注册</a></li>   
                    </ul>  
                </div>
            </div> 
        </div>
    </div>";
        }
        else{
            require_once 'tou.php';
        }

     ?>
   <div class="video" style="height:1000px;">
            <div>
              <h2 class="block_title page-header" style="font-size: 3.5em;
    color: #ef6286;">视频专区</h2>                                     
            </div>
            <div>
 
                        <ul id="myTab" class="nav nav-tabs">
                           <li class="active"><a href="#web" data-toggle="tab">
                              网站</a></li>
                           <li><a href="#donghua" data-toggle="tab">动画</a></li>
                           <li class="dropdown">
                              <a href="#DV" tabindex="-1" data-toggle="tab">DV</a>
                              
                           </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                           <div class="tab-pane fade in active" id="web">
                             <div class="col-md-3 thumbnails">
                                  <a href="show-video-single.php"><img class="thumbnail" src="images/3.jpg"></a>
                                  <span class="active">作者：</span>
                                  <span>张三</span>
                                  <span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                  <span>时间：</span>
                                  <span>2016年5月12日</span>
                              </div>
                                <div class="col-md-3 thumbnails">
                                    <a href="show-video-single.php"><img class="thumbnail" src="images/3.jpg"></a>
                                    <p>过程化管理平台展示视频</p>
                                   <span class="active">作者：</span>
                                    <span>张三</span>
                                    <span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                    <span>时间：</span>
                                    <span>2016年5月12日</span>
                                </div>
                                <div class="col-md-3 thumbnails">
                                    <a href="show-video-single.php"><img class="thumbnail" src="images/3.jpg"></a>
                                   <span class="active">作者：</span>
                                    <span>张三</span>
                                    <span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                    <span>时间：</span>
                                    <span>2016年5月12日</span>
                                </div>
                              <div class="col-md-3 thumbnails">
                                    <a href="show-video-single.php"><img class="thumbnail" src="images/3.jpg"></a>
                                     <span class="active">作者：</span>
                                    <span>张三</span>
                                    <span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                    <span>时间：</span>
                                    <span>2016年5月12日</span>
                              </div>

                             <div class="col-md-3 thumbnails">
                                  <a href="show-video-single.php"><img class="thumbnail" src="images/3.jpg"></a>
                                  <span class="active">作者：</span>
                                  <span>张三</span>
                                  <span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                  <span>时间：</span>
                                  <span>2016年5月12日</span>
                              </div>
                                <div class="col-md-3 thumbnails">
                                    <a href="show-video-single.php"><img class="thumbnail" src="images/3.jpg"></a>
                                   <span class="active">作者：</span>
                                    <span>张三</span>
                                    <span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                    <span>时间：</span>
                                    <span>2016年5月12日</span>
                                </div>
                                <div class="col-md-3 thumbnails">
                                    <a href="show-video-single.php"><img class="thumbnail" src="images/3.jpg"></a>
                                   <span class="active">作者：</span>
                                    <span>张三</span>
                                    <span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                    <span>时间：</span>
                                    <span>2016年5月12日</span>
                                </div>
                              <div class="col-md-3 thumbnails">
                                    <a href="show-video-single.php"><img class="thumbnail" src="images/3.jpg"></a>
                                     <span class="active">作者：</span>
                                    <span>张三</span>
                                    <span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                    <span>时间：</span>
                                    <span>2016年5月12日</span>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="donghua">
                             <div class="col-md-3 thumbnails">
                             <a href="show-video-single.php"><img class="thumbnail"  src="images/3.jpg"></a>
                              <span class="active">作者：</span>
                              <span>张三</span>
                              <span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                              <span>时间：</span>
                              <span>2016年5月12日</span>
                           </div>
                               <div class="col-md-3 thumbnails">
                              <a href="show-video-single.php"><img class="thumbnail" src="images/3.jpg"></a>
                               <span class="active">作者：</span>
                              <span>张三</span>
                              <span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                              <span>时间：</span>
                              <span>2016年5月12日</span>
                            </div>

                                <div class="col-md-3 thumbnails">
                              <a href="show-video-single.php"><img class="thumbnail" src="images/3.jpg"></a>
                             <span class="active">作者：</span>
                              <span>张三</span>
                              <span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                              <span>时间：</span>
                              <span>2016年5月12日</span></div>
                              <div class="col-md-3 thumbnails">
                              <a href="show-video-single.php"><img class="thumbnail" src="images/3.jpg"></a>
                               <span class="active">作者：</span>
                              <span>张三</span>
                              <span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                              <span>时间：</span>
                              <span>2016年5月12日</span>

                              </div>

                           </div>
                           <div class="tab-pane fade" id="DV">
                            <div class="col-md-3 thumbnails">
                            <a href="show-video-single.php"><img class="thumbnail" src="images/3.jpg"></a>
                             <span class="active">作者：</span>
                              <span>张三</span>
                              <span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                              <span>时间：</span>
                              <span>2016年5月12日</span>

                          </div>
                              <div class="col-md-3 thumbnails">
                              <a href="show-video-single.php"><img class="thumbnail" src="images/3.jpg"></a>

                               <span class="active">作者：</span>
                              <span>张三</span>
                              <span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                              <span>时间：</span>
                              <span>2016年5月12日</span>
                            </div>

                              <div class="col-md-3 thumbnails">
                              <a href="show-video-single.php"><img class="thumbnail" src="images/3.jpg"></a>
                               <span class="active">作者：</span>
                              <span>张三</span>
                              <span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                              <span>时间：</span>
                              <span>2016年5月12日</span>
                              </div>
                              <div class="col-md-3 thumbnails">
                              <a href="show-video-single.php"><img class="thumbnail" src="images/3.jpg"></a>
                               <span class="active">作者：</span>
                              <span>张三</span>
                              <span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                              <span>时间：</span>
                              <span>2016年5月12日</span>
                              </div>
                             </div>
                           
                        </div>
                </div>
                </div>

  <div class="foot">
  </div>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>