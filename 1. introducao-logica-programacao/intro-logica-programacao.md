## Introdução à Lógica de Programação com PHP

A lógica de programação é a base para o desenvolvimento de qualquer software. Neste curso, vamos explorar os conceitos fundamentais da lógica de programação utilizando PHP como linguagem de exemplo.
### O que é Lógica de Programação?
A lógica de programação é um modo de organizarmos uma série de comandos ou instruções para que o computador possa executar uma tarefa específica. É como criar um roteiro que o computador segue para resolver um problema ou realizar uma ação.

Sabe quando você precisa montar um móvel novo e segue aquele manual cheio de passos? A lógica de programação é parecida: é como criar um passo a passo para resolver um problema, só que usando códigos. É o jeito de pensar para organizar as ideias e transformar um desafio em uma sequência de instruções que o computador entende. Assim como numa receita de bolo, você separa os ingredientes (informações), segue as etapas (comandos) e no final tem o resultado que queria!

E para isso usamos uma **linguagem de programação**, que é como um idioma que o computador entende. No nosso caso, vamos usar o PHP, que é muito popular para desenvolvimento web.

- Acesse esse tutorial e siga-o para instalar o PHP: [Instalando o PHP](https://www.alura.com.br/artigos/php-instalacao-primeiro-codigo?utm_term=&utm_campaign=topo-aon-search-gg-dsa-artigos_conteudos&utm_source=google&utm_medium=cpc&campaign_id=11384329873_164240702375_703853654617&utm_id=11384329873_164240702375_703853654617&hsa_acc=7964138385&hsa_cam=topo-aon-search-gg-dsa-artigos_conteudos&hsa_grp=164240702375&hsa_ad=703853654617&hsa_src=g&hsa_tgt=dsa-2276348409543&hsa_kw=&hsa_mt=&hsa_net=google&hsa_ver=3&gad_source=1&gad_campaignid=11384329873&gbraid=0AAAAADpqZICwr2_THDg4OGk1FA0xYZwBy&gclid=Cj0KCQjw1JjDBhDjARIsABlM2Ss_7uQmZebDGWjmQV7W3itJbg7VSHI21Y8oepAwhWkgLgHnrxLfBmQaAmAbEALw_wcB)

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
### Exercício 03 (Desafio de Recapitulação)
Exiba uma mensagem personalizada na tela (comando `echo`), exibindo informações de uma venda, contendo o nome do produto, a quantidade vendida, o valor total da venda e o nome do operador da venda. Use variáveis para armazenar cada informação (`$variavel = valor`) e formate a saída em uma string (`echo "informação: $variavel"`). Exemplo:
```php
<?php
$produto = "Celular";
$quantidade = 3;
$valorUnitario = 1200.00;
$valorTotal = $quantidade * $valorUnitario;
$operador = "Maria";

echo "Operador: $operador\n";
echo "Produto: $produto\n";
echo "Quantidade: $quantidade\n";
echo "Valor Unitário: R$$valorUnitario\n";
echo "Valor Total: R$$valorTotal\n";
?>
```



