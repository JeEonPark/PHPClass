<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>쪽지 보내기</title>
</head>
<body>
    <?php include "header.php"; ?>
    <?php
        if(!$userid) {
            echo "<script>
                alert('로그인 후 사용하세요.');
                history.go(-1);
            </script>";
        }
    ?>
    <h3>쪽지 페이지</h3>
    <span><a href="msg_box.php?mode=rv">수신 쪽지함</a></span> | <span><a href="msg_box.php?mode=send">송신 쪽지함</a></span>
    <hr>
    <form name=msg_form method="POST" action="msg_insert.php?id=<?= $userid ?>">
        <div>보내는 사람 : <?= $userid ?></div>
        <input type=hidden name=id value=<?= $userid ?>>
        <div>받는 사람 : <input type="text" name="rv_id"></div>
        <div> 제 목 <input type="text" name="subject"></div>
        <div> 내 용 <textarea name=content></textarea></div>

        <input type=submit value="보내기">
    </form>

    <?php include "footer.php"; ?>
    
</body>
</html>