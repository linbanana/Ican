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
        <div class="regbox"><?php if(isset($_GET["errMsg"]) && ($_GET["errMsg"]=="1")){?>
        <div class="errDiv"> 登入帳號或密碼錯誤！</div>
        <?php }?>
        <p class="heading">登入會員系統</p>
        <form name="form1" method="post" action="">
        <p>帳號：
            <input name="username" type="text" class="logintextbox" id="username" value="<?php if(isset($_COOKIE["remUser"]) && ($_COOKIE["remUser"]!="")) echo $_COOKIE["remUser"];?>">
        </p>
    			<p>密碼：
            <input name="passwd" type="password" class="logintextbox" id="passwd" value="<?php if(isset($_COOKIE["remPass"]) && ($_COOKIE["remPass"]!="")) echo $_COOKIE["remPass"];?>">
    			</p>
        <p>
            <input name="rememberme" type="checkbox" id="rememberme" value="true" checked>
        記住我的帳號密碼。</p>
    				<p align="center">
            <input type="submit" name="button" id="button" value="登入系統">
        </p>
    			</form>
        <p align="center"><a href="admin_passmail.php">忘記密碼，補寄密碼信。</a></p>
        <hr size="1" />
    			<p class="heading">還沒有會員帳號?</p>
        <p>註冊帳號免費又容易</p>
    				<p align="right"><a href="member_join.php">馬上申請會員</a></p>
    			</div>
    </div>

<!-- footer -->
<div w3-include-html="layouts/footer.php"></div>
<!-- footer -->

</body>
