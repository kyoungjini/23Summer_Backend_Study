<?php
    for ($i=1; $i<=9; $i++) {
        for ($j=1; $j<=9-$i; $j++) {
            echo "&nbsp;";  //&nbsp는 공백을 나타내는 특수 문자
        }
        for ($j=1; $j<=$i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
?>