<?php
    $bool = $_POST["test"];
    if($bool == 1){
        $a = setcookie("a", "aaaaa");
    } else {
        $b = setcookie("b", "bbbbb");
    }
?>
