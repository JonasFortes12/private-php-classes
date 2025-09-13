<?php
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

?>

<h2>Resumo do Pedido</h2>

<ul>
    <li><?php echo getNomeProduto($_GET['produto1']) . ' x' . $_GET['qtd1'] . ' = R$ ' . number_format($_GET['total1'], 2, ',', '.'); ?></li>
    <li><?php echo getNomeProduto($_GET['produto2']) . ' x' . $_GET['qtd2'] . ' = R$ ' . number_format($_GET['total2'], 2, ',', '.'); ?></li>
    <li><?php echo getNomeProduto($_GET['produto3']) . ' x' . $_GET['qtd3'] . ' = R$ ' . number_format($_GET['total3'], 2, ',', '.'); ?></li>
</ul>

<h3>Produtos 4</h3>
<ul>
    <?php
    $produtos4_count = $_GET['eprodutos4_count'] ?? 0;
    for ($i = 0; $i < $produtos4_count; $i++) {
        $desc = $_GET["produtos4_desc_$i"];
        $qtd = $_GET["produtos4_qtd_$i"];
        $valor = $_GET["produtos4_valor_$i"];
        $subtotal = $_GET["produtos4_subtotal_$i"];

        echo "<li>$desc x$qtd = R$ " . number_format($subtotal, 2, ',', '.') .
            " (R$ " . number_format($valor, 2, ',', '.') . " un)</li>";
    }
    ?>
</ul>

<p><strong>Total Geral:</strong> R$ <?php echo number_format($_GET['total_geral'], 2, ',', '.'); ?></p>
<p><strong>Forma de Pagamento:</strong> <?php echo $_GET['pagamento']; ?></p>
<p><strong>Operador:</strong> <?php echo $_GET['operador']; ?></p>

<a href="index.php">Voltar ao início</a>