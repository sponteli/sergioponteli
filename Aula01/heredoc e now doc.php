<?php


//heredoc

$nome = 'sergio';


$frase = <<< TXT
Meu nome é {$nome}, tenho 49 anos e moro em Guarulhos.
TXT;

echo $frase;


echo '<br>';
//nowdoc

$nome = 'sergio';


$frase = <<< 'TXT'
Meu nome é {$nome}, tenho 49 anos e moro em Guarulhos.
TXT;

echo $frase;