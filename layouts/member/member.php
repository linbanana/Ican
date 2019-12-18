<?php
require_once("../../connMysql.php");
session_start();
//檢查是否經過登入
if (!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"] == "")) {
  echo "<script>alert('請先登入');window.location.href = '../../login.php';</script>";
}
//執行登出動作
if(isset($_GET["logout"]) && ($_GET["logout"]=="true")){
  unset($_SESSION["loginMember"]);
  unset($_SESSION["memberLevel"]);
  header("Location:index.php");
}
//繫結登入會員資料
$query_RecMember = "SELECT * FROM memberdata WHERE m_username = '{$_SESSION["loginMember"]}'";
$RecMember = $db_link->query($query_RecMember);
$row_RecMember=$RecMember->fetch_assoc();
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
    <script language="javascript">
    function deletesure(){
        if (confirm('\n您確定要刪除這個會員嗎?\n刪除後無法恢復!\n')) return true;
        return false;
    }
    </script>
</head>
<body>

    <?php
    include("../../layouts/header.php");
    ?>

    <?php
    include("member-fixed.php");
    ?>

    <div class="membercontent">
      <table width="530" border="0" align="center" cellpadding="4" cellspacing="0" id="memberdata">
        <tr>
          <td class="tdbline">
            <img src="https://github.com/linbanana/ican/blob/master/images/logo.png?raw=true" height="67">
            <img src="\images/mlogo.gif" id="mlogo" alt="會員系統" width="164" height="67">
          </td>
        </tr>
        <tr>
          <td class="tdbline">
            <table width="100%" border="0" cellspacing="0" cellpadding="10">
              <tr valign="top">
                <td class="tdrline">
                  <p class="heading"> 本會員系統擁有以下的功能：</p>
                  <ol>
                    <li>免費加入會員 。</li>
                    <li>每個會員可修改本身資料。</li>
                    <li>若是遺忘密碼，會員可由系統發出電子信函通知。</li>
                    <li>管理者可以修改、刪除會員的資料。</li>
                  </ol>
                  <p class="heading">請各位會員遵守以下規則： </p>
                  <ol>
                    <li> 遵守政府的各項有關法律法規。</li>
                    <li> 不得在發佈任何色情非法， 以及危害國家安全的言論。</li>
                    <li>嚴禁連結有關政治， 色情， 宗教， 迷信等違法訊息。</li>
                    <li> 承擔一切因您的行為而直接或間接導致的民事或刑事法律責任。</li>
                    <li> 互相尊重， 遵守互聯網絡道德；嚴禁互相惡意攻擊， 漫罵。</li>
                    <li> 管理員擁有一切管理權力。</li>
                  </ol>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </div>

    <?php
    include("../../layouts/footer.php");
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
<?php
	$db_link->close();
?>