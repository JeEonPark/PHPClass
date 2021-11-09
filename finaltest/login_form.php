<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
</head>
<body>
    <?php include "header.php"; ?>

    <form name=fo method=POST action=login.php>
        <div>아이디 : <input type=text name=id></div>
        <div>패스워드 : <input type=password name=ps></div>
        <input type=submit value="로그인">
    </form>

    <?php include "footer.php"; ?>
</body>
</html>