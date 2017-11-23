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
    <link rel="stylesheet" type="text/css" href="css/dwf/paper.css">
    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
    body{
        font-weight: 400;
        color: black;

  background-color:#e0e9f0 ;
    }

    </style>
        

</head>
<body>
    
      <?php require_once 'tou.php'; ?>
   <div class="paper" style="height:1000px;">
    
    <div class="col-md-7 col-md-offset-2 " style="height:1000px;">
    

                        <table class="table table-hover">
                                    <div>
                                        <h2 class="block_title">论文</h2>
                                        <div class="dropdown ">
                                           <button type="button" class="btn dropdown-toggle" id="dropdownMenu1" 
                                              data-toggle="dropdown">
                                              排序：
                                              <span class="caret"></span>
                                           </button>
                                           <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                            <li role="presentation">
                                                 <a role="menuitem" tabindex="-1" href="#">默认</a>
                                              </li>
                                              <li role="presentation">
                                                 <a role="menuitem" tabindex="-1" href="#">按热度</a>
                                              </li>
                                              <li role="presentation">
                                                 <a role="menuitem" tabindex="-1" href="#">按时间</a>
                                              </li>
                                              
                                           </ul>
                                        </div>
                                      
                                    </div>
                           <thead>
                              <tr>
                                 <th>题名</th>
                                 <th>作者</th>
                                 <th>发表时间</th>
                                 <th>来源</th>
                                 <th>下载</th>
                                 <th>下载量</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr class="active">
                                <td>四部曲过程化管理</td>
                                 <td>陈璇</td>
                                 <td>2016年9月9日</td>
                                 <td>浙江科技学院</td>
                                 <td><a href="#">下载</a></td>
                                 <td>100</td>
                              </tr>
                              <tr class="success">
                                <td>四部曲过程化管理</td>
                                 <td>陈璇</td>
                                 <td>2016年9月9日</td>
                                 <td>浙江科技学院</td>
                                 <td><a href="#">下载</a></td>
                                 <td>100</td>
                              </tr>
                              <tr  class="warning">
                                <td>四部曲过程化管理</td>
                                 <td>陈璇</td>
                                 <td>2016年9月9日</td>
                                 <td>浙江科技学院</td>
                                 <td><a href="#">下载</a></td>
                                 <td>100</td>
                              </tr>
                              <tr  class="danger">
                                <td>四部曲过程化管理</td>
                                 <td>陈璇</td>
                                 <td>2016年9月9日</td>
                                 <td>浙江科技学院</td>
                                 <td><a href="#">下载</a></td>
                                 <td>100</td>
                              </tr>

                              <tr class="info">
                                <td>四部曲过程化管理</td>
                                 <td>陈璇</td>
                                 <td>2016年9月9日</td>
                                 <td>浙江科技学院</td>
                                 <td><a href="#">下载</a></td>
                                 <td>100</td>
                              </tr>
                              <tr class="primary">
                                <td>四部曲过程化管理</td>
                                 <td>陈璇</td>
                                 <td>2016年9月9日</td>
                                 <td>浙江科技学院</td>
                                 <td><a href="#">下载</a></td>
                                 <td>100</td>
                              </tr><tr class="active">
                                <td>四部曲过程化管理</td>
                                 <td>陈璇</td>
                                 <td>2016年9月9日</td>
                                 <td>浙江科技学院</td>
                                 <td><a href="#">下载</a></td>
                                 <td>100</td>
                              </tr>
                              <tr class="success">
                                <td>四部曲过程化管理</td>
                                 <td>陈璇</td>
                                 <td>2016年9月9日</td>
                                 <td>浙江科技学院</td>
                                 <td><a href="#">下载</a></td>
                                 <td>100</td>
                              </tr>
                              <tr  class="warning">
                                <td>四部曲过程化管理</td>
                                 <td>陈璇</td>
                                 <td>2016年9月9日</td>
                                 <td>浙江科技学院</td>
                                 <td><a href="#">下载</a></td>
                                 <td>100</td>
                              </tr>
                              <tr  class="danger">
                                <td>四部曲过程化管理</td>
                                 <td>陈璇</td>
                                 <td>2016年9月9日</td>
                                 <td>浙江科技学院</td>
                                 <td><a href="#">下载</a></td>
                                 <td>100</td>
                              </tr>

                              <tr class="info">
                                <td>四部曲过程化管理</td>
                                 <td>陈璇</td>
                                 <td>2016年9月9日</td>
                                 <td>浙江科技学院</td>
                                 <td><a href="#">下载</a></td>
                                 <td>100</td>
                              </tr>
                              <tr class="danger">
                                <td>四部曲过程化管理</td>
                                 <td>陈璇</td>
                                 <td>2016年9月9日</td>
                                 <td>浙江科技学院</td>
                                 <td><a href="#">下载</a></td>
                                 <td>100</td>
                              </tr>
                           </tbody>
                        </table>
<div class="pagin">
    
    <ul class="pagination pagination-lg ">
      <li><a href="#">&laquo;</a></li>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">&raquo;</a></li>
    </ul>
</div>
    </div>
<div class="col-md-2  right" style="height:1000px;">
      <div class="upload">
          <button type="button" class="btn btn-info btn-lg btn-block"><span class="glyphicon glyphicon-cloud-upload"></span>&nbsp&nbsp&nbsp&nbsp我要上传</button>
      </div>      
      <div class="hotpaper">
            <div class="panel panel-primary">
                 <div class="panel-heading ">
                    <h3 class="panel-title">
                       最热的论文
                    </h3>
                 </div>
                 <div class="panel-body">
                  <ul>
                    <li>四部曲过程化管理 <span class="pull-right"><a href="#">进入</a></span></li>
                    <li>四部曲过程化管理 <span class="pull-right"><a href="#">进入</a></span></li>
                    <li>四部曲过程化管理 <span class="pull-right"><a href="#">进入</a></span></li>
                    <li>四部曲过程化管理 <span class="pull-right"><a href="#">进入</a></span></li>
                    <li>四部曲过程化管理 <span class="pull-right"><a href="#">进入</a></span></li>
                    <li>四部曲过程化管理 <span class="pull-right"><a href="#">进入</a></span></li>
                    <li>四部曲过程化管理 <span class="pull-right"><a href="#">进入</a></span></li>
                    <li>四部曲过程化管理 <span class="pull-right"><a href="#">进入</a></span></li>
                    <li>四部曲过程化管理 <span class="pull-right"><a href="#">进入</a></span></li>
                    <li>四部曲过程化管理 <span class="pull-right"><a href="#">进入</a></span></li>
                  </ul>
                 </div>
            </div>
      </div>
      <div class="newpaper">
             <div class="panel panel-primary">
                 <div class="panel-heading">
                    <h3 class="panel-title">
                       最新的论文
                    </h3>
                 </div>
                 <div class="panel-body">
                  <ol >
                    <li>四部曲过程化管理 <span class="pull-right"><a href="#">进入</a></span></li>
                    <li>四部曲过程化管理 <span class="pull-right"><a href="#">进入</a></span></li>
                    <li>四部曲过程化管理 <span class="pull-right"><a href="#">进入</a></span></li>
                    <li>四部曲过程化管理 <span class="pull-right"><a href="#">进入</a></span></li>
                    <li>四部曲过程化管理 <span class="pull-right"><a href="#">进入</a></span></li>
                    <li>四部曲过程化管理 <span class="pull-right"><a href="#">进入</a></span></li>
                    <li>四部曲过程化管理 <span class="pull-right"><a href="#">进入</a></span></li>
                    <li>四部曲过程化管理 <span class="pull-right"><a href="#">进入</a></span></li>
                    <li>四部曲过程化管理 <span class="pull-right"><a href="#">进入</a></span></li>
                    <li>四部曲过程化管理 <span class="pull-right"><a href="#">进入</a></span></li>

                  </ol>
                 </div>
            </div>
      </div>
        

    </div>


   </div>
  
<div class=" foot" >
  
</div>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>