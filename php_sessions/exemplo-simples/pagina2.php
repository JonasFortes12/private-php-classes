<!--  Iniciar servidor: php -S localhost:8000 -->
<?php
// 1. Ligar-se à sessão existente (passar pelo portão novamente)
session_start();

// 2. Buscar a informação do "armário" e usá-la
if (isset($_SESSION['nome_utilizador'])) {
    $nome = $_SESSION['nome_utilizador'];
    echo 'Bem-vindo(a) de volta, ' . $nome . '!';
} else {
    echo 'Não encontrei o seu nome na sessão. Volte para a página 1.';
}
?>