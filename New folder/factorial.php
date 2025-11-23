<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Check Factorial</h2>
    <form action="" method="post">
        <input type="number" name="num" placeholder="Enter number"> <br><br>
        <input type="submit" name="submit" id="CHECK">
    </form>

    <?php
    if(isset($_POST["submit"])){
        $number = $_POST ["num"];

        $fact = 1;
        for($i = 1; $i <= $number; $i++){
        $fact *= $i;

        } echo $fact;


    }


?>
</body>
</html>