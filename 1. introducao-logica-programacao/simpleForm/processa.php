<?php
// Mapeamento da senha
$operadores = [
  "123456" => "Pedro",
  "854321" => "Carlos",
  "098765" => "Maria"
];

// Mapeamento de preços
$precos = [
  "arroz" => 5.00,
  "feijao" => 6.00,
  "oleo" => 7.50
];

// Captura dos dados do formulário
$senha = $_POST['senha'];
$nomeOperador = isset($operadores[$senha]) ? $operadores[$senha] : "Desconhecido";

echo "Operador: $nomeOperador<br><br>";

// Produtos
$total = 0;
for ($i = 1; $i <= 3; $i++) {
  $produto = $_POST["produto$i"];
  $quantidade = $_POST["qtd$i"];
  $valorUnitario = $precos[$produto];
  $subtotal = $quantidade * $valorUnitario;
  $total += $subtotal;

  echo "Produto: $produto | Qtd: $quantidade | Valor unitário: R$ $valorUnitario | Subtotal: R$ $subtotal<br>";
}

echo "<br>Forma de pagamento: " . $_POST['pagamento'] . "<br>";
echo "<strong>Total da compra: R$ $total</strong>";
?>
