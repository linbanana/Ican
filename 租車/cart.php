<?php
//require_once("connMysql.php");
include("../connMysql.php");
//購物車開始
require_once("mycart.php");
session_start();
$cart =& $_SESSION['cart']; // 將購物車的值設定為 Session
if(!is_object($cart)) $cart = new myCart();
// 更新購物車內容
if(isset($_POST["cartaction"]) && ($_POST["cartaction"]=="update")){
	if(isset($_POST["updateid"])){
		$i=count($_POST["updateid"]);
		for($j=0;$j<$i;$j++){
			$cart->edit_item($_POST['updateid'][$j],$_POST['qty'][$j]);
		}
	}
	header("Location: cart.php");
}
// 移除購物車內容
if(isset($_GET["cartaction"]) && ($_GET["cartaction"]=="remove")){
	$rid = intval($_GET['delid']);
	$cart->del_item($rid);
	header("Location: cart.php");	
}
// 清空購物車內容
if(isset($_GET["cartaction"]) && ($_GET["cartaction"]=="empty")){
	$cart->empty_cart();
	header("Location: cart.php");
}
//購物車結束
//繫結產品目錄資料
/*
$query_RecCategory = "SELECT category.categoryid, category.categoryname, category.categorysort, count(product.productid) as productNum 
                      FROM category LEFT JOIN product ON category.categoryid = product.categoryid 
                      GROUP BY category.categoryid, category.categoryname, category.categorysort 
                      ORDER BY category.categorysort ASC";



                      
$RecCategory = $db_link->query($query_RecCategory);
//計算資料總筆數
$query_RecTotal = "SELECT count(productid)as totalNum FROM product";
$RecTotal = $db_link->query($query_RecTotal);
$row_RecTotal = $RecTotal->fetch_assoc();
*/
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>網路購物系統</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">

</head>

<body>
<table  width="780" border="0" align="center" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td height="80" align="center" background="images/mlogo.png" class="tdbline"></td>
  </tr>
  <tr>
    <td class="tdbline"><table width="100%" border="0" cellspacing="0" cellpadding="10">
      <tr valign="top">
        
        <td>
          <div class="subjectDiv"> 
            <span class="heading"><img src="images/16-cube-green.png" width="16" height="16" align="absmiddle"></span> 
              <p class="alert alert-primary">租車明細<p>
          </div>
          <div class="normalDiv">
		  <?php if($cart->itemcount > 0) {?>
          <form action="" method="post" name="cartform" id="cartform">
          <table class="table"   width="98%" border="" align="center" cellpadding="2" cellspacing="1">
          <thead class="thead-dark">
              <tr>
                <th bgcolor="#ECE1E1"><p>刪除</p></th>
                <th bgcolor="#ECE1E1"><p>產品名稱</p></th>
                <th bgcolor="#ECE1E1"><p>數量</p></th>
                <th bgcolor="#ECE1E1"><p>單價</p></th>
                <th bgcolor="#ECE1E1"><p>小計</p></th>
              </tr>
          <?php	foreach($cart->get_contents() as $item) { ?>              
              <tr>
                <td align="center" bgcolor="#F6F6F6" class="tdbline"><p><a href="?cartaction=remove&delid=<?php echo $item['id'];?>">移除</a></p></td>
                <td bgcolor="#F6F6F6" class="tdbline"><p><?php echo $item['info'];?></p></td>
                <td align="center" bgcolor="#F6F6F6" class="tdbline"><p>
                  <input name="updateid[]" type="hidden" id="updateid[]" value="<?php echo $item['id'];?>">
                  <input  name="qty[]" type="text" id="qty[]" value="<?php echo $item['qty'];?>" size="1">
                  </p></td>
                <td align="center" bgcolor="#F6F6F6" class="tdbline"><p>$ <?php echo number_format($item['price']);?></p></td>
                <td align="center" bgcolor="#F6F6F6" class="tdbline"><p>$ <?php echo number_format($item['subtotal']);?></p></td>
              </tr>
          <?php }?>
              <tr>
                <td align="center" valign="baseline" bgcolor="#F6F6F6"><p>雜費</p></td>
                <td valign="baseline" bgcolor="#F6F6F6"><p>&nbsp;</p></td>
                <td align="center" valign="baseline" bgcolor="#F6F6F6"><p>&nbsp;</p></td>
                <td align="center" valign="baseline" bgcolor="#F6F6F6"><p>&nbsp;</p></td>
                <td align="center" valign="baseline" bgcolor="#F6F6F6"><p>$ <?php echo number_format($cart->deliverfee);?></p></td>
              </tr>
              <tr>
                <td align="center" valign="baseline" bgcolor="#F6F6F6"><p>總計</p></td>
                <td valign="baseline" bgcolor="#F6F6F6"><p>&nbsp;</p></td>
                <td align="center" valign="baseline" bgcolor="#F6F6F6"><p>&nbsp;</p></td>
                <td align="center" valign="baseline" bgcolor="#F6F6F6"><p>&nbsp;</p></td>
                <td align="center" valign="baseline" bgcolor="#F6F6F6"><p class="redword">$ <?php echo number_format($cart->grandtotal);?></p></td>
              </tr>          
            </table>
            <hr width="100%" size="1" />
            <p align="center">
              <input class="btn btn-dark" name="cartaction" type="hidden" id="cartaction" value="update">
              <input class="btn btn-dark" type="submit" name="updatebtn" id="button3" value="更新購物車">
              <input class="btn btn-dark" type="button" name="emptybtn" id="button5" value="清空購物車" onClick="window.location.href='?cartaction=empty'">
              <input class="btn btn-dark" type="button" name="button" id="button6" value="前往結帳" onClick="window.location.href='checkout.php';">
              <input class="btn btn-dark" type="button" name="backbtn" id="button4" value="回上一頁" onClick="window.history.back();">
              <input class="btn btn-dark" type="button" name="button" id="button7" value="回租車頁面" onClick="window.location.href='scooter.php';">
              </p>
          </form>
          </div>          
            <?php }else{ ?>
            <div class="infoDiv">目前購物車是空的。</div>
            <input class="btn btn-dark" type="button" name="button" id="button7" value="回租車頁面" onClick="window.location.href='scooter.php';">
          <?php } ?></td>
        </tr>
    </table></td>
  </tr>
  
</table>
</body>
</html>
<?php //$db_link->close();?>