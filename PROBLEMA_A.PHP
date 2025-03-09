<?php

$quantidadePessoas = 3; 
$alturaMinima = 150; 
$alturas = [140, 150, 160]; 


$quantidadeAprovados = 0;

foreach ($alturas as $altura) {
    if ($altura >= $alturaMinima) {
        $quantidadeAprovados++;
    }
}

echo "Número de pessoas que atendem ao critério: $quantidadeAprovados\n";
?>
