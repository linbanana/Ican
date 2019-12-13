<?php
require("connMysql.php");  //呼叫connectMysql.php文件
session_start();
//檢查是否經過登入
if (!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"] == "")) {
  header("Location: login.php");
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
$sql_query = "SELECT * FROM newsdata ORDER BY `newstime` DESC";  //將SQL指令設定在$sql_query
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
    $query_delMember = "DELETE FROM newsdata WHERE newsid=?";
    $stmt = $db_link->prepare($query_delMember);
    $stmt->bind_param("i", $_GET["id"]);
    $stmt->execute();
    $stmt->close();
    //重新導向回到主畫面
    header("Location: news.php");
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
</head>

<body>

    <?php
    include("layouts/header.php");
    ?>

    <div class="newscontent col-12">
        <div class="row">
        <div class="newspost col col-3"></div>
        <div class="newspost col col-6">
        <table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">
            <?php if ($_SESSION["memberLevel"] == "admin" && !isset($_SESSION["memberLevel"])) {?>
            <tr>
                <td class="tdbline">
                    <div style="position:relative;">
                        <img src="../../images/messageboard/messagelogo.gif" width="100%" height="50" border="0">
                        <a href="layouts/admin/updatenews.php">
                            <button class="btn btn-primary" width="20%" style="position:absolute; right: 10px; top: 5px;">發佈公告</button>
                        </a>
                    </div>
                    <br>
                    <div style="float='right'">
                        <font color="#ff0000">　警告！任意刪除資料須負民事侵權損害賠償及刑事妨害電腦使用罪責任。</font>
                    </div>
                </td>
            </tr>
        <?php }elseif($_SESSION["memberLevel"] == "member" || !isset($_SESSION["memberLevel"])){}?>
        </table>
        <table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">
        <?php
            while ($row_RecMember = $RecMember->fetch_assoc()) {
        ?>
        </br>
            <div class="card bg-dark text-white">
                <svg class="bd-placeholder-img bd-placeholder-img-lg card-img" width="100%" height="270" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Card image">
                    <rect width="100%" height="100%" fill="#868e96"></rect>
                    <text x="10%" y="65%" fill="#6c757d" dy=".3em" font-size="20vw" opacity:0.1;>ican</text>
                </svg>
                <div class="card-img-overlay">
                    <h5 class="card-title text-white bg-dark">
                        <?php
                        echo "標題：".$row_RecMember["newstitle"];
                        ?>
                        <p class="card-text text-white bg-dark" style="float: right;">
                            <?php
                            echo $row_RecMember["newstime"];
                            ?>
                        </p>
                    </h5><hr>
                    <p  class="card-text text-white">
                        <?php
                        echo $row_RecMember["newscontent"];
                        ?>
                    </p>
                </div>
                <?php if ($_SESSION["memberLevel"] == "admin") {?>
                    <input class="btn btn-danger" type="button"
                    value="刪除<?php echo "編號：".$row_RecMember["newsid"]; ?>"
                    onclick="if (confirm('\n您確定要刪除這個管理員嗎?\n刪除後無法恢復!\n')) window.location.href='?action=delete&id=<?php echo $row_RecMember["newsid"]; ?>';"
                    style="z-index: 1;"/>
                <?php }?>
            </div></tr>
        <?php
        }
        ?>
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
        </div>
        </div>
        <div class="newspost col col-3"></div>
</div>

<?php
include("layouts/footer.php");
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