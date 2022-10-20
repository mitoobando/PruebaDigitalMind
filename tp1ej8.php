<?php
// Ejercicio N* 8
/* Dadas A, B, C, D, E y F variables de tipo numérico escribir las expresiones lógicas correspondientes a los
siguientes enunciados:
a. A es positivo y B es negativo.
b. A, B y C son diferentes.
c. E es no nulo y F no es mayor que G.
d. B está estrictamente entre A y C.
e. F es negativo o E es no negativo, pero no ambos a la vez. */
$expresionA = ($A > 0) && ($B < 0);
$expresionB = ($A <> $B && $B != $C && $A <> $C);
$expresionC = ($E != 0) && !($F > $G);
$expresionD = ($B > $A) && ($B > $C) || ($B > $C);
$expresionE = ($F < 0) xor !($E <0);
