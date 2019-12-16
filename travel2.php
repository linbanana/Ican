<?php
require("connMysql.php");  //呼叫connectMysql.php文件
session_start();
function GetSQLValueString($theValue, $theType)
{
  switch ($theType) {
    case "string":
      $theValue = ($theValue != "") ? filter_var($theValue, FILTER_SANITIZE_MAGIC_QUOTES) : "";
      break;
    case "int":
      $theValue = ($theValue != "") ? filter_var($theValue, FILTER_SANITIZE_NUMBER_INT) : "";
      break;
  }
  return $theValue;
}

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

$searchtravel = "SELECT DISTINCT `t_class` FROM `traveldata`";  //將SQL指令設定在$sql_query
$travelclass = $db_link->query($searchtravel);
$row_travelclass = $travelclass->fetch_all();

if (isset($_POST["action"]) && ($_POST["action"] == "travel")) {
    $query_insert = "INSERT INTO `t_orderdata`(`m_id`, `travel_1`, `travel_2`, `travel_3`) VALUES ($mid,?,?,?)";
    $stmt = $db_link->prepare($query_insert);
    $stmt->bind_param(
      "sss",
      GetSQLValueString($_POST["t_name1"], 'string'),
      GetSQLValueString($_POST["t_name2"], 'string'),
      GetSQLValueString($_POST["t_name3"], 'string')
    );
    $stmt->execute();
    $stmt->close();
    $db_link->close();
    header("Location: travel2.php");
}


if ($_SERVER['REQUEST_METHOD'] == "POST") { //如果是 POST 請求

    if (isset($_POST["select"])) {
        $select = $_POST["select"];
        $searchroom="SELECT `t_name` FROM `traveldata` WHERE `t_class`='$select'";
        $roommodellist = $db_link->query($searchroom);
        for($i=0 ;$i < ($roommodellist->num_rows);$i++){
            $rsm = $roommodellist->fetch_assoc();
            $res .="<option value=".$rsm['t_name'].">".$rsm['t_name']."</option>";
        }
        echo $res;
    }
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
    <script type="text/javascript">
    $(function() {
        $(".t_class1").change(function() {
            $.ajax({
                type: "POST", //傳送方式
                url: "active.php", //傳送目的地
                dataType: "text", //資料格式
                data: { //傳送資料
                    select: $(".t_class1").val() //表單欄位 ID nickname
                },
                success: function(data) {
                    $(".t_name1").html(data);
                },
                error: function(jqXHR) {
                    alert("傳輸錯誤");
                }
            });
        });
    });

    $(function() {
        $(".t_class2").change(function() {
            $.ajax({
                type: "POST", //傳送方式
                url: "active.php", //傳送目的地
                dataType: "text", //資料格式
                data: { //傳送資料
                    select: $(".t_class2").val() //表單欄位 ID nickname
                },
                success: function(data) {
                    $(".t_name2").html(data);
                },
                error: function(jqXHR) {
                    alert("傳輸錯誤");
                }
            });
        });
    });

    $(function() {
        $(".t_class3").change(function() {
            $.ajax({
                type: "POST", //傳送方式
                url: "active.php", //傳送目的地
                dataType: "text", //資料格式
                data: { //傳送資料
                    select: $(".t_class3").val() //表單欄位 ID nickname
                },
                success: function(data) {
                    $(".t_name3").html(data);
                },
                error: function(jqXHR) {
                    alert("傳輸錯誤");
                }
            });
        });
    });
    </script>

    <style>
        ul li{
            float:left;
        }
    </style>
</head>

<body>

    <?php
    include("layouts/header.php");
    ?>

        <form class="travelform" name="form1" method="POST" action="">
        <iframe src="https://www.google.com/maps/d/embed?mid=1_KWBPZEEdoCUSQL6YW1z-C52aEY1L-Ac&ll=22.34112367512831%2C120.36961528583277&z=14" width="100%" height="480"></iframe>
            <input type="radio" name="ferry" value="公營">公營
            <input type="radio" name="ferry" value="民營">民營</br>
            請輸入天數:<input type="text" name="daynumber"></br>
            <ul>
           <li> 上午:</br>
            <select name="t_class1" class="t_class1">
                <?php
                    foreach ($row_travelclass as $value){
                        echo "<option>".$value[0]."</option>";
                    }                    
                ?>
            </select></br>
            <select name="t_name1" class="t_name1">

            </select></br>
            中午:</br>
            <select name="t_class2" class="t_class2">
                <?php
                    foreach ($row_travelclass as $value){
                        echo "<option>".$value[0]."</option>";
                    }
                ?>
            </select></br>
            <select name="t_name2" class="t_name2">

            </select></br>
            下午:</br>
            <select name="t_class3" class="t_class3">
                <?php
                    foreach ($row_travelclass as $value){
                        echo "<option>".$value[0]."</option>";
                    }
                ?>
            </select></br>
            <select name="t_name3" class="t_name3">

            </select></li>

            <li> 上午:</br>
            <select name="t_class1" class="t_class1">
                <?php
                    foreach ($row_travelclass as $value){
                        echo "<option>".$value[0]."</option>";
                    }
                ?>
            </select></br>
            <select name="t_name1" class="t_name1">

            </select></br>
            中午:</br>
            <select name="t_class2" class="t_class2">
                <?php
                    foreach ($row_travelclass as $value){
                        echo "<option>".$value[0]."</option>";
                    }
                ?>
            </select></br>
            <select name="t_name2" class="t_name2">

            </select></br>
            下午:</br>
            <select name="t_class3" class="t_class3">
                <?php
                    foreach ($row_travelclass as $value){
                        echo "<option>".$value[0]."</option>";
                    }
                ?>
            </select></br>
            <select name="t_name3" class="t_name3">

            </select></li>
                </ul>
            <div class="clearfix"></div>
            <p align="center">
                <input name="action" type="hidden" id="action" value="travel">
                <input class="btn btn-success btn-sm" type="submit" name="Submit2" value="送出申請">
                <input class="btn btn-info btn-sm" type="reset" name="Submit3" value="重設資料">
                <input class="btn btn-primary btn-sm" type="button" name="Submit" value="回上一頁" onClick="window.history.back();">
            </p>
        </form>


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