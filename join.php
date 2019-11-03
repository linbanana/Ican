<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- 環境建置 -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/ican.css" rel="stylesheet" />
	<!-- 環境建置 -->
	<!-- w3 js -->
	<script src="Scripts/w3.js"></script>
	<!-- w3 js -->
	<title>ican</title>
</head>
<body>
	<header>
		<!--背景輪播Carousel-->
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="https://picsum.photos/900/500/?random=1" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="https://picsum.photos/900/500/?random=2" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="https://picsum.photos/900/500/?random=3" class="d-block w-100" alt="...">
				</div>
			</div>
		</div>
		<!--Logo跟選單-->

		<div class="header-menu">
			<div class="container">
				<div class="logo">
					<img src="images/logo.gif" alt="com.logo">
				</div>
				<div class="menu">
					<a href="#">最新消息</a>
					<a href="#">客房介紹</a>
					<a href="#">關於我們</a>
					<a href="#">聯絡我們</a>
					<a href="#">線上訂房</a>
					<a href="#">會員登入</a>
				</div>
			</div>
			<div class="toggle-btn" onclick="toggleSidebar()"><i class="fa fa-bars"></i></div>
		</div>

		<!--側邊選單Sidebar-->


		<div id="sidebar">
			<div class="logo">
				<img src="images/logo.gif" alt="com.logo">
			</div>
			<div class="closebtn" onclick="toggleSidebar()">
				<i class="fa fa-times" aria-hidden="true"></i>
			</div>

			<div class="side-nav">
				<a href="#">最新消息</a>
				<a href="#">客房介紹</a>
				<a href="#">關於我們</a>
				<a href="#">聯絡我們</a>
				<a href="#">線上訂房</a>
				<a href="#">會員登入</a>
			</div>
		</div>
	</header>

<div class="joincontent">
	<?php if(isset($_GET["loginStats"]) && ($_GET["loginStats"]=="1")){?>
<script language="javascript">
alert('會員新增成功\n請用申請的帳號密碼登入。');
window.location.href='index.php';		  
</script>
<?php }?>
<table width="780" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <td class="tdbline"><img src="images/mlogo.png" alt="會員系統" width="164" height="67"></td>
  </tr>
  <tr>
    <td class="tdbline"><table width="100%" border="0" cellspacing="0" cellpadding="10">
      <tr valign="top">
        <td class="tdrline"><form action="" method="POST" name="formJoin" id="formJoin" onSubmit="return checkForm();">
          <p class="title">加入會員</p>
		  <?php if(isset($_GET["errMsg"]) && ($_GET["errMsg"]=="1")){?>
          <div class="errDiv">帳號 <?php echo $_GET["username"];?> 已經有人使用！</div>
          <?php }?>
          <div class="dataDiv">
            <hr size="1" />
            <p class="heading">帳號資料</p>
            <p><strong>使用帳號</strong>：
            <input name="m_username" type="text" class="normalinput" id="m_username">
            <font color="#FF0000">*</font><br><span class="smalltext">請填入5~12個字元以內的小寫英文字母、數字、以及_ 符號。</span></p>
            <p><strong>使用密碼</strong>：
            <input name="m_passwd" type="password" class="normalinput" id="m_passwd">
            <font color="#FF0000">*</font><br><span class="smalltext">請填入5~10個字元以內的英文字母、數字、以及各種符號組合，</span></p>
            <p><strong>確認密碼</strong>：
            <input name="m_passwdrecheck" type="password" class="normalinput" id="m_passwdrecheck">
            <font color="#FF0000">*</font> <br><span class="smalltext">再輸入一次密碼</span></p>
            <hr size="1" />
            <p class="heading">個人資料</p>
            <p><strong>真實姓名</strong>：
            <input name="m_name" type="text" class="normalinput" id="m_name">
            <font color="#FF0000">*</font></p>
            <p><strong>性　　別</strong>：
            <input name="m_sex" type="radio" value="女" checked>女
            <input name="m_sex" type="radio" value="男">男
            <font color="#FF0000">*</font></p>
            <p><strong>生　　日</strong>：
            <input name="m_birthday" type="text" class="normalinput" id="m_birthday">
            <font color="#FF0000">*</font> <br>
            <span class="smalltext">為西元格式(YYYY-MM-DD)。</span></p>
            <p><strong>電子郵件</strong>：
            <input name="m_email" type="text" class="normalinput" id="m_email">
            <font color="#FF0000">*</font><br><span class="smalltext">請確定此電子郵件為可使用狀態，以方便未來系統使用，如補寄會員密碼信。</span></p>
            <p><strong>個人網頁</strong>：
            <input name="m_url" type="text" class="normalinput" id="m_url">
            <br><span class="smalltext">請以「http://」 為開頭。</span></p>
            <p><strong>電　　話</strong>：
            <input name="m_phone" type="text" class="normalinput" id="m_phone"></p>
            <p><strong>住　　址</strong>：
            <input name="m_address" type="text" class="normalinput" id="m_address" size="40"></p>
            <p> <font color="#FF0000">*</font> 表示為必填的欄位</p>
          </div>
          <hr size="1" />
          <p align="center">
            <input name="action" type="hidden" id="action" value="join">
            <input type="submit" name="Submit2" value="送出申請">
            <input type="reset" name="Submit3" value="重設資料">
            <input type="button" name="Submit" value="回上一頁" onClick="window.history.back();">
          </p>
        </form></td>
        <td width="200">
        <div class="boxtl"></div><div class="boxtr"></div>
        <div class="regbox">
          <p class="heading"><strong>填寫資料注意事項：</strong></p>
          <ol>
            <li> 請提供您本人正確、最新及完整的資料。 </li>
            <li> 在欄位後方出現「*」符號表示為必填的欄位。</li>
            <li>填寫時請您遵守各個欄位後方的補助說明。</li>
            <li>關於您的會員註冊以及其他特定資料，本系統不會向任何人出售或出借你所填寫的個人資料。</li>
            <li>在註冊成功後，除了「使用帳號」外您可以在會員專區內修改您所填寫的個人資料。</li>
          </ol>
          </div>
        <div class="boxbl"></div><div class="boxbr"></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" background="images/album_r2_c1.jpg" class="trademark">© 2016 eHappy Studio All Rights Reserved.</td>
  </tr>
</table>


</div>

<!-- Footer -->
<div w3-include-html="layouts/footer.php"></div>
<!-- Footer -->

<!-- 環境建置 -->
<script src="scripts/jquery-3.4.1.slim.min.js"></script>
<script src="scripts/popper.min.js"></script>
<script src="scripts/bootstrap.min.js"></script>
<script src="scripts/linbananaBlog.js"></script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d49835d5bd6ff90"></script>
<!-- 環境建置 -->
<!-- w3 js -->
<script>w3.includeHTML();</script>
<!-- w3 js -->
</body>
</html>