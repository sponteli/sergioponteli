<?php

echo '<pre>';

$var1 = 10;
var_dump($var1);
$var2 = (boolean) $var1;
var_dump($var2);
$var3 = (int) $var2;
var_dump($var3);
$var4= (float) $var3;
var_dump($var4);
$var5 = (string) $var4;
var_dump($var5);


//variaçao de tipos de variaveis

echo '<pre>';

$var = "0";
var_dump($var);
$int = $var + 2;
var_dump($int);
$float = $int + 1.3;
var_dump($float);
$string = '3 cachorros';
$string2 = '2 gatos';
$soma = $string + $string2;
var_dump($soma);



//variavel variavel
