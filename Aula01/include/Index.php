<?php

echo 'Index <hr>';
require 'pessoa.php';
include 'empresa.php';
include 'trabalho.php';

echo "Olá, sou {$nome}, tenho {$idade} anos e trabalho na empresa {$empresa} como {$profissao}
com salario de {$salario}";