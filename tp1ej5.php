<?php
// Ejercicio N* 5
$a = 10; $b = 12; $c = 13; $d = 10;
var_dump((($a > $b) || ($a < $c)) && (($a == $c) || ($c < $d))); // True
echo "<br>";
var_dump((($a >= $b) || ($a < $d)) && (($a >= $d) && ($c > $d))); // True
echo "<br>";