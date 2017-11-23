<?php 
session_start();
session_unset();
echo "<script type=\"text/javascript\">";
echo "location.href=\"login.php\"";
echo "</script>";
 ?>