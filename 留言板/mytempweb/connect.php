<?php
//將帳號密碼存到外部php
$con=mysqli_connect("localhost","root","1234");  //連結伺服器及輸入使用者帳號密碼
mysqli_select_db($con,"guest"); //讀取資料庫
mysqli_query($con,"set names utf8"); //將資料設為utf8格式
?>