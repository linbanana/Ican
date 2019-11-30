<?php
require("../../connMysql.php");  //呼叫connectMysql.php文件
$sql_query="select * from guest";  //將SQL指令設定在$sql_query
//$result=mysqli_query($con,$sql_query);//從guest資料庫中選擇所有的資料表
$result=$db_link->query($sql_query);//從guest資料庫中選擇所有的資料表

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- 環境建置 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href=".\../../font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href=".\../../css/bootstrap.min.css" rel="stylesheet" />
    <link href=".\../../css/ican.css" rel="stylesheet" />
    <!-- 環境建置 -->
    <title>Adminpage</title>
    <style>
    #backtoboard{
    border:0px;
    width:200px;
    height:50px;
    background-color: orange;
    }
    </style>
</head>
<body>

    <a href="messageboard.php"><input type="button" value="回留言頁" id="backtoboard"></a><br>

   <?php    //列出所有資料
   echo    "總共幾筆資料".$result->num_rows."筆<br>";  //使用num_rows顯示筆數
   for($i=0;$i<$result->num_rows;$i++){
    $rs=$result->fetch_assoc();
   
        echo "編號:".$rs['guestID']."<br>";
    
        echo "姓名:".$rs['guestname']."<br>";
     
        echo "性別:".$rs['guestgender']."<br>";
     
        echo "電話號碼:".$rs['guestphone']."<br>";
   
        echo "信箱:".$rs['guestmail']."<br>";
     
        echo "留言內容:".$rs['guestcontent']."<br>";
  
        echo "留言時間:".$rs['guesttime']."<br>";
        echo "<hr />";
   }

   
   ?>
    
    <!-- 環境建置 -->
    <script src=".\../../scripts/jquery-3.4.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src=".\../../scripts/umd/popper.min.js"></script>
    <script src=".\../../scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src=".\../../scripts/ican.js"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d49835d5bd6ff90"></script>
    <!-- 環境建置 -->
</body>
</html>