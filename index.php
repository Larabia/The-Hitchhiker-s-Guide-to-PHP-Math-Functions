<?php
$initial = '555';

//Find a PHP function to convert this octal string ($initial) to a decimal number.
$a= octdec($initial);
echo $a."\n";

//The value of $a is a number of degrees. Use a PHP function to convert it to radians and store the result in a new variable, $b.

$b = deg2rad($a);
echo $b."\n";

