<?php
    $bool = $_POST["test"];
    if($bool == 1){
        $a = setcookie("a", "aa");
    } else {
        $b = setcookie("b", "bb");
    }
?>
