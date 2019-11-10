<?php 
require_once("connMysql.php");
session_start();
//檢查是否經過登入
/*if(!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"]=="")){
    header("Location: index.php");
}
//檢查權限是否足夠
if($_SESSION["memberLevel"]=="member"){
    header("Location: member_center.php");
}
//執行登出動作
if(isset($_GET["logout"]) && ($_GET["logout"]=="true")){
    unset($_SESSION["loginMember"]);
    unset($_SESSION["memberLevel"]);
    header("Location: index.php");
}
//刪除會員
if(isset($_GET["action"])&&($_GET["action"]=="delete")){
    $query_delMember = "DELETE FROM memberdata WHERE m_id=?";
    $stmt=$db_link->prepare($query_delMember);
    $stmt->bind_param("i", $_GET["id"]);
    $stmt->execute();
    $stmt->close();
    //重新導向回到主畫面
    header("Location: member_admin.php");
}*/
//選取管理員資料
$query_RecAdmin = "SELECT m_id, m_name, m_logintime FROM memberdata WHERE m_username=?";
$stmt=$db_link->prepare($query_RecAdmin);
$stmt->bind_param("s", $_SESSION["loginMember"]);
$stmt->execute();
$stmt->bind_result($mid, $mname, $mlogintime);
$stmt->fetch();
$stmt->close();
//選取所有一般會員資料
//預設每頁筆數
$pageRow_records = 5;
//預設頁數
$num_pages = 1;
//若已經有翻頁，將頁數更新
if (isset($_GET['page'])) {
  $num_pages = $_GET['page'];
}
//本頁開始記錄筆數 = (頁數-1)*每頁記錄筆數
$startRow_records = ($num_pages -1) * $pageRow_records;
//未加限制顯示筆數的SQL敘述句
$query_RecMember = "SELECT * FROM memberdata WHERE m_level<>'admin' ORDER BY m_jointime DESC";
//加上限制顯示筆數的SQL敘述句，由本頁開始記錄筆數開始，每頁顯示預設筆數
$query_limit_RecMember = $query_RecMember." LIMIT {$startRow_records}, {$pageRow_records}";
//以加上限制顯示筆數的SQL敘述句查詢資料到 $resultMember 中
$RecMember = $db_link->query($query_limit_RecMember);
//以未加上限制顯示筆數的SQL敘述句查詢資料到 $all_resultMember 中
$all_RecMember = $db_link->query($query_RecMember);
//計算總筆數
$total_records = $all_RecMember->num_rows;
//計算總頁數=(總筆數/每頁筆數)後無條件進位。
$total_pages = ceil($total_records/$pageRow_records);
?>
<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- 環境建置 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/ican.css" rel="stylesheet" />
    <!-- 環境建置 -->
    <title>ican</title>
</head>
<body>

    <?php
    include("layouts/header.php");
    ?>
    <div class="adminwrapper col-2" id="showsidebar">
        <div class="row">
        <button class="btn btn-primary" id="menu-toggle">
            管<br>
            理<br>
            中<br>
            心              
        </button>
        <div class="admincontent col">
            <table width="780" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <td class="tdbline"><img src="images/mlogo.png" alt="會員系統" width="164" height="67"></td>
  </tr>
  <tr>
    <td class="tdbline"><table width="100%" border="0" cellspacing="0" cellpadding="10">
      <tr valign="top">
        <td class="tdrline"><p class="title">會員資料列表 </p>
          <table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#F0F0F0">
            <tr>
              <th width="10%" bgcolor="#CCCCCC">&nbsp;</th>
              <th width="20%" bgcolor="#CCCCCC"><p>姓名</p></th>
              <th width="20%" bgcolor="#CCCCCC"><p>帳號</p></th>
              <th width="20%" bgcolor="#CCCCCC"><p>加入時間</p></th>
              <th width="20%" bgcolor="#CCCCCC"><p>上次登入</p></th>
              <th width="10%" bgcolor="#CCCCCC"><p>登入</p></th>
            </tr>
            <?php while($row_RecMember=$RecMember->fetch_assoc()){ ?>
            <tr>
              <td width="10%" align="center" bgcolor="#FFFFFF"><p><a href="member_adminupdate.php?id=<?php echo $row_RecMember["m_id"];?>">修改</a><br>
                <a href="?action=delete&id=<?php echo $row_RecMember["m_id"];?>" onClick="return deletesure();">刪除</a></p></td>
              <td width="20%" align="center" bgcolor="#FFFFFF"><p><?php echo $row_RecMember["m_name"];?></p></td>
              <td width="20%" align="center" bgcolor="#FFFFFF"><p><?php echo $row_RecMember["m_username"];?></p></td>
              <td width="20%" align="center" bgcolor="#FFFFFF"><p><?php echo $row_RecMember["m_jointime"];?></p></td>
              <td width="20%" align="center" bgcolor="#FFFFFF"><p><?php echo $row_RecMember["m_logintime"];?></p></td>
              <td width="10%" align="center" bgcolor="#FFFFFF"><p><?php echo $row_RecMember["m_login"];?></p></td>
            </tr>
            <?php }?>
          </table>          
          <hr size="1" />
          <table width="98%" border="0" align="center" cellpadding="4" cellspacing="0">
            <tr>
              <td valign="middle"><p>資料筆數：<?php echo $total_records;?></p></td>
              <td align="right"><p>
                  <?php if ($num_pages > 1) { // 若不是第一頁則顯示 ?>
                  <a href="?page=1">第一頁</a> | <a href="?page=<?php echo $num_pages-1;?>">上一頁</a> |
                <?php }?>
                  <?php if ($num_pages < $total_pages) { // 若不是最後一頁則顯示 ?>
                  <a href="?page=<?php echo $num_pages+1;?>">下一頁</a> | <a href="?page=<?php echo $total_pages;?>">最末頁</a>
                  <?php }?>
              </p></td>
            </tr>
          </table><p>&nbsp;</p>
          </td>
        <td width="200">
        <div class="boxtl"></div><div class="boxtr"></div>
        <div class="regbox">
          <p class="heading"><strong>會員系統</strong></p>
            <p><strong><?php echo $mname;?></strong>您好。<br>
            本次登入的時間為：<br><?php echo $mlogintime;?></p>
            <p align="center"><a href="member_adminupdate.php?id=<?php echo $mid;?>">修改資料</a> | <a href="?logout=true">登出系統</a></p>
        </div>
        <div class="boxbl"></div><div class="boxbr"></div></td>
      </tr>
    </table>

        </div>

        <div class="adminsidebar col">
            <div class="sidebar-heading">
                <img src="images/logo.png">
            </div>
            <ul class="list-group list-group-flush ">
                <!--py-2於RWD有BUG -->
                <!--限時優惠 -->
                <li><a href="#" class="list-group-item py-2 list-group-item-action">會員管理</a>
                    <ul>
                        <li><a href="#" class="list-group-item py-2 list-group-item-action">權限設定</a></li>
                        <li><a href="#" class="list-group-item py-2 list-group-item-action">訂房資訊</a></li>
                    </ul>
                </li>
                <!--居家生活 -->
                <li><a href="#" class="list-group-item py-2 list-group-item-action">測試</a>
                    <ul>
                        <li><a href="#" class="list-group-item py-2 list-group-item-action">留言</a>
                            <ul>
                                <li><a href="#" class="list-group-item py-2 list-group-item-action">一般</a></li>
                                <li><a href="#" class="list-group-item py-2 list-group-item-action">公司行號</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="list-group-item py-2 list-group-item-action">測試2</a>
                            <ul>
                                <li><a href="#" class="list-group-item py-2 list-group-item-action">小測試1</a></li>
                                <li><a href="#" class="list-group-item py-2 list-group-item-action">小測試2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                
                
            </ul>
        </div>

        </div>
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