<?php
require("connMysql.php");  //呼叫connectMysql.php文件
session_start();
//檢查是否經過登入
/*if (!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"] == "")) {
    header("Location: index.php");
}*/

//選取管理員資料
$query_RecAdmin = "SELECT m_id, m_name, m_logintime,m_email FROM memberdata WHERE m_username=?";
$stmt = $db_link->prepare($query_RecAdmin);
$stmt->bind_param("s", $_SESSION["loginMember"]);
$stmt->execute();
$stmt->bind_result($mid, $mname, $mlogintime, $m_email);
$stmt->fetch();
$stmt->close();

$searchtravel = "SELECT DISTINCT `t_class` FROM `traveldata`";  //將SQL指令設定在$sql_query
$travelclass = $db_link->query($searchtravel);
$searchtravel2="SELECT `t_name` FROM `traveldata` WHERE `t_class`= \"水上活動\"";        
$travelname = $db_link->query($searchtravel2); 

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
    <!-- 環境建置 -->
    <!-- 環境建置 -->
<script src="\scripts/jquery-3.4.1.slim.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="\scripts/umd/popper.min.js"></script>
<script src="\scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="\scripts/ican.js"></script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d49835d5bd6ff90"></script>
<!-- 環境建置 -->
    <title>ican</title>
    <script type="text/javascript">
$(function() {
    $("#t_class").change(function() {
        $.ajax({
            type: "POST", //傳送方式
            url: "", //傳送目的地
            dataType: "text", //資料格式
            data: { //傳送資料
                select: $("#t_class").val() //表單欄位 ID nickname          
            },
            success: function(data) {
                $("#t_name").html(data);
            },
            error: function(jqXHR) {
                alert("傳輸錯誤");
            }
        });
    });
});
</script>


</head>

<body>

    <?php
    include("layouts/header.php");
    ?>
        <form class="newsform" name="form1" method="POST" action="">
            <select name="t_class" id="t_class">
                <?php 
                    while ($row_travelclass = $travelclass->fetch_assoc()) {
                        echo "<option>".$row_travelclass["t_class"]."</option>";
                    }                          
                ?>
            </select>
        </form>
        <form class="newsform2" name="form2" method="GET" action="">
            <select name="t_name" id="t_name">

            </select>
        </form>
            <p align="center">
                <input name="action" type="hidden" id="action" value="join">
                <input class="btn btn-success btn-sm" type="submit" name="Submit2" value="送出申請">
                <input class="btn btn-info btn-sm" type="reset" name="Submit3" value="重設資料">
                <input class="btn btn-primary btn-sm" type="button" name="Submit" value="回上一頁" onClick="window.history.back();">
            </p>
        


    <?php
    include("layouts/footer.php");
    ?>

<?php 
        if ($_SERVER['REQUEST_METHOD'] == "POST") { //如果是 POST 請求

        if (isset($_POST["select"])) {
            
    
            $select = $_POST["select"];
            $searchroom="SELECT `t_name` FROM `traveldata` WHERE `t_class`='$select'";
            
            $roommodellist = $db_link->query($searchroom); 
    
            for($i=0 ;$i < ($roommodellist->num_rows);$i++)
            {
                $rsm = $roommodellist->fetch_assoc();
                $res .="<option value=".$rsm['t_name'].">".$rsm['t_name']."</option>";
            }
            echo $res;   
        }                          
    } 
?>


</body>
</html>