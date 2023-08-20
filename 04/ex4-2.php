<?php
    $string = "php is fun.";

    $length = strlen($string);
    echo $length."<br>";        //$length = 11

    $string2 = str_replace("php", "PHP", $string);
    echo $string2."<br>";       //$string2 = "PHP is fun."
?>