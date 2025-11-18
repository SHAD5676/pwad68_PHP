<?php
$line = "vim is the greatest word processor ever created! Oh vim, how I love this" ;
//echo preg_match ("/\bVim\b/i", $line, $match);
if (preg_match("/\bVim\b/i", $line, $match)) print "Match found!";
print_r($match);

?>