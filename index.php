<?php
require_once("connMysql.php");
session_start();
//檢查是否經過登入，若有登入則重新導向
if(isset($_SESSION["loginMember"]) && ($_SESSION["loginMember"]!="")){
    //若帳號等級為 member 則導向會員中心
    if($_SESSION["memberLevel"]=="member"){
        header("Location: member_center.php");
    //否則則導向管理中心
    }else{
        header("Location: member_admin.php");   
    }
}
//執行會員登入
if(isset($_POST["username"]) && isset($_POST["passwd"])){
    //繫結登入會員資料
    $query_RecLogin = "SELECT m_username, m_passwd, m_level FROM memberdata WHERE m_username=?";
    $stmt=$db_link->prepare($query_RecLogin);
    $stmt->bind_param("s", $_POST["username"]);
    $stmt->execute();
    //取出帳號密碼的值綁定結果
    $stmt->bind_result($username, $passwd, $level); 
    $stmt->fetch();
    $stmt->close();
    //比對密碼，若登入成功則呈現登入狀態
    if(password_verify($_POST["passwd"],$passwd)){
        //計算登入次數及更新登入時間
        $query_RecLoginUpdate = "UPDATE memberdata SET m_login=m_login+1, m_logintime=NOW() WHERE m_username=?";
        $stmt=$db_link->prepare($query_RecLoginUpdate);
   $stmt->bind_param("s", $username);
   $stmt->execute();    
   $stmt->close();
        //設定登入者的名稱及等級
   $_SESSION["loginMember"]=$username;
   $_SESSION["memberLevel"]=$level;
        //使用Cookie記錄登入資料
   /*if(isset($_POST["rememberme"])&&($_POST["rememberme"]=="true")){
     setcookie("remUser", $_POST["username"], time()+365*24*60);
     setcookie("remPass", $_POST["passwd"], time()+365*24*60);
   }else{
     if(isset($_COOKIE["remUser"])){
      setcookie("remUser", $_POST["username"], time()-100);
      setcookie("remPass", $_POST["passwd"], time()-100);
    }
  }*/
        //若帳號等級為 member 則導向會員中心
  if($_SESSION["memberLevel"]=="member"){
   header("Location: member_center.php");
        //否則則導向管理中心
 }else{
   header("Location: member_admin.php");    
 }
}else{
  header("Location: index.php?errMsg=1");

}
}
//session_destroy(); //session清除
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- 環境建置 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/ican.css" rel="stylesheet" />
    <!-- 環境建置 -->
    <!-- w3 js -->
    <script src="scripts/w3.js"></script>
    <!-- w3 js -->

    <title>ican~</title>
</head>




<!-- header -->
<div w3-include-html="layouts/header.php"></div>
<!-- header -->

<!-- content -->
<div w3-include-html="layouts/content.php"></div>
<!-- content -->

<!-- footer -->
<div w3-include-html="layouts/footer.php"></div>
<!-- footer -->


 <!-- 環境建置 -->
    <script src="script/jquery-3.4.1.slim.min.js"></script>
    <script src="script/popper.min.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="scrip</script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d49835d5bd6ff90"></script>-->    
    <!-- 環境建置 -->
    <!-- w3 js -->
    <script>w3.includeHTML();</script>
    <!-- w3 js -->
</body>
</html>