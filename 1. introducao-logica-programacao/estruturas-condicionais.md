## Estruturas Condicionais com PHP
As estruturas condicionais são fundamentais na lógica de programação, pois permitem que o programa tome decisões com base em condições específicas. Em PHP, usamos as estruturas `if`, `else if` e `else` para implementar essas decisões.

### Estrutura `if`
A estrutura `if` é usada para executar um bloco de código se uma condição for verdadeira. Se a condição for falsa, o bloco de código dentro do `if` não será executado.
```php
<?php
$idade = 18;
if ($idade >= 18) {
    echo "Você é maior de idade.";
}
?>
``` 
### Estrutura `else`
A estrutura `else` é usada para executar um bloco de código quando a condição do `if` é falsa. Assim, podemos definir o que acontece quando a condição não é atendida.
```php
<?php
$idade = 16;
if ($idade >= 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você é menor de idade.";
}
?>
```
### Estrutura `else if`
A estrutura `else if` permite verificar múltiplas condições. Se a condição do `if` for falsa, o programa verifica a condição do `else if`. Se essa também for falsa, ele pode verificar outras condições adicionais.
```php
<?php
$nota = 7;
if ($nota >= 7) {
    echo "Aprovado!";
} else if ($nota >= 5) {
    echo "Recuperação!";
} else {
    echo "Reprovado!";
}
?>
```
### Exercício 01
Crie um programa que verifique se uma pessoa é maior de idade (18 anos ou mais) e exiba uma mensagem apropriada. Use a estrutura `if` para verificar a idade.
```php  
<?php
$idade = 20; // Altere o valor para testar
if ($idade >= 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você é menor de idade.";
}
?>
```
### Exercício 02
Crie um programa que verifique a nota de um aluno e exiba se ele foi aprovado
(com nota maior ou igual a 7), se está em recuperação (nota entre 5 e 6.9) ou se foi reprovado (nota abaixo de 5). Use as estruturas `if`, `else if` e `else`.
```php
<?php
$nota = 6; // Altere o valor para testar
if ($nota >= 7) {
    echo "Aprovado!";
} else if ($nota >= 5) {
    echo "Recuperação!";
} else {
    echo "Reprovado!";
}
?>
```
