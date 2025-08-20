<?php

$numero = -9;

function receberNumero($numero) {

	if ($numero > 0) {
		echo "O numero $numero é positivo";
		return;
	}

	if ($numero == 0) {
		echo "O número é igual a zero";
		return;
	}

	if ($numero < 0) {
		echo "O número $numero é negativo";
		return;

	}
}

receberNumero($numero);
