<?php

$num1 = readline('Digite o numero: ');
$num = 10;

$num += $num1;
echo 'Adição: ' . $num . PHP_EOL;
$num -= $num1;
echo 'subtração: ' . $num . PHP_EOL;
$num *= $num1;
echo 'Multiplicação: ' . $num . PHP_EOL;
$num /= $num1;
echo 'Divisão: ' . $num . PHP_EOL;
$num %= $num1;
echo 'Módulo: ' . $num . PHP_EOL;