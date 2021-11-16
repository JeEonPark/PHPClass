<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메시지 박스</title>
</head>
<body>
    <?php include "header.php"; ?>

    <?php
        $mode = $_GET['mode'];
        if($mode == "send"){
            $title = "송신 쪽지함 > 리스트";
            $sql = "select * from message where send_id='$userid' order by num desc";
        } else {
            $title = "수신 쪽지함 > 리스트";
            $sql = "select * from message where rv_id='$userid' order by num desc";
        }

        $con = mysqli_connect("localhost", "root", "root", "sample3", 8889);
        $rs = mysqli_query($con, $sql);
        $msg_num = mysqli_num_rows($rs);
    ?>
    
    <h3><?= $title ?></h3>
    <hr>
        <span>번호</span>
        <span>제목</span>||||||||||||||||
        <span>사람</span>
        <span>등록일</span>
        <hr>
        <?php
            $n = $msg_num;
            for($i = 0; $i < $msg_num; $i++) {
                $row = mysqli_fetch_array($rs);
                $num = $row['num'];
                $subject = $row['subject'];
                if($mode == 'send'){
                    $user = $row['rv_id'];
                } else {
                    $user = $row['send_id'];
                }
                $day = $row['regist_day'];
                ?>
                <span><?= $n ?></span>
                <span><a href="msg_view.php?mode=<?= $mode ?>&num=<?= $num ?>"><?= $subject ?></a></span>||||||||||||||||
                <span><?= $user ?></span>
                <span><?= $day ?></span>
                <hr>
                <?php
                $n--;
            }

            mysqli_close($con);
        ?>

        <button onclick="location.href='msg_box.php?mode=rv'">수신쪽지함</button>
        <button onclick="location.href='msg_box.php?mode=send'">송신쪽지함</button>
        <button onclick="location.href='msg_form.php'">쪽지보내기</button>

    <?php include "footer.php"; ?>
</body>
</html>