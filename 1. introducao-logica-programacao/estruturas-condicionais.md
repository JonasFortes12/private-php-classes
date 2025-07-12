## Estruturas Condicionais com PHP
As estruturas condicionais são fundamentais na lógica de programação, pois permitem que o programa tome decisões com base em condições específicas. Em PHP, usamos as estruturas `if`, `else if` e `else` para implementar essas decisões. Para entender melhor, vamos revisar os conceitos básicos de tipos de dados e operadores, que são essenciais para trabalhar com condições.

### O que são Estruturas Condicionais?
As estruturas condicionais permitem que o programa execute diferentes blocos de código dependendo de certas condições. Por exemplo, podemos querer executar um código se uma variável for maior que outra, ou se um usuário estiver logado.
É como se estivéssemos dizendo: "Se essa condição for verdadeira, faça isso; caso contrário, faça aquilo". Isso nos permite criar programas mais dinâmicos e responsivos às entradas do usuário ou a outras condições.

### Operadores de Comparação
Antes de explorarmos as estruturas condicionais, é importante entender os operadores de comparação, que são usados para comparar valores. Os principais operadores de comparação em PHP são:
- `==`: Igualdade (verifica se dois valores são iguais)
- `!=`: Desigualdade (verifica se dois valores são diferentes)
- `>`: Maior que (verifica se o valor da esquerda é maior que o da direita)
- `<`: Menor que (verifica se o valor da esquerda é menor que o da direita)
- `>=`: Maior ou igual a (verifica se o valor da esquerda é maior ou igual ao da direita)
- `<=`: Menor ou igual a (verifica se o valor da esquerda é menor ou igual ao da direita)

Uma característica importante é que o resultado de uma comparação é sempre um valor booleano (`true` ou `false`). Por exemplo:
```php
$resultado = (5 > 3); // $resultado será true
$resultado = (5 < 3); // $resultado será false
$resultado = (5 == 5); // $resultado será true
$resultado = (5 != 3); // $resultado será true
``` 

### Operadores Lógicos
Os operadores lógicos são usados para combinar condições, ou seja, para criar expressões mais complexas. Os principais operadores lógicos em PHP são:
- `&&`: E lógico (retorna `true` se ambas as condições forem verdadeiras)
- `||`: Ou lógico (retorna `true` se pelo menos uma das condições for verdadeira)
- `!`: Não lógico (inverte o valor booleano de uma condição)
```php 
$resultado = (5 > 3 && 2 < 4); // $resultado será true, pois ambas as condições são verdadeiras
$resultado = (5 > 3 || 2 > 4); // $resultado será   true, pois pelo menos uma condição é verdadeira
$resultado = !(5 > 3); // $resultado será false, pois inverte o valor booleano da condição
``` 



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
