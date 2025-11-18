<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>New Student Entry</h3>

    <?php
    if(isset($_POST['submit'])):
    extract($_POST);
//echo "INSERT INTO students1  VALUES (NULL, '$fname', '$lname', '$dob', '$notes')";
 $sql = "INSERT INTO students1  VALUES (NULL, '$fname', '$lname', '$dob', '$notes')";
 include_once("db_config.php");
 $db->query($sql);
if($db->affected_rows){
    echo "Inserted";
}

 endif;




    ?>
    <form action="" method="post">
        <input type="text" name="fname" placeholder="Enter First Name"><br>
        <input type="text" name="lname" placeholder="Enter Last Name"><br>
        <input type="date" name="dob" placeholder="Enter date"><br>
        <textarea name="notes" placeholder="Enter Notes"></textarea><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>

    <br><br>

    <a href="students1.php">Student List</a>
</body>

</html>