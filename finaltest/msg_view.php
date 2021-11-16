<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>쪽지 내용 보기</title>
</head>
<body>
    <?php include "header.php" ?>
    
    <?php
        $mode = $_GET['mode'];
        $num = $_GET['num'];
        if($mode == "send") {
            $title = "송신 쪽지 > 내용 보기";
        } else {
            $title = "수신 쪽지 > 내용 보기";
        }
        $con = mysqli_connect("localhost", "root", "root", "sample3", 8889);
        $sql = "select * from message where num='$num'";
        $rs = mysqli_query($con, $sql);
        $record = mysqli_fetch_array($rs);

        $subject = $record['subject'];
        $content = $record['content'];
        $day = $record['regist_day'];
        if($mode == "send") {
            $user = $record['rv_id'];
        } else {
            $user = $record['send_id'];
        }
    ?>
    <h3><?= $title ?></h3>
    제목 : <?= $subject ?> |||||||||||| <?= $user ?> | <?= $day ?>
    <hr>
    <?= $content ?>
    <hr>
    <button onclick="location.href='msg_box.php?mode=rv'">수신쪽지함</button>
    <button onclick="location.href='msg_box.php?mode=send'">송신쪽지함</button>

    <?php include "footer.php" ?>
</body>
</html>