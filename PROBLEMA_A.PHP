<?php

$quantidadePessoas = 5; 
$alturaMinima = 160; 
$alturas = [150, 165, 170, 155, 180]; 


$quantidadeAprovados = 0;

foreach ($alturas as $altura) {
    if ($altura >= $alturaMinima) {
        $quantidadeAprovados++;
    }
}

echo "Número de pessoas que atendem ao critério: $quantidadeAprovados\n";
?>
