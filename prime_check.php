<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Check Wheater a number prime or not</h3>
    <form action="" method="get">
        <input type="number" name="mynum" placeholder="Enter a number"> <br>
        <input type="submit" name="submit" value="CHECK">
    </form>
    <?php

    if(isset($_REQUEST['submit'])){
        $mynum = $_REQUEST['mynum'];

       // Find out prime
       if($mynum==1){
        echo "$mynum is not a prime number";
        exit;

       }
       if($mynum==2){
        echo "$mynum is a prime number";
        exit;


       }
       if($mynum>2){
        for($i_2; $i<$mynum; &i++){
            if($mynum % $i ==0){
                echo "$mynum is not a prime number";
                exit;
            }
        }
       } // check num ber is bigger than 2
       echo "$mynum is a prime number"
    
    
    ?>
    }


    


    
</body>
</html>