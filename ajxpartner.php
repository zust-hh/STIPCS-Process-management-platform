<?php 
	$id = $_GET["id"];
	require_once'config.php';
	mysqli_query($conn,"set names utf8");
	$query="SELECT * FROM als_signup WhERE `id` = '$id'";
	$qu = mysqli_query($conn,$query);
	$row=mysqli_fetch_array($qu);
	echo "            
	     <div class=\"user_head\">           
         <div class=\"body_head\">
               <a href=\"#\"><img src=\"".$row["head_portrait"]."\"></a>
         </div>
         <div class=\"body_button\">
                                     <button type=\"button\" class=\"user_btn\" onclick=\"guanzhu(".$row["id_number"].")\">关注</button>
                                     <button type=\"button\" class=\"user_btn\">邀请加入</button>
         </div>  
         </div>  
   <div class=\"user_intro\">
    <table>
        <tr>
          <th>姓名</th><td>".$row['username']."</td>
        </tr>
        <tr>
           <th>学院</th><td>".$row['college']."</td>
        </tr>

        <tr>
           <th>特长</th><td><blockquote>".$row['advantages']."</blockquote></td>
        </tr>
      </table>
  </div>
                                
        ";	

 ?>

