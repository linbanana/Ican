<?php
require("connect.php");  //呼叫connect.php文件
$sql_query="select * from guest";  //將SQL指令設定在$sql_query
$result=mysqli_query($con,$sql_query);//從guest資料庫中選擇所有的資料表


 echo    "總共幾筆資料".mysqli_num_rows($result)."筆<br>";  //使用mysqli_num_rows顯示筆數

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adminpage</title>
</head>
<body>
   <?php    //列出所有資料


   for($i=0;$i<mysqli_num_rows($result);$i++){
    $rs=mysqli_fetch_assoc($result);
   
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
    
</body>
</html>