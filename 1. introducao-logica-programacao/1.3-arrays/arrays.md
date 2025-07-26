## Arrays em PHP

Arrays são estruturas de dados que permitem armazenar múltiplos valores em uma única variável. Em PHP, os arrays podem ser indexados numericamente ou associativos, onde as chaves são strings.

Há no PHP, três tipos principais de arrays:
1. **Arrays indexados**: onde os índices são números inteiros.
2. **Arrays associativos**: onde os índices são strings.
3. **Arrays multidimensionais**: arrays que contêm outros arrays como elementos.

### 1. Arrays Indexados
Os arrays indexados são criados automaticamente quando você atribui valores a uma variável sem especificar uma chave. O PHP atribui índices numéricos automaticamente, começando do zero.

```php
$frutas = array("Maçã", "Banana", "Laranja");
// ou usando a sintaxe curta
$frutas = ["Maçã", "Banana", "Laranja"];

// Acessando elementos do array
echo $frutas[0]; // Imprime "Maçã"
echo $frutas[1]; // Imprime "Banana"
echo $frutas[2]; // Imprime "Laranja"
``` 
- Adicionando elementos
Para adicionar elementos a um array indexado, você pode usar a função `array_push()` ou simplesmente atribuir um valor a um novo índice.

```php
array_push($frutas, "Uva"); // Adiciona "Uva" ao final do array
$frutas[] = "Pera"; // Também adiciona "Pera" ao final
``` 
- Removendo elementos
Para remover elementos de um array indexado, você pode usar a função `array_pop()` para remover o último elemento ou `unset()` para remover um elemento específico.

```php
array_pop($frutas); // Remove o último elemento ("Pera")
unset($frutas[1]); // Remove o elemento no índice 1 ("Banana")
```

### 2. Arrays Associativos
Arrays associativos permitem que você associe valores a chaves específicas, tornando mais fácil identificar os dados armazenados. É comum usar strings como chaves. Essse tipo de array é muito útil quando você precisa armazenar dados relacionados, como informações de um usuário.

```php
$usuario = [
    "nome" => "João",
    "idade" => 30,
    "email" => "joao@gmail.com"
];
// Acessando elementos do array associativo
echo $usuario["nome"]; // Imprime "João"
echo $usuario["idade"]; // Imprime 30
echo $usuario["email"]; // Imprime "
```

 - Adicionando elementos
Para adicionar novos elementos a um array associativo, você pode simplesmente atribuir um valor a uma nova chave.

```php
$usuario["telefone"] = "1234-5678"; // Adiciona o telefone ao array
```
 - Removendo elementos
Para remover um elemento de um array associativo, você pode usar a função `unset()`.
```php
unset($usuario["idade"]); // Remove a chave "idade" do array
``` 

### 3. Arrays Multidimensionais
Arrays multidimensionais são arrays que contêm outros arrays como elementos. Eles são úteis para armazenar tabelas de dados ou estruturas mais complexas.

```php
$contatos = [
    ["nome" => "Ana", "email" => "ana@gmail.com"],
    ["nome" => "Carlos", "email" => "carlos@gmail.com"],
    ["nome" => "Maria", "email" => "maria@gmail.com"]
];
// Acessando elementos de um array multidimensional
echo $contatos[0]["nome"]; // Imprime "Ana"
echo $contatos[1]["email"]; // Imprime "Carlos"
echo $contatos[2]["nome"]; // Imprime "Maria"
```
- Adicionando elementos
Para adicionar um novo array a um array multidimensional, você pode usar a função `array_push()` ou simplesmente atribuir um novo array a um novo índice.

```php
array_push($contatos, ["nome" => "Pedro", "email" => "pedro@gmail.com"]);
// Ou
$contatos[] = ["nome" => "Luiza", "email" => "luiza@gmail.com"];
```
- Removendo elementos
Para remover um elemento de um array multidimensional, você pode usar a função `unset()`.

```php
unset($contatos[1]); // Remove o contato no índice 1 (Carlos)
```

### Iterando sobre Arrays
Você pode iterar sobre arrays usando loops, como `foreach`, que é especialmente útil para percorrer todos os elementos de um array.

```php
foreach ($frutas as $fruta) {
    echo $fruta . "\n"; // Imprime cada fruta em uma nova linha
}
foreach ($usuario as $chave => $valor) {
    echo "$chave: $valor\n"; // Imprime cada chave e valor do array associativo
}
foreach ($contatos as $contato) {
    echo $contato["nome"] . " - " . $contato["email"] . "\n"; // Imprime nome e email de cada contato
}
```
### Funções Úteis para Arrays
O PHP oferece várias funções úteis para manipular arrays. Aqui estão algumas das mais comuns:
- `count()`: Retorna o número de elementos em um array.
```php
$countFrutas = count($frutas); // Retorna 3
```
- `array_keys()`: Retorna todas as chaves de um array.
```php
$chavesUsuario = array_keys($usuario); // Retorna ["nome", "idade", "email"]
```
- `array_values()`: Retorna todos os valores de um array.
```php
$valoresUsuario = array_values($usuario); // Retorna ["João", 30, "joao@gmail.com"]
```
- `in_array()`: Verifica se um valor existe em um array.
```php
$existe = in_array("Maçã", $frutas); // Retorna true
```
- `array_merge()`: Combina dois ou mais arrays em um único array.
```php
$novasFrutas = ["Manga", "Abacaxi"];
$frutasCompletas = array_merge($frutas, $novasFrutas); // Combina os arrays
```
- `array_slice()`: Retorna uma parte de um array. Os parâmetros são o array, o índice inicial e o comprimento da parte a ser retornada.
```php
$parteFrutas = array_slice($frutas, 1, 2); // Retorna ["Banana", "Laranja"]
```
- `array_search()`: Procura um valor em um array e retorna a chave correspondente.
```php
$chave = array_search("Banana", $frutas); // Retorna 1
```

