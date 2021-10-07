<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>hello PHP</title>
        <style>
        </style>
    </head>

    <body>

        <style>
            table {
                border-collapse: collapse;
                width: 800px;
            }

            td {
                border: solid 1px gray;
                text-align: center;
                padding: 4px
            }
        </style>

        <h3> - 구구단 표 - </h3>
        <table>
            <tr>
                <td>2단</td>
                <td>3단</td>
                <td>4단</td>
                <td>5단</td>
                <td>6단</td>
                <td>7단</td>
                <td>8단</td>
                <td>9단</td>
            </tr>
            <?php
            for ($b = 1; $b <= 9; $b++) {
                echo "<tr>";
                for ($a = 2; $a <= 9; $a++) {
                    $c = $a * $b;
                    echo "<td> {$a} X {$b} = $c</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>

    </body>

</html>