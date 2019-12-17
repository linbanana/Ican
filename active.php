<?php
header('Content-Type: application/json; charset=UTF-8'); //設定資料類型為 json，編碼 utf-8
if ($_SERVER['REQUEST_METHOD'] == "POST") { //如果是 POST 請求
    @$select = $_POST["select"]; //取得 nickname POST 值
    if ($select != null) {
        include('connMysql.php');
        $searchroom="SELECT `r_model` FROM `roomdata1` WHERE `r_type`='$select'";
        $roommodellist = $db_link->query($searchroom);  //用db_link物件執行sql語法
        for($i=0;$i<$roommodellist->num_rows;$i++){
            $rsm=$roommodellist->fetch_assoc();
            $res .="<option value='".$rsm['r_model']."'>".$rsm['r_model']."</option>";
        }

        echo json_encode(array(
            'res' => $res     
        ));

    }
}

?>