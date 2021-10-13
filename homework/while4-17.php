<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>1부터 10까지 합</title>
        <style>
        </style>
    </head>

    <body>

    <?php
        $i = 1;
        $sum = 0;
        
        do {
            $sum += $i;
            $i++;
        } while ($i <= 10);

        echo "합계 : $sum";
    ?>

    </body>

</html>