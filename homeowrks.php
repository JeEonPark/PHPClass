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
    $score = array(
        array(88, 98, 96, 77, 63),
        array(86, 77, 66, 86, 93),
        array(74, 83, 95, 86, 97)
    );

    $average = array();
    //각 평균 계산
    for ($i = 0; $i < 3; $i++) {
        $average[$i] = ($score[$i][0] + $score[$i][1] + $score[$i][2] + $score[$i][3] + $score[$i][4]) / 5;
    }
    $average_past = $average;
    //평균 나온 값 Sort
    for ($j = 0; $j < count($average); $j++) {
        for ($i = 0; $i < count($average) - 1 - $i; $i++) {
            if ($average[$i] > $average[$i + 1]) {
                $tmp = $average[$i];
                $average[$i] = $average[$i + 1];
                $average[$i + 1] = $tmp;
            }
        }
    }
    $best_student = 0;
    for ($i = 0; $i < 3; $i++){
        if($average[2] == $average_past[$i]){
            $best_student = $i;
        }
    }

    echo "$best_student 번 인덱스의 학생이 $average[2]의 점수를 획득하여 가장 높습니다.<br>";

    $average2 = array();
    //각 평균 계산
    for ($i = 0; $i < 5; $i++) {
        $average2[$i] = ($score[0][$i] + $score[1][$i] + $score[2][$i]) / 3;
    }
    
    $average2_past = $average2;
    //평균 나온 값 Sort
    for ($j = 0; $j < count($average2); $j++) {
        for ($i = 0; $i < count($average2) - 1 - $i; $i++) {
            if ($average2[$i] > $average2[$i + 1]) {
                $tmp = $average2[$i];
                $average2[$i] = $average2[$i + 1];
                $average2[$i + 1] = $tmp;
            }
        }
    }
    $best_subject = 0;
    for ($i = 0; $i < 5; $i++){
        if($average2[4] == $average2_past[$i]){
            $best_subject = $i;
        }
    }

    echo "$best_subject 번 인덱스의 과목이 $average2[2]의 점수를 획득하여 가장 높습니다."

    
    ?>


</body>

</html>