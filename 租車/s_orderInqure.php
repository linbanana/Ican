<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <!-- 環境建置 -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/ican.css" rel="stylesheet" />
    <!-- 環境建置 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">


<title>已完成租車</title>

</head>
<body>

<?php 
  include("../connMysql.php");
  
  session_start();

  $selectmember="SELECT `m_id` FROM `memberdata` WHERE `m_username`= '{$_SESSION["loginMember"]}'";
	$pick=$db_link->query($selectmember);
	$messagemember=$pick->fetch_assoc();    //抓資料庫的會員ID
        
     $m_id=$messagemember['m_id'];
  
  //$query_RecProduct = ;
 
  /*
  $stmt = $db_link->prepare("SELECT *
  FROM `s_orderdata`,`s_orderdetail`,`scooterdata` 
  WHERE s_orderdata.s_order_id=s_orderdetail.s_order_id
    AND s_orderdetail.s_id=scooterdata.s_id
    AND m_id=?
    order by s_orderdetid desc");
  
  
  if($stmt->execute(array($m_id))){
    while($row=$stmt->fetch()){
        echo "價格：{$row['s_unitprice']}<br>
              車：{$row['s_disc']}<br>";
    }
}
*/
$query_RecProduct ="SELECT *
FROM `s_orderdata`,`s_orderdetail`,`scooterdata` 
WHERE s_orderdata.s_order_id=s_orderdetail.s_order_id
  AND s_orderdetail.s_id=scooterdata.s_id
  AND m_id=?
  order by s_orderdetid desc" ;
$query= $db_link->prepare($query_RecProduct);
  $query->bind_param('i', $m_id);
  
  $query->execute();
$result = $query->get_result();
/*
while($row = $result->fetch_assoc()){
    echo    $row['s_orderdetid'].' - ' .$row['s_unitprice'] . ' - '. $row['s_disc'] .'<br>';
}
*/

/*
  $stmt->bind_param("i", $m_id);
  
  $stmt->execute();
  $RecProduct = $stmt->get_result();
  $row_RecProduct = $RecProduct->fetch_assoc();
   

  
  echo $messagemember['m_id']."<br>";
  echo $row_RecProduct['s_order_id']."<br>";
  echo $row_RecProduct['s_disc']."<br>";
*/
?>
<div class="alert alert-success" role="alert">你已完成的租車名單</div>
<table class="table table-striped">
<thead class="thead-dark">
    <tr>
      <th scope="col">車型</th>
      <th scope="col">車子</th>
      <th scope="col">單價</th>
      <th scope="col">數量</th>
      <th scope="col">總價</th>
    </tr>
  </thead>
  <?php
     while($row = $result->fetch_assoc()){
  ?>
   <tr>
     <td>
      <?php echo  $row['s_model']; ?>
     </td>
     <td>
      <?php echo  $row['s_disc']; ?>
     </td>
     <td>
      <?php echo  $row['s_unitprice']; ?>
     </td>
     <td>
      <?php echo  $row['s_quantity']; ?>
     </td>
     <td>
      <?php echo  $row['s_unitprice']*$row['s_quantity']; ?>
     </td>
    </tr>
  <?php  }; ?>
 

</table>
<input class="btn btn-dark" type="button" name="backbtn" id="button4" value="回租車頁面" onClick="window.history.back();">
</body>
</html>