<?php
	header("Access-Control-Allow-Origin: *");
	session_start();
	if ($_GET["getID"] =="") {
		echo "";
	}else{
	require_once'config.php';
    mysqli_query($conn,"SET NAMES UTF8");
    $time = date("Y-m-d", time());
 	$getID = $_GET["getID"];
 	$sendID = $_SESSION["id_number"];
 	$sql = "SELECT * FROM message WHERE (getUI = '$getID' AND sendUI = '$sendID') OR ((sendUI = '$getID' AND getUI = '$sendID')) ";
 	$result = mysqli_query($conn,$sql);
 	while ($row = mysqli_fetch_array($result)) {
 		if ($row["sendUI"] == $sendID ) {
 			echo "
 			<div class=\"myP\">
                        <div class=\"myP-r\">
                            <img src=\"images/blue1.jpg\" alt=\"touxiang\">
                        </div>
                        <div class=\"myP-c\">
                            <div class=\"m-xingxi\">
                                ".$row["content"]."
                            </div>
                        </div>
                        <div class=\"myP-l\">
                            <div class=\"sxtime\">
                                <p class=\"T-time\"><span class=T-\"year\">".$row["createDate"]."</span></p>
                            </div>
                        </div>
                    </div>";
 		}else{
 			echo "
                   <div class=\"otherP\">
                        <div class=\"otherP-l\">
                            <img src=\"images/blue2.jpg\" alt=\"touxiang\">
                        </div>
                        <div class=\"otherP-c\">
                            <div class=\"o-xingxi\">
                                ".$row["content"]."
                            </div>
                        </div>
                        <div class=\"otherP-r\">
                            <div class=\"sxtime\">
                                <p class=\"T-time\"><span class=T-\"year\">".$row["createDate"]."</span></p>
                            </div>
                        </div>
                    </div>";
 		}
 	}
	}

 ?>