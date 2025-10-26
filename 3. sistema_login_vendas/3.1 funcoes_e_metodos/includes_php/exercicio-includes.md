# Enunciado do Exercício: Centralizando Funções e Criando a Fatura
## Objetivo: Nosso site da "Gráfica PrintArts SA" está crescendo. Atualmente, temos uma página `calculadora_desconto.php` que mostra os campos, mas ainda não realiza nenhum cálculo.
Para organizar nosso código e prepará-lo para o futuro, vamos centralizar nossas regras de negócio (como cálculos) em um único arquivo. Depois, vamos fazer a calculadora funcionar, enviando o dado para uma nova página, `fatura.php`, que mostrará o resultado final para o cliente.

## Sua Tarefa:

### Passo 1: Criar o Arquivo de Funções (functions.php)

- Crie um novo arquivo chamado `functions.php`.

- Dentro dele, crie uma função PHP chamada `calcular_desconto($valor)`.

- Esta função deve receber um parâmetro (o `$valor` original dos produtos).

- A função deve calcular um `desconto de 10%` sobre esse valor e retornar o novo valor já com o desconto aplicado (Ex: se entrar R$ 100,00, deve retornar 90.00).

### Passo 2: Modificar a Calculadora (calculadora_desconto.php)

- Abra o arquivo `calculadora_desconto.php`.

- O usuário precisa enviar o valor digitado. Para isso, transforme os campos (label, input, button) em um formulário HTML (`<form>` ).

- Configure o `<form>` para enviar os dados para o arquivo `fatura.php` usando o método POST.

- Adicione o atributo `name="valor_total"` ao campo `<input>` para que o PHP possa identificar esse dado quando ele for enviado.

- Adicione o botão `Calcular e Gerar Fatura` com o atributo `type="submit"`.


### Passo 3: Criar a Página da Fatura (fatura.php)

- Crie o novo arquivo `fatura.php`.

- Esta página deve, obrigatoriamente, incluir o cabeçalho e o novo arquivo de funções. Use require_once() para ambos:

- require_once('cabecalho.php');

- require_once('functions.php');

- No corpo da página, o script PHP deve: 
    - Pegar o valor de $_POST['valor_total'] e armazená-lo em uma variável. 
    - Chamar a sua função calcular_desconto(), passando o valor recebido, e armazenar o resultado em outra variável. 
    - Exibir na tela o "Valor Original" e o "Valor Final com Desconto" de forma clara para o usuário.