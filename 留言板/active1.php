<?php
require("connMysql.php");
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