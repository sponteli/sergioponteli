<?php

$idade = 19;
$temhabilitacao = true;

if ($idade >= 18 && $temhabilitacao) {
	echo 'Pode dirigir';
} else if ($idade >= 18){
	echo 'Náo pode dirigir, mas pode tirar habilitacao';
} else {
	echo 'Nao pode dirigir e nem tirar habilitacao';
}