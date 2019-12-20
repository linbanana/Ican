<?php 
error_reporting(0);
session_start();
//判斷是否有登入
if(!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"]=="")){
   echo "<script>alert('尚未登入')</script>";
   header("Location: ../login.php");
  
}
	header("Content-Type: text/html; charset=utf-8");
	include("../connMysql.php");
	/*
	$seldb = @mysqli_select_db($mysqli, "ican2");
	if (!$seldb) die("資料庫選擇失敗！");
	*/
	$sql_query = "SELECT * FROM scooterdata";
	$result = mysqli_query($db_link, $sql_query);	
	
	/*
	 for($i=0;$i<mysqli_num_rows($result);$i++){
       $rs=mysqli_fetch_assoc($result);
        echo "車型:".$rs['s_model']."<br>";
        echo "描述:".$rs['s_disc']."<br>";
		echo "價格:".$rs['s_price']."元<br>";
        if($rs['s_num']>0){
			
			 echo '可租借'."<br>";
		}  
        else {
			echo '已全數租出'."<br>";
		}
        echo "<hr />";
	 }
	 */

	 
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
</head>
<body>
    <?php
    include("../layouts/header.php");
    ?>
<style type="text/css">
.albumDiv {
	float: left;
	height: 200px;
	width: 200px;
	text-align: center;
	margin-right: 22px;
	margin-bottom: 5px;
	
}
.albumDiv .albuminfo {
	font-family: "微軟正黑體";
	font-size: 11pt;   
}
.smalltext {
	font-size: 11px;
	color: #999999;
	font-family: Georgia, "Times New Roman", Times, serif;
	vertical-align: baseline;
}
.actionDiv{
	background-color: rgba(250, 235, 215, 0.8);
}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">

<div class="actionDiv" style="text-align:center;">
	<a style="font-size:large;" class="btn btn-info  badge badge-primary text-wrap" href="cart.php">我的租車</a>
	<a style="font-size:large;" class="btn btn-info  badge badge-primary text-wrap" href="s_orderInqure.php">已完成的訂單</a>
</div>
<div class="actionDiv">
<?php 

for($i=0;$i<mysqli_num_rows($result);$i++){
	$rs=mysqli_fetch_assoc($result);
//while($row_RecProduct=$RecProduct->fetch_assoc()){ 
?>

<div class="card mb-3 " style="margin-left: 10%;margin-right:10%;">
  <div class="row no-gutters ">
    <div class="col-md-4 ">
      <!--<img src="..." class="card-img" alt="...">-->
      <a href="product.php?id=<?php echo $rs['s_id']; //抓ID 到product.php?>">
                <?php if($rs['s_price']==""){?>
                <img src="images/nopic.png" alt="暫無圖片" width="100%" height="100%" border="0" />
                <?php }else{?>
                <img class="card-img" src="img/<?php echo $rs['s_id'];?>.jpg" alt="<?php echo $rs["s_model"];?>" 
				width="100%" height="100%" border="0"/>              
                <?php }?>
                </a>
    </div>
    <div class="col-md-8 ">
      <div class="card-body">
        <h1 class="card-title"><?php echo $rs['s_model'];?></h1>
        <p class="card-text badge badge-pill badge-secondary">特價<?php echo $rs['s_price'];?>元</p>
        <h3 class="card-title font-weight-light alert alert-primary"><?php echo $rs['s_disc'];?></h1>

        <h3 class="card-title"><?php 
			    if($rs['s_num']>0){
                    /*
					//echo "<div class='badge badge-primary text-wrap'>";
				    echo "<buttom class='badge badge-light text-wrap'>";
			        echo '可租借';
					echo "</buttom>";
					*/
					echo "<buttom class='badge badge-warning text-wrap'>";
					$s_id=$rs['s_id'];
					echo "<a href='product.php?id=$s_id'>";
			        echo '可租借';
					echo "</buttom>";	
				}  
				else echo '已全數租出';
                                
                      ?></h3>
      </div>
    </div>
  </div>
</div>
<?php    }?>
</div>
    <?php
    include("../layouts/footer.php");
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