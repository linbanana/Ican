<?php
session_start();
require("connMysql.php");
$selectmember="SELECT `m_name`,`m_phone` FROM `memberdata` WHERE `m_username`= '{$_SESSION["loginMember"]}'";  //從會員資料表選取登入會員
$pick=$db_link->query($selectmember); //執行SQL語法
$ordermember=$pick->fetch_assoc();
$num=$ordermember['m_name'];
$numbb=$ordermember['m_phone'];
$ind=$_SESSION["ind"];
$alda=$_SESSION["alda"];
$outda=$_SESSION["outda"];
$rtype=$_SESSION["r_type"];
$rmodel=$_GET['selectmodel'];

if( isset($_GET["selectmodel"]) ){
$searchroom="SELECT `r_id`,`r_price` FROM `roomdata` WHERE `r_type`='$rtype' AND `r_model`='$rmodel' ";
$searchresult=$db_link->query($searchroom);
$roommodel=$searchresult->fetch_assoc();
$tato=$alda*$roommodel['r_price'];
$_SESSION["rid"]=$roommodel['r_id'];
$sql = "INSERT INTO orderdata(o_num,o_name,o_phone,o_citime,o_day,o_total,o_cotime,r_id) VALUES ('','$num','$numbb','$ind','$alda','$tato','$outda','{$roommodel['r_id']}')";//新增資料
$db_link->query($sql);
//unset($_SESSION["ind"]);  //清空
//unset($_SESSION["alda"]);
unset($_SESSION["tato"]);
//unset($_SESSION["outda"]);
//unset($_SESSION["r_type"]);
}
$db_link->close();
header( "location:travel2.php");  //回index.php



?>