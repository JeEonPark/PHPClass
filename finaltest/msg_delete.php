<?php
    $mode  = $_GET['mode'];
    $num = $_GET['num'];

    $con = mysqli_connect("localhost", "root", "root", "sample3", 8889);
    $sql = "delete from message where num='$num'";
    $rs = mysqli_query($con, $sql);
    mysqli_close($con);

    echo "<script>
        location.href = 'meg_box.php?mode=$mode';
    </script>";
?>