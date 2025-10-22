<?php

// Using const:
const NAME = "Rahim Uddin";
echo NAME . "<br>";

// Using define():
define("FULLNAME", "Karim Uddin");

function displayName() {
    
    echo FULLNAME;
}

displayName();

?>

