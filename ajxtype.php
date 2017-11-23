<?php 
$type = $_GET["type"];
echo "
        <p class=\"content_title\">新秀</p>
        <div class=\"content_view\">
     ";

                require_once'config.php';
                mysqli_query($conn,"set names utf8");
                $query="SELECT * FROM als_signup WHERE `userlevel` ='0' ORDER BY rand() limit 6";
                $qu = mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($qu)){
                    if(strpos($row["workdirection"],$type))
        echo "     
            <div class=\"star\">
                 <div class=\"star_head\"> 
                    <a class=\"userhead\" href=\"#\"><img src=\"".$row["head_portrait"]."\"></a> 
                 </div> 
                 <div class=\"star_info\">
                  <span>".$row["username"]."</span>
                  <span>".$row["workdirection"]."</span>
                 </div>
                 <div class=\"ding\">
                    <p>".$row["advantages"]."</p>
                    <button class=\"btn move\"><a href=\"#login\" data-toggle=\"modal\" onclick=\"ajxpartner(".$row["id"].")\">了解更多</a></button>
                 </div>
            </div> ";

                }
echo "
 </div>
    <div class=\"container open\">
        <div class=\"modal\" id=\"login\" aria-hidden=\"flase\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content box\">
                    <div class=\"modal-header \">
                        <a href=\"#\" class=\"close\" data-dismiss=\"modal\">X</a>
                        <p>信息</p>
                    </div>
                    <div class=\"modal-body \">
                        <form class=\"form-horizontal\" method=\"post\" action=\"log_ht.php\" id=\"info\">
                          
                         
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class=\"content_next\">
            <p class=\"content_title\">全部</p>
             <div class=\"content_view\">";
                $query="SELECT * FROM als_signup  WHERE `userlevel` ='0'";
                $qu=mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($qu)){
                    if(strpos($row["workdirection"],$type))
                    echo "            
                    <div class=\"star_next\">
                         <div class=\"star_head1\"> 
                            <a href=\"#\"><img src=\"".$row["head_portrait"]."\"></a> 
                    </div> 
                    <div class=\"star_info1\">
                        <span>".$row["username"]."</span>
                        <span>".$row["workdirection"]."</span>
                    </div>
                    <div class=\"comment_1\">
                        <p>".$row["advantages"]."</p>
                         <button class=\"btn move1\"><a href=\"#login\" data-toggle=\"modal\"  onclick=\"ajxpartner(".$row["id"].")\">了解更多</a></button>
                    </div>
            </div>";
                }

                echo "</div>
                </div>";


 ?>