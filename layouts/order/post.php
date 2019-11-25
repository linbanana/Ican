<?php
//資料庫主機設定
  $db_host = "localhost";
  $db_username = "root";
  $db_password = "";
  $db_name = "ican";
  //連線資料庫
  $db_link = @new mysqli($db_host, $db_username, $db_password, $db_name);
  //錯誤處理
  if ($db_link->connect_error != "") {
    echo "資料庫連結失敗！";
  }else{
    //設定字元集與編碼
    $db_link->query("SET NAMES 'utf8'");
    echo "資料庫連結！";
  }
$num=$_POST['num'];
$numbb=$_POST['numbb'];
$ind=$_POST['ind'];
$alda=$_POST['alda'];
$tato=$_POST['tato'];
$outda=$_POST['outda'];
/*
echo $num;
echo $ind;
echo $alda;
echo $tato;
echo $outda;
*/
  
$sql = "INSERT INTO orderdata(r_id,o_phone,o_citime,o_day,o_total,o_cotime) VALUES ('$num','$numbb','$ind','$alda','$tato','$outda')";//新增資料

mysqli_query($db_link,$sql)or die ("無法新增".mysql_error()); //執行sql語法

//mysql_close($db_link); //關閉資料庫連結

header( "location:selet.php");  //回index.php

?>