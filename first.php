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
        <h2>asd</h2>
        <hr>
        <span>
        <?php
            echo "<div>asdff</div>";
            $a = 10;
            $b = 21;
            $c = $a + $b;
            echo "$c<br>"; //<> 는 태그라서 분류 가능

            $a = 12.5;
            $c = $a * 3;
            echo '$c<br>';

            $fruit = "orange";
            
            echo "{$fruit}띄어쓰기!";
        ?>
        </span>
        <img src="images/img.jpg" width=100>
        <?php
            $filename = "images/img.jpg";
            echo "<img src='$filename' width=100>";

            $id = "park";
            $name = "jeeon";
        ?>

        <table border="1">
            <tr><td>ID</td><td>Name</td></tr>
            <tr>
                <td><?php echo $id ?></td><td><?= $name ?></td>
            </tr>
        </table>
        <hr>
        <?php
            $a = 5;
            echo $a."<br>";
            $a += 3;
            echo $a."<br>";
            $a -= 4;
            echo $a."<br>";
            $a *= 2;
            echo $a."<br>";
            $a /= 5;
            echo $a."<br>";
            $a %= 5;
            echo $a."<br>";
            $a = "딸기";
            $a .= "주스";
            echo $a."<br>";
        ?>

        <hr>

        <?php
            $num = 30;
            $result = "$num"."은 3의 배수도 5의 배수도 아님";

            if($num % 3 == 0){
                $result = "$num"."은 3의 배수 임.";
            }
            if($num % 5 == 0){
                $result = "$num"."은 5의 배수 임."; 
            }
            if($num % 3 == 0 && $num % 5 == 0){
                $result = "$num"."은 3의 배수 임. + 5의 배수임";
            }

            echo $result;
        ?>

        <?php

            //체중 조절 필요 판변 몸무게가 키 - 100 * 0.9 보다 크면 체중조절필요

            $h = 174;
            $w = 60;
            $a = ($h - 100) * 0.9;
            echo "키 : $h <br>";
            echo "몸무게 : $w <br>";
            if($w > $a){
                echo "체중 조절이 필요합니다. <br>";
            } else {
                echo "체중 조절이 필요하지 않습니다. <br>";
            }
        ?>

        <?php
            $age = 68;
            $welfare = "no";
            $youkong = "yes";
            $after = "no";

            if($age < 3){
                $fee = "무료";
            } elseif(($age >= 3 && $age <=13) || ($after == "yes")) {
                $fee = "4,000원";
            } elseif (($age >= 14 && $age <=18) || ($age >=70) || ($welfare == "yes") || ($youkong == "yes")){
                $fee = "8,000원";
            } else {
                $fee = "10,000원";
            }

            echo "복지카드 소지 : $welfare<br>";
            echo "국가유공자증 소지 : $youkong<br>";
            echo "17시 이후 입장 : $after<br>";
            echo "나이 : $age<br>";
            echo "입장료 : $fee";
        ?>

        <?php
            $now_year = 2021;
            $now_month = 9;
            $now_day = 14;
            $birth_year = 1999;
            $birth_month = 11;
            $birth_day = 29;
            
            if($birth_month < $now_month){
                $age = $now_year - $birth_year;
            } elseif($birth_month == $now_month) {
                if($birth_day <= $now_day){
                    $age = $now_year - $birth_year - 1;
                } else {
                    $age = $now_year - $birth_year - 1;
                }
            } else {
                $age = $now_year - $birth_year - 1;
            }
            echo "나이".$age;
            echo "출생년월일".$birth_year.".".$birth_month.".".$birth_day;
            echo "현재년월일".$now_year.".".$now_month.".".$now_day;
        ?>
    </body>
</html>
