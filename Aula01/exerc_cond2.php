<?php

$nota = readline('Digite a nota do aluno: ');
$frequencia = readline('Digite a frequencia do aluno: ');

if ($nota >= 7 && $frequencia >= 8) {
	echo 'aprovado'.PHP_EOL;
} else if ($nota >=5 AND $frequencia >=8){
	echo 'Recuperação'.PHP_EOL;
} else {
	echo 'reprovado'.PHP_EOL;
}