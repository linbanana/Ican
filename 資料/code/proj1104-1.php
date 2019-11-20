<html xmlns=”http://www.w3.org/1999/xhtml”>
<body>
    <?php
    function Ranking($score6, $avgScore){
        sort($score6);
        $a2=array_reverse($score6);
        $a3=array_keys($a2,$avgScore);
        if($a3[0] == NULL)
            return "沒有此數值";
        else
            return ($a3[0]+1);
    }
    $name = array("學  號", "程式設計", "計算機概論", "網頁設計","資料庫", "系統分析");
    $score1 = array(9021131, 78, 98, 84, 70, 90);
    $score2 = array(9021132, 88, 90, 55, 69, 92);
    $score3 = array(9021133, 79, 92, 74, 81, 88);
    $score4 = array(9021134, 90, 78, 64, 33, 76);
    $score5 = array(9021135, 60, 68, 72, 76, 69);
    $score6 = array(84, 78.8, 82.8, 68.2, 69);//先計算好平均數，未來也可以寫程式自動計算
    $score = array($score1,$score2,$score3,$score4,$score5);
    echo "<table width=’500’ border=’1’>";
    echo "<tr>";
    for($i=0; $i<6; $i++){
        echo "<td align=’center’>$name[$i]</td>";
    }
    echo "<td> 平均分數</td>";
    echo "<td> 名 次</td>";
    echo "</tr>";
    for($i=0; $i<5; $i++) {
        echo "<tr>";
        $sum = 0;
        $item = $score[$i][0];
        echo "<td> $item </td>";
        for($j=1; $j<=5; $j++){
            $sum = $sum +$score[$i][$j];
            $item = $score[$i][$j];
            if ($item<60)
                echo "<td><b><font color='red'>$item</font></b></td>";
            else if ($item>89)
                echo "<td><b><font color='blue'>$item</font></b></td>";
            else
                echo "<td> $item </td>";
        }
        $ave = $sum/5;
        $rank=Ranking($score6, $ave);
        echo "<td>$ave</td>";
        echo "<td>$rank</td>";
        echo "</tr>";
    }
    echo "</table>";
   ?>
</body>

</html>