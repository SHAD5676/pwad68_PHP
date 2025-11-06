<?php

//$country = array ("Bangladesh", "India", "Japan", "China", "Korea" );

$country = ["Bangladesh"=>"Dhaka", "Napal"=>"Kathmondu", "Australia"=>"Sydney"];

ksort($country);

print_r($country);

foreach($country as $x => $y) {
    echo $x . ":" . $y;



}


?>