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

Numbers: <br>
<input type="text" name="num" id=""> <br><br>

<input type="submit" name="click" value="SUBMIT"> <br>

</form>
    <?php 

    if(isset($_REQUEST["click"])){
        $num = $_REQUEST["num"];
        $num_arr = explode(",", "$num");
        $larg = $num_arr[0];
        $min = $num_arr[0];

        foreach($num_arr as $n){
            if($n > $larg){
                $larg = $n;
            }
            if($n < $min){
                $min = $n;
            }
        }

        echo "The largest number is: " . $larg . "<br>";
        echo "The Minimum number is: " . $min;

    }


?>
</body>
</html>





<?php 


?>

