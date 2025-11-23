<?php

$country = [
    "Bangladesh" => "Dhaka",
    "ggg" => "ddd",
    "yyy" => "uuu",
    "ttt" => "aaa"
];

ksort($country);

foreach ($country as $key => $capital) {
    echo "<ul>";
    echo "<li?>" . $key . " : " . $capital . "<br>" . "</li>";
    echo "</ul>";
}
