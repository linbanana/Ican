<?php
session_start();
require("connMysql.php");
function showroom($roomimg,$roomname,$price,$people,$info){
    $hprice=$price*1.4;
    $fprice=$price*2.5;
  echo "<div class='card mb-3' style='margin-left: 20% ;margin-right:20%;'>".
          "<div class='row no-gutters' style='background-color:#FAD689;'>".
            "<div class='col-md-4' >
              <img src='$roomimg' class='card-img'>
            </div>".
            "<div class='col-md-8'>".
            "<div class='card-body'>".
            "<h5 class='card-title'>"."$roomname"."</h5>".
            "<p class='card-text'>房價資訊:平日：$price 假日：$hprice 定價：$fprice</p>".
            "<p class='card-text'>標準入住人數:$people 人</p>".
            "<p class='card-text'>詳細介紹:$info
              </p>".
            '<input type="button" value="訂下此房" id="btn" 
            onclick=location.href="post.php?ind=$ind&tato=$tato&outda=$outda&selectmodel='.$roomname.'">'.
            "</div>
            </div>
          </div>
        </div>";}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- 環境建置 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="\font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="\css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="\css/ican.css" rel="stylesheet" />
    <!-- 環境建置 -->
<title>空房查詢</title>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<style type="text/css">
  body{
    text-align: center;
  }
.dai{
width: 700px;height: 300px;background-color: palegoldenrod;
margin:0px auto;
margin-top:150px;
margin-bottom:50px;
}
#roomdiv{
  margin:10px auto;
   width:1000px; 
   height:280px;
}
#buttondiv{
  float:right; 
  width:170px;
   height:60px;  
   position:relative; 
   top:225px; 
   left:20px;
}

</style>
</head>
<script type="text/javascript">
  function chk(){
    if(document.room.int.value==''){
      alert('入住時間要填喔');
      document.room.int.focus();
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
         <form name="room" id="room" action="" method="GET" onsubmit="return chk();">
                <div style="text-align: center;"><h5>查詢空房</h5></div><br>
                <!--下拉式選單,選房型-->
                <div>
                  房型
                  <select name="selecttype" id="selecttype" >
                    <?php 
                      $selectroomtype=("SELECT DISTINCT `r_type` FROM `roomdata`");  //抓取r_type欄位
                      $roomtypelist=$db_link->query($selectroomtype);  //執行sql指令                       
                      for($i=0;$i<$roomtypelist->num_rows;$i++){
                      $rst=$roomtypelist->fetch_assoc();
                      echo "<option value=".$rst['r_type'].">".$rst['r_type']."</option>";
                      }
                    ?>
                </select>
                </div>
                <!--下拉式選單,選主題-->             
                <div style="text-align: center;">入住日期 <input type="date" id="ind" name="ind"></div><br>
                <div style="text-align: center;">退房日期 <input type="date" id="outda" name="outda"></div><br>
                <div style="text-align: center;">
                <input type="button" value="上一頁" onclick="history.back()">  
                <input type="submit" value="查詢" onclick="return CheckFunc();">  
                </div>                                  
        </form>
        </div>

        <div>
                 <?php 

                  if( isset($_GET["selecttype"]) ){  
                    $s= $_GET['selecttype'];
                    $in=$_GET['ind'];
                    $out=$_GET['outda'];
                    $searchroom="SELECT `r_model` FROM `roomdata` WHERE `r_id`
                     NOT IN (SELECT `r_id` FROM `orderdata` 
                     WHERE (`o_citime` >= '$in' AND `o_citime` <= '$out') or 
                           (`o_cotime` >= '$in' AND `o_cotime` <= '$out')) AND
                            `r_type`='$s'"; 
                    $roommodellist = $db_link->query($searchroom);  //用db_link物件執行sql語法
                  }  
                  
                  for($i=0;$i<$roommodellist->num_rows;$i++){
                    $rsm=$roommodellist->fetch_assoc();
                   // echo "<option value=".$rsm['r_model'].">".$rsm['r_model']."</option>";
                   if ($rsm['r_model']=="商務套房"){
                       showroom('images/room/business.jpg','商務套房','6000','4','平均16坪/ 53平方公尺/ 569平方英尺
                       獨立臥房內附有1張210厘米 x 200厘米雙人床或2張105厘米 x 200厘米單人床
                       獨立客廳內配有舒適沙發和坐墊
                       寬敞的乾濕分離浴室及歐舒丹沐浴用品
                       至多限加1床');
                  }
                  elseif ($rsm['r_model']=="總統套房") {
                       showroom('images/room/president.jpg','總統套房','7000','4','最奢華的客房，非凡的空間設計搭配高級訂製傢俱，
                       提供房客總統級的下榻禮遇以及頂級舒適的至高享受。 挑高五公尺的寬敞客廳與兩層樓高的全景落地窗，能將城市美景盡收眼底。');
                   }
                  elseif ($rsm['r_model']=="和式客房") {
                       showroom('images/room/jp-style.jpg','和式客房','2400','4','脫掉鞋，走上和式地板，
                       投入淨白床鋪的溫柔擁抱，讓靈魂沉潛，在純淨中甦醒過來。璞樹文旅中最簡約的房型，唯有一間。');
                    }
                  elseif ($rsm['r_model']=="豪華家庭房") {
                       showroom('images/room/luxury-family.jpg','豪華家庭房','2400','4','明亮、柔美的空間配置，
                       度假風情設計，盡享歡樂月眉假期，讓您闔家共用天倫之樂');
                    }
                  elseif ($rsm['r_model']=="經濟家庭房") {
                    showroom('images/room/parity-family.jpg','經濟家庭房','2000','4','包含房內的獨立浴室，免治馬桶。');
                    }
                  elseif ($rsm['r_model']=="海洋世界主題套房") {
                    showroom('images/room/Ocean.jpg','海洋世界主題套房','1500','1~2','房內風格採大海裡深層遨遊的感覺有在房間內彷彿置身海中的感覺');
                    }
                  elseif ($rsm['r_model']=="迪士尼主題套房") {
                    showroom('images/room/disney.jpg','迪士尼主題套房','1500','1~2','迪士尼電影繽紛多彩的世界將躍出銀幕成為客房的設計主題，為遊客的度假時刻揮灑無盡驚喜。');
                    }
                  elseif ($rsm['r_model']=="漫威主題套房") {
                    showroom('images/room/marvel.jpg','漫威主題套房','1500','1~2','以紐約風格打造，並利用多種藝術創作展現每一位漫威英雄的特色。');
                    }

                  } 

                  $time=(( strtotime($_GET['outda']) - strtotime($_GET['ind']) )/ (60*60*24)+1); //計算總天數  
                  $_SESSION["r_type"]=$_GET['selecttype'];
                  $_SESSION["ind"]=$_GET['ind'];
                  $_SESSION["alda"]=$time; 
                  $_SESSION["outda"]=$_GET['outda'];



                 ?>
       
</div>


</body>
</html>
