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
   
 
//mysqli_close($conn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>空房查詢</title>
<style type="text/css">
  body{
    text-align: center;
  }
.dai{
width: 700px;height: 300px;background-color: palegoldenrod;
position: absolute;     /*絕對位置*/
top: 50%;               /*從上面開始算，下推 50% (一半) 的位置*/
left: 50%;
margin-top: -150px;     /*高度的一半*/
margin-left: -350px;
}
</style>
</head>
<script type="text/javascript">
  function chk(){
    if(document.room.num.value==''){
      alert('訂單人不得空');
      document.room.num.focus();
      return false;
    }
    if(document.room.numbb.value==''){
      alert('沒有電話嗎?');
      document.room.numbb.focus();
      return false;
    }
    if(document.room.int.value==''){
      alert('入住時間要填喔');
      document.room.int.focus();
      return false;
    }

    if(document.room.alda.value==''){
      alert('幫我算一下總入住時間好嗎??');
      document.room.alda.focus();
      return false;
    }
    if(document.room.tato.value==''){
      alert('還有總金額喔');
      document.room.tato.focus();
      return false;
    }
    if(document.room.outda.value==''){
      alert('不想回家嗎?');
      document.room.outda.focus();
      return false;
    }
    return true;
  }
  </script>
<body>
<div class="dai">
         <form name="room" id="room" action="post.php" method="post" onsubmit="return chk();">
                <div style="text-align: center;">訂購</div><br>
                <div style="text-align: center;">訂單人<input type="text" id="num" name="num"></div><br>
                <div style="text-align: center;">訂單人電話<input type="text" id="numbb" name="numbb"></div><br>
                <div style="text-align: center;">預計入住日期 <input type="date" id="ind" name="ind"></div><br>
                <div style="text-align: center;">總訂購天數 <input type="text" id="alda" name="alda"></div><br>
                <div style="text-align: center;">訂單總額 <input type="text" id="tato" name="tato"></div><br>
                <div style="text-align: center;">退房日期 <input type="date" id="outda" name="outda"></div><br>
                <div style="text-align: center;">
                <input type="button" value="上一頁" onclick="history.back()">  
                <input type="submit" value="送出" onclick="return CheckFunc();">  
                </div>
                
                   
        </form>

</div>
</body>
</html>
