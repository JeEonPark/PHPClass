<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>정수 중 3의 배의 합</title>
        <style>
        </style>
    </head>

    <body>
        
        <?php
            $sum = 0;
            $i = 100;
            while($i <= 300) {
                if ($i % 3 == 0){
                    $sum = $sum +$i;
                }
                $i++;
            }

            echo "100 ~ 300까지의 정수 중 3의 배의 합  : $sum";
        ?>

    </body>
</html>