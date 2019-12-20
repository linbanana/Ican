<?php
error_reporting(0);  //讓這個頁面不要跳出警告
require("connMysql.php"); //連結connMysql檔

////////////////////////////////////////////////////////////////////////////////////////////////此段是要引入會員資料要用姓名電話之類的


$selectmember = "SELECT `m_name`,`m_phone` FROM `memberdata` WHERE `m_username`= '{$_SESSION["loginMember"]}'"; //從會員表中取會員資料
$pick = $db_link->query($selectmember); //從會員表中取會員資料
$messagemember = $pick->fetch_assoc(); //從會員表中取會員資料
$guestname = $messagemember['m_name']; //會員資料轉值
$guestphone = $messagemember['m_phone']; //會員資料轉值


////////////////////////////////////////////////////////////////////////////////////////////////此段是要引入會員資料要用姓名電話之類的



/*抓取房型資料的部分*/
$selectroomtype = ("SELECT  DISTINCT `r_type` FROM `roomdata`");  //抓取r_type欄位
$roomtypelist = $db_link->query($selectroomtype);  //執行sql指令
$selectroommodel = ("SELECT `r_model` FROM `roomdata`");  //抓取r_model欄位
$roommodellist = $db_link->query($selectroommodel);  //執行sql指令
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
  <script type="text/javascript">
    $(document).ready(function() {
      $('#selecttype').change(function() {
        $.ajax({
          type: "POST", //傳送方式
          url: "active.php", //傳送目的地
          dataType: "text", //資料格式
          data: { //傳送資料
            select: $("#selecttype").val() //表單欄位 ID nickname
          },
          success: function(data) {
            if (data) { //如果後端回傳 json 資料有 nickname
              $("#selectmodel").html(data);
            } else { //否則讀取後端回傳 json 資料 errorMsg 顯示錯誤訊息
              $("#result").html('<font color="#ff0000">' + data.errorMsg + '</font>');
            }
          },
          error: function(jqXHR) {
            //$("#demo")[0].reset(); //重設 ID 為 demo 的 form (表單)
            $("#result").html('<font color="#ff0000">發生錯誤：' + jqXHR.status + '</font>');
          }
        })
      })
    });
  </script>
  <style type="text/css">
    body {
      text-align: center;
    }

    .dai {
      width: 700px;
      height: 400px;
      background-color: palegoldenrod;
      position: absolute;
      /*絕對位置*/
      top: 50%;
      /*從上面開始算，下推 50% (一半) 的位置*/
      left: 50%;
      margin-top: -150px;
      /*高度的一半*/
      margin-left: -350px;
    }
  </style>
</head>

<body>

    <?php
    include("layouts/header.php");
    ?>

  <div class="dai">
    <div style="text-align: center;">修改訂單</div><br>
    <form name="room" id="room" action="update.php" method="POST">
      <div style="text-align: center;">訂單編號 <input type="text" id="new" name="new" readonly value="<?php echo $_GET['new']; ?>"></div><br>
      <div style="text-align: center;">訂購人 <input type="text" id="nme" name="nme" readonly value="<?php echo $_GET['nme']; ?>"></div><br>
      <div style="text-align: center;">訂購人電話 <input type="text" id="phon" name="phon" readonly value="<?php echo $_GET['phne']; ?>"></div><br>
      <!--下拉式選單,選房型-->
      <select name="selecttype" id="selecttype">
      <option value="">請選擇房型</option>
        <?php
        for ($i = 0; $i < $roomtypelist->num_rows; $i++) {
          $rst = $roomtypelist->fetch_assoc();
          echo "<option value=" . $rst['r_type'] . ">" . $rst['r_type'] . "</option>";
        }
        ?>
      </select>
      <!--下拉式選單,選主題-->
      <select name="selectmodel" id="selectmodel">
        <option value="">請選擇</option>
      </select>
      <div style="text-align: center;">入住日期 <input type="date" id="ind" name="ind" value="<?php echo $_GET['daaay']; ?>"></div><br>
      <div style="text-align: center;">退房日期 <input type="date" id="outda" name="outda" value="<?php echo $_GET['o_cotime']; ?>"></div><br>
      <div style="text-align: center;">
        <input type="button" value="上一頁" onclick="history.back()">
        <input type="submit" value="送出">
      </div>


    </form>

  </div>

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