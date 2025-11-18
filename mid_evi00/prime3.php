<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Check Prime Number</h2>
    <form action="" method="get">
        <input type="number" name="num" placeholder="Enter Number" required> <br><br>
        <input type="submit" name="submit" value="CHECK"> <br><br>
        
    </form>

    <?php 


    if (isset($_REQUEST['submit'])) {
        $num = $_REQUEST['num'];

        if ($num == 1) {
            echo "$num is not a prime number.";
        } elseif ($num == 2) {
            echo "$num is a prime number.";
        } else {
            $isPrime = true;
            for ($i = 2; $i < $num; $i++) {
                if ($num % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
            if ($isPrime) {
                echo "$num is a prime number.";
            } else {
                echo "$num is not a prime number.";
            }
        }
    }
    ?>


</body>
</html>