<?php 
require_once('cabecalho.php');
?>

<main>
    <div>
        <h2>Calcular Desconto:</h2>
        
        <form action="fatura.php" method="POST">
            <label>Valor em Produtos: </label>
            
            <input type="number" name="valor_total" step="0.01" required>
            <br><br>

            <button type="submit">Calcular e Gerar Fatura</button>
        </form>

        <br>
        <a href="index.php">Voltar à Página Principal</a>
    </div>
</main>

</body>
</html>