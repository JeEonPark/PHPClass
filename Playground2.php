<?php
    $bool = $_POST["test"];
    if($bool == 1){
        $a = setcookie("a", "aaa");
    } else {
        $b = setcookie("b", "bbb");
    }
?>
