<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário Xerox</title>
</head>
<body>
    <h2>Vendas Serviços</h2>

    <form method="GET" action="processamento.php">
        <label for="">Código</label>
        <input type="text" name="codigo" placeholder="Digite o seu código" required />
        <br /><br />

        <label>Produto-01</label>
        <select name="produto1">
            <option value="0">Cópia COLOR</option>
            <option value="1">Cópia PB</option>
            <option value="2">Encadernação</option>
        </select>
        <label>Quantidade:</label>
        <input type="number" name="qtd1" min="1" required />
        <br />

        <label>Produto-02</label>
        <select name="produto2">
            <option value="3">Plastificação</option>
            <option value="4">Impressão COLOR</option>
            <option value="5">Impressão PB</option>
        </select>
        <label>Quantidade:</label>
        <input type="number" name="qtd2" min="1" required />
        <br />

        <label>Produto-03</label>
        <select name="produto3">
            <option value="6">Impressão A3</option>
            <option value="7">Impressão A4</option>
            <option value="8">Plastificação RG</option>
        </select>
        <label>Quantidade:</label>
        <input type="number" name="qtd3" min="1" required />
        <br />

        <label>Produto-04</label>
        <select name="produto4">
            <?php
            $i = 0;
            while ($i < 100) {
                echo "<option value='agua_gas'>Água com gás</option>";
                echo "<option value='agua_sem_gas'>Água sem gás</option>";
                $i++;
            }
            ?>
        </select>
        <label>Quantidade:</label>
        <input type="number" name="qtd4" min="1" required />
        <br /><br />

        <h3>Forma de Pagamento</h3>
        <input type="radio" name="pagamento" value="Crédito" required /> Crédito
        <input type="radio" name="pagamento" value="Débito" /> Débito
        <input type="radio" name="pagamento" value="PIX" /> PIX
        <input type="radio" name="pagamento" value="Dinheiro" /> Dinheiro
        <br /><br />

        <input type="submit" value="Enviar" />
    </form>
</body>
</html>
