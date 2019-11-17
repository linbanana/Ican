<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("connMysql.php");
	$seldb = @mysqli_select_db($db_link, "ican");
	if (!$seldb) die("資料庫選擇失敗！");
	$sql_query = "SELECT * FROM scooterdata";
	$result = mysqli_query($db_link, $sql_query);	
	 for($i=0;$i<mysqli_num_rows($result);$i++){
       $rs=mysqli_fetch_assoc($result);
        echo "車型:".$rs['s_model']."<br>";
        echo "描述:".$rs['s_disc']."<br>";
		echo "價格:".$rs['s_price']."元<br>";
        if($rs['s_num']>0){
			 echo '可租借'."<br>";
		}  
        else {
			echo '已全數租出'."<br>";
		}
        echo "<hr />";
	 }
?>