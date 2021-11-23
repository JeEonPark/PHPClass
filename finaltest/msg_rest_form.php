<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>답변 쪽지</title>
</head>
<body>
    <?php include "header.php"; ?>

    <?php
        $num = $_GET['num'];
        $con = mysqli_connect("localhost", "root", "root", "sample3", 8889);
        $sql = "select * from message where num='$num'";
        $rs = mysqli_query($con, $sql);
        $record = mysqli_fetch_array($rs);
        $sendid = $record['send_id'];
        $rvid = $record['rv_id'];
        $subject = $record['subject'];
        $content = $record['content'];

        $subject = "RE: ".$subject;
        $content = ">".$content;
        $content = str_replace("\n", "\n>", $content);
        $content = "\n\n\n\n\n---------------------------\n".$content;
    ?>
    <form name="rep_form" method="POST" action="msg_insert.php?id=<?=$userid?>">
        <div>보내는 사람 : <?=$userid?> </div>
        <div>받는 사람 : <?=$sendid?></div>
        <div>제목 : <input type="text" name=""</div>
        <div>내용 : </div>

        <input type="submit" value="답장하기">
    </form>

    <?php include "footer.php"; ?>
</body>
</html>