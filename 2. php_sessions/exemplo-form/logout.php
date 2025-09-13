<?php
// 1. Conectar-se à sessão existente
session_start();

// 2. Limpar todas as variáveis da sessão (esvaziar o armário)
$_SESSION = array();

// 3. Destruir a sessão (devolver a pulseira)
session_destroy();

// Opcional: Redirecionar o utilizador para a página de login ou inicial
header("Location: index.html");
exit;
?>