<?php 
require_once("connMysql.php");
session_start();
//檢查是否經過登入
if(!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"]=="")){
	header("Location: index.php");
}
//檢查權限是否足夠
if($_SESSION["memberLevel"]=="member"){
	header("Location: member.php");
}
//執行登出動作
if(isset($_GET["logout"]) && ($_GET["logout"]=="true")){
	unset($_SESSION["loginMember"]);
	unset($_SESSION["memberLevel"]);
	header("Location: index.php");
}
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
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/ican.css" rel="stylesheet" />
    <!-- 環境建置 -->
    <script language="javascript">
    function deletesure(){
    if (confirm('\n您確定要刪除這個會員嗎?\n刪除後無法恢復!\n')) return true;
    return false;
}
</script>
    <title>ican</title>
</head>
<body>

    <?php
    include("layouts/header.php");
    ?>

    <input type="checkbox" name="" id="showsidebar" checked>
    <div class="side-menu" style="position: relative;">
    <div class="sidebar-heading">
        <p><img src=".\images/logo.png" id="adminlogo">
        會員名稱：<strong><?php echo "<font id='usernamestyle'>".$mname."</font>";?></strong><br>
            本次登入的時間為：<?php echo $mlogintime;?>
          </p>
            <p align="center"><a href="layouts/admin/updateadmin.php?id=<?php echo $mid;?>">修改資料</a> | <a href="?logout=true">登出系統</a>
          </p>
    </div>
        <ul class="list-group list-group-flush ">
            <li>
              <a class="list-group-item py-2 list-group-item-action">後台管理系統</a>
                <ol>
                    <i>
                      <a href="layouts/admin/adminmessage.php" class="list-group-item py-2 list-group-item-action">留言板</a>
                    </i>
                    <i>
                      <a href="#" class="list-group-item py-2 list-group-item-action">訂單管理</a>
                    </i>
                    <i>
                      <a href="#" class="list-group-item py-2 list-group-item-action">商品管理</a>
                    </i>
                    <i>
                      <a href="#" class="list-group-item py-2 list-group-item-action">網站圖片更新</a>
                    </i>
                </ol>
            </li>
           <li>
              <a class="list-group-item py-2 list-group-item-action">會員系統管理</a>
                <ol>
                    <i>
                      <a href="layouts/admin/updateadmin.php?id=<?php echo $mid;?>" class="list-group-item py-2 list-group-item-action">修改資料</a>
                    </i>
                    <i>
                      <a href="layouts/admin/queryadmin.php" class="list-group-item py-2 list-group-item-action">查詢、修改管理員資料</a>
                    </i>
                    <i>
                      <a href="layouts/admin/querymember.php" class="list-group-item py-2 list-group-item-action">查詢、修改會員資料</a>
                    </i>
                    <i>
                      <a href="#" class="list-group-item py-2 list-group-item-action">訂單查詢</a>
                    </i>
                    <i>
                      <a href="#" class="list-group-item py-2 list-group-item-action">立即訂房</a>
                    </i>
                    <i>
                      <a href="querymember.php" class="list-group-item py-2 list-group-item-action">取消訂房</a>
                    </i>
                    <i>
                      <a href="#" class="list-group-item py-2 list-group-item-action">旅遊行程規劃</a>
                    </i>
                </ol>
            </li>
        </ul> 
    <label for="showsidebar">
        <i class="fa fa-angle-right"></i>
    </label>
</div>

    <?php
    include("layouts/footer.php");
    ?>

    <!-- 環境建置 -->
    <script src="scripts/jquery-3.4.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="scripts/umd/popper.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts/ican.js"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d49835d5bd6ff90"></script>
    <!-- 環境建置 -->
</body>
</html>
<?php
	$db_link->close();
?>