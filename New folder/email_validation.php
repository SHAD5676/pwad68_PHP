<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Email Validation</h2>
    <form action="" method="post">
        <input type="text" name="myname" placeholder="Enter your name"> <br><br>
        <input type="email" name="email" placeholder="Enter email"> <br><br>
        <input type="submit" name="submit" value="CHECK">
    </form>

    <?php

    if(isset($_POST["submit"])){

        $name = $_POST["myname"];
        $email = $_POST["email"];

        //Name Validation

        if(strlen($name) < 4 || strlen($name) > 8){
            echo "User name must be between 4 to 8 digit.<br>";

        } else {
            echo "Name : $name <br>";
        }

        //Email Validation

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Email must be contain @. <br>";
        } else {
            echo "Email : $email <br>";
        }




    }




?>
</body>
</html>