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
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">

<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("connect.php");
	$seldb = @mysqli_select_db($mysqli, "ican2");
	if (!$seldb) die("資料庫選擇失敗！");
	$sql_query = "SELECT * FROM scooterdata";
	$result = mysqli_query($mysqli, $sql_query);	
	
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




<?php 

for($i=0;$i<mysqli_num_rows($result);$i++){
	$rs=mysqli_fetch_assoc($result);
//while($row_RecProduct=$RecProduct->fetch_assoc()){ 
?>

<div class="albumDiv">

<div class="picDiv"><a href="product.php?id=<?php echo $rs['s_id']; //抓ID 到product.php?>">
                <?php if($rs['s_price']==""){?>
                <img src="images/nopic.png" alt="暫無圖片" width="120" height="120" border="0" />
                <?php }else{?>


                
                <div >
                <img src="https://picsum.photos/<?php echo ($i+1)*100 ?>/<?php echo ($i+1)*100 ?>/?random=0" class="d-block w-100 rounded-pill"  width="135" height="135"  border="0">
                </div>
                
                <?php }?>
                </a></div>
              <div class="albuminfo alert alert-primary"><a href="product.php?id=<?php echo $rs['s_id']; //抓ID 到product.php?>"><?php echo $rs['s_model'];?></a><br />
                <span class="smalltext">特價 </span><span class="redword"><?php echo $rs['s_price'];?></span>
				<span class="smalltext"> 元</span> 
                
                <div><?php 
			    if($rs['s_num']>0){
					echo "<div class='badge badge-primary text-wrap'>";
					echo '可租借';
					echo "</div>";
				
				}  
				else echo '已全數租出';?>
			</div></div>

            </div>
			
		
            </div>
            


<?php    }?>