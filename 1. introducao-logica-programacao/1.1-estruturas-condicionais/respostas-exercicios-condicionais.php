<?php
/* Exercício 1: Verificação de Aumentação Salarial e Bônus
Crie um programa que verifique se um funcionário 
tem direito a aumento salarial e bônus. 
O aumento é de 10% para salários abaixo de 
R$ 1.500,00 e de 5% para salários entre 
R$ 1.500,00 e R$ 2.500,00. Se o salário 
for maior que R$ 2.500,00, não há aumento, 
mas o funcionário recebe um bônus de R$ 200,00. */

$salario = 6000.00; // Exemplo de salário do funcionário

if ($salario < 1500.00) {
    $aumento = $salario * 0.10; // Aumento de 10%
    $novo_salario = $salario + $aumento;
    echo "Salário abaixo de R$ 1.500,00.
    Aumento de 10%: R$ {$aumento}. Novo salário: R$ {$novo_salario}.";
     
} elseif ($salario >= 1500.00 && $salario <= 2500.00) {
    $aumento = $salario * 0.05; // Aumento de 5%
    $novo_salario = $salario + $aumento;
    
    echo "Salário entre R$ 1.500,00 e R$ 2.500,00.
    Aumento de 5%: R$ {$aumento}. 
    Novo salário: R$ {$novo_salario}.";

} else {
    $bonus = 200.00; // Bônus de R$ 200,00
    $novo_salario = $salario + $bonus;
    
    echo <<<TEXT
        Salário acima de R$ 2.500,00.
        Sem aumento, mas recebe bônus de R$ $bonus
        Novo salário: R$ $novo_salario.

    TEXT;
}

/*Exercício 2: Verificação de Par ou Ímpar
Crie um programa que verifique se um número é par ou ímpar.
Use a estrutura `if` para verificar se o número é divisível por 2.
Exiba uma mensagem indicando se o número é par ou ímpar.*/

$numero = 7; // Exemplo de número
if ($numero % 2 == 0) {
    echo "O número {$numero} é par.";
} else {
    echo "O número {$numero} é ímpar.";
}

/*Exercício 3: Verificação de aprovação de aluno com base na média
Faça um programa com 4 notas referente a quatro bimestres de um aluno 
e calcule a média. Se a média for maior ou igual a 7, 
exiba “Aluno Aprovado”, se a média for menor que 7 
e maior ou igual a 5, exiba “Aluno de Recuperação”, 
se a média for menor que 5, exiba “Aluno de Reprovado”*/
$nota1 = 8.5;
$nota2 = 7.0;
$nota3 = 6.0;
$nota4 = 9.0;
$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
if ($media >= 7) {
    echo "Aluno Aprovado com média: {$media}.";
} elseif ($media >= 5 && $media < 7) {
    echo "Aluno de Recuperação com média: {$media}.";
} else {
    echo "Aluno Reprovado com média: {$media}.";
}
