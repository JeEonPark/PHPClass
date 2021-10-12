<?php
/*
    if(isset($_COOKIE["userid"])) {
        $userid = $_COOKIE["userid"];
        echo "userid: ".$userid."<br>";
    }

    if(isset($_COOKIE["username"])) {
        $username = $_COOKIE["username"];
        echo "username: ".$username;
    }
    */

    session_start();
    if(isset($_SESSION["userid"])){
        $id = $_SESSION["userid"];
        echo $id."<br>";
    }
    if(isset($_SESSION["password"])){
        $ps = $_SESSION["password"];
        echo $ps."<br>";
    }

?>