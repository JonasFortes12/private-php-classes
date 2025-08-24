<?php
// Conectar-se à sessão para poder ler os dados
session_start();

// Verificar se o nome do utilizador está guardado na sessão
if (isset($_SESSION['utilizador_logado'])) {
    $nome = $_SESSION['utilizador_logado'];
} else {
    // Se não houver sessão, redireciona para a página de login
    header('Location: index.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Bem-Vindo</title>
</head>
<body>
    <h1>Olá, <?php echo htmlspecialchars($nome); ?>!</h1>
    <p>A sua sessão foi iniciada com sucesso.</p>
    <a href="logout.php">Sair (destruir sessão)</a>
</body>
</html>