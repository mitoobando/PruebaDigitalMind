<?php
// Ejercicio N* 3
$a = 33;
var_dump(! (($a > 10) && ($a < 20))); // True
echo "<br>";
var_dump(! (($a > 10) || ! ($a < 20))); // False
echo "<br>";