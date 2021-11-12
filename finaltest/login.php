<?php
    $id = $_POST["id"];
    $pass = $_POST["ps"];

    $con = mysqli_connect("localhost", "root", "root", "sample3", 8889);
    $sql = "select * from logtable where id='$id'";
    $result = mysqli_query($con, $sql);

    $rs_n = mysqli_num_rows($result);
    if($rs_n) { //id 있음
        $user = mysqli_fetch_array($result);
        $db_pass = $user["pass"];
        
        if($pass != $db_pass) { //비밀번호 틀림
            echo "<script>
                alert('비밀번호가 틀렸습니다.');
                history.go(-1);
            </script>";
        } else { //비밀번호 맞음, 로그인 성공
            session_start();
            $_SESSION["userid"] = $id;
            echo "
            <script>
                location.href = 'index2.php';
            </script>
            ";
        }

    } else { //id 없음
        echo "<script>
                alert('가입한 적이 없는 ID 입니다.');
                history.go(-1);
            </script>";
    }

    mysqli_close($con);

?>