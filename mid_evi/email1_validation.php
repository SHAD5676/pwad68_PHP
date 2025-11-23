<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Registration System</h1>

    <form action="" method="post">

        Name : <br>
        <input type="text" name="myname" placeholder="Enter a name"><br><br>

        Email : <br>
        <input type="text" name="email" placeholder="Enter an email"><br><br>

        <input type="submit" name="submit" value="CHECK">
    </form>

    <?php 
    
    if(isset($_POST["submit"])){

        $name = $_POST["myname"];
        $email = $_POST["email"];

        // Name validation
        if(strlen($name) < 4 || strlen($name) > 8){
            echo "Name must be between 4 to 8 characters.<br>";
        } else {
            echo "Name : $name <br>";
        }

        // Email validation
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Please enter a valid Email.<br>";
        } else {
            echo "Email : $email <br>";
        }
    }
    
    ?>
</body>
</html>
