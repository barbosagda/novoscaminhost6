<?php

$num1 = 10;
$num2 = 10;

//operadores relacionais: resultado boleano (boolean) - true / false

//binário: 1 = true; 0 = false;
//menor quê
$resultado = ($num1 < $num2);

//maior quê
$resultado = ($num1 > $num2);

//igualdade
$resultado = ($num1 == $num2);

//diferença
$resultado = ($num1 != $num2); // <>


//menor quê ou igual (OU - implicita operador lógico )
$resultado = ($num1 <= $num2);

//maior quê ou igual 
$resultado = ($num1 >= $num2);

//idêntico (objetos ou vetores - arrays)
$resultado = ($num1 === $num2);

//diferença entre objetos
$resultado = ($num1 !== $num2);

//negação
$resultado = !($num1 == $num2);


//depuração ou debugar (bug)
var_dump($resultado);

//echo $resultado;



