<?php
    $a = setcookie("userid", "rubato");
    $b = setcookie("username", "jeeonpark");

    if($a and $b) {
        echo "쿠키 생성 완료";
        echo "<br> userid: ".$a."<br>";
        echo "username: ".$b."<br>";
    }

?>