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
$link=mysqli_connect("localhost","root","") or die ("無法開啟Mysql資料庫連結"); //建立mysql資料庫連結
mysqli_select_db($link, "ican"); //選擇資料庫abc
$sql = "SELECT * FROM orderdata"; //在orderdata資料表中選擇所有欄位
mysqli_query($link, "SET CHARACTER SET utf8"); // 送出Big5編碼的MySQL指令
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>

<?php
$result = mysqli_query($link,$sql); // 執行SQL查詢
//var_dump($result);
echo '<table width="700" border="1">
<tr>
<td>訂單編號</td>
<td>姓名</td>
<td>手機號碼</td>
<td>入住的時間</td>
<td>入住總天數</td>
<td>訂單金額</td>
<td>預計退房時間</td>
<td>功能</td>
</tr>';

if ($stmt = $link->query($sql)) 
{
  while ($result = mysqli_fetch_object($stmt)) {
     echo 
     '<td>'.$result->o_num.'</td>
      <td>'.$result->r_id.'</td>
      <td>'.$result->o_phone.'</td>
      <td>'.$result->o_citime.'</td>
      <td>'.$result->o_day.'</td>
      <td>'.$result->o_total.'</td>
      <td>'.$result->o_cotime.'</td>
      <td><input type="submit" value="刪除" onclick=""/></td>
      </tr>';
  }
}
//$row = mysqli_fetch_assoc($result); //將陣列以欄位名索引
//$row = mysqli_fetch_row($result); //將陣列以數字排列索引
//$total_fields=mysqli_num_fields($result); // 取得欄位數
//$total_records=mysqli_num_rows($result);  // 取得記錄數
?>

</table>

<p></p>
<input type="submit" value="新增" onclick="javascript:location.href='tesin.php'"/>
</body>
</html>
