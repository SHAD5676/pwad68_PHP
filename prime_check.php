<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Check</title>
</head>
<body>
    <h3>Check Wether a Number is Prime or Not</h3>
    <form action="" method="get">
        <input type="number" name="mynum" placeholder="Enter a number" required> <br><br>
        <input type="submit" name="submit" value="CHECK">
    </form>

    <?php
    if (isset($_REQUEST['submit'])) {
        $mynum = $_REQUEST['mynum'];

        if ($mynum == 1) {
            echo "$mynum is not a prime number.";
        } elseif ($mynum == 2) {
            echo "$mynum is a prime number.";
        } else {
            $isPrime = true;
            for ($i = 2; $i < $mynum; $i++) {
                if ($mynum % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
            if ($isPrime) {
                echo "$mynum is a prime number.";
            } else {
                echo "$mynum is not a prime number.";
            }
        }
    }
    ?>
</body>
</html>
