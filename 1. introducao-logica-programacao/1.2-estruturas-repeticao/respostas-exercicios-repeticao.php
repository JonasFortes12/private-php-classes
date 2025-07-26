<?php

/**
 * 1. Crie um programa que exiba a tabuada de multiplicação de 1 a 20 
 * de acordo com o número definido em uma variável `$numero`. 
 * Utilize a estrutura `for` para iterar de 1 a 20 e exibir 
 * o resultado da multiplicação.
 */
$numero = 5; // Defina o número para a tabuada
for ($i = 1; $i <= 20; $i++) {
    echo "$numero x $i = " . ($numero * $i) . "\n";
}

/**
 * 2. Crie um programa que exiba todos os números ímpares de 1 a 50 utilizando
 *  a estrutura `while`. Cada número deve ser exibido em uma nova linha.
 */
$contador = 1; // Inicia o contador em 1
while ($contador <= 50) {
    if ($contador % 2 != 0) { // Verifica se o número é ímpar
        echo "$contador\n"; // Exibe o número ímpar
    }
    $contador++; // Incrementa o contador
}

/**
 * 3. Crie um programa que percorra um array de frutas e exiba cada fruta
 * em uma nova linha utilizando a estrutura `foreach`. 
 * O array deve conter pelo menos 5 frutas diferentes.
 */
$frutas = ["Maçã", "Banana", "Laranja", "Uva", "Pera"]; // Array de frutas
foreach ($frutas as $fruta) {
    echo "$fruta\n"; // Exibe cada fruta em uma nova linha
}

/**
 * 4. Crie um programa que exiba a soma dos números de 1 a 100 
 * utilizando a estrutura `for`. O resultado deve ser exibido ao final do loop.
 */
$soma = 0; // Inicializa a variável de soma
for ($i = 1; $i <= 100; $i++) {
    $soma += $i; // Adiciona o número atual à soma
}
echo "A soma dos números de 1 a 100 é: $soma\n"; // Exibe o resultado da soma

/**
 * 5. Crie um programa que exiba os números de 10 a 1 utilizando a estrutura `for`. 
 * Cada número deve ser exibido em uma nova linha.
 */
for ($i = 10; $i >= 1; $i--) {
    echo "$i\n"; // Exibe os números de 10 a 1 em nova linha
}

/**
 * 6. Crie um programa que exiba os números de 1 a 100, 
 * mas substitua os múltiplos de 3 por "Fizz", os múltiplos de 5 por "Buzz" 
 * e os múltiplos de ambos por "FizzBuzz". Utilize a estrutura `for` para iterar de 1 a 100. 
 */
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz\n"; // Múltiplos de 3 e 5
    } elseif ($i % 3 == 0) {
        echo "Fizz\n"; // Múltiplos de 3
    } elseif ($i % 5 == 0) {
        echo "Buzz\n"; // Múltiplos de 5
    } else {
        echo "$i\n"; // Números normais
    }
}

/**
 * 7. Crie um programa que exiba a contagem regressiva de 10 a 0 
 * utilizando a estrutura `while`. Cada número deve ser exibido em uma nova linha.
 */
$contador = 10; // Inicia o contador em 10
while ($contador >= 0) {
    echo "$contador\n"; // Exibe o número atual
    $contador--; // Decrementa o contador
}

