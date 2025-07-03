## Introdução à Lógica de Programação com PHP

A lógica de programação é a base para o desenvolvimento de qualquer software. Neste curso, vamos explorar os conceitos fundamentais da lógica de programação utilizando PHP como linguagem de exemplo.
### O que é Lógica de Programação?
A lógica de programação é um modo de organizarmos uma série de comandos ou instruções para que o computador possa executar uma tarefa específica. É como criar um roteiro que o computador segue para resolver um problema ou realizar uma ação.

Sabe quando você precisa montar um móvel novo e segue aquele manual cheio de passos? A lógica de programação é parecida: é como criar um passo a passo para resolver um problema, só que usando códigos. É o jeito de pensar para organizar as ideias e transformar um desafio em uma sequência de instruções que o computador entende. Assim como numa receita de bolo, você separa os ingredientes (informações), segue as etapas (comandos) e no final tem o resultado que queria!

E para isso usamos uma **linguagem de programação**, que é como um idioma que o computador entende. No nosso caso, vamos usar o PHP, que é muito popular para desenvolvimento web.

### O que é uma Linguagem de Programação?
É uma lingua como o português ou inglês, mas feita para que os computadores consigam entender. Cada linguagem tem suas próprias regras e sintaxe, assim como cada idioma tem gramática e vocabulário. Se você já ouviu falar de JavaScript, Python ou Java, essas são outras linguagens de programação. Cada uma tem suas características e é usada para diferentes propósitos.

## Variáveis e Tipos de Dados
As variáveis são como caixas onde guardamos informações. Elas podem conter números, textos, listas e muito mais. Em PHP, declaramos uma variável usando o símbolo `$` seguido do nome da variável.
### Exemplo de Variável
```php
<?php
$nome = "João"; // Variável que armazena um texto
$idade = 25; // Variável que armazena um número
?>
```

### Tipos de Dados
Em PHP, os tipos de dados mais comuns são:
- **Inteiros**: Números inteiros, como 1, 2, 3.
- **Float**: Números decimais, como 1.5, 2.75.
- **Strings**: Sequências de caracteres, como "Olá, mundo!".
- **Booleanos**: Valores verdadeiros ou falsos, como `true` ou `false`.
### Exemplo de Tipos de Dados
```php
<?php
$numeroInteiro = 10; // Tipo inteiro
$numeroDecimal = 3.14; // Tipo float
$texto = "Olá, PHP!"; // Tipo string
$verdadeiro = true; // Tipo booleano
$falso = false; // Tipo booleano
?>
``` 
 - Podemos exibir esses valores na tela usando a função `echo`:
```php
<?php
$nome = "João";
$idade = 25;
echo "Meu nome é $nome e tenho $idade anos.";
?>
```
### Exercício 01
Crie uma variável chamada `$cidade` e atribua o nome da sua cidade. Em seguida, exiba essa variável na tela usando `echo`.

```php
<?php
$cidade = "São Paulo"; 
echo "Eu moro em $cidade.";
?>
```

### Exercício 02
Crie uma variável chamada `$produto` e atribua o nome de um produto que você gosta. Depois, crie uma variável chamada `$preco` e atribua o preço desse produto. Exiba as informações na tela, formatando a saída para mostrar o nome do produto e seu preço.

```php
<?php
$produto = "Notebook";
$preco = 2500.00;
echo "O produto é $produto e custa R$$preco.";
?>
```



