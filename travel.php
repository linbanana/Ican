<?php
//error_reporting(0);
require_once("connMysql.php");
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
/*$sql = "SELECT * FROM `traveldata`";
$result = mysqli_query($db_link, $sql);
$sql1 = "SELECT * FROM `traveldata` WHERE `t_class`=\"水上活動\"";
$result1 = mysqli_query($db_link, $sql1);
$sql2 = "SELECT * FROM `traveldata` WHERE `t_class`=\"潮間帶探索\"";
$result2 = mysqli_query($db_link, $sql2);
*/
if (isset($_POST["action"]) && ($_POST["action"] == "travel")) {
    $query_insert = "INSERT INTO t_orderdata (t_id) VALUES (?)";
    $stmt = $db_link->prepare($query_insert);
    //$stmt->bind_param("s",GetSQLValueString($_POST["t_name"], 'string'));
    $tmp = GetSQLValueString($_POST["t_name"], 'string');
    $stmt->bind_param("s", $tmp);
    $stmt->execute();
    $stmt->close();
    $db_link->close();
}

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
        <!-- 環境建置 -->
        <script src="scripts/jquery-3.4.1.slim.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="scripts/umd/popper.min.js"></script>
        <script src="scripts/bootstrap.min.js"></script>
        <script type="text/javascript" src="scripts/ican.js"></script>
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d49835d5bd6ff90"></script>
        <!-- 環境建置 -->
        <script type="text/javascript">
            $(function() {
                /*
                        //$(".btn1").on("click", function() {
                          //$(".day2").appendTo(".day1");
                        //});
                        // $(".t_class").change(function(){
                        //  $(".travellist").show();
                        //  });
                        
                          $("#show").attr("src",$("#imgr img").attr("src"));
                          $(".t_name").val("").change(function(){
                            var val=$(this);
                            $("#show").hide(1000,function(){
                              $(this).attr("src",val.attr("src"));
                            }).show(1500);
                          
                            //if($(this).val()=="小琉球海底觀光潛水船"){
                              //$("img").eq(0).show();
                           // }else if($(this).val()=="威尼斯海灘"){
                              //$("#imgr").children().eq(1).show();
                            }
                          );

                          $(function(){
                        $("#show").attr("src",$("#imgr img:first").attr("src"));
                      
                    $(".t_name").hover(function(){
                       
                        var img=$(this);
                        $("#big").hide(1500,function(){

                            $(this).attr("src",img.attr("src"));

                        }).show(2000);
                    });

                });
                     */
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
                    })
                })
            });
        </script>
        <title>ican</title>
        <style>
            #travel {

                border: 1px solid rgb(226, 182, 94);
            }

            .day1 {}

            .day2 {}

            img {
                width: 20%;
                height: ;
            }
        </style>
    </head>

    <body>
        <div id="travel">

            <form action="" method="POST" name="formJoin" id="formJoin" onSubmit="return checkForm();">
                <div style="text-align: center;">行程</div><br>
                <!--下拉式選單,選房型-->
                <select name="t_class" id="t_class">
                    <?php
                    $selectroomtype = ("SELECT DISTINCT `t_class` FROM `traveldata`");  //抓取r_type欄位
                    $roomtypelist = $db_link->query($selectroomtype);  //執行sql指令                       
                    for ($i = 0; $i < $roomtypelist->num_rows; $i++) {
                        $rst = $roomtypelist->fetch_assoc();
                        echo "<option value=" . $rst['t_class'] . ">" . $rst['t_class'] . "</option>";
                    }
                    ?>
                </select>
            
                </form>

            <br>

            <form name="model" id="model" method="GET" action="">
                <select name="t_name" id="t_name">

                </select>

                <input type="submit" id="search">
            
            </form>
            <?php
            $searchimg = ("SELECT `t_img` FROM `traveldata` WHERE `t_name` ='{$_GET['t_name']}'");
            $img = $db_link->query($searchimg);
            $resultimg = $img->fetch_assoc();
            echo "<div>" . "<img src=" . $resultimg['t_img'] . " >" . "</div>";
            ?>



        </div>
        <input name="action" type="hidden" id="action" value="travel">
        <input class="btn btn-success btn-sm" type="submit" name="Submit2" value="前往結帳">
        <input class="btn btn-info btn-sm" type="reset" name="Submit3" value="重設資料">
        <input class="btn btn-primary btn-sm" type="button" name="Submit" value="回上一頁" onClick="window.history.back();">
        </p>
        

<?php
//session_start();
//header('Content-Type: application/json; charset=UTF-8'); //設定資料類型為 json，編碼 utf-8
if ($_SERVER['REQUEST_METHOD'] == "POST") { //如果是 POST 請求

    if (isset($_POST["select"])) {
        include('connMysql.php');

        $select = $_POST["select"];
        $searchroom="SELECT `t_name` FROM `traveldata` WHERE `t_class`='$select'";
        
        $roommodellist = $db_link->query($searchroom); 

        for($i=0 ;$i < ($roommodellist->num_rows);$i++)
        {
            $rsm = $roommodellist->fetch_assoc();
            $res .="<option value=".$rsm['t_name'].">".$rsm['t_name']."</option>";
        }
        //$_SESSION["class"]=$select;
        echo $res;
         //echo json_encode(array(
             //'res' => $res
         //),JSON_UNESCAPED_UNICODE);      
    }  
 
}
/*
else {
    //回傳 errorMsg json 資料
    echo json_encode(array(
        'errorMsg' => '請求無效，只允許 POST 方式訪問！'
    ));
}*/
?>


    </body>

    </html>