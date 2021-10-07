<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Board</title>
</head>
<body>
    <?php
        $table1 = "free";
        $table2 = "qna";
    ?>
    <h3>자유 게시판</h3>
    <a href="week5_bd_view.php?table=<?= $table1 ?>$type=list">목록보기</a>
</body>
</html>