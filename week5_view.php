<?php
    /*
    <form name=cal method="POST" action="week5_view.php">
    first : <input type=text name=first><br>
    second : <input type=text name=second><br>
    <input type=submit value="Calc">
    </form>
    */

    $a = $_POST["first"];
    $b = $_POST["second"];

    $c = $a + $b;
    echo "result = ".$c."<br>";

    $con = $_POST["content"];

    $gen = $_POST["gender"];
    $email = $_POST["email"];

    $hobby = $_POST["hobby"];
    $cnt = count($hobby);

    $email1 = $_POST["email1"];
    $email2 = $_POST["email2"];
    $full = $email1."@".$email2;
    $ad=$_POST["userid"];
?>

<hr>
<p>
    <div>
        입력된 글 : <?= $con ?>
        <br>
        성별 : <?= $gen ?>
        <br>
        수신 : <?= $email ?>
        <br>
        취미 : 
        <?php 
            for($i = 0; $i < $cnt; $i++){
                echo $hobby[$i]." ";
            }
        ?>
        <br>
        이메일 주소 : <?= $full ?>
        hidden para : <?= $ad ?>
    </div>
</p>