<h2> 가입 완료 페이지 </h2>

<?php
    $id = $_POST["id"];
    $pass = $_POST["ps"];

    $con = mysqli_connect("localhost", "root", "root", "sample3", 8889);
    $sql = "insert into logtable (id, pass) values('$id', '$pass')";
    $result = mysqli_query($con, $sql);
    
    mysqli_close($con);

    echo $result;

    echo "
        <script>
            location.href='index2.php';
        </script>
    ";

?>