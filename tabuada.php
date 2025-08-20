<?php

$entrada=4;

function criaTabuada(int $fixo): void {
    for ($numero = 1; $numero <= 10; $numero++) {
        $resultado = $numero * $fixo;
        
        echo sprintf(
            '%d x %d = %d' . PHP_EOL,
            $numero,
            $fixo,
            $resultado,
        );
    }
}

criaTabuada(8);

echo PHP_EOL;
?>