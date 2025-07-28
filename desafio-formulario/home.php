<?php
function get_nome_produto($codigo) // função recebe o código do produto e retorna o nome do produto. Utilizando a estrutura switch case.
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

        case '9':
            return 'Água com gás';

        case '10':
            return 'Água sem gás';
    }
};
?>

<html>

<head>
    <title>Home-Resultado</title>
    <meta charset="UTF-8">
</head>

<body>
    <h2>Extrato da Venda</h2>
    <!-- O GET pega/recupera as informações enviadas via URL -->
    Operador: <?php echo $_GET['operador']; ?><br><br>

    <strong>Produtos:</strong><br>
    <ul>
        <li> <?php echo get_nome_produto($_GET['produto1']) . ' Qtd: ' . $_GET['qtd1'] . ' = R$' . $_GET['total1']; ?></li>
        <li> <?php echo get_nome_produto($_GET['produto2']) . ' Qtd: ' . $_GET['qtd2'] . ' = R$' . $_GET['total2']; ?></li>
        <li> <?php echo get_nome_produto($_GET['produto3']) . ' Qtd: ' . $_GET['qtd3'] . ' = R$' . $_GET['total3']; ?></li>
        <li> <?php echo get_nome_produto($_GET['produto4']) . ' Qtd: ' . $_GET['qtd4'] . ' = R$' . $_GET['total4']; ?></li>
    </ul>

    <p>Total Geral: R$<?php echo number_format($_GET['total_geral'], 2, ','); ?> </p>
    <p>Forma de Pagamento: <?php echo $_GET['pagamento']; ?> </p>

    <a href="index.php">Voltar ao início</a>
</body>

</html>