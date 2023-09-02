<?php
$string = "41";
$int_value = intval( $string );
echo $int_value;
if (is_numeric($string))
    $number = $string + 0;
    else
    $number = 0;
echo $number;
echo gettype($int_value);
echo gettype($number);
?>