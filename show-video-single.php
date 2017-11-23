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
    <link rel="stylesheet" type="text/css" href="css/dwf/article.css">
    <script src="js/bootstrap.min.js"></script>

        

</head>
<body>
    
           <?php require_once 'tou.php'; ?>
           <div class="video" style="height:1000px;">
                    <div>
                      <h2 class="block_title page-header" style="font-size: 3.5em;
    color: #ef6286;">视频专区</h2>                   
                    </div>
                    <div class="container dwf-playvideo">
                          <embed  class="youku" src="http://player.youku.com/player.php/sid/XMzI2NTc4NTMy/v.swf"   type="application/x-shockwave-flash">
                           </embed>
                    </div> 
             </div>
            <div class="container">
                         <h2>作品简介</h2>
                         <p>作者：<span>张三</span></p>
                         <P>时间：<span>2016年8月8日</span></P>
                         <P>简介：</P>
                         <p>　eeeeeeeeeeeeeeeeeeeeeeeeee呃呃呃呃呃呃呃呃呃呃呃呃呃呃呃呃呃呃鹅鹅鹅鹅饿嗯嗯嗯嗯嗯嗯嗯嗯嗯呃呃呃呃呃呃呃呃呃呃呃呃呃呃呃呃呃呃鹅鹅鹅鹅鹅鹅饿嗯嗯嗯呃呃呃呃呃呃呃呃呃呃呃呃呃呃呃呃呃呃鹅鹅鹅鹅鹅鹅饿嗯嗯嗯呃呃呃呃呃呃呃呃呃呃呃呃呃呃呃呃呃呃鹅鹅鹅鹅鹅鹅饿恩恩
                         </p>    
            </div>
            <div class="container wonderful">
                <h2>精彩视频推荐</h2>
                <div class="col-md-3 thumbnails">
                                  <a href="show-video-single.php"><img class="thumbnail" src="images/3.jpg"></a>
                                  <span  >作者：</span>
                                  <span>张三</span>
                                  <span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                  <span>时间：</span>
                                  <span>2016年5月12日</span>
                              </div>
                                <div class="col-md-3 thumbnails">
                                    <a href="show-video-single.php"><img class="thumbnail" src="images/3.jpg"></a>
                                   <span  >作者：</span>
                                    <span>张三</span>
                                    <span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                    <span>时间：</span>
                                    <span>2016年5月12日</span>
                                </div>
                                <div class="col-md-3 thumbnails">
                                    <a href="show-video-single.php"><img class="thumbnail" src="images/3.jpg"></a>
                                   <span  >作者：</span>
                                    <span>张三</span>
                                    <span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                    <span>时间：</span>
                                    <span>2016年5月12日</span>
                                </div>
                                <div class="col-md-3 thumbnails">
                                  <a href="show-video-single.php"><img class="thumbnail" src="images/3.jpg"></a>
                                  <span  >作者：</span>
                                  <span>张三</span>
                                  <span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                  <span>时间：</span>
                                  <span>2016年5月12日</span>
                              </div>
                                
            </div>
            <div class="container"> <span class="pull-right" style="font-size:25px;font-family:"微软雅黑";"><a href="show-video.php" style="color:red;">返回上一级</a></span></div>
           
            <div class="container">
                  <div class="Main" id="Main">    
                    <h2 class="page-header" style="color:gray">我要评论 </h2>  
                         <div class="Input_Box">     
                           <textarea class="Input_text"></textarea>     
                           <div class="faceDiv"> </div>     
                           <div class="Input_Foot"> <a class="imgBtn" href="javascript:void(0);"></a><a class="postBtn">确定</a> </div>     
                         </div>     
                  </div> 
                <div id="intro" class="comment">
                    <h2 class="page-header" style="color:gray">评论区 </h2> 
                    <div class="comment-zone" >
                        <div class="col-md-1 user-head" style="">
                            <a   href="#" rel="drevil"><img src="images/8.jpg" class="img-circle" style="width:50px;height:50px;"></a>
                            <p>XXX</p>
                        </div>
                        <div class="col-md-10 comment-word">
                            <p>很棒。</p>
                        </div>

                            <div class="date">
                                <span>2016年</span>
                                <span>7月</span>
                                <span>29日</span>
                                <span>14:20</span>
                            </div>


                            <div class=" bottom">
                                <a href=""><span class="glyphicon glyphicon-heart-empty"></span> 赞</a>
                                <a href=""><span class="glyphicon glyphicon-remove"></span> 踩</a>
                                <a href="#Main"><span class="glyphicon glyphicon-comment"></span> 回复</a>
                            </div>

                    </div>  
                    <div class="comment-zone" >
                        <div class="col-md-1 user-head" style="">
                            <a   href="#" rel="drevil"><img src="images/10.jpg" class="img-circle" style="width:50px;height:50px;"></a>
                            <p>OOO</p>
                        </div>

                        <div class="col-md-10 comment-word">
                            <div>
                            <p>很棒。</p>
                            </div>

                            
                        </div>
                            <div class="date">
                                <span>2016年</span>
                                <span>7月</span>
                                <span>29日</span>
                                <span>14:20</span>
                            </div>

                            <div class=" bottom">
                                <a href=""><span class="glyphicon glyphicon-heart-empty"></span> 赞</a>
                                <a href=""><span class="glyphicon glyphicon-remove"></span> 踩</a>
                                <a href="#Main"><span class="glyphicon glyphicon-comment"></span> 回复</a>
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