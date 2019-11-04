<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

        <style>
            table{
                width: 640px;
                border: 5px solid #000;
                text-align:center;
                border-collapse:collapse;
            }

            td{
                margin-right: -5em;
                border: 5px solid #000;
                transition: .5s;
            }

        </style>
    </head>
    <body>
        <?php
            $student = array(array("9021131" ,98 , 84 , 72 ,90 ,78),
                            array("9021132" ,90 , 80 , 92 ,92 ,88),
                            array("9021133" ,92 , 74 , 88 ,88 ,79),
                            array("9021134" ,78 , 44 , 94 ,76 ,90),
                            array("9021135" ,68 , 72 , 76 ,69 ,60));
        ?>
        <form action="se1.php" method="post" id="form1" name="form1">
            <table>
            <?php    
                echo "<tr>
                        <th>學號</th>
                        <th>程式設計</th>
                        <th>計算機概論</th>
                        <th>資料庫</th>
                        <th>系統分析</th>
                        <th>網頁設計</th>
                        <th>平均成績</th>
                        <th>名次</th>
                    </tr>";
                $sum[] = "";
                foreach($student as $ppp){
                    for($i=0;$i<count($ppp);$i++){
                        if($i!=0)
                            $sum[$i] += $ppp[$i];
                    } 
                }



                foreach($student as $ppp){
                    echo "<tr>";
                    for($i=0;$i<count($ppp);$i++){
                        if($i!=0){
                            if($ppp[$i]>90)
                                echo "<td style='color:blue;'>".$ppp[$i]."</td>";
                            else if($ppp[$i]<60)
                                echo "<td style='color:red;'>".$ppp[$i]."</td>";
                            else
                                echo "<td>".$ppp[$i]."</td>";
                        }else{
                            echo "<td>".$ppp[$i]."</td>";
                        }
                        
                    }   
                    echo "<td>".($sum[]/5)."</td>";
                    echo "</tr>";
                    $sum = 0;
                }
                
            ?> 
                    
                
            </table>
        </form>

    </body>
</html>