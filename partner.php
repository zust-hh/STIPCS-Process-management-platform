<?php 
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>科技创新</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/reset.css">  
    <link rel="stylesheet" type="text/css" href="css/head.css">
    <link rel="stylesheet" type="text/css" href="css/dwf/partner_1.css">
    <link rel="stylesheet" type="text/css" href="css/dwf/stylepartner.css">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <script src="http://cdn.staticfile.org/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/owl.carousel.js"></script>
<script>
$(function(){
  $('#owl-demo').owlCarousel();
});
</script>
<style type="text/css">
  .modal-body ul li{
    height: 35px;
    margin-top: 10px;
  }
  .modal-body span {
    display: block;
    float: left;
    line-height: 35px;
  }
  .modal-body img {
    height: 100px;
    width: 100px;
    border-radius: 50px;
  }

</style>
</head>
<body>
     <?php require_once 'tou.php' ?>
    
   <!-- 最外层 !-->
   <div class="partner_big">
   <div class="xinxiu"><h1>新秀</h1><img src="images/magnify.png"></div>
    <!-- 右边内容块 !-->
    <div class="partner_up">
    <!-- <h1>新秀</h1> -->
           <div class="main">
              <div class="mianc">
                      <div id="owl-demo" class="owl-carousel">
                      	
                  <?php 
                      require_once'config.php';
                    mysqli_query($conn,"set names utf8");
                    $query="SELECT * FROM als_signup WHERE `userlevel` ='0' ORDER BY rand() limit 6";
                    $qu = mysqli_query($conn,$query);
                    while($row=mysqli_fetch_array($qu)){
                echo " <div class=\"item\">
                          <div class=\"img\" id=\"img\"><img src=\"".$row["head_portrait"]."\" class=\"image\">
                              <span>
                                <button onclick=\"guanzhu(".$row["id_number"].")\">关注</button>
                                <button>邀请加入</button>
                              </span>
                          </div>
                          <div class=\"intro\">
                            <table>
                               <tr>
                                 <th>姓名：</th>
                                 <td>".$row["username"]."</td>
                              </tr>
                              <tr>
                                  <th>学院：</th>
                                  <td>".$row["college"]."</td>
                              </tr>
                              <tr>
                                <th>班级：</th>
                                <td>".$row["className"]."</td>
                              </tr>
                              <tr>
                                <th>特长：</th>
                                <td> <blockquote>".$row["advantages"]."</blockquote></td>
                              </tr>
                             </table>
                          </div>
                        </div>";

                    }

                  ?> 
                       
                      
                      </div>
               </div>
            </div>

     <!--  <p id="demo"></p>  -->
    </div> 

    <div class="partner_center">
      <ul class="select">
        <li class="select-list">
            <dl id="select1">
                <dt>项目：</dt>
                <dd class="select-all selected"><a href="#">全部</a></dd>
                <dd class="qt"><a href="#">前台</a></dd>
                <dd class="ht"><a href="#">后台</a></dd>
                <dd class="ydd"><a href="#">移动端</a></dd>
                <dd class="sj"><a href="#">设计</a></dd>
               
            </dl>
        </li>
        <li class="select-list">
            <dl id="select2">
                <dd class="select-all selected"><a href="#">全部</a></dd>
                <dd class="one"><a href="#" onclick="ajxtype('CSS')">CSS</a></dd>
                <dd class="one"><a href="#" onclick="ajxtype('HTML')">HTML</a></dd>
                <dd class="one"><a href="#" onclick="ajxtype('CSS3')">CSS3</a></dd>
                <dd class="one"><a href="#" onclick="ajxtype('HTML5')">HTML5</a></dd>
                <dd class="one"><a href="#" onclick="ajxtype('JS')">JS</a></dd>
                <dd class="one"><a href="#" onclick="ajxtype('jQuery')">jQuery</a></dd>
                <dd class="two"><a href="#" onclick="ajxtype('JAVA')">JAVA</a></dd>
                <dd class="two"><a href="#" onclick="ajxtype('PHP')">PHP</a></dd>
                <dd class="two"><a href="#" onclick="ajxtype('C')">C</a></dd>
                <dd class="two"><a href="#" onclick="ajxtype('C++')">C++</a></dd>
                <dd class="two"><a href="#" onclick="ajxtype('C#')">C#</a></dd>
                <dd class="two"><a href="#" onclick="ajxtype('PYTHON')">PYTHON</a></dd>
                <dd class="three"><a href="#" onclick="ajxtype('IOS')">IOS</a></dd>
                <dd class="three"><a href="#" onclick="ajxtype('Android')">Android</a></dd>
                <dd class="three"><a href="#" onclick="ajxtype('webapp')">webapp</a></dd>
                <dd class="three"><a href="#" onclick="ajxtype('微信小程序')">微信小程序</a></dd>  
                <dd class="four"><a href="#" >UI设计</a></dd>
            </dl>
        </li>
       
        <li class="select-result">
            <dl>
                <dt>已选条件：</dt>
                <dd class="select-no">暂时没有选择过滤条件</dd>
            </dl>
        </li>
    </ul>
    </div>

   <div class="quanbu"><h1>全部</h1><img src="images/magnify.png"></div>
    <div class="partner_down">
    <?php 
 
                    $query="SELECT * FROM als_signup";
                    $qu = mysqli_query($conn,$query);
                    while($row=mysqli_fetch_array($qu)){
                      echo "
                      <div class=\"item_sma\">
								        <div class=\"userhead\"><a href=\"#showAll\" data-toggle=\"modal\"><img src=\"".$row["head_portrait"]."\"></a></div>
								        <div>
								          <p>".$row["username"]."</p>
								          <p>".$row["workdirection"]."</p> 
								           <p>".$row["advantages"]."</p>
								         </div>
								         <button onclick=\"guanzhu(".$row["id_number"].")\">关注</button>
								      </div>
                      ";
                    }

                   ?>
    </div>
</div>
<div id="showAll" class="modal fade" style="display: none;background: white;width: 500px;height: 500px;margin:13% auto;border-radius: 5px;">
      <div class="modal-header">
        <a class="close" data-dismiss="modal">×</a>
        <p>用户信息</p>
      </div>
      <div class="modal-body">
      <ul>
        <li style="height: 100px;">
        <span style="margin-right: 20px;font-family: '微软雅黑Light';font-weight: bolder;">头像：</span>
        <img src="image/tx1.jpg" style="float: left">
        
        </li>
        <li>
          <span style="margin-right: 20px;font-family: '微软雅黑Light';font-weight: bolder;">姓名：</span>
          <span>蔡靖楠</span>
        </li>
        <li>
          <span style="margin-right: 20px;font-family: '微软雅黑Light';font-weight: bolder;">学院：</span>
          <span>信息学院</span>
        </li>
        <li>
          <span style="margin-right: 20px;font-family: '微软雅黑Light';font-weight: bolder;">班级：</span>
          <span>软工151</span>
        </li>
        <li>
          <span style="margin-right: 20px;font-family: '微软雅黑Light';font-weight: bolder;">特长：</span>
          <span>后台开发</span>
        </li>
        <li>
          <span style="margin-right: 20px;font-family: '微软雅黑Light';font-weight: bolder;">项目完成率：</span>
          <span>1/1</span>
        </li>
        <li align="center">
          <button class="btn btn-success">关注该用户</button>
        </li>
      </ul>
      </div>
    </div>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script type="text/javascript">
    
   $("#img").hover(function(){
        var w=$(".image").width();
        var h=$(".image").height();
        $(this).find("span").css("display","block");
        $(this).find("span").width(w).height(h);
    })
   $("#img").mouseleave(function(){
        $(this).find("span").css("display","none");
    })  
</script>
<script type="text/javascript">

    function ajxtype(type){
     var request = new XMLHttpRequest();
        request.open("GET", "ajxtype.php?type=" + type +"&sid="+Math.random());
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                    document.getElementById("type").innerHTML = request.responseText;
                } else {
                    alert("发生错误：" + request.status);
                }
            }
        }

  }
	function guanzhu(id){
     var request = new XMLHttpRequest();
        request.open("GET", "guanzhu.php?id=" + id +"&sid="+Math.random());
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {            
                    alert(request.responseText);
                } else {
                    alert("发生错误：" + request.status);
                }
            }
        }

  }

</script>

</body>
</html>
