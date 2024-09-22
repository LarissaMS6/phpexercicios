<?php
//Escreva um programa em PHP que exiba todos os números de 1 a 10. Para cada número,
//informe se ele é par ou ímpar e também mostre o quadrado do número. Utilize o loop for e as instruções if e else.

for ($contador = 1; $contador <= 10; $contador++) {
    if ($contador % 2 == 0) {
        $type = "Par";
    } else {
        $type = "Ímpar";
    }

    $square = $contador * $contador;
    echo "Número: $contador - $type - Quadrado: $square\n";
}
?>
