<?php 
require_once'config.php';
mysqli_query($con,"set names 'utf8'");
$query="SELECT * FROM als_signup ORDER BY rand() limit 4";
$qu = mysqli_query($con,$query);
echo "<div class=\"container-fluid team\">
    <div class=\"container\">";
while ($ans = mysqli_fetch_array($qu)) {
	echo " <div class=\"col-md-3\">
            <a href=\"#\"><img src=\"".$ans["head_portrait"]."\"></a>
            <h2>".$ans["username"]."</h2>
            <p>".$ans["advantages"]."</p>
        </div>";
}
echo " </div></div>";
 ?>

<?php
/*echo "<div class=\"container-fluid team\">
    <div class=\"container\">
        <div class=\"col-md-3\">
            <a href=\"#\"><img src=\"images/pic1.jpg\" alt=\"\"></a>
            <h2>姓名</h2>
            <p>精通java，php</p>
        </div>
        <div class=\"col-md-3\">
            <a href=\"#\"><img src=\"images/pic1.jpg\" alt=\"\"></a>
            <h2>姓名</h2>
            <p>精通java，php</p>
        </div>
        <div class=\"col-md-3\">
            <a href=\"#\"><img src=\"images/pic1.jpg\" alt=\"\"></a>
            <h2>姓名</h2>
            <p>精通java，php</p>
        </div>
        <div class=\"col-md-3\">
            <a href=\"#\"><img src=\"images/pic1.jpg\" alt=\"\"></a>
            <h2>姓名</h2>
            <p>精通java，php</p>
        </div>
    </div>
</div>";*/
?>