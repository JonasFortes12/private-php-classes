
# Funções e Métodos em PHP

## Objetivo
Entender como organizar e reutilizar código, além de conhecer as ferramentas nativas que o PHP oferece para resolver problemas comuns.

## Aula 1.1: O Poder da Reutilização - Criando suas Próprias Funções

### Explicação do Conceito:
Uma função é um bloco de código que realiza uma tarefa específica e pode ser "chamado" (executado) a qualquer momento. Usar funções evita a repetição de código, deixando-o mais organizado, legível e fácil de manter. Pense nelas como "mini-programas" dentro do seu programa principal. Existem as funções que nós criamos (definidas pelo usuário) e as que já vêm prontas no PHP (nativas).

### Exemplo com Analogia:

#### Analogia: 
Imagine que você está escrevendo uma redação e precisa citar o nome completo de um autor várias vezes. Em vez de escrever "Carlos Drummond de Andrade" sempre, você cria um atalho "CDA". A função é como esse atalho: você define uma vez e usa o nome curto sempre que precisar.

#### Implementação Simples: Vamos criar uma função que soma dois números.
```php
<?php
// 1. Definindo a função (a receita do bolo)
function somar($numero1, $numero2) {
    $resultado = $numero1 + $numero2;
    return $resultado; // 'return' envia o resultado para fora da função
}

// 2. Chamando a função (fazendo o bolo)
$valorDaSoma = somar(10, 5);
echo "O resultado da soma é: " . $valorDaSoma; // Saída: O resultado da soma é: 15

echo "<br>";

$outraSoma = somar(100, 200);
echo "O resultado da outra soma é: " . $outraSoma; // Saída: O resultado da outra soma é: 300
?>
```

### Exercício 1.1:
No nosso projeto, na página `minhas_vendas.php`, o preço é formatado para a moeda brasileira (ex: `1500.50` vira `1.500,50`). A função nativa `number_format()` é usada para isso.

Seu desafio é criar sua própria função para isso.

Crie uma função chamada `formatarParaReal($valor)`.

Dentro dela, use a função nativa `number_format()` para formatar o `$valor` com 2 casas decimais, usando vírgula como separador decimal e ponto como separador de milhar.

A função deve retornar o valor formatado, concatenado com "R$ " no início.

Teste sua função chamando-a com diferentes números, por exemplo: `echo formatarParaReal(12345.67)`; (deve imprimir "R$ 12.345,67").


## Aula 1.2: As Ferramentas Nativas do PHP

### Explicação do Conceito:
O PHP já vem com uma caixa de ferramentas imensa, cheia de funções prontas para resolver os problemas mais comuns do dia a dia: manipular textos, datas, arrays, e muito mais. Conhecer as principais funções nativas economiza muito tempo. No nosso código, várias delas são usadas.

### Exemplo com Analogia:

#### Analogia:
Você não precisa construir uma furadeira do zero toda vez que precisa fazer um furo na parede. Você simplesmente pega a furadeira (a função nativa) da sua caixa de ferramentas e a usa.

#### Implementação com Funções do Projeto: Vamos ver algumas funções usadas no nosso código.

```php
<?php
// Inclui um arquivo uma única vez. Ótimo para não repetir a conexão com o banco.
include_once('arquivo.php'); 

// Se tivéssemos um arquivo 'config.php' com uma variável $nome, poderíamos fazer:
include_once('config.php');
echo $nome;

// Redireciona o navegador para outra página.
header('Location: pagina.php');

// É crucial para o fluxo de login/logout.
// Exemplo (não execute junto com outros 'echo'): 
header('Location: https://google.com');

// Conta quantos elementos existem em um array.
count($array); 

// Usamos em 'action_vendas.php' para saber quantos serviços foram enviados.
$servicos = ['Limpeza', 'Manicure', 'Pedicure'];
echo "Total de serviços: " . count($servicos); // Saída: Total de serviços: 3
echo "<br>";

// Formata uma data/hora.
date($formato, $timestamp);

// 'strtotime()' converte um texto de data em um timestamp (formato numérico que o PHP entende).
$dataDoBanco = "2025-09-13 15:30:00";
$dataConvertida = strtotime($dataDoBanco);
echo "Data formatada: " . date("d/m/Y H:i:s", $dataConvertida); // Saída: Data formatada: 13/09/2025 15:30:00
?>
```

### Exercício 1.2:
Crie um script PHP que:

 - Declare um array $compras com alguns itens (ex: ['Arroz', 'Feijão', 'Macarrão']).

 - Use a função count() para exibir a mensagem: "Você tem X itens no seu carrinho.".

 - Use a função date() para exibir a data e hora atuais no formato brasileiro, com a mensagem: "Data do pedido: dd/mm/aaaa hh:mm:ss".