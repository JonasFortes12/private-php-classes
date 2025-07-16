## Estruturas de Repetição com PHP
As estruturas de repetição são essenciais para executar um bloco de código várias vezes, dependendo de uma condição. Em PHP, as principais estruturas de repetição são `for`, `while` e `foreach`.

### Estrutura `for`
A estrutura `for` é usada quando sabemos exatamente quantas vezes queremos repetir um bloco de código. Ela é composta por três partes: inicialização, condição e incremento.

```php
<?php
for ($i = 0; $i < 5; $i++) {
    echo "Número: $i\n";
}
?>
```

### Estrutura `while`
A estrutura `while` executa um bloco de código enquanto uma condição for verdadeira. É útil quando não sabemos quantas vezes precisamos repetir o código.

```php  
<?php
$i = 0;
while ($i < 5) {
    echo "Número: $i\n";
    $i++;
}
?>
```
### Estrutura `foreach`
A estrutura `foreach` é usada para iterar sobre arrays ou objetos. Ela é especialmente útil quando queremos percorrer todos os elementos de um array.

```php
<?php
$frutas = ["maçã", "banana", "laranja"];
foreach ($frutas as $fruta) {
    echo "Fruta: $fruta\n";
}
?>
```
### Exercício 01
Crie um programa que exiba os números de 1 a 10 usando a estrutura `for`. Cada número deve ser exibido em uma nova linha.

```php
<?php
for ($i = 1; $i <= 10; $i++) {
    echo "Número: $i\n";
}
?>
```
### Exercício 02
Crie um programa que exiba os números pares de 0 a 20 usando a estrutura `while`. Cada número deve ser exibido em uma nova linha.

```php
<?php
$i = 0;
while ($i <= 20) {
    if ($i % 2 == 0) {
        echo "Número par: $i\n";
    }
    $i++;
}
?>
```
### Exercício 03
Crie um programa que percorra um array de nomes e exiba cada nome em uma nova linha usando a estrutura `foreach`.

```php
<?php
$nomes = ["Ana", "Bruno", "Carlos"];
foreach ($nomes as $nome) {
    echo "Nome: $nome\n";
}
?>
```
