<?php
require_once("connMysql.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>空房查詢</title>
</head>
<script type="text/javascript">
  function chk(){
    if(document.room.rnum.value==''){
      alert('房型要填喔');
      document.room.rnum.focus();
      return false;
    }
    if(document.room.indat.value==''){
      alert('還沒想好哪天入住嗎?');
      document.room.indat.focus();
      return false;
    }
    if(document.room.outdat.value==''){
      alert('不想回家嗎?');
      document.room.outdat.focus();
      return false;
    }
    return true;
  }
  </script>
<body>

<div style="width: 700px;height: 300px;background-color: palegoldenrod;
position: absolute;     /*絕對位置*/
top: 50%;               /*從上面開始算，下推 50% (一半) 的位置*/
left: 50%;
margin-top: -150px;     /*高度的一半*/
margin-left: -350px;    /*寬度的一半*/
">


    <p style="text-align: center;"><font size="5">空房查詢</font></p>
        <form name="room" id="room" action="romres.php" method="post" onsubmit="return chk();">
                <p style="text-align: center;">房型查詢
                <!--房行查詢希望用下拉表單-->
                
                <select name="rnum" id="rnum">
                  <?php 
                  $sql ="select * from `rmodeldata`";
                  $result = mysqli_query($db_link, $sql);
                  if (mysqli_num_rows($result) > 0) {
                  // 输出数据
                  while($row = mysqli_fetch_assoc($result)) {
                  echo "<option value='Taipei'>" . $row["r_model"]. "</option><br>";
                                                            }
                  } else {
                  echo "0 结果";
                  }        ?>                                 
<!-- <option value="Taipei">台北</option>
<option value="Taoyuan">桃園</option>
<option value="Hsinchu">新竹</option>
<option value="Miaoli">苗栗</option>-->
　                </select>
                </p><br>
                <p style="text-align: center;">預計入住日期 <input type="date" id="indat" name="indat"></p><br>
                <p style="text-align: center;">預計退房日期 <input type="date" id="outdat" name="outdat"> 
                <input type="submit" value="送出" onclick="return CheckFunc();"/></p>  
                   
        </form>

</div>
</body>
</html>
