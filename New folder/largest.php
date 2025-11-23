<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Largest Number</h2>
    <form action="">
        Numbers:
        <input type="number" name="num" id=""> <br><br>
        <input type="submit" name="click" value="SUBMIT">

    </form>

    <?php

    if(isset($_REQUEST["click"])){
        $_num = $_REQUEST("num");
        $num_arr = explode("," , $_num);
        $larg = $num_arr[0],
        $min = $num_arr[0],

    }




?>
</body>
</html>
