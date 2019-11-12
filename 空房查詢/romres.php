<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>空房查詢</title>
<style type="text/css">
	#back{
      margin-left: 330px;
	}
    #home{
      margin-left: 580px;
    }

</style>

</head>

<body>

<div style="width: 700px;height: 300px;background-color: palegoldenrod;
position: absolute;     /*絕對位置*/
top: 50%;               /*從上面開始算，下推 50% (一半) 的位置*/
left: 50%;
margin-top: -150px;     /*高度的一半*/
margin-left: -350px;    /*寬度的一半*/
">
<?php
$rnum=$_POST['rnum'];
$in=$_POST['indat'];
$out=$_POST['outdat'];
?>
    <p style="text-align: center;">空房查詢</p>
        <div style="padding-left: 50px">
        <table width="600px;" border="1">
        	<tr>
        		<td>你所查詢的房型<?php echo $rnum;?></td>
        		<td>你在<?php echo $in; ?>預計要入住</td>
        		<td>你在<?php echo $out; ?>預計要退房</td>
        	</tr>
        </table>
            <div style="margin-top: 150px">
            	<table width="600px;" border="0">
        	      <tr><td><input type="button" value="回首頁" onclick="location.href='#'"></td>
        		      <td><input type="button" value="重新查詢" onclick="location.href='romres1.php'"></td>
        		  </tr>
                </table>
            </div>
        </div>
</div>
</body>
</html>
