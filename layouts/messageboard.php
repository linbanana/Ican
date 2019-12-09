<?php
error_reporting(0);
session_start();
//判斷是否有登入
if (!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"] == "")) {
    echo "<script>alert('尚未登入')</script>";
    header("Location: ../login.php");
}

require_once("../connMysql.php");  //呼叫connectMysql.php文件
date_default_timezone_set("Asia/Taipei"); //設定台灣時區
$selectmember = "SELECT `m_name`,`m_sex`,`m_email`,`m_phone`,`m_level` FROM `memberdata` WHERE `m_username`= '{$_SESSION["loginMember"]}'";
$pick = $db_link->query($selectmember);
$messagemember = $pick->fetch_assoc();
//echo "會員名稱:".$messagemember['m_username']."<br>";
//echo "性別:".$messagemember['m_sex']."<br>";
//echo "信箱:".$messagemember['m_email']."<br>";
//echo "手機:".$messagemember['m_phone']."<br>";
//echo "會員等級:".$messagemember['m_level']."<br>";

//接收數值
$guestname = $messagemember['m_name'];
$guestgender = $messagemember['m_sex'];
$guestphone = $messagemember['m_phone'];
$guestemail = $messagemember['m_email'];
$guestcontent = $_POST['guestcontent'];
$guesttime = date("Y:m:d H:i:s", time());
//如果guestname資料存在,再輸入資料,避免先輸入空白資料
if (isset($guestname) && $guestcontent != "" && strlen($guestcontent) <= 50 ) {
    //將資料輸入到MySQL資料表中
    $sql_query = "INSERT INTO `message`(`guestID`, `guestname`, `guestgender`, `guestphone`, `guestemail`, `guestcontent`, `guesttime`) value('','$guestname','$guestgender','$guestphone','$guestemail','$guestcontent','$guesttime')";
    $db_link->query($sql_query);
}
if (isset($_POST["logout"]) && ($_POST["logout"] == "true")) {
    unset($_SESSION["membername"]);
    header("Location: ../login.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- 環境建置 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="\font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="\css/bootstrap.min.css" rel="stylesheet" />
    <link href="\css/ican.css" rel="stylesheet" />
    <!-- 環境建置 -->
    <title>留言板</title>
</head>
<body>

    <?php
    include("../layouts/header.php");
    ?>

    <!--留言板-->
    <div class="divboard" align="center">
        <!--用div排版-->
        <div id="boardhead">
            <div id="boardheadL">
                <img name="board_r1_c1" src="../images/messageboard/messagelogo.gif" width="493" height="50" border="0" alt="">
            </div>
            <div id="boardheadR">
                <a href="<?php if($_SESSION["memberLevel"]=="admin"){?>admin/adminmessage.php<?php }else{?>member/membermessage.php<?php } ?>"><img src="../images/messageboard/querymessage.png" alt="" name="adminpagebutton"></a>
            </div>
        </div>
        <div id="boardcontent">
            <form id="boardform" name="form1" method="POST" action="">
                <table align="center" width="700px">
                    <tr>
                        <td align="center"><textarea name="guestcontent" id="guestcontent" cols="30" rows="10" placeholder="請輸入留言內容" style="resize : none;"></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input id="submit" name="submit" type="submit" value="送出資料" class="btn btn-warning" align="center"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

    <?php
    include("../layouts/footer.php");
    ?>


    <?php $db_link->close(); ?>
    <!-- 環境建置 -->
    <script src="\scripts/jquery-3.4.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="\scripts/umd/popper.min.js"></script>
    <script src="\scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="\scripts/ican.js"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d49835d5bd6ff90"></script>
    <!-- 環境建置 -->
</body>
</html>