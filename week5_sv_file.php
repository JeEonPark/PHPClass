<?php
    $fname = $_FILES["upload"];

    print_r($fname);
    echo "<br>".$fname["name"]."<br>";
    echo "<br>".$_FILES["upload"]["tmp_name"]."<br>";

    $file_dir = "/Applications/MAMP/htdocs/upload/";
    $file_path = $file_dir.$_FILES["upload"]["name"];
    if(move_uploaded_file($_FILES["upload"]["tmp_name"], $file_path)){
        echo "upload success";
        $src = "./upload/".$_FILES["upload"]["name"];

?>
<img src="<?= $src ?>" width=300>
<?php
    } else {
        echo "upload fail";
    }
?>