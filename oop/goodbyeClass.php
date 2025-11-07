<?php

// Self


class goodbyeClass{

    const MYMSG = "We are learning PHP OOP";
    const MYMSG2 = "We are about Constatent using in OOP";

    function info(){
      echo self::MYMSG2

      }
 

} // End of the class

echo goodbyeClass::MYMSG;

$obj1 = new goodbyeClass;
$obj1->info();

?>