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
  echo "<script>alert('請先登入');window.location.href = 'login.php';</script>";
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
$searchtravel = "SELECT DISTINCT `t_class` FROM `traveldata` WHERE `t_class` = '烤肉'";
$travelBBQ = $db_link->query($searchtravel);
$row_travelBBQ = $travelBBQ->fetch_all();



//查詢最近的訂單時間
if (isset($_GET["selectonum"]) ){
 $selectquery= "SELECT * FROM `orderdata` WHERE`o_num`='{$_GET["selectonum"]}'";
 $selectorder=$db_link->query($selectquery);
 $row_selectorder = $selectorder->fetch_assoc();
 $ind=$row_selectorder["o_citime"];
 $outda=$row_selectorder["o_cotime"];
 $rid=$row_selectorder["r_id"];
}
elseif (isset($_SESSION["ind"])){
$ind=$_SESSION["ind"];
$outda=$_SESSION["outda"];
$rid=$_SESSION["rid"];
}
$query_travelday = "SELECT `o_num`,`o_day` FROM `orderdata` WHERE `m_id`='$mid' and `o_citime` >='$ind' AND `o_cotime` <='$outda' AND r_id='$rid'";
$travelday = $db_link->query($query_travelday);
$row_travelday = $travelday->fetch_assoc();



if (isset($_POST["action"]) && ($_POST["action"] == "travel") &&isset($_POST["ferry"]) ) {
    $mnum = 1;
    $daynum = 1;
    $ferry=$_POST["ferry"];
    $queryferry="UPDATE `orderdata` SET `o_ferry`='$ferry' WHERE `o_num`='{$row_travelday['o_num']}'";
    $db_link->query($queryferry);       
    for($i=1;$i<=$row_travelday['o_day'];$i++){
        $afnum = $mnum+1;
        $ntnum = $afnum+1;
        $morning=$_POST["t_name".$mnum];
        $afternoon=$_POST["t_name".$afnum];
        $night=$_POST["t_name".$ntnum];
        $mnum=$mnum+3; 
        $query_insert = "INSERT INTO `t_orderdata`(`o_num`, `m_id`, `daynum` , `travel_1`, `travel_2`, `travel_3`) VALUES ('{$row_travelday['o_num']}','$mid','$daynum','$morning','$afternoon','$night')";
        $db_link->query($query_insert);
        $daynum++;
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
    <script>
        $(document).ready(function(){
            $('#travelmap').zoom();
        });
    </script>
</head>

<body>

    <?php
    include("layouts/header.php");
    ?>

    <form class="travelform col-12" name="form1" method="POST" action="">
        <span class="zoom" id="travelmap">
            <img src="/images/travel/map.jpg" width="100%">
        </span>
        <iframe src="https://www.google.com/maps/d/embed?mid=1_KWBPZEEdoCUSQL6YW1z-C52aEY1L-Ac&ll=22.34112367512831%2C120.36961528583277&z=14" width="100%" height="480"></iframe>
        <p>親愛的：<font id="usernamestyle"><?php echo $mname;?></font>&nbsp;您好</p>
        <p>訂單編號為：<?php echo $row_travelday['o_num'] ?></p>
        <p>交通船選擇：
            <input type="radio" name="ferry" value="公營" checked>公營
            <input type="radio" name="ferry" value="民營">民營
            <input type="radio" name="ferry" value="無船票">無船票</br>
        </p>
        <p class="dataType" id="dataType" name="dataType"><?php echo "旅遊天數：".$row_travelday['o_day']."天".($row_travelday['o_day']-"1")."夜";?>
        </p>
        <p>開始規劃您的行程吧！</p>

            <?php
            $day = $row_travelday['o_day']*3;
            $num = 1;
            if($num <= $day){
                for ($i=1; $i <= $row_travelday['o_day']; $i++) {
                        echo ("<ul class='col col-12'><div class='col col-12' align='center'>第 ".$i." 天</div><br>".$num."<li>");
                        echo ("<select name='t_class".$num."' class='t_class".$num."' required>");
                        echo ("<option>"."選擇上午行程"."</option>");
                        foreach ($row_travelclass as $value){
                            echo ("<option>".$value[0]."</option>");
                        }
                        echo ("</select></br>");
                        echo("<select name='t_name".$num."' class='t_name".$num."' required>
                            </select></br>");
                        $num++;
                        echo ("</li><br>$num<li>");
                        echo ("<select name='t_class".$num."' class='t_class".$num."' required>");
                        echo ("<option>"."選擇下午行程"."</option>");
                        foreach ($row_travelclass as $value){
                            echo "<option>".$value[0]."</option>";
                        }
                        echo ("</select></br>");
                        echo("<select name='t_name".$num."' class='t_name".$num."' required>
                            </select></br>");
                        $num++;
                        echo ("</li><br>");

                        if($num != $day){
                            echo ("$num<li><select name='t_class".$num."' class='t_class".$num."' required>");

                            echo ("<option>"."選擇晚餐"."</option>");
                            foreach ($row_travelBBQ as $value){
                                echo "<option>".$value[0]."</option>";
                            }
                            echo ("</select></br>");
                            echo("<select name='t_name".$num."' class='t_name".$num."' required>
                                </select></br>");
                            echo ("</li></br></ul>");
                            $num++;
                        }else{
                            echo("<select name='t_name".$num."' class='t_name".$num."' style='display:none'>
                                <option>平安回家</option></select><br>");
                            echo ("</li></br></ul>");
                        }
                }
            }
            $day = $row_travelday['o_day']*3;
            $ajaxnum = 1;
            if($ajaxnum <= $day){
                for ($i=1; $i <= $day; $i++) {
                        echo '
        <script type="text/javascript">
            $(function() {
                $(".t_class'.$ajaxnum.'").change(function() {
                    $.ajax({
                        type: "POST", //傳送方式
                        url: "active.php", //傳送目的地
                        dataType: "text", //資料格式
                        data: { //傳送資料
                            tselect: $(".t_class'.$ajaxnum.'").val() //表單欄位 ID nickname
                        },
                        success: function(data) {
                            $(".t_name'.$ajaxnum.'").html(data);
                        },
                        error: function(jqXHR) {
                            alert("傳輸錯誤");
                        }
                    });
                });
            });
        </script>';
                        $ajaxnum++;
                }
            }
            ?>

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
    <script src='\scripts/jquery.zoom.js'></script>
    <script src="\scripts/umd/popper.min.js"></script>
    <script src="\scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="\scripts/ican.js"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d49835d5bd6ff90"></script>
    <!-- 環境建置 -->
</body>
</html>