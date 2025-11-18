<?php

$result = [
    "Shad" => 79,
    "Safa" => 78,
    "Sakib" => 79,
    "Rekha" => 81,
    "Robi" => 33,
];

$max_result = 0;
foreach($result as $value){
    if($value > $max_result){
        $max_result = $value;
    }
}
foreach($result as $key => $value){
    if($value == $max_result){
        echo "Name : " . $key . "Result : " . $value . "<br>";
    }
}



?>