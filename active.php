<?php
header('Content-Type: application/json; charset=UTF-8'); //設定資料類型為 json，編碼 utf-8
include('connMysql.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") { //如果是 POST 請求
    @$select = $_POST["select"]; //取得 nickname POST 值
    if ($select != null) {
        $searchroom="SELECT `r_model` FROM `roomdata` WHERE `r_type`='$select'";
        $roommodellist = $db_link->query($searchroom);  //用db_link物件執行sql語法
        for($i=0;$i<$roommodellist->num_rows;$i++){
            $rsm=$roommodellist->fetch_assoc();
            $res .="<option value='".$rsm['r_model']."'>".$rsm['r_model']."</option>";
        }

        echo json_encode(array(
            'res' => $res     
        ));

    }

   elseif (isset($_POST["date"])) {
        $date = $_POST["date"];
        $ssss=date("Y-m-d", strtotime($date."+7 day"));
        echo "退房日期".'<input type="date" id="outda" name="outda" value="'.$ssss.'" min="'.$date.'" max="'.$ssss.'">';
    }

   elseif(isset($_POST["tselect"])) {
        $tselect = $_POST["tselect"];
        $searchtraveldata="SELECT `t_name` FROM `traveldata` WHERE `t_class`='$tselect'";
        $tdatalist = $db_link->query($searchtraveldata);
        for($i=0 ;$i < ($tdatalist->num_rows);$i++){
            $tsm = $tdatalist->fetch_assoc();
            $tres .="<option value=".$tsm['t_name'].">".$tsm['t_name']."</option>";
        }
        echo $tres;
    }


}

?>