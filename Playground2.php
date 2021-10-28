<?php
    $bool = $_POST["test"];
    if($bool == 1){
        $a = setcookie("a", "aaaa");
    } else {
        $b = setcookie("b", "bbbb");
    }
?>
