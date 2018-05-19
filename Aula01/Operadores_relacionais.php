<?php

//operadores relacionais

$num1 = 10;
$num2 = '10';

echo '<pre>';
// igual ==

echo 'Igual ==';
var_dump($num1 == $num2);

// Diferente !=
echo 'Diferente !=';
var_dump($num1 != $num2);

// Identico ===
echo 'Identico ===';
var_dump($num1 === $num2);

// Não Identico !==
echo 'Não Identico !==';
var_dump($num1 !== $num2);

// Maior >
echo 'Maior >';
var_dump($num1 > $num2);

//Menor <
echo 'Menor < ';
var_dump($num1 < $num2);

//Maior e igual >=
echo 'Maior >=';
var_dump($num1 >= $num2);

//Menor e igual <=
echo 'Menor e igual <=';
var_dump($num1 <= $num2);
echo '<hr>';

echo 'Operador Spaceship <br>';
// $a <=> $b
var_dump(1 <=> 0);
var_dump(1 <=> 1);
var_dump(1 <=> 2);
