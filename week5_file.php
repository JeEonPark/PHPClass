<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <form method="POST" action="week5_sv_file.php" enctype="multipart/form-data">
        <input type="file" name="upload"><br>
        <textarea col=20 row=5 name="comment"></textarea>

        <hr>
        <input type=submit value="업로드">
    </form>
</body>
</html>