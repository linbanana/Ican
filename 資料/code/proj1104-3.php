<?php
    $width = $_GET["width"];
    $height = $_GET["height"];
    $fields = $_GET["fields"];
    $cols= $_GET["cols"];

    echo "<table width='$width' height='$height' border='1'>";
    for ($i=0;$i<$cols;$i++){
        echo "<tr>";
        for ($j=0;$j<$fields;$j++)
            echo "<td></td>";
        echo "</tr>";
    }
    echo "</table>"
?>