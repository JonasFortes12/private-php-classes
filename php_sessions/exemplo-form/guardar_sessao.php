<?php
// Iniciar a sessão
session_start();

// Verificar se o formulário foi enviado e o nome não está vazio
if (isset($_POST['nome_utilizador']) && !empty($_POST['nome_utilizador'])) {
    
    // Guardar o nome enviado pelo formulário na sessão
    $_SESSION['utilizador_logado'] = $_POST['nome_utilizador'];
    
    // Redirecionar o utilizador para a página de boas-vindas
    header('Location: bem_vindo.php');
    exit; // É uma boa prática usar exit() após um redirecionamento
    
} else {
    // Se alguém tentar aceder a este arquivo diretamente, manda de volta
    header('Location: index.html');
    exit;
}
?>