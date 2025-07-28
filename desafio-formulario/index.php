<html>

<head>
    <title>Formulário Xerox</title>
    <meta charset="UTF-8">
</head>

<body>
    <h2>Vendas Serviços</h2>

    <form method="POST" action="processamento.php">

        <label for="">Código</label>
        <input type="text" name="codigo" placeholder="Digite o seu código" />

        <br /><br />

        <label for="">Produto-01</label>
        <select name="produto1">
            <option value="0">Cópia COLOR</option>
            <option value="1">Cópia PB</option>
            <option value="2">Encadernação</option>
        </select>

        <label>Quantidade:</label>
        <input type="number" name="qtd1" min="1" />
        <br />

        <label for="">Produto-02</label>
        <select name="produto2">
            <option value="3">Plastificação</option>
            <option value="4">Impressão COLOR</option>
            <option value="5">Impressão PB</option>
        </select>

        <label>Quantidade:</label>
        <input type="number" name="qtd2" min="1" />
        <br />

        <label for="">Produto-03</label>
        <select name="produto3">
            <option value="6">Impressao A3</option>
            <option value="7">Impressão A4</option>
            <option value="8">Plastificação RG</option>
        </select>

        <label>Quantidade:</label>
        <input type="number" name="qtd3" min="1" />
        <br />

        <label for="">Produto-04</label>
        <select name="produto4">
            <option value='9'>Água com gás</option>
            <option value='10'>Água sem gás</option>
        </select>

        <label>Quantidade:</label>
        <input type="number" name="qtd4" min="1" />
        <br />

        <h3>Forma de Pagamento</h3>
        <input type="radio" name="pagamento" value="Crédito" />
        <label>Crédito</label>

        <input type="radio" name="pagamento" value="Débito" />
        <label>Débito</label>

        <input type="radio" name="pagamento" value="PIX" />
        <label>PIX</label>

        <input type="radio" name="pagamento" value="Dinheiro" />
        <label>Dinheiro</label>
        <br /><br />

        <input type="submit" value="Enviar" />
    </form>
</body>

</html>