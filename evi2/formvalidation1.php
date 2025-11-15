<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Form Validation</h2>
    <form action="" method="post">

        Username:
        <input type="text" name="name"> <br><br>

        Email:
        <input type="email" name="email"> <br><br>
        <input type="submit" value="SUBMIT">

    </form>

   <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];

    // Validation 
    if (strlen($name) < 4 || strlen($name) > 8) {
        echo "Username must be between 4 and 8 characters.</p>";
    }
    
    else {
        echo "Username is valid.</p>";
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Please enter valid Email. <br>";

    }
    else {
        echo "Email valid";
    }
}
?>
</body>
</html>