<?php

$num1 = 10;
$num2 = 10;

//E & 
$resultado = (($num1 >= $num2) && ($num1 != $num2));

//OU |
$resultado = (false || $num1 < $num2);

//E and 
$resultado = (($num1 >= $num2) and ($num1 != $num2));

//OU or
$resultado = (true or $num1 < $num2);


var_dump($resultado);


