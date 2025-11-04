<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>File Upload using PHP Procedural Coding</h3>

<?php
if (isset($_POST['upload'])) {
    $filename = $_FILES['myfile']['name'];
    $destination = "files/" . $filename;
    $tempfile = $_FILES['myfile']['tmp_name'];
    $FileSize = $_FILES['myfile']['size']; // Byte
    $maxSize = 524288; // 0.5 MB

    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    $allowedTypes = ["jpg", "jpeg", "png"];
    $errors = array();

    if ($FileSize > $maxSize) {
        $errors[] = "<h1>File is too large (max 0.5MB)</h1>";
    }

    if (!in_array($ext, $allowedTypes)) {
        $errors[] = "<h1>Only jpg, jpeg and png files are allowed</h1>";
    }

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        if (move_uploaded_file($tempfile, $destination)) {
            echo "<h1>Uploaded Successfully</h1>";
        } else {
            echo "<h1>Upload Failed</h1>";
        }
    }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="myfile" required>
    <input type="submit" value="UPLOAD" name="upload">
</form>

</body>
</html>
