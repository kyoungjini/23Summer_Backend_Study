<?php      
    $x = 'apple';          // 문자열
    $y = "사과";         // 문자열(한글은 한 글자가 3바이트로 표현된다.)
    var_dump($x);   //결과1
    echo "<br>";
    var_dump($y);
    var_dump("apple");  //이렇게 써도 결과1과 같이 출력된다.
?>