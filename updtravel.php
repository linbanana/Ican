<?php
require("connMysql.php");  //呼叫connectMysql.php文件
session_start();
$sql="SELECT `t_orderdata`.*,`orderdata`.`o_day` 
      FROM `t_orderdata`
      LEFT JOIN `orderdata` ON `t_orderdata`.`o_num` = `orderdata`.`o_num` 
      WHERE `t_orderdata`.`o_num`='{$_GET["selectonum"]}'";
$traveldata=$db_link->query($sql);
$rs=$traveldata->fetch_assoc();

if($rs['daynum']==NULL){
    echo "<script>alert('尚無行程');window.location.href = 'picktravel.php';</script>";
}

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


if (isset($_POST["action"]) && ($_POST["action"] == "travel") ){
    $mnum = 1;
    $daynum = 1;
    $ferry=$_POST["ferry"];
    $queryferry="UPDATE `orderdata` SET `o_ferry`='$ferry' WHERE `o_num`='{$row_travelday['o_num']}'";
    $db_link->query($queryferry);       
    for($i=1;$i<=$rs['o_day'];$i++){
        $afnum = $mnum+1;
        $ntnum = $afnum+1;
        $morning=$_POST["t_name".$mnum];
        $afternoon=$_POST["t_name".$afnum];
        $night=$_POST["t_name".$ntnum];
        $mnum=$mnum+3; 
        $query_update = "UPDATE `t_orderdata` 
                         SET `o_num`='{$rs['o_num']}' , `m_id` ='$mid' , `daynum` = '$daynum' ,
                         `travel_1` ='$morning', `travel_2` = '$afternoon', `travel_3` = '$night' 
                         WHERE `o_num`='{$rs['o_num']}' AND `daynum`='$daynum'"; 
        $db_link->query($query_update);
        $daynum++;
    }
    header("Location: layouts/member/memberqueryorder.php");

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>修改行程</title>
    <!-- 環境建置 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="\font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="\css/bootstrap.min.css" rel="stylesheet" />
    <link href="\css/ican.css" rel="stylesheet" />
    <script src="\scripts/jquery-3.4.1.min.js"></script>
    <!-- 環境建置 -->
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
        <p>訂單編號為：<?php echo $rs['o_num'] ?></p>
        <p>交通船選擇：</br>
            <input type="radio" name="ferry" value="公營" checked>公營&nbsp;$380</br>
            <input type="radio" name="ferry" value="民營">民營&nbsp;$410</br>
            <input type="radio" name="ferry" value="自行訂購">自行訂購</br>
        </p>
        <p class="dataType" id="dataType" name="dataType"><?php echo "旅遊天數：".$rs['o_day']."天".($rs['o_day']-"1")."夜";?>
        </p>
        <p>開始規劃您的行程吧！</p>
        
        <?php
            $day = $rs['o_day']*3;
            $num = 1;
            if($num <= $day){
                for ($i=1; $i <= $rs['o_day']; $i++) {
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
            $day = $rs['o_day']*3;
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


</body>
</html>