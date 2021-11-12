<?php
    $ps = $_POST["pass"];

    $id = $_GET["id"];

    $con = mysqli_connect("localhost", "root", "root", "sample3", 8889);
    $sql = "update logtable set pass='$ps' where id='$id'";
    $rs = mysqli_query($con, $sql);

    mysqli_close($con);

    echo "
    <script> location.href = 'index2.php';
    </script>
    "
?>