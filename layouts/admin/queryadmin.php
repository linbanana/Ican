<?php 
require_once("../../connMysql.php");
session_start();
//檢查是否經過登入
if(!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"]=="")){
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
	header("Location: ../../index.php");
}
//刪除會員
if(isset($_GET["action"])&&($_GET["action"]=="delete")){
	$query_delMember = "DELETE FROM memberdata WHERE m_id=?";
	$stmt=$db_link->prepare($query_delMember);
	$stmt->bind_param("i", $_GET["id"]);
	$stmt->execute();
	$stmt->close();
	//重新導向回到主畫面
	header("Location: admin.php");
}
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
 
 $getorder = $_GET['order'];
 $order = $getorder."=0";
if(isset($_GET["order"]) && ($_GET["order"]%2=="0")){
  $query_RecMember = "SELECT * FROM memberdata WHERE m_level<>'member' ORDER BY `memberdata`.`m_id` ASC";
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
}else{
  $query_RecMember2 = "SELECT * FROM memberdata WHERE m_level<>'member' ORDER BY `memberdata`.`m_id` DESC";
  $query_limit_RecMember = $query_RecMember2." LIMIT {$startRow_records}, {$pageRow_records}";
  $RecMember = $db_link->query($query_limit_RecMember);
  //以未加上限制顯示筆數的SQL敘述句查詢資料到 $all_resultMember 中
  $all_RecMember = $db_link->query($query_RecMember2);
  //計算總筆數
  $total_records = $all_RecMember->num_rows;
  //計算總頁數=(總筆數/每頁筆數)後無條件進位。
  $total_pages = ceil($total_records/$pageRow_records);

}


?>
<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- 環境建置 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="../../font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="../../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../css/ican.css" rel="stylesheet" />
    <!-- 環境建置 -->
    <script language="javascript">
    function deletesure(){
    if (confirm('\n您確定要刪除這個管理員嗎?\n刪除後無法恢復!\n')) return true;
    return false;
}
</script>
    <title>ican</title>
</head>
<body>

  <?php
  include("../../layouts/header.php");
  ?>

  <?php
  include("../../layouts/admin-fixed.php");
  ?>

  <div class="admincontent">      
      <table width="530" border="0" align="center" cellpadding="4" cellspacing="0" id="memberdata">
        <tr>
          <td class="tdbline"><img src="https://github.com/linbanana/ican/blob/master/images/logo.png?raw=true" alt="會員系統" width="164" height="67"></td>
        </tr>
        <tr>
          <td class="tdbline"><table width="100%" border="0" cellspacing="0" cellpadding="10">
            <tr valign="top">
              <td class="tdrline">
                <table width="120%" border="0" cellpadding="2" cellspacing="1" id="queryadmin">
                  <tr>                    
                    <td width="15%" align="center" bgcolor="#CCC">管理員編號</td>
                    <td width="15%" align="center" bgcolor="#CCC">姓名</td>
                    <td width="15%" align="center" bgcolor="#CCC">帳號</td>
                    <td width="15%" align="center" bgcolor="#CCC">加入時間</td>
                    <td width="15%" align="center" bgcolor="#CCC">上次登入</td>
                    <!-- 登入次數排序 尚未完成 -->
                    <td width="15%" align="center" bgcolor="#CCC">                      
                    <form name="form"  action="" method="GET">
                      <input type="button" name="order" id="order" value="order">
                    </form>
                    </td>
                    <td width="30%" align="center" bgcolor="#CCC">操作</td>
                  </tr>
      			<?php 
                while($row_RecMember=$RecMember->fetch_assoc()){ 
            ?>
                  <tr>                    
                    <td width="15%" align="center" bgcolor="#FFF">
                      <?php 
                          echo $row_RecMember["m_id"];
                      ?>                        
                    </td>
                    <td width="15%" align="center" bgcolor="#FFF">
                      <?php 
                          echo $row_RecMember["m_name"];
                      ?>                        
                    </td>
                    <td width="15%" align="center" bgcolor="#FFF">
                      <?php 
                          echo $row_RecMember["m_username"];
                      ?>                        
                    </td>
                    <td width="15%" align="center" bgcolor="#FFF">
                      <?php 
                          echo $row_RecMember["m_jointime"];
                      ?>                        
                    </td>
                    <td width="15%" align="center" bgcolor="#FFF">
                      <?php 
                          echo $row_RecMember["m_logintime"];
                      ?>                        
                    </td>
                    <td width="15%" align="center" bgcolor="#FFF">
                      <?php 
                          echo $row_RecMember["m_login"];
                      ?>                        
                    </td>
                    <td width="30%" align="center" bgcolor="#FFF">
                      <!-- 判斷要刪除的目標是否為自己 -->
                      <?php 
                        if($row_RecMember["m_id"] != $mid){
                      ?>
                      <a href="?action=delete&id=<?php echo $row_RecMember["m_id"];?>" onClick="return deletesure();"><font color="#ff0000">刪除</font></a>
                    </td>
                      <?php
                        }
                      ?>
                  </tr>
      			<?php 
              }
            ?>
                </table>          
                <hr size="1" />
                <table width="98%" border="0" align="center" cellpadding="4" cellspacing="0">
                  <tr>
                    <td valign="middle"><p>資料筆數：<?php echo $total_records;?></p></td>
                    <td align="right"><p>
                        <?php 
                          if ($num_pages > 1) { // 若不是第一頁則顯示 ?>
                        <a href="?page=1">第一頁</a> | <a href="?page=<?php echo $num_pages-1;?>">上一頁</a> |
                        <?php 
                          }
                        ?>
                        <?php 
                          if ($num_pages < $total_pages) { // 若不是最後一頁則顯示 
                        ?>
                        <a href="?page=<?php echo $num_pages+1;?>">下一頁</a> | <a href="?page=<?php echo $total_pages;?>">最末頁</a>
                        <?php 
                          }
                        ?>
                    </p></td>
                  </tr>
                </table>
                </td>            
            </tr>
          </table></td>
        </tr>
      </table>  
  </div>
    <?php
    include("../../layouts/footer.php");
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