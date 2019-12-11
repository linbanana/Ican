<?php
error_reporting(0);
session_start();

require_once("../../connMysql.php");  //呼叫connectMysql.php文件
date_default_timezone_set("Asia/Taipei"); //設定台灣時區
$selectmember = "SELECT `m_name`,`m_sex`,`m_email`,`m_phone`,`m_level` FROM `memberdata` WHERE `m_username`= '{$_SESSION["loginMember"]}'";
$pick = $db_link->query($selectmember);
$messagemember = $pick->fetch_assoc();

//接收數值
$newstitle = $_POST['newstitle'];
$newscontent = $_POST['newscontent'];
$newstime = date("Y:m:d H:i:s", time());
//如果guestname資料存在,再輸入資料,避免先輸入空白資料
if (isset($newstitle) && $newscontent != "") {
    //將資料輸入到MySQL資料表中
    $sql_query = "INSERT INTO `newsdata`(`newsid`,`newstitle`,`newscontent`,newstime) value('','$newstitle','$newscontent','$newstime')";
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
    include("../../layouts/header.php");
    ?>

     <div class="newscontent">
        <form class="newsform" name="form1" method="POST" action="">
            <div align="center">
                <strong><font size="30">發佈公告</font></strong>
            </div>
            <table align="center" width="100%">
                <tr>
                    <td align="center">
                        <textarea name="newstitle" id="newstitle" cols="50" placeholder="請輸入標題" style="resize : none;"></textarea>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <textarea name="newscontent" id="newscontent" cols="50" rows="8" placeholder="請輸入留言內容" style="resize : none;"></textarea>
                    </td>
                </tr>
                <tr>
                    <td align="center"><input id="submit" name="submit" type="submit" value="送出資料" class="btn btn-warning" align="center"></td>
                </tr>
            </table>
        </form>
    </div>


    <?php
    include("../../layouts/footer.php");
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