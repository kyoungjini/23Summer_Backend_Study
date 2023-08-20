<?php
    session_start();
    $_SESSION["userid"] = "hong123";
    $_SESSION["username"] = "경지니지니";
    
    echo "<script>
            location.href = 'session_page.php';
        </script>";
?>