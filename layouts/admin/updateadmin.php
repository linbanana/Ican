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
require_once("../../connMysql.php");
session_start();
//檢查是否經過登入
if(!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"]=="")){
	header("Location: login.php");
}
//檢查權限是否足夠
if($_SESSION["memberLevel"]=="member"){
	header("Location: member.php");
}
//執行登出動作
if(isset($_GET["logout"]) && ($_GET["logout"]=="true")){
	unset($_SESSION["loginMember"]);
	unset($_SESSION["memberLevel"]);
	header("Location: ../../index.php");
}

//檢查是否與原密碼相符
if(isset($_POST["m_username"]) && isset($_POST["m_passwd"])){
    //繫結登入會員資料
    $query_RecLogin = "SELECT m_username, m_passwd, m_level FROM memberdata WHERE m_username=?";
    $stmt=$db_link->prepare($query_RecLogin);
    $stmt->bind_param("s", $_POST["m_username"]);
    $stmt->execute();
    //取出帳號密碼的值綁定結果
    $stmt->bind_result($username, $passwd, $level); 
    $stmt->fetch();
    $stmt->close();
}else{
  header("&errMsg=1");
}

//執行更新動作
if(isset($_POST["action"])&&($_POST["action"]=="update")){	
	$query_update = "UPDATE memberdata SET m_passwd=?, m_name=?, m_sex=?, m_birthday=?, m_email=?, m_phone=?, m_address=? WHERE m_id=?";
	$stmt = $db_link->prepare($query_update);
	//檢查是否有修改密碼
	$mpass = $_POST["m_passwdo"];
	if(($_POST["m_newpasswd"]!="")&&($_POST["m_newpasswd"]==$_POST["m_passwdrecheck"])){
		$mpass = password_hash($_POST["m_newpasswd"], PASSWORD_DEFAULT);
	}
	$stmt->bind_param("sssssssi", 
		$mpass,
		GetSQLValueString($_POST["m_name"], 'string'),
		GetSQLValueString($_POST["m_sex"], 'string'),		
		GetSQLValueString($_POST["m_birthday"], 'string'),
		GetSQLValueString($_POST["m_email"], 'email'),
		GetSQLValueString($_POST["m_phone"], 'string'),
		GetSQLValueString($_POST["m_address"], 'string'),		
		GetSQLValueString($_POST["m_id"], 'int'));
	$stmt->execute();
	$stmt->close();
  //重新導向
  header("Location: ../../admin.php?loginStats=1");	
}
//選取管理員資料
$query_RecAdmin = "SELECT * FROM memberdata WHERE m_username='{$_SESSION["loginMember"]}'";
$RecAdmin = $db_link->query($query_RecAdmin);	
$row_RecAdmin=$RecAdmin->fetch_assoc();
//繫結選取會員資料
$query_RecMember = "SELECT * FROM memberdata WHERE m_id='{$_GET["id"]}'";
$RecMember = $db_link->query($query_RecMember);	
$row_RecMember=$RecMember->fetch_assoc();

//選取管理員資料
$query_RecAdmin = "SELECT m_id, m_name, m_logintime FROM memberdata WHERE m_username=?";
$stmt=$db_link->prepare($query_RecAdmin);
$stmt->bind_param("s", $_SESSION["loginMember"]);
$stmt->execute();
$stmt->bind_result($mid, $mname, $mlogintime);
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- 環境建置 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="../../font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="../../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../css/ican.css" rel="stylesheet" />
    <!-- 環境建置 -->
    <title>ican</title>
</head>

<body>

    <?php
    include("../header.php");
    ?>

    <?php
    include("../admin-fixed.php");
    ?>

    <?php 
      if(isset($_GET["loginStats"]) && ($_GET["loginStats"]=="1")){
    ?>
    <script language="javascript">
        alert('會員資料修改成功\n請用申請的帳號密碼登入。');
        window.location.href='login.php';     
    </script>
    <?php 
        }
    ?>

<div class="admincontent"> 
<table id="jointable" width="50%" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <td class="tdbline">
      <img src="../../images/cute.png" id="cute"  title="忍法~影分身之術" width="164" height="67">
      <img src="../../images/mlogo.gif" id="mlogo" alt="會員系統" width="164" height="67">
    </td>
  </tr>
  <tr>
    <td class="tdbline"><table width="100%" border="0" cellspacing="0" cellpadding="10">
      <tr valign="top">
        <td class="tdrline"><form action="" method="POST" name="formJoin" id="formJoin" onSubmit="return checkupdate();">
          <div class="dataDiv">
            <hr size="1" />
            <p class="heading">帳號資料</p>
            <p><strong>輸入帳號</strong>：<?php echo $row_RecMember["m_username"];?></p>
            <p><strong>輸入原密碼</strong> ：
            <input name="m_passwd" type="password" class="normalinput" id="m_passwdrecheck">
            <?php 
                if(isset($_GET["errMsg"]) && ($_GET["errMsg"]=="1")){
            ?>
                <span class="smalltext">123</span>
            <?php 
                }
            ?><br>
            </p>
            <p><strong>輸入新密碼</strong> ：
            <input name="m_newpasswd" type="password" class="normalinput" id="m_passwd">
            <input name="m_passwdo" type="hidden" id="m_passwdo" value="<?php echo $row_RecMember["m_passwd"];?>"></p>
            <p><strong>確認新密碼</strong> ：
            <input name="m_passwdrecheck" type="password" class="normalinput" id="m_passwdrecheck"><br>
            <span class="smalltext">若不修改密碼，請不要填寫。若要修改，請輸入密碼二次。</span></p>
            <hr size="1" />
            <p class="heading">個人資料</p>
            <p><strong>真實姓名</strong>：
            <input name="m_name" type="text" class="normalinput" id="m_name" value="<?php echo $row_RecMember["m_name"];?>">
            <font color="#FF0000">*</font> </p>
            <p><strong>性　　別</strong>：
            <input name="m_sex" type="radio" value="女" <?php if($row_RecMember["m_sex"]=="女") echo "checked";?>>女
            <input name="m_sex" type="radio" value="男" <?php if($row_RecMember["m_sex"]=="男") echo "checked";?>>男
            <font color="#FF0000">*</font></p>
            <p><strong>生　　日</strong>：
            <input name="m_birthday" type="date" class="normalinput" id="m_birthday" value="<?php echo $row_RecMember["m_birthday"];?>">
            <font color="#FF0000">*</font><br><span class="smalltext">為西元格式(YYYY-MM-DD)。 </span></p>
            <p><strong>電子郵件</strong>：
            <input name="m_email" type="text" class="normalinput" id="m_email" value="<?php echo $row_RecMember["m_email"];?>">
            <font color="#FF0000">*</font><br><span class="smalltext">請確定此電子郵件為可使用狀態，以方便未來系統使用，如補寄會員密碼信。</span></p>
            <p><strong>電　　話</strong>：
            <input name="m_phone" type="text" class="normalinput" id="m_phone" value="<?php echo $row_RecMember["m_phone"];?>">
            <font color="#FF0000">*
              <?php 
                if(isset($_GET["errphoneMsg"]) && ($_GET["errphoneMsg"]=="1")){
              ?>
              該電話 
              <?php 
                  echo "<font color='#0000ff'>".$_GET["phone"]."</font>";
              ?> 
              已經有人使用！
              <?php 
                }
              ?>
            </font><br>
            </p>
            <p><strong>住　　址</strong>：
            <input name="m_address" type="text" class="normalinput" id="m_address" value="<?php echo $row_RecMember["m_address"];?>" size="40"></p>
            <p><font color="#FF0000">*</font> 表示為必填的欄位</p>
          </div>
          <hr size="1" />
          <p align="center">
            <input name="m_id" type="hidden" id="m_id" value="<?php echo $row_RecMember["m_id"];?>">
            <input name="action" type="hidden" id="action" value="update">
            <input type="submit" name="Submit2" value="修改資料">
            <input type="reset" name="Submit3" value="重設資料">
            <input type="button" name="Submit" value="回上一頁" onClick="window.history.back();">
          </p>
        </form></td>
      </tr>
    </table></td>
  </tr>
  <tr>
  </tr>
</table>
</div>

    <?php
    include("../footer.php");
    ?>

    <!-- 環境建置 -->
    <script src="../../scripts/jquery-3.4.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../../scripts/umd/popper.min.js"></script>
    <script src="../../scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../scripts/ican.js"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d49835d5bd6ff90"></script>
    <!-- 環境建置 -->
</body>
</html>
<?php
	$db_link->close();
?>