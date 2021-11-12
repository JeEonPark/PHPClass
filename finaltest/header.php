<h2> header page </h2>
<hr>

<?php
    session_start();
    if(isset($_SESSION["userid"])) {
        $userid = $_SESSION["userid"];
    } else {
        $userid = "";
    }
?>

<?php

    if($userid) { //로그인 중
        echo "$userid | ";
        echo "<a href='logout.php'>로그아웃</a> | ";
        echo "<a href='modify_form.php'>정보수정</a>";
    } else { //로그인 전
?>

<a href="member_form.php">회원가입</a> | 
<a href="login_form.php">로그인</a>

<?php
    }

?>

<hr>
<?php
    $i = 100;

?>