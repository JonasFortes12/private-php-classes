<?php
$operador = $_GET['codigo'];

if (empty($operador)) {
    echo 'Operador deve ser preenchido';
    exit();
}

if ($operador == 123456) {
    $nome_operador = "Nathalia";
} elseif ($operador == 654321) {
    $nome_operador = "Vinicius";
} else {
    $nome_operador = "Operador não identificado";
}

$produto1 = $_GET['produto1'];
$qtd1 = $_GET['qtd1'];
$produto2 = $_GET['produto2'];
$qtd2 = $_GET['qtd2'];
$produto3 = $_GET['produto3'];
$qtd3 = $_GET['qtd3'];
$produto4 = $_GET['produto4'];
$qtd4 = $_GET['qtd4'];
$pagamento = $_GET['pagamento'];

$valores = [
    '0' => 0.50, // Cópia COLOR
    '1' => 1.50, // Cópia PB
    '2' => 3.00, // Encadernação
    '3' => 0.80, // Plastificação
    '4' => 2.00, // Impressão COLOR
    '5' => 1.00, // Impressão PB
    '6' => 3.00, // Impressão A3
    '7' => 5.00, // Impressão A4
    '8' => 4.50 // Plastificação RG
];

$valor1 = $valores[$produto1];
$total1 = $qtd1 * $valor1;

$valor2 = $valores[$produto2];
$total2 = $qtd2 * $valor2;

$valor3 = $valores[$produto3];
$total3 = $qtd3 * $valor3;

// Produto 4 fixo: R$1,00
$valor4 = 1.00;
$total4 = $qtd4 * $valor4;

$total_geral = $total1 + $total2 + $total3 + $total4;

// Redireciona com dados pela URL (GET)
header("Location: home.php?" . http_build_query([
    'produto1' => $produto1,
    'qtd1' => $qtd1,
    'valor1' => $valor1,
    'total1' => $total1,

    'produto2' => $produto2,
    'qtd2' => $qtd2,
    'valor2' => $valor2,
    'total2' => $total2,

    'produto3' => $produto3,
    'qtd3' => $qtd3,
    'valor3' => $valor3,
    'total3' => $total3,

    'produto4' => $produto4,
    'qtd4' => $qtd4,
    'valor4' => $valor4,
    'total4' => $total4,

    'pagamento' => $pagamento,
    'operador' => $nome_operador,
    'total_geral' => $total_geral
]));
exit();
