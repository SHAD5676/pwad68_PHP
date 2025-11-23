<?php

$country = [
    "Bnagladesh" => "Dhaka",
    "hjgjh" => "jhj",
    "uihui" => "rere",
    "asa" => "hhh"
];

ksort($country);

foreach ($country as $key => $capital) {
    echo "<uli>";
    echo "<li>" . $key . " : " . $capital . "<br>" . "</li>";
    echo "</uli>";
}
