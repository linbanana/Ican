<?php
require("../../connMysql.php");  //呼叫connectMysql.php文件
session_start();
//檢查是否經過登入
if (!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"] == "")) {
  echo "<script>alert('請先登入');window.location.href = '../../login.php';</script>";
}

//檢查權限是否足夠
if ($_SESSION["memberLevel"] == "member") {
    header("Location: member.php");
}

//選取管理員資料
$query_RecAdmin = "SELECT m_id, m_name, m_logintime,m_email FROM memberdata WHERE m_username=?";
$stmt = $db_link->prepare($query_RecAdmin);
$stmt->bind_param("s", $_SESSION["loginMember"]);
$stmt->execute();
$stmt->bind_result($mid, $mname, $mlogintime, $m_email);
$stmt->fetch();
$stmt->close();

//預設每頁筆數
$pageRow_records = 5;
//預設頁數
$num_pages = 1;
//若已經有翻頁，將頁數更新
if (isset($_GET['page'])) {
    $num_pages = $_GET['page'];
}
//本頁開始記錄筆數 = (頁數-1)*每頁記錄筆數
$startRow_records = ($num_pages - 1) * $pageRow_records;
$sql_query = "SELECT * FROM message";  //將SQL指令設定在$sql_query
$query_limit_RecMember = $sql_query . " LIMIT {$startRow_records}, {$pageRow_records}";
//以加上限制顯示筆數的SQL敘述句查詢資料到 $resultMember 中
$RecMember = $db_link->query($query_limit_RecMember);
//以未加上限制顯示筆數的SQL敘述句查詢資料到 $all_resultMember 中
$all_RecMember = $db_link->query($sql_query);
//計算總筆數
$total_records = $all_RecMember->num_rows;
//計算總頁數=(總筆數/每頁筆數)後無條件進位。
$total_pages = ceil($total_records / $pageRow_records);

//刪除留言
if (isset($_GET["action"]) && ($_GET["action"] == "delete")) {
    $query_delMember = "DELETE FROM message WHERE guestID=?";
    $stmt = $db_link->prepare($query_delMember);
    $stmt->bind_param("i", $_GET["id"]);
    $stmt->execute();
    $stmt->close();
    //重新導向回到主畫面
    header("Location: adminmessage.php");
}

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
        function deletesure() {
            if (confirm('\n您確定要刪除這個管理員嗎?\n刪除後無法恢復!\n')) return true;
            return false;
        }
    </script>
</head>

<body>

    <?php
    include("../../layouts/header.php");
    ?>

    <?php
    include("admin-fixed.php");
    ?>

    <div class="messagecontent">
        <table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">
            <tr>
                <td class="tdbline">
                    <div style="position:relative;">
                        <img src="../../images/messageboard/messagelogo.gif" width="100%" height="50" border="0">
                        <a href="../messageboard.php">
                            <button class="btn btn-primary" width="20%" style="position:absolute; right: 10px; top: 5px;">我要留言</button>
                        </a>
                    </div>
                    <br>
                    <div style="float='right'">
                        <font color="#ff0000">　警告！任意刪除資料須負民事侵權損害賠償及刑事妨害電腦使用罪責任。</font>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="tdbline">
                    <table width="100%" border="0" cellspacing="0" cellpadding="10">
                        <tr valign="top">
                            <td class="tdrline">
                                <table width="100%" border="0" cellpadding="2" cellspacing="1">
                                    <tr style="border: 2px solid;">
                                        <td width="5%" align="center" bgcolor="#CCC">編號</td>
                                        <td width="15%" align="center" bgcolor="#CCC">姓名</td>
                                        <td width="5%" align="center" bgcolor="#CCC">性別</td>
                                        <td width="15%" align="center" bgcolor="#CCC">電話號碼</td>
                                        <td width="15%" align="center" bgcolor="#CCC">信箱</td>
                                        <td width="15%" align="center" bgcolor="#CCC">留言時間</td>
                                        <td width="20%" align="center" bgcolor="#CCC">留言內容</td>
                                        <td width="10%" align="center" bgcolor="#CCC">操作</td>
                                    </tr>
                                    <?php
                                    while ($row_RecMember = $RecMember->fetch_assoc()) {
                                        ?>
                                        <tr style="border: 2px solid;">
                                            <td width="5%" align="center" bgcolor="#FFF">
                                                <?php
                                                    echo $row_RecMember["guestID"];
                                                    ?>
                                            </td>
                                            <td width="15%" align="center" bgcolor="#FFF">
                                                <?php
                                                    echo $row_RecMember["guestname"];
                                                    ?>
                                            </td>
                                            <td width="5%" align="center" bgcolor="#FFF">
                                                <?php
                                                    echo $row_RecMember["guestgender"];
                                                    ?>
                                            </td>
                                            <td width="15%" align="center" bgcolor="#FFF">
                                                <?php
                                                    echo $row_RecMember["guestphone"];
                                                    ?>
                                            </td>
                                            <td width="15%" align="center" bgcolor="#FFF">
                                                <?php
                                                    echo $row_RecMember["guestemail"];
                                                    ?>
                                            </td>
                                            <td width="15%" align="center" bgcolor="#FFF">
                                                <?php
                                                    echo $row_RecMember["guesttime"];
                                                    ?>
                                            </td>
                                            <td width="20%" align="center" bgcolor="#FFF">
                                                <textarea readonly="readonly" style="resize : none;"><?php echo $row_RecMember["guestcontent"]; ?></textarea>
                                            </td>
                                            <td width="10%" align="center" bgcolor="#FFF">
                                                <a href="?action=delete&id=<?php echo $row_RecMember["guestID"]; ?>" onClick="return deletesure();">
                                                    <font color="#ff0000">刪除</font>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </table>
                                <hr size="1" />
                                <table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">
                                    <tr>
                                        <td valign="middle">
                                            <p>資料筆數：<?php echo $total_records; ?></p>
                                        </td>
                                        <td align="right">
                                            <p>
                                                <?php
                                                if ($num_pages > 1) { // 若不是第一頁則顯示 
                                                    ?>
                                                    <a href="?page=1">第一頁</a> | <a href="?page=<?php echo $num_pages - 1; ?>">上一頁</a> |
                                                <?php
                                                }
                                                ?>
                                                <?php
                                                if ($num_pages < $total_pages) { // 若不是最後一頁則顯示
                                                    ?>
                                                    <a href="?page=<?php echo $num_pages + 1; ?>">下一頁</a> | <a href="?page=<?php echo $total_pages; ?>">最末頁</a>
                                                <?php
                                                }
                                                ?>
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
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