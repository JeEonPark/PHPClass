<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>사용자 로그인 페이지</title>
</head>
<script>
    function check_id(){
        //alert("아이디 체크");
        id = document.getElementById("in").value;
        window.open("id_check.php?id="+id, "IDCheck", "left=500, width=300, height=300");
    }
</script>
<body>
    <?php include "header.php"; ?>
    <form name=fo method=POST action=member.php>
        <div>아이디 : <input type=text placeholder="ID" name="id" id="in">
            <input type=button value="아이디 중복 체크" onclick="check_id()">
        </div>

        <div>패스워드 : <input type="password" placeholder="비밀번호" name="ps"></div>

        <input type="submit" value="가입하기">
    </form>
    <?php include "footer.php"; ?>
</body>
</html>