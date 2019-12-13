<?php
	//資料庫主機設定
	$db_host = "localhost";
	$db_username = "admin";
	$db_password = "admin";
	$db_name = "ican";
	//連線資料庫
	$db_link = @new mysqli($db_host, $db_username, $db_password, $db_name);
	//錯誤處理
	if ($db_link->connect_error != "") {
		echo "<font color='#FF0000'>資料庫連結失敗！</font>";
	}else{
		//設定字元集與編碼
		$db_link->query("SET NAMES 'utf8'");
	}
