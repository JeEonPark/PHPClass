<?php
    $userid = $_GET['id'];

    $rv_id = $_POST['rv_id'];
    $subject = $_POST['subject'];
    $content = $_POST['content'];
    $day = date("Y-m-d (H:i)");
    $subject = htmlspecialchars($subject, ENT_QUOTES);
    $content = htmlspecialchars($content, ENT_QUOTES);

    if(!$userid) {
        echo "<script>
            alert('로그인 후 사용하세요.');
            history.go(-1);
        </script>";
    }

    $con = mysqli_connect("localhost", "root", "root", "sample3", 8889);
    $sql = "select * from members where id='$rv_id'";
    $rs = mysqli_query($con, $sql);
    $num = mysqli_num_rows($rs);
    if($num) { //상대방 아이디 있음
        $sql = "insert into message (send_id, rv_id, subject, content, regist_day) ";
        $sql .= "values ('$userid', '$rv_id', '$subject', '$content', '$day')";
        mysqli_query($con, $sql);
    } else { //상대방 아이디 없음
        echo "<script>
            alert('수신 아이디가 없습니다. 다시 입력해 주세요.');
            history.go(-1);
        </script>";
    }

    mysqli_close($con);

    echo "<script>
            location.href = 'index2.php';
        </script>";

?>