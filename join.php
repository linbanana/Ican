<?php
function GetSQLValueString($theValue, $theType) {
  switch ($theType) {
    case "string":
      $theValue = ($theValue != "") ? filter_var($theValue, FILTER_SANITIZE_MAGIC_QUOTES) : "";
      break;
    case "int":
      $theValue = ($theValue != "") ? filter_var($theValue, FILTER_SANITIZE_NUMBER_INT) : "";
      break;
    case "email":
      $theValue = ($theValue != "") ? filter_var($theValue, FILTER_VALIDATE_EMAIL) : "";
      break;          
  }
  return $theValue;
}

if(isset($_POST["action"])&&($_POST["action"]=="join")){
	require_once("connMysql.php");
	//找尋帳號是否已經註冊
	$query_RecFindUser = "SELECT m_username FROM memberdata WHERE m_username='{$_POST["m_username"]}'";
  $query_RecFindemail = "SELECT m_email FROM memberdata WHERE m_email='{$_POST["m_email"]}'";
	$RecFindUser=$db_link->query($query_RecFindUser);
  $RecFindemail=$db_link->query($query_RecFindemail);
	if ($RecFindUser->num_rows>0){    
    header("Location: join.php?errusernameMsg=1&username={$_POST["m_username"]}");
	}elseif ($RecFindemail->num_rows>0) {
    header("Location: join.php?erremailMsg=1&email={$_POST["m_email"]}");
  }elseif(empty($_POST["m_username"])){
    alert('請輸入帳號');
  }else{
  //若沒有執行新增的動作	
		$query_insert = "INSERT INTO memberdata (m_name, m_username, m_passwd, m_sex, m_birthday, m_email, m_phone, m_address, m_jointime) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())";
		$stmt = $db_link->prepare($query_insert);
		$stmt->bind_param("ssssssss", 
			GetSQLValueString($_POST["m_name"], 'string'),
			GetSQLValueString($_POST["m_username"], 'string'),
			password_hash($_POST["m_passwd"], PASSWORD_DEFAULT),
			GetSQLValueString($_POST["m_sex"], 'string'),
			GetSQLValueString($_POST["m_birthday"], 'string'),
			GetSQLValueString($_POST["m_email"], 'email'),
			GetSQLValueString($_POST["m_phone"], 'string'),
			GetSQLValueString($_POST["m_address"], 'string'));
		$stmt->execute();
		$stmt->close();
		$db_link->close();
		header("Location: join.php?loginStats=1");
	}
}

?>
<!DOCTYPE html>
<html lang="zh-tw">
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
	<script src="scripts/w3.js"></script>
	<!-- w3 js -->
	<title>ican</title>
</head>
<body>
  <script language="javascript">
    alert('1、請提供您本人正確、最新及完整的資料。\n\n2、 在欄位後方出現「*」符號表示為必填的欄位。\n\n3、填寫時請您遵守各個欄位後方的補助說明。\n\n4、關於您的會員註冊以及其他特定資料，本系統不會向任何人出售或出借你所填寫的個人資料。\n\n5、在註冊成功後，除了「使用帳號」外您可以在會員專區內修改您所填寫的個人資料。');     
    </script>
	<!-- header --> 
  	<div w3-include-html="layouts/header.php"></div>

<div class="joincontent">
    <h3 id="ican-logo">I Can</h3>
    <h4 id="hotel-logo">大飯店</h4>
		<?php if(isset($_GET["loginStats"]) && ($_GET["loginStats"]=="1")){?>
<script language="javascript">
alert('會員新增成功\n請用申請的帳號密碼登入。');
window.location.href='login.php';		  
</script>
<?php }?>
<table width="780" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <td class="tdbline">
      <img src="images/cute.png" id="cute"  title="忍法~影分身之術" width="164" height="67">
      <img src="images/mlogo.png" id="mlogo" alt="會員系統" width="164" height="67">
    </td>
  </tr>
  <tr>
    <td class="tdbline"><table width="100%" border="0" cellspacing="0" cellpadding="10">
      <tr valign="top">
        <td class="tdrline"><form action="" method="POST" name="formJoin" id="formJoin" onSubmit="return checkForm();">
          <p class="title">加入會員</p>		 
          <div class="dataDiv">
            <hr size="1" />
            <p class="heading">帳號資料</p>
            <p>
              <font color="#FF0000">*</font> 表示為<font color="#FF0000">必填</font>的欄位
            </p>
            <p><strong>使用帳號</strong>：
            <input name="m_username" type="text" class="normalinput" id="m_username">
            <font color="#FF0000">*              
              <?php 
                if(isset($_GET["errusernameMsg"]) && ($_GET["errusernameMsg"]=="1")){
              ?>
              帳號
              <?php 
                echo "<font color='#0000ff'>".$_GET["username"]."</font>";              
              ?>
              已經有人使用！
              <?php 
                }
              ?>
            </font><br><span class="smalltext">請填入5~12個字元以內的小寫英文字母、數字、以及_ 符號。</span></p>
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
            <font color="#FF0000">*
              <?php 
                if(isset($_GET["erremailMsg"]) && ($_GET["erremailMsg"]=="1")){
              ?>
              信箱 
              <?php 
                  echo "<font color='#0000ff'>".$_GET["email"]."</font>";
              ?> 
              已經有人使用！
              <?php 
                }
              ?>
            </font><br><span class="smalltext">請確定此電子郵件為可使用狀態，以方便未來系統使用，如補寄會員密碼信。</span></p>
            <p><strong>個人網頁</strong>：
            <input name="m_url" type="text" class="normalinput" id="m_url">
            <br><span class="smalltext">請以「http://」 為開頭。</span></p>
            <p><strong>電　　話</strong>：
            <input name="m_phone" type="text" class="normalinput" id="m_phone"></p>
            <p><strong>住　　址</strong>：
            <input name="m_address" type="text" class="normalinput" id="m_address" size="40"></p>            
          </div>
          <hr size="1" />
          <p align="center">
            <input name="action" type="hidden" id="action" value="join">
            <input class="btn btn-success btn-sm" type="submit" name="Submit2" value="送出申請" onclick="btclick()">
            <input class="btn btn-info btn-sm" type="reset" name="Submit3" value="重設資料">
            <input class="btn btn-primary btn-sm" type="button" name="Submit" value="回上一頁" onClick="window.history.back();">
          </p>
        </form></td>          
      </tr>
    </table>
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
    <script src="scripts/ican.js"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d49835d5bd6ff90"></script>
    <!-- 環境建置 -->
    <!-- w3 js -->
    <script>w3.includeHTML();</script>
    <!-- w3 js -->

    <script type="text/javascript">
function btclick(){
    if (!((document.getElementById("np").value).match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,30}$/))){
        alert( "your password : "+document.getElementById("np").value );
    }
}
</script>
</body>
</html>