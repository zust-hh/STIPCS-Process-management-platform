<?php 
    session_start();

    /*
        最后要注释掉上面的传参只是测试用
        超链接未加

     */
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>阶段编辑</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/head.css">
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/pro-redact.css">
    <script src="js/WdatePicker.js"></script>
    <script src="js/pro-redact.js"></script>
</head>
<body>
<div class="container-fluid navbar-fixed-top" >
 <?php 
    require_once 'tou.php'; //未连超链接会报错
  ?>
</div>
<div class="redact">
    <form action="projectStepRW.php" method="post">
    <table class="table table-striped table-responsive" id="pro-table">
        <tbody id="pro-table-body">
        <tr>
            <th>阶段目标</th>
            <th>修改名称</th>
            <th>修改完成时间</th>
            <th>修改责任人</th>
            <th>删除该阶段</th>
        </tr>
<?php 
    require_once'config.php';
    mysqli_query($conn,"set names utf8");
    $sql = "SELECT * FROM project_step WHERE `project_id` ='".$_SESSION["iid"]."'";
    $result = mysqli_query($conn,$sql);
    $i = 0;
    while ($row = mysqli_fetch_array($result)) {

        echo "
            <tr>
                <td class=\"pro-gname\">".$row["step_content"]."</td>
                <td class=\"shadow\"><input type=\"text\" value=\"".$row["step_content"]."\" name=\"content".$i."\"></td>
                <td class=\"shadow\"><input type=\"text\" class=\"Wdate\" onfocus=\"WdatePicker({lang:'zh-cn'})\" value=\"".$row["operate_last_time"]."\" name=\"time".$i."\"></td>
                <td class=\"shadow\"><input type=\"text\" value=\"".$row["person_id"]."\" name=\"person_id".$i."\"></td>
                <td class=\"delete-btn\"><input type=\"button\" value=\"删除\" onclick=\"del(this)\"></td>
            </tr>
        ";
        $i++;
    }


 ?>
        </tbody>
    </table>
    <input type="submit" value="确认修改" class="save-revise">
    </form>
    <?php echo "<input type=\"submit\" value=\"添加新阶段\" class=\"add-stage\" id=\"hhsg\" onclick=\"addStage()\" style=\"width:100px\">"; 
    ?>
</div>
</body>

</html>