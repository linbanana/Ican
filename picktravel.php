<?php
session_start();
require("connMysql.php");  //呼叫connectMysql.php文件

if (!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"] == "")) {
    echo "<script>alert('請先登入');window.location.href = 'login.php';</script>";
  }
  
$sql="SELECT `orderdata`.*,`memberdata`.`m_name`, `roomdata`.`r_type`,`roomdata`.`r_model` 
      FROM `orderdata` LEFT JOIN `memberdata` ON `orderdata`.`m_id` = `memberdata`.`m_id` 
      LEFT JOIN `roomdata` ON `roomdata`.`r_id` = `orderdata`.`r_id` 
      WHERE `memberdata`.`m_username`= '{$_SESSION["loginMember"]}'";  //抓取會員的房間訂單
$roomdata=$db_link->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- 環境建置 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="\font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="\css/bootstrap.min.css" rel="stylesheet" />
    <link href="\css/ican.css" rel="stylesheet" />
    <script src="\scripts/jquery-3.4.1.min.js"></script>
    <!-- 環境建置 -->
    <title>Document</title>
</head>
<body>
    <?php
    include("layouts/header.php");

    echo "<div style='margin-left:8%;margin-right:8%;min-height:250px; margin-bottom:50px; margin-top:15px;'>";
    echo "<div style='margin-left: 45%;'><h4>選取行程</h4></div>";
    for($i=0;$i<$roomdata->num_rows;$i++){
        $result=$roomdata->fetch_assoc();
        
    
    echo '<table class="table-hover" width="100%" border="1" style="table-layout: fixed; word-wrap: break-word;" >
    <thead>
    <tr>
    <td>訂單編號</td>
    <td>姓名</td>
    <td>手機號碼</td>
    <td>入住的時間</td>
    <td>入住總天數</td>
    <td>訂單金額</td>
    <td>預計退房時間</td>
    <td>房號</td>
    <td>房間型態</td>
    <td>房間主題</td>
    <td colspan="2">行程規劃</td>
    </tr>
    </thead>';

    echo "<tr>";
 echo "<td>".$result['o_num']."</td>";
 echo "<td>".$result['m_name']."</td>";
 echo "<td>".$result['o_phone']."</td>";
 echo "<td>".$result['o_citime']."</td>";
 echo "<td>".$result['o_day']."</td>";
 echo "<td>".$result['o_total']."</td>";
 echo "<td>".$result['o_cotime']."</td>";
 echo "<td>".$result['r_id']."</td>";
 echo "<td>".$result['r_type']."</td>";
 echo "<td>".$result['r_model']."</td>";
 echo "<td>".'<input type="button" value="新增" id="btn" class="btn btn-outline-primary"
 onclick=location.href="travel.php?selectonum='.$result['o_num'].'">'."</td>";
 echo "<td>".'<input type="button" value="修改" class="btn btn-outline-info" id="btn"
 onclick=location.href="updtravel.php?selectonum='.$result['o_num'].'">'."</td>";
 echo "</tr>";
    }

echo '</table>';
        
echo "</div>";
    include("layouts/footer.php");
    ?>


</body>
</html>