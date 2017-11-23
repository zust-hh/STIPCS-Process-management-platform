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
    <link rel="stylesheet" type="text/css" href="css/head.css">
    <link rel="stylesheet" type="text/css" href="css/dwf/partner.css">

</head>
<body>
     <?php require_once 'tou.php' ?>
    
   <!-- 最外层 !-->
   <div class="partner_big">
    <!-- 左边导航栏 !-->
    <div class="partner_right">
        <div class="partner_sort">
            <ul class="partner_sort_nav">
                <li><a href="" class="qianduan">前端</a>
                    <ul class="fold">
                        <li><a href="#" onclick="ajxtype('CSS')">CSS</a></li>
                       <li><a href="#" onclick="ajxtype('HTML')">HTML</a></li>
                       <li><a href="#" onclick="ajxtype('CSS3')">CSS3</a></li>
                       <li><a href="#" onclick="ajxtype('HTML5')">HTML5</a></li>
                       <li><a href="#" onclick="ajxtype('JS')">JS</a></li>
                       <li><a href="#" onclick="ajxtype('jQuery')">jQuery</a></li>
                    </ul>
                </li>
                <li><a href="" class="houtai">后台</a>
                    <ul class="fold">
                       <li><a href="#" onclick="ajxtype('JAVA')">JAVA</a></li>
                       <li><a href="#" onclick="ajxtype('PHP')">PHP</a></li>
                       <li><a href="#" onclick="ajxtype('C')">C</a></li>
                       <li><a href="#" onclick="ajxtype('C++')">C++</a></li>
                       <li><a href="#" onclick="ajxtype('C#')">C#</a></li>
                       <li><a href="#" onclick="ajxtype('PYTHON')">PYTHON</a></li>

                    </ul>
                </li>
                <li><a href="" class="yidong">移动端</a>
                    <ul class="fold">
                        <li><a href="#" onclick="ajxtype('IOS')">IOS</a></li>
                        <li><a href="#" onclick="ajxtype('Android')">Android</a></li>
                        <li><a href="#" onclick="ajxtype('webapp')">webapp</a></li>
                        <li><a href="#" onclick="ajxtype('微信小程序')">微信小程序</a></li>
                    </ul>
                </li>
                <li><a href="" class="sheji">设计</a>
                    <ul class="fold">
                        <li><a href="">UI设计</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
    <!-- 右边内容块 !-->
    <div class="partner_left">
      
        <div class="content">
            <h1 >新秀</h1>
            
                  <?php 
                      require_once'config.php';
                    mysqli_query($conn,"set names utf8");
                    $query="SELECT * FROM als_signup WHERE `userlevel` ='0' ORDER BY rand() limit 5";
                    $qu = mysqli_query($conn,$query);
                    while($row=mysqli_fetch_array($qu)){
                echo " 
                  <div class=\"content_view\">    
                  <div class=\"partner_star\">
                             <div class=\"star_head\"> 
                                <a class=\"userhead\" href=\"#\"><img src=\"".$row["head_portrait"]."\"></a> 
                             </div> 
                             <div class=\"star_info\">
                              <span>".$row["username"]."</span>
                              <span>".$row["workdirection"]."</span>
                             </div>
                             <div class=\"intro\">
                                <span id=\"test\">".$row["advantages"]."</span>
                                <button class=\"button move\">
                                <a href=\"#login\" data-toggle=\"modal\"  onclick=\"ajxpartner(".$row["id"].")\">了解更多</a>
                                </button>
                             </div>
                        </div> 
                          </div>";

                    }

                  ?> 
                
        </div>


        <div class="info">
            <div >
                <div class="modal-header ">
                        <a href="#" class="close" >X</a>
                        <p>信息</p>
                </div>
                <div class="modal-body ">
                        <form class="form-horizontal" method="post" action="log_ht.php" id="info">
                               
                        </form>
                </div>
            </div>
        </div>


         <div class="content_next">
            
            <h1>全部</h1>
            
                 <?php 
                    $query="SELECT * FROM als_signup";
                    $qu = mysqli_query($conn,$query);
                    while($row=mysqli_fetch_array($qu)){
                      echo "
                      <div class=\"content_view1\">            
                      <div class=\"partner_star1\">
                                 <div class=\"star_head1\"> 
                                    <a href=\"#\"><img src=\"".$row["head_portrait"]."\"></a> 
                                 </div> 
                              <div class=\"star_info1\">
                                  <span>".$row["username"]."</span>
                                  <span>".$row["workdirection"]."</span>
                              </div>
                              <div class=\"intro1\">
                                   <span id=\"test\">".$row["advantages"]."</p>
                                   <button class=\"button move1\">
                                   <a href=\"#login\" data-toggle=\"modal\"   onclick=\"ajxpartner(".$row["id"].")\">了解更多</a>
                                   </button>
                              </div>
                        </div>
                         </div>";
                    }

                   ?>
               
            
        </div>


      
   
    </div> 
</div>
    
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">

 window.onload = function () {  
            var Lis = document.getElementsByTagName("li");
            for (var i = 0; i < Lis.length; i++) {

                Lis[i].onmouseover = function () {
                    var u = this.getElementsByTagName("ul")[0];
                                       
                    if(u!=undefined){
                         var x = u.style.display;  
                       if(x!="block"){
                         u.style.display = "block";
                       }
                    }

                }
                Lis[i].onmouseout = function () {
                    var u = this.getElementsByTagName("ul")[0];
                   
                    if(u!=undefined){
                      var x = u.style.display; 
                       if(x!="none"){
                         u.style.display = "none";
                       }
                    }
               }
            }

     }
    $(".content_view").hover(function(){
        $(this).find(".star_info").css("display","none");
        $(this).find(".intro").css("display","block");
        // $(this).css("background-color","transparent");
    })
    $(".content_view").mouseleave(function(){
        $(this).find(".star_info").css("display","block");
        $(this).find(".intro").css("display","none");
        // $(this).css("background-color","transparent");
    })

    $(".content_view1").hover(function(){
        $(this).find(".star_info1").css("display","none");
        $(this).find(".intro1").css("display","block");
        // $(this).css("background-color","transparent");
    })
    $(".content_view1").mouseleave(function(){
        $(this).find(".star_info1").css("display","block");
        $(this).find(".intro1").css("display","none");
        // $(this).css("background-color","transparent");
    })





    $(".button").click(function(){
        $(".info").css("display","block");
        $(".partner_left").css("opacity","1");
    })
    $(".close").click(function(){
        $(".info").css("display","none");
        $(".partner_left").css("opacity","0.9");
    })
</script>

<script>
  function ajxpartner(id){
     var request = new XMLHttpRequest();
        request.open("GET", "ajxpartner.php?id=" + id +"&sid="+Math.random());
        request.send();
        request.onreadystatechange = function() {
            if (request.readyState===4) {
                if (request.status===200) {
                    document.getElementById("info").innerHTML = request.responseText;
                } else {
                    alert("发生错误：" + request.status);
                }
            }
        }

  }

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
