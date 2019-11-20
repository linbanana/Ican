<?php

    $cust2=array(array("uid"=>"bk001","una"=>"大澎澎","bal"=>10),array("uid"=>"bk002","una"=>"中澎澎","bal"=>5),array("uid"=>"bk003","una"=>"小澎澎","bal"=>1));

    foreach($cust2 as $cdata){

        echo  "客戶編號：".$cdata["uid"]."\t客戶名稱：".$cdata["una"]."\t存款餘額：".$cdata["bal"]."<br>";

    }

    echo "<br>99乘法表<br>";
    for($i=1;$i<=9;$i++){
        for($j=1;$j<=9;$j++){
            if($i*$j<=9){
                echo $j."*".$i."=0".$i*$j."&nbsp;&nbsp;"; 
            }else{
                echo $j."*".$i."=".$i*$j."&nbsp;&nbsp;";            
            }
            
        }
        echo "<br>";
    }

    for($i=0;$i<11;$i++){
        for($j=0;$j<11;$j++){
            if($i>=(5-$j) && ($i-$j<=5) && ($j-$i<=5) && ($i<=(15-$j)) )           
                echo "*";
            else{ 
                echo "_";   
            }         
        }
        echo "<br>";        
    }  




   
?>