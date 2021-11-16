<?php
    $bool = $_POST["test"];
    if($bool == 1){
        $a = setcookie("a", "aaac");
    } else {
        $b = setcookie("b", "bbcb");
    }
?>
