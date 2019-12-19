<?php 
include("../connMysql.php");
//if(isset($_POST["customername"]) && ($_POST["customername"]!="")){
	//購物車開始
	require_once("mycart.php");
	session_start();
	$cart =& $_SESSION['cart']; // 將購物車的值設定為 Session
	if(!is_object($cart)) $cart = new myCart();
	//購物車結束	
	//新增訂單資料
	
	
	
	$selectmember="SELECT `m_id` FROM `memberdata` WHERE `m_username`= '{$_SESSION["loginMember"]}'";
	$pick=$db_link->query($selectmember);
	$messagemember=$pick->fetch_assoc();    //抓資料庫的會員ID

	$sql_query = "INSERT INTO s_orderdata (m_id,total) 
				   VALUES (?,?)";
	$stmt = $db_link->prepare($sql_query);
	$stmt->bind_param("is",$messagemember['m_id'],$cart->total);

	$stmt->execute();
	//取得新增的訂單編號
	$o_pid = $stmt->insert_id;
	$stmt->close();
	//新增訂單內貨品資料
	if($cart->itemcount > 0) {
		foreach($cart->get_contents() as $item) {
			
			$sql_query="INSERT INTO s_orderdetail (s_order_id ,s_id,s_unitprice ,s_quantity) VALUES (?, ?,  ?, ?)";
			$stmt = $db_link->prepare($sql_query);
			
			$stmt->bind_param("iiii", $o_pid, $item['id'],  $item['price'], $item['qty']);
			$stmt->execute();
			$stmt->close();
		}
	}
	
	//清空購物車
	$cart->empty_cart();
	
//}	
?>
<script language="javascript">
alert("租借中，系統已寫入。");
window.location.href="scooter.php";
</script>