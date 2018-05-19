<?php

$nomeCompleto = 'Sergio willians Ponteli';
$idade = 49;
$altura = 1.71;
echo 'Meu nome é $nomeCompleto e tenho $idade anos';
echo '<hr>';

echo 'Meu nome é \''. $nomeCompleto. '\'e tenho '.$idade . ' anos';
echo '<hr>';

echo "Meu nome é $nomeCompleto e tenho $idade anos";
echo '<hr>';


echo "Meu nome é {$nomeCompleto} e tenho {$idade} anos";
echo '<hr>';