<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $scores = array(87, 76, 98, 87, 87, 93, 79, 85, 88, 63, 74, 84, 93, 89, 63, 99, 81, 70, 80, 95);
    $sum = 0;

    for ($a = 0; $a < count($scores); $a++) {
        $sum = $sum + $scores[$a];
    }
    $avg = $sum / count($scores);
    echo ("합계 : $sum, 평균 : $avg");

    echo "<hr>";

    for ($i = 0; $i <= 7; $i++) {
        $aa[$i] = $i + 2;
        echo $aa[$i] . " ";
    }


    for ($i = 0; $i <= 8; $i++) {
        $b[$i] = $i + 1;
        echo $b[$i] . " ";
    }

    echo "<hr>";

    for ($i = 0; $i < 9; $i++) {
        $c = $aa[0] * $b[$i];
        echo "$aa[0] x $b[$i] = $c<br>";
    }

    echo "<hr>";

    ?>

    <?php
    $num = array(28, 53, 29, 10, 38, 49);
    for ($j = 0; $j < count($num); $j++) {
        for ($i = 0; $i < count($num) - 1 - $i; $i++) {
            if ($num[$i] > $num[$i + 1]) {
                $tmp = $num[$i];
                $num[$i] = $num[$i + 1];
                $num[$i + 1] = $tmp;
            }
        }
    }

    for ($i = 0; $i < count($num); $i++) {
        echo $num[$i] . " ";
    }

    echo "done";

    ?>

    <?php
    $score = array(
        array(88, 98, 96, 77, 63),
        array(86, 77, 66, 86, 93),
        array(74, 83, 95, 86, 97)
    );
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 5; $j++) {
            echo "\$score[$i][$j] = " . $score[$i][$j] . "<br>";
        }
        echo "<br>";
    }

    for ($i = 0; $i < 3; $i++) {
        $sum = 0;
        for ($j = 0; $j < 5; $j++) {
            $sum = $sum + $score[$i][$j];
        }
        $avg = $sum / 5;
        $student_num = $i + 1;
        echo "$student_num 번 학생의 점수 => 합계 : $sum, 평균 :$avg <br>";
    }

    for ($i = 0; $i < 5; $i++) {
        $sum = 0;
        for ($j = 0; $j < 3; $j++) {
            $sum = $sum + $score[$j][$i];
        }
        $avg = $sum / 3;
        $l_num = $i + 1;
        echo "$l_num 번 과목의 점수 => 합계 : $sum, 평균 :$avg <br>";
    }



    echo "<hr>";

    function add($a, $b)
    {
        $c = $a + $b;
        return $c;
    }

    $result = add(3, 15);
    echo "3과 15의 합 : $result";


    echo "<hr>";

    function man_age($year, $month, $day, $b_year, $b_month, $b_day)
    {
        if ($b_month < $month) {
            $age = $year - $b_year;
        } elseif ($b_month == $month) {
            if ($b_day <= $day) {
                $age = $year - $b_year;
            } else {
                $age = $year - $b_year - 1;
            }
        } else {
            $age = $year - $b_year - 1;
        }

        return $age;
    }

    $bd = man_age(2021, 9, 28, 1999, 11, 29);
    echo "1999년 11월 29일 생의 만나이 : $bd";

    echo "<hr>";

    function cal_fee1($day, $age)
    {
        if ($day == "주간") {
            if ($age > 12 && $age < 65) {
                $money = 26000;
            } else {
                $money = 19000;
            }
        } else {
            if ($age > 12 && $age < 65) {
                $money = 21000;
            } else {
                $money = 16000;
            }
        }

        return $money;
    }

    function cal_fee2($day, $age)
    {
        if ($day == "주간") {
            if ($age > 12 && $age < 65) {
                $money = 33000;
            } else {
                $money = 24000;
            }
        } else {
            if ($age > 12 && $age < 65) {
                $money = 28000;
            } else {
                $money = 21000;
            }
        }
        return $money;
    }

    function cal_fee3($age)
    {
        if ($age > 12 && $age < 65) {
            $money = 55000;
        } else {
            $money = 40000;
        }
        return $money;
    }

    function cal_fee4($age)
    {
        if ($age > 12 && $age < 65) {
            $money = 54000;
        } else {
            $money = 40000;
        }
        return $money;
    }

    $category = 1;
    $age = 13;
    $day = "야간";

    if ($category == 1) {
        $fee = cal_fee1($day, $age);
        $cat = "일반 입장권";
    } elseif ($category == 2) {
        $fee = cal_fee2($day, $age);
        $cat = "자유 이용권";
    } elseif ($category == 3) {
        $fee = cal_fee3($age);
        $cat = "2일 자유 이용권";
    } elseif ($category == 4) {
        $fee = cal_fee4($age);
        $cat = "콤비권";
    }

    echo "- 구분 : $cat<br>";

    if ($category == 1 || $category == 2) {
        echo "- 주야간 : $day<br>";
    }

    echo "- 나이 : $age  세<br>";
    echo "- 입장료 : $fee 원";

    ?>


</body>

</html>