<?php
session_start();
$page = $_GET["page"];
	if ($page + 1 <= $_GET["ta"]) {
	$page = $page + 1;
	require_once'config.php';
    mysqli_query($conn,"SET NAMES UTF8");
    $sql = "SELECT distinct (sendUN),content,createDate,sendUI FROM message WHERE getUI = ".$_SESSION["id_number"]." group by sendUN ORDER by createDate desc LIMIT ".(($page-1)*3).",3";
    $re = mysqli_query($conn,$sql);
    $totlal = ceil(mysqli_num_rows($re)/3);
        while ($row = mysqli_fetch_array($re)) {
        echo "
        <div class=\"onesx Priletter\" onclick = affffk("."\"".$row["sendUN"]."\"".",".$row["sendUI"].")>
        <div class=\"onesx-l\">
        <div class=\"onesx-l-t\"><span>".$row["sendUN"]."</span></div>
        <div class=\"onesx-l-b\"><span>最近</span></div>
        </div>
        <div class=\"onesx-r\">
        <p>".$row["content"]."</p>
        </div>
        </div>
        ";
    }
    echo " <div class=\"sxfoot\"><a href=\"#\" id=\"previous\"><span class=\"glyphicon glyphicon-chevron-left\" onclick = afjj(".($page-1).",".$_SESSION["id_number"].",".$_GET["ta"].")></span></a><div id=\"y-num\"><span id=\"dqy\">1</span> / <span id=\"ally\">".$_GET["ta"]."</span></div><a href=\"#\" id=\"nexty\"><span class=\"glyphicon glyphicon-chevron-right\" onclick = afja(".($page-1).",".$_SESSION["id_number"].",".$_GET["ta"].")></span></a></div>
        </div>";
	}
	else{
    $page = 1;
    require_once'config.php';
    mysqli_query($conn,"SET NAMES UTF8");
    $sql = "SELECT distinct (sendUN),content,createDate,sendUI FROM message WHERE getUI = ".$_SESSION["id_number"]." group by sendUN ORDER by createDate desc LIMIT ".(($page-1)*3).",3";
    $re = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_array($re)) {
        echo "
        <div class=\"onesx Priletter\" onclick = affffk("."\"".$row["sendUN"]."\"".",".$row["sendUI"].")>
				<div class=\"onesx-l\">
        <div class=\"onesx-l-t\"><span>".$row["sendUN"]."</span></div>
        <div class=\"onesx-l-b\"><span>最近</span></div>
        </div>
        <div class=\"onesx-r\">
        <p>".$row["content"]."</p>
        </div>
        </div>
        ";
    }
    echo " <div class=\"sxfoot\"><a href=\"#\" id=\"previous\"><span class=\"glyphicon glyphicon-chevron-left\" onclick = afjj(".($page-1).",".$_SESSION["id_number"].",".$_GET["ta"].")></span></a><div id=\"y-num\"><span id=\"dqy\">1</span> / <span id=\"ally\">".$_GET["ta"]."</span></div><a href=\"#\" id=\"nexty\"><span class=\"glyphicon glyphicon-chevron-right\" onclick = afja(".($page-1).",".$_SESSION["id_number"].",".$_GET["ta"].")></span></a></div>
        </div>";
	}

 ?>
