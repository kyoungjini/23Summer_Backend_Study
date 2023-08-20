<?php
    function hap($n) {
        $sum = 0;
        for ($i=1; $i<=$n; $i++)
            $sum += $i;

        echo $sum."<br>";
    }

    hap(10);        //1~10의 합
    hap(100);       //1~100의 합
?>