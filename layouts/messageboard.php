<?php 
error_reporting(0);
session_start();
//判斷是否有登入
if(!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"]=="")){
   echo "<script>alert('尚未登入')</script>";
   header("Location: ../login.php");
  
}

require_once("../connMysql.php");  //呼叫connectMysql.php文件
date_default_timezone_set("Asia/Taipei"); //設定台灣時區
//接收數值
$guestname=$_POST['guestname'];    
$guestgender=$_POST['guestgender'];
$guestphone=$_POST['guestphone'];
$guestemail=$_POST['guestemail'];
$guestcontent=$_POST['guestcontent'];
$guesttime=date("Y:m:d H:i:s",time());
//如果guestname資料存在,再輸入資料,避免先輸入空白資料
if(isset($guestname)){
    //將資料輸入到MySQL資料表中
    $sql_query="INSERT INTO `message`(`guestID`, `guestname`, `guestgender`, `guestphone`, `guestemail`, `guestcontent`, `guesttime`) value('','$guestname','$guestgender','$guestphone','$guestemail','$guestcontent','$guesttime')";
   $db_link->query($sql_query);
}
if(isset($_POST["logout"]) && ($_POST["logout"]=="true")){
    unset($_SESSION["membername"]);
    header("Location: ../login.php");
  }

?>
<!DOCTYPE html>
<html>

<head>
    <!-- 環境建置 -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/ican.css" rel="stylesheet" />   
    <!-- 環境建置 -->
<title>留言板</title> 
<style>
.divboard{
    padding-top:50px;
}   
#tdcontent{   /*留言內容的td*/
    background-image: url(https://picsum.photos/900/500/?random=3 });
}
#boardcontent{  /*留言內容的div*/
   margin-top:100px; 
   margin-bottom:50px;
}
#guestcontent{  /*留言內容的框框*/
  /*調整大小*/ 
 width: 175px;
 height:100px;
}
#adminpagebutton{  /*看留言按鈕*/ 
    background-color: orange;
    width:200px;
    height:50px;
    border:0px;
}
#boardfooter{     /*留言板底部*/
    background-color: red;
}

</style>

</head>
<body>

<!--留言板-->
<div class="divboard">
<!--用table排版,用td分別放切好的圖片-->
<table align="center" cellpadding="0" cellspacing="0" id="boardtable">
    <!--放header圖-->
    <tr>
        <td> 
            <table align="left" border="0" cellpadding="0" cellspacing="0" width="700">
              <tr>         
                <td><img name="board_r1_c1" src="../images/messageboard/messagelogo.gif" width="465" height="36" border="0" alt=""></td>
                <!--要改的看留言按鈕-->
                <td><a href="admin/adminmessage.php"><img src="../images/messageboard/querymessage.png" alt="" name="adminpagebutton" width="200px" height:50px></a></td>               
              </tr>
            </table>
        </td>
    </tr>
    <!--放content圖,背景圖放在td裡面,div負責移動留言的框框-->
    <tr>
        <td id="tdcontent">
        <div id="boardcontent">
        <form id="form1" name="form1" method="POST" action="">     
        <table align="center">
            <tr>
                <td width="160" align="center">會員名稱</td>
                <td><input id="guestname" name="guestname" type="text"></td>
            </tr>

            <tr>
                <td width="160" align="center">會員性別</td>
                <td><input type="radio" name="guestgender" id="male" value="男">男<input type="radio" name="guestgender" id="female" value="女">女</td>
            </tr>

            <tr>
                <td width="160" align="center">　　電話</td>
                <td><input id="guestphone" name="guestphone" type="text"></td>
            </tr>

            <tr>
                <td width="160" align="center">　　信箱</td>
                <td><input id="guestemail" name="guestemail" type="text"></td>
            </tr>

            <tr>
                <td width="160" align="center">留言內容</td>
                <td><textarea name="guestcontent" id="guestcontent" cols="30" rows="10"></textarea></td>
            </tr>

            <tr>
                <td><input id="submit" name="submit" type="submit" value="送出資料" ></td>
                <td><input id="logout" name="logout" type="button" value="登出" onclick="location.href='member.php?logout=true'"></td>
            </tr>

        </table>
        </form>   
        </div>
        </td>
    </tr>
<!--放footer圖,圖直接丟下面-->
    <tr>
        <td id="boardfooter">
        <img src="" alt="">
        </td>
    </tr>



</table>
   

</div>   



</body>
<?php $db_link->close();?>
</html>