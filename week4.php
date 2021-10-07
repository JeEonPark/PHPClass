<?php
    $sum = 0;
    for($i = 1; $i <= 10; $i++){
        $sum += $i;
    }
    echo $sum."asdf<br>";

    $sum = 0;
    $i = 1;
    while($i <= 10){
        $sum += $i;
        $i++;
    }
    echo $sum."<br>";
    echo "<hr>";
?>