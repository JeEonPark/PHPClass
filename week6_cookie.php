<?php
/* //쿠키
    $a = setcookie("userid", "rubato");
    $b = setcookie("username", "jeeonpark", time() + 20);
    setcookie("userid", "", time() - 3600);

    if($a and $b) {
        echo "쿠키 생성 완료";
        echo "<br> userid: ".$a."<br>";
        echo "username: ".$b."<br>";
    }
    */

    //세션
    session_start();

    $_SESSION["userid"] = "park";
    $_SESSION["password"] = "1234";

    echo "<br>userid : ".$_SESSION['userid']."<br>";
    echo "<br>pass : ".$_SESSION['password']."<br>";

    unset($_SESSION["password"]);
    session_unset();

?>