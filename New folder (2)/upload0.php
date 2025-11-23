<?php

if (isset($_POST["upload"])) {

    $file = $_FILES["myfile"];

    $name = $file["name"];       
    $size = $file["size"];       
    $tmp  = $file["tmp_name"];   
    $type = $file["type"];     

    $max_size = 400 * 1024;

    $allowed = [
        "application/pdf",
        "image/jpeg",
        "image/png",
        "image/gif",
        "application/msword",
        "application/vnd.openxmlformats-officedocument.wordprocessingml.document"
    ];

    if ($size > $max_size) {
        echo "<h3 style='color:red;'>Error: File size must be less than 400 KB.</h3>";
        exit();
    }


    if (!in_array($type, $allowed)) {
        echo "<h3 style='color:red;'>Error: Only PDF, IMAGE or DOCUMENT files allowed.</h3>";
        exit();
    }

    
    if (!is_dir("uploads")) {
        mkdir("uploads");
    }


    if (move_uploaded_file($tmp, "uploads/" . $name)) {
        echo "<h3 style='color:green;'>File uploaded successfully!</h3>";
        echo "Uploaded File: " . $name;
    } else {
        echo "<h3 style='color:red;'>Error uploading file.</h3>";
    }
}

?>
