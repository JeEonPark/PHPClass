<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>섭씨에서 화씨로 온도 변화</title>
        <style>
        </style>
    </head>

    <body>

        <h3>섭씨 -> 화씨 온도 변화</h3>
        <table border="1" width="300">
            <tr align="center">
                <td width="150">섭씨</td>
                <td>화씨</td>
            </tr>
            <?php
            for ($c = -15; $c <= 36; $c = $c + 5) {
                $f = $c * 9 / 5 + 32;
                echo "<tr align = 'center'><td>$c</td><td>$f</td></tr>";
            }
            ?>
        </table>

    </body>

</html>