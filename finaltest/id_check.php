<h2>아이디 중복 체크</h2>

<?php
    $id = $_GET["id"];

    if($id) {
        $con = mysqli_connect("localhost", "root", "root", "sample3");
        $sql = "select id from logtable where id='$id'";
        $result = mysqli_query($con, $sql);

        $num = mysqli_num_rows($result);
        for($i = 0; $i < $num; $i++){
            $rs = mysqli_fetch_array($result);
            echo $rs["id"]."<br>";
        }

        $result2 = mysqli_fetch_array($result);
        $result3 = mysqli_fetch_array($result);
        

        echo "<hr>";
        print_r($result);
        echo "<hr>";
        print_r($result2);
        echo "<hr>";
        print_r($result3);


        $num = mysqli_num_rows($result);
        mysqli_close($con);

        echo "<hr>";

        if($num) {
            //아이디 이미 사용 중
            echo "이미 사용 중인 아이디 입니다.<br>";
            echo "다른 아이디를 사용해 주세요.<br>";
        } else {
            //아이디 사용 가능
            echo "사용 가능한 아이디 입니다.<br>";
        }
    } else {
        //아이디 공백
        echo "ID를 입력해 주세요.<br>";
    }
?>