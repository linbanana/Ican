<?php
require("connMysql.php");

$ind=$_POST['ind'];//預計入住日期
$outda=$_POST['outda'];//退房日期
$new=$_POST['new'];//編號
$nme=$_POST['nme'];//訂單人人
$phon=$_POST['phon'];//電話
$selecttype=$_POST['selecttype'];//型
$selectmodel=$_POST['selectmodel'];//型
$alda=( strtotime($_POST['outda']) - strtotime($_POST['ind']) )/ (60*60*24);
$roomsql="SELECT `r_price` FROM `roomdata1` WHERE `r_type`='$selecttype' AND `r_model`='$selectmodel'";
$roomprice=$db_link->query($roomsql);
$rs=$roomprice->fetch_assoc();
$tato=$rs['r_price']*$alda;//訂單總額
$sql = "UPDATE `orderdata` 
        SET `o_name`='$nme',`o_phone`='$phon',`o_citime`='$ind',`o_cotime`='$outda',`o_day`='$alda',`o_total`='$tato',
        `r_id`=(SELECT `r_id` FROM `roomdata1` WHERE `r_type`='$selecttype' AND `r_model`='$selectmodel') 
        WHERE `o_num`='$new'";

$db_link->query($sql);
$db_link->close();
header( "location:selet.php");  //回index.php

?>