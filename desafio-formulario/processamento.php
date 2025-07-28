<?php
$operador = $_POST['codigo'];

if (empty($operador)) {
    echo 'operador deve ser preenchido';
    exit(); // Qualquer palavra solta no PHP, tende a ser uma constante. Ex: exit
}

//condicional para operador
if ($operador == 123456) {
    $nome_operador = "Nathalia";
} elseif ($operador == 654321) {
    $nome_operador = "Vinicius";
} else {
    $nome_operador = "Operador não identificado";
}

//Seleção de produtos
$produto1 = $_POST['produto1'];
$qtd1 = $_POST['qtd1'];
$produto2 = $_POST['produto2'];
$qtd2 = $_POST['qtd2'];
$produto3 = $_POST['produto3'];
$qtd3 = $_POST['qtd3'];
$produto4 = $_POST['produto4'];
$qtd4 = $_POST['qtd4'];
$pagamento = $_POST['pagamento'];

// Lista de preços
$valores = [
    '0' => 0.50,
    '1' => 1.50,
    '2' => 3.00,
    '3' => 0.80,
    '4' => 2.00,
    '5' => 1.00,
    '6' => 3.00,
    '7' => 5.00,
    '8' => 4.50,
    '9' => 1.00,
    '10' => 2.00,
];

$valor1 = $valores[$produto1];
$total1 = $qtd1 * $valor1;

$valor2 = $valores[$produto2];

$total2 = $qtd2 * $valor2;

$valor3 = $valores[$produto3];
$total3 = $qtd3 * $valor3;

$valor4 = $valores[$produto4];
$total4 = $qtd4 * $valor4;

$total_geral = $total1 + $total2 + $total3 + $total4;

//Enviando os dados para URL e ser coletado via GET na página home.php
header("location: home.php?" . http_build_query([
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
    'total_geral' => $total_geral,
]));

exit();
