<?php
$operador = $_GET['codigo'];


function getNomeProduto($codigo)
{
    switch ($codigo) {
        case '0':
            return 'Cópia COLOR';
        case '1':
            return 'Cópia PB';
        case '2':
            return 'Encadernação';
        case '3':
            return 'Plastificação';
        case '4':
            return 'Impressão COLOR';
        case '5':
            return 'Impressão PB';
        case '6':
            return 'Impressão A3';
        case '7':
            return 'Impressão A4';
        case '8':
            return 'Plastificação RG';
        case 'agua_gas':
            return 'Água com gás';
        case 'agua_sem_gas':
            return 'Água sem gás';
        default:
            return 'Desconhecido';
    }
}

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
// Produtos extras
$produtos4_infos = [];
$total_produtos4 = 0;
for ($i = 1; $i <= 100; $i++) {
    $produto = $_GET["produto4_$i"] ?? null;
    $qtd = intval($_GET["qtd4_$i"] ?? 0);

    if ($qtd > 0 && $produto) {
        $descricao = getNomeProduto($produto);
        $valor_unit = 1.00;
        $subtotal = $valor_unit * $qtd;

        $produtos4_infos[] = [
            'descricao' => $descricao,
            'quantidade' => $qtd,
            'valor' => $valor_unit,
            'subtotal' => $subtotal
        ];

        $total_produtos4 += $subtotal;

    }
}

$total_geral = $total1 + $total2 + $total3 + $total_produtos4;

// Prepara dados produtos4 para URL
$produtos4_infos_flat = [];

foreach ($produtos4_infos as $index => $item) {
    $produtos4_infos_flat["produtos4_desc_$index"] = $item['descricao'];
    $produtos4_infos_flat["produtos4_qtd_$index"] = $item['quantidade'];
    $produtos4_infos_flat["produtos4_valor_$index"] = $item['valor'];
    $produtos4_infos_flat["produtos4_subtotal_$index"] = $item['subtotal'];
}
$produtos4_infos_flat['eprodutos4_count'] = count($produtos4_infos);

// Redireciona
$params = array_merge([
    'produto1' => $produto1, 'qtd1' => $qtd1, 'valor1' => $valor1, 'total1' => $total1,
    'produto2' => $produto2, 'qtd2' => $qtd2, 'valor2' => $valor2, 'total2' => $total2,
    'produto3' => $produto3, 'qtd3' => $qtd3, 'valor3' => $valor3, 'total3' => $total3,
    'pagamento' => $pagamento,
    'operador' => $nome_operador,
    'total_geral' => $total_geral
], $produtos4_infos_flat);

header("Location: home.php?" . http_build_query($params));
exit();
