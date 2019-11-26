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
$selectmember="SELECT `m_username`,`m_sex`,`m_email`,`m_phone`,`m_level` FROM `memberdata` WHERE `m_username`= '{$_SESSION["loginMember"]}'";
$pick=$db_link->query($selectmember);
$messagemember=$pick->fetch_assoc();
//echo "會員名稱:".$messagemember['m_username']."<br>";
//echo "性別:".$messagemember['m_sex']."<br>";
//echo "信箱:".$messagemember['m_email']."<br>";
//echo "手機:".$messagemember['m_phone']."<br>";
//echo "會員等級:".$messagemember['m_level']."<br>";

//接收數值
$guestname=$messagemember['m_username'];    
$guestgender=$messagemember['m_sex'];
$guestphone=$messagemember['m_phone'];
$guestemail=$messagemember['m_email'];
$guestcontent=$_POST['guestcontent'];
$guesttime=date("Y:m:d H:i:s",time());
//如果guestname資料存在,再輸入資料,避免先輸入空白資料
if(isset($guestname)&& $guestcontent!=""){
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

#boardform{   /*form表單*/
    background-image: url(https://picsum.photos/900/500/);
    width:693px;
    height:300px;
    margin:0px auto;
}
#guestcontent{  /*留言內容的框框*/
  /*調整大小*/ 
 width: 200px;
 height:120px;
}
#adminpagebutton{  /*看留言按鈕*/ 
    background-color: orange;
    width:200px;
    height:50px;
    border:0px;
}
#boardcontent{  /*留言內容的div*/
   margin-top:100px; 
   margin-bottom:50px;
   margin:0px;
   height:400px;
}
#boardhead{
    width:693px;
    height:50px;
    margin:0px auto;
}
#boardheadL{
    float:left;
}
#boardheadR{
    float:right;
}

</style>

</head>
<body>

<!--留言板-->
<div class="divboard">
  <!--用div排版-->
    <div id="boardhead" >
        <div id="boardheadL">
            <img name="board_r1_c1" src="../images/messageboard/messagelogo.gif" width="493" height="50" border="0" alt="">
        </div>
        <div id="boardheadR">
            <a href="admin/adminmessage.php"><img src="../images/messageboard/querymessage.png" alt="" name="adminpagebutton"></a>
        </div>
    </div>

    <div id="boardcontent">
        <form id="boardform" name="form1" method="POST" action="">     
            <table align="center" width="700px">
                <tr>
                    <td width="275px" height="200" align="right">留言內容</td>
                    <td height="200px"><textarea name="guestcontent" id="guestcontent" cols="30" rows="10"></textarea></td>
                </tr>

                <tr>
                    <td height="70px" align="right"><input id="submit"  name="submit" type="submit" value="送出資料" ></td>
                    <td height="70px"  align="center"><a href="../member.php"><input id="logout" name="logout" type="button" value="回會員中心" ></a></td>
                </tr>
            </table>
        </form>   
    </div>
</div>   



</body>
<?php $db_link->close();?>
</html>