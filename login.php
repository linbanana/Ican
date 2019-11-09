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
   if(isset($_POST["rememberme"])&&($_POST["rememberme"]=="true")){
     setcookie("remUser", $_POST["username"], time()+365*24*60);
     setcookie("remPass", $_POST["passwd"], time()+365*24*60);
   }else{
     if(isset($_COOKIE["remUser"])){
      setcookie("remUser", $_POST["username"], time()-100);
      setcookie("remPass", $_POST["passwd"], time()-100);
    }
  }
        //若帳號等級為 member 則導向會員中心
  if($_SESSION["memberLevel"]=="member"){
   header("Location: member_center.php");
        //否則則導向管理中心
 }else{
   header("Location: member_admin.php");    
 }
}else{
  header("Location: login.php?errMsg=1");
}
}
?>
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

    <title>帳號登入</title>
</head>

<body class="text-center">
    <div class="loginpage">
        <div class="regbox">
        <img src="images/logo.png" id="logo" alt="會員系統">   
        <p>登入會員系統</p>
        <form name="form1" method="post" action="">
            <p>帳號：
                <input name="username" type="text" class="logintextbox" id="username" value="<?php if(isset($_COOKIE["remUser"]) && ($_COOKIE["remUser"]!="")) echo $_COOKIE["remUser"];?>">
            </p>
            <p>密碼：
                <input name="passwd" type="password" class="logintextbox" id="passwd" value="<?php if(isset($_COOKIE["remPass"]) && ($_COOKIE["remPass"]!="")) echo $_COOKIE["remPass"];?>">
            </p>
            <p style="margin-bottom: 0px;">
                <input name="rememberme" type="checkbox" id="rememberme" value="true">
            記住我的帳號密碼。</p>
            <?php if(isset($_GET["errMsg"]) && ($_GET["errMsg"]=="1")){?>
            <div class="errDiv"> 登入帳號或密碼錯誤！</div>
        <?php }?>
            <p align="center">
                <input class="btn loginbtn" type="submit" name="button" id="button" value="登入">
            </p>
        </form>
        <p align="center"><a href="admin_passmail.php">忘記密碼，補寄密碼信。</a></p>
        <hr size="1" />
        <h4>還沒有會員帳號?</p>
        <h4>註冊帳號免費又容易</p>
        <p align="right"><a href="member_join.php">馬上申請會員</a></p>
    </div>
</div>

<!-- footer -->
<div w3-include-html="layouts/footer.php"></div>
<!-- footer -->

</body>
