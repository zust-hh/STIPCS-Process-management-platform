<?php 
//页码传入
$page =$_GET["p"];
//取数据
$show_page=5;
require_once'config.php';
mysqli_query($conn,"set names utf8");
$sql="SELECT * FROM project WHERE `position`='1' AND isOpen = '1' ORDER BY `project`.`begin_time` DESC LIMIT ".(($page-1)*5).",5";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
	echo " <div class=\"manage-content-b-block\">
               <div class=\"block-img\"><img src=\"".$row["head_pic"]."\" alt=\"pic\"></div>
                    <div class=\"block-content\">";
                          echo "<div class=\"block-content-t\"><p>".$row["title"]."</p><span>已完成</span></div>";

       echo "<div class=\"block-content-c\"><span id=\"address\">XX大学</span><span><a href=\"#\">".$row["hostname"]."</a></span>&nbsp&nbsp<span><a href=\"#\">".$row["name1"]."</a></span>&nbsp&nbsp<span><a href=\"#\">".$row["name2"]."</a></span>&nbsp&nbsp<span><a href=\"#\">".$row["name3"]."</a></span>&nbsp&nbsp<span><a href=\"#\">".$row["name4"]."</a></span>&nbsp&nbsp<span><a href=\"#\">".$row["name5"]."</a></span></div>";   			
       	echo "<div class=\"block-content-b\"><p>".$row["easy_introduce"]."</p></div></div>
                </div>";
}
$total_sql="SELECT * FROM project WHERE position='1'";
$total_result=mysqli_num_rows(mysqli_query($conn,$total_sql));
$total=$total_result;//总条数
$total_pages=ceil($total/5);//总页数
$pageoffset=($show_page-1)/5;
$pagebanner="";
//初始化数据
$start=1;
$end=$total_pages;

if ($page>1){
	$pagebanner.="<li><a href='javascript:void(0)' onclick='ajx2(1)'>首页</a></li>";
	$pagebanner.="<li><a href='javascript:void(0)' onclick='ajx2(".($page-1).")'>上一页</a></li>";
}

if ($total_pages>$show_page) {
	if($page>$pageoffset+1){
		$pagebanner.="...";
	}
	if ($page>$pageoffset) {
		$start=$page-$pageoffset;
		$end=$total_pages>$page+$pageoffset?$page+$pageoffset:$total_pages;
	}else{
		$start=1;
		$end=$total_pages>$show_page?$show_page:$total_pages;
	}

	if ($page+$pageoffset>$total_pages) {
		$start=$start-($page+$pageoffset-$end);
	}
}
if ($total==0) {
	$start=0;
	$end=0;
}
echo "<div class=\"pagination\"><ul>";

for($i=$start;$i<=$end;$i++)
	{
		$pagebanner.="<li><a href='javascript:void(0)' onclick='ajx2(".$i.")'>".$i."</a></li>";
	}
if ($total_pages>$show_page&&$total_pages>$page+$pageoffset) {
		$pagebanner.="...";
}

if ($page<$total_pages) {
	$pagebanner.="<li><a href='javascript:void(0)' onclick='ajx2(".($page+1).")'>下一页</a></li>";
	$pagebanner.="<li><a href='javascript:void(0)' onclick='ajx2(".$total_pages.")'>尾页</a></li>";
}

$pagebanner.="<li><a href='javascript:void(0)'>共".$total_pages."页</a></li>";
if($start==0 && $end==0)
$pagebanner.="<li><a href='javascript:void(0)'>当前是第0页</a></li>";
else
$pagebanner.="<li><a href='javascript:void(0)'>当前是第".$page."页</a></li>";
$pagebanner.="</ul></div>";
 echo $pagebanner;
 ?>
