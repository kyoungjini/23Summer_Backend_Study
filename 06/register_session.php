<?php
    // 세션을 사용하는 모든 페이지에서 session_start()를 실행하여야 함
    session_start();
    $_SESSION["username"] = "경지니";

    echo "세션 등록!";
?>