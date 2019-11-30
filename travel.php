<?php
	require_once("connMysql.php");
function GetSQLValueString($theValue, $theType) {
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
$sql = "SELECT * FROM `traveldata`";
$result = mysqli_query($db_link, $sql);
$sql1 = "SELECT * FROM `traveldata` WHERE `t_class`=\"水上活動\"";
$result1 = mysqli_query($db_link, $sql1);
$sql2 = "SELECT * FROM `traveldata` WHERE `t_class`=\"冬季旅遊\"";
$result2 = mysqli_query($db_link, $sql2);
if(isset($_POST["action"])&&($_POST["action"]=="travel")){
		$query_insert = "INSERT INTO traveldata (t_name) VALUES (?)";
		$stmt = $db_link->prepare($query_insert);
    //$stmt->bind_param("s",GetSQLValueString($_POST["t_name"], 'string'));
    $tmp = GetSQLValueString($_POST["t_name"], 'string');
    $stmt->bind_param("s",$tmp);
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
    <title>ican</title>
</head>
<body>
<form action="" method="POST" name="formJoin" id="formJoin" onSubmit="return checkForm();">
   	
    <p><strong>水上活動</strong>：
     <!-- <input name="t_name" type="text" class="normalinput" id="t_name">-->
     
     <select name="t_name">
     <?php
     for($i=1;$i<=mysqli_num_rows($result1);$i++){
      $row_result1 = mysqli_fetch_assoc($result1);
     
     ?>
   <option value="<?php echo $row_result1['t_name'];?>"><?php echo $row_result1['t_name'];?></option>
     <?php } ?>

     </select> 
     
      <font color="#FF0000">*</font><br>
    </p>


    <p><strong>冬季旅遊</strong>：
     <!-- <input name="t_name" type="text" class="normalinput" id="t_name">-->
     
     <select name="t_name">
     <?php
     for($i=1;$i<=mysqli_num_rows($result2);$i++){
      $row_result2 = mysqli_fetch_assoc($result2);
     
     ?>
   <option value="<?php echo $row_result2['t_name'];?>"><?php echo $row_result2['t_name'];?></option>
     <?php } ?>

     </select> 
     
      <font color="#FF0000">*</font><br>
    </p>		

    <input name="action" type="hidden" id="action" value="travel">
    <input class="btn btn-success btn-sm" type="submit" name="Submit2" value="前往結帳">
    <input class="btn btn-info btn-sm" type="reset" name="Submit3" value="重設資料">
    <input class="btn btn-primary btn-sm" type="button" name="Submit" value="回上一頁" onClick="window.history.back();">
  </p>
</form>



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