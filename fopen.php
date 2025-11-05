<?php
$fh = fopen("student.txt", "a");


// while(!feof($fh)){
//     echo fgets($fh) . "<br>";
// }
fwrite($fh, "Shibal, shibal life.......");

$fh = fopen("student.txt", "r");
while(!feof($fh)){
    echo fgets($fh) . "<br>";
}
fclose($fh);


?>