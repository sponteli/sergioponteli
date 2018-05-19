<?php

echo '<pre>';

echo 'Operador AND && <br>';
echo 'true and true ';
var_dump(true AND True);

echo 'true and false';
var_dump(true && false);

echo 'false and true';
var_dump(false && True);

echo 'false and false';
var_dump(false && false);
echo '<hr>';


echo 'Operador OR || <br>';
echo 'true or true ';
var_dump(true OR True);

echo 'true and false';
var_dump(true || false);

echo 'false and true';
var_dump(false || True);

echo 'false and false';
var_dump(false || false);
echo '<hr>';


echo 'Operador XOR <br>';
echo 'true or true';
var_dump(true XOR True);

echo 'true and false';
var_dump(true XOR false);

echo 'false and true';
var_dump(false XOR True);

echo 'false and false';
var_dump(false XOR false);
echo '<hr>';

echo 'Operador de Negação ! <br>';
echo '!false ';
var_dump(!false);

echo '!true ';
var_dump(!true);
echo '<hr>';