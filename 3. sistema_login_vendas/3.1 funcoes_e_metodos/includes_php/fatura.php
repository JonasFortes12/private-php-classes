<?php 
// PASSO 3: Incluir os arquivos necessários
require_once('cabecalho.php'); // Inclui o topo da página (h1, title, etc.)
require_once('functions.php'); // Inclui nossas funções de cálculo e formatação

// Variáveis para guardar os valores
$valor_original = 0;
$valor_com_desconto = 0;
$mensagem_erro = '';

// 1. Verifica se o formulário foi enviado e se não está vazio
if (isset($_POST['valor_total']) && !empty($_POST['valor_total'])) {
    
    // 2. Receber o valor (e garantir que é um número float)
    $valor_original = (float) $_POST['valor_total'];
    
    // 3. Chamar a função para calcular o desconto
    $valor_com_desconto = calcular_desconto($valor_original);
    
} else {
    // Se o formulário foi enviado em branco ou acessado diretamente
    $mensagem_erro = "Nenhum valor foi informado. Por favor, volte e tente novamente.";
}
?>

<main>
    <div>
        <h2>Fatura da Simulação</h2>
        
        <?php if ($mensagem_erro): ?>
            
            <p style="color: red;"><?php echo $mensagem_erro; ?></p>
        
        <?php else: ?>
        
            <p>
                <strong>Valor Original:</strong> 
                <?php echo formata_valor_real($valor_original); ?>
            </p>
            
            <p>
                <strong>Desconto Aplicado (10%)</strong>
            </p>
            
            <p>
                <strong>Valor Final a Pagar:</strong> 
                <h3 style="color: green;"><?php echo formata_valor_real($valor_com_desconto); ?></h3>
            </p>
        
        <?php endif; ?>

        <hr>
        
        <a href="calculadora_desconto.php">Calcular Novamente</a>
        <br>
        <a href="index.php">Voltar à Página Principal</a>
    </div>
</main>

</body>
</html>