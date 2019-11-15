<?php
require("connect.php");  //呼叫connect.php文件
//接收數值
$guestname=$_POST['guestname'];    
$guestgender=$_POST['guestgender'];
$guestphone=$_POST['guestphone'];
$guestemail=$_POST['guestemail'];
$guestcontent=$_POST['guestcontent'];
$guesttime=date("Y:m:d H:i:s",time()+28800);
//如果guestname資料存在,再輸入資料,避免先輸入空白資料
if(isset($guestname)){
    //將資料輸入到MySQL資料表中
    mysqli_query($con,"insert into guest value('','$guestname','$guestgender','$guestphone','$guestemail','$guestcontent','$guesttime')");   
}


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
<title>HTML Tutorial</title>


</head>
<body>
<style>
/*留言板部分*/
#content {
        color: rgb(13, 13, 14);
        background-color: rgb(177, 171, 167);
        width: 500px;
        height: 500px;
        margin:auto;
        padding-top: 200px;
        }
</style>
<!留言板>

<div id="content" align="center">
<form id="form1" name="form1" method="POST" action="">
 <table >
<tr>
<td width="160" align="center">會員名稱</td>
<td><input id="guestname" name="guestname" type="text"></td>
</tr>

<tr>
<td width="160" align="center">會員性別</td>
<td><input type="radio" name="guestgender" id="male" value="男">男<input type="radio" name="guestgender" id="female" value="女">女</td>
</tr>

<tr>
<td width="160" align="center">電話</td>
<td><input id="guestphone" name="guestphone" type="text"></td>
</tr>


<tr>
<td width="160" align="center">信箱</td>
<td><input id="guestemail" name="guestemail" type="text"></td>
</tr>

<tr>
<td width="160" align="center">留言內容</td>
<td><input id="guestcontent" name="guestcontent" type="text"></td>
</tr>

<tr>
<td><input id="submit" name="submit" type="submit" value="送出資料"></td>
</tr>

</table>
</form>

</div>
</body>
</html>