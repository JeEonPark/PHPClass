<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원 정보 수정</title>
</head>
<body>
    <?php include "header.php"; ?>

    <?php
        $con = mysqli_connect("localhost", "root", "root", "sample3", 8889);
        $sql = "select * from logtable where id='$userid'";
        $rs = mysqli_query($con, $sql);
        $info = mysqli_fetch_array($rs);
        // $info['id'], $info['pass']
        mysqli_close($con);
    ?>

    <form name=fo method=POST action="modify.php?id=<?= $userid ?>">
        <div>아이디 : <?= $userid ?></div>
        <div>패스워드 : 
            <input type=password name=pass value=<?= $info['pass'] ?>>
        </div>

        <input type=submit value="변경하기">
    </form>

    <?php include "footer.php"; ?>
</body>
</html>