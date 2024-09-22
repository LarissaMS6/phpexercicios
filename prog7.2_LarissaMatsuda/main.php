<?php
//Crie um programa em PHP que conte e exiba a quantidade de números pares 
//e a quantidade de números ímpares no intervalo de 1 a 10. Utilize o loop for e 
//a instrução continue para pular a contagem dos números ímpares ao contar os pares e vice-versa.
$pairsCount = 0;
$oddsCount = 0;

for ($contador = 1; $contador <= 10; $contador++) {
    if ($contador % 2 == 0) {
        $pares++;
        continue; 
    }

    $impares++;
}

echo "Quantidade de números pares: $pares\n";
echo "Quantidade de números ímpares: $impares\n";
?>

