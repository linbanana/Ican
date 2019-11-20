<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "會員資料";

    // 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

$sql = "SELECT 姓名, 電話, 信箱 FROM 會員資料";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        if($row["姓名"]!=""){
            echo "姓名:" . $row["姓名"]. "　　　phone: " . $row["電話"]. "　　　信箱:" . $row["信箱"]. "<br>";
        }else {
            echo "";
        }
        
    }
} else {
    echo "0 结果";
}
$conn->close();

?>


<html>
<head>
    <meta charset="utf-8">
    <title>temp範本</title>

</head>
<body>

    <form id="form1" name="form1" method="POST" action="se1.php">

        <table width="640" border="1">

            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <td width="220" align="center">會員帳號：</td>
                <td><input id="uid" name="uid" type="uid"></td>
            </tr>
            <tr>
                <td align="center">會員密碼：</td>
                <td><input id="upwd" name="upwd" type="password""></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input id="submit" name="submit" type="submit" value="送出資料">&nbsp;&nbsp;&nbsp;
                    <input id="reset" name="reset" type="reset" value="重設資料">
                </td>
            </tr>
        </table>

    </form>
</body>

</html>