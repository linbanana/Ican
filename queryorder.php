<?php
error_reporting(0);  //讓這個頁面不要跳出警告
require("connMysql.php"); //連結connMysql檔
session_start();

$sql = "SELECT `orderdata`.*, `memberdata`.`m_name`, `roomdata`.`r_type`, `roomdata`.`r_model` FROM `orderdata` 
        LEFT JOIN `memberdata` ON `orderdata`.`m_id` = `memberdata`.`m_id` 
        LEFT JOIN `roomdata` ON `orderdata`.`r_id` = `roomdata`.`r_id`
        ORDER BY `orderdata`.`o_citime` ASC";//在orderdata資料表中選擇所有欄位
$link=$db_link->query($sql);  //執行sql指令
/*刪除資料的部分*/
if(isset($_GET["action"]) && ($_GET["action"]=="delete")){  //如果get到action是delete的話,執行下方sql指令刪除資料
  $deletedata= "DELETE FROM `orderdata` WHERE `o_num`= '$_GET[o_num]' " ;  
  $db_link->query($deletedata);  //用db_link物件執行sql語法
  header("location:selet.php");  //回到此頁面
}
/*刪除資料的部分*/
?>
<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- 環境建置 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="\font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="\css/bootstrap.min.css" rel="stylesheet" />
    <link href="\css/ican.css" rel="stylesheet" />
    <script src="\scripts/jquery-3.4.1.min.js"></script>
    <!-- 環境建置 -->
    <title>ican</title>
</head>

<body>
<?php
    include("layouts/header.php");
   

echo '<table width="900" border="1">
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
<td colspan="2">功能</td>
</tr>';
for($i=0;$i<$link->num_rows;$i++){
$result=$link->fetch_assoc();
$o_num=$result['o_num'];
$m_name=$result['m_name'];
$o_phone=$result['o_phone'];
$o_citime=$result['o_citime'];
$o_day=$result['o_day'];
$o_total=$result['o_total'];
$o_cotime=$result['o_cotime'];
$r_type=$result['r_type'];
$r_model=$result['r_model'];

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
 echo "<td><a href='?action=delete&o_num=$result[o_num]'>刪除</a></td>";   //用get傳值到網址上
 echo "<td>"."<a href='upd.php?new=$o_num&nme=$m_name&phne=$o_phone&daaay=$o_citime&o_cotime=$o_cotime&o_total=$o_total&o_day=$o_day'>".修改."</a>"."</td>";   //用get傳值到網址上
 echo "</tr>";
}
?>
</table>
<p></p>
<input type="submit" value="新增" onclick="javascript:location.href='tesin.php'"/>

    <?php
    include("layouts/footer.php");
    ?>

    <!-- 環境建置 -->
    <script src="\scripts/umd/popper.min.js"></script>
    <script src="\scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="\scripts/ican.js"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d49835d5bd6ff90"></script>
    <!-- 環境建置 -->
</body>

</html>
