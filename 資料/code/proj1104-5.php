<html xmlns=”http://www.w3.org/1999/xhtml”>
<body>
    <?php
    $week = array("星期一","星期二","星期三","星期四","星期五","星期六","星期日");
    $first=$_GET["first"];       // 第一天是星期幾
    $monthday=$_GET["monthday"];     // 這個月有幾天
    $satColor=$_GET["satColor"];
    $sunColor=$_GET["sunColor"];
    echo "<table width='400' border='1'>";
    echo "<tr>";
    for($i=0; $i<7; $i++)
        echo "<td align='center'>$week[$i]</td>";
    echo "</tr>";
    echo "<tr>";
    $now = 0;// 目前印到星期幾，預設為0
    for($i=1; $i<$first; $i++){      // 列印出第一週前面的空白(決定於first)
        echo "<td>   </td>";
        $now = $now + 1;            //目前印到星期幾
    }
    $day = 1;
    while ($day <= $monthday) {                //從每月的第 1 日開始輸出
        
        $now = $now + 1;
        if (($now % 6) == 0){
            echo "<td bgcolor=$satColor> $day </td>";
        }else if(($now % 7) == 0){
            echo "<td bgcolor=$sunColor> $day </td>";
        }else
            echo "<td> $day </td>";
        if (($now % 7) == 0){          // 是否已到星期日
            echo "</tr>";         // 如果是這行結束再開新行
            echo "<tr>";
            $now = 0;          //印到每週的第幾天，歸 0 開始計算
        }
        $day = $day + 1;
    }                              // 所有日數填寫完

    while ($now <7){            //印到星期幾，後面印空格
        echo "<td>    </td>";
        $now = $now + 1;
    }
    echo "</tr>";
  ?>
  </body>
  </html>