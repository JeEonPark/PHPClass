<?php
    if(isset($_COOKIE["userid"])) {
        $userid = $_COOKIE["userid"];
        echo "userid: ".$userid."<br>";
    }

    if(isset($_COOKIE["username"])) {
        $username = $_COOKIE["username"];
        echo "username: ".$username;
    }
?>