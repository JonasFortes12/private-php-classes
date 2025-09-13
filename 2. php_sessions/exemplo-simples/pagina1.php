<!--  Iniciar servidor: php -S localhost:8000 -->
<?php
// 1. Iniciar ou retomar a sessão (passar pelo portão)
session_start();

// 2. Guardar uma informação no "armário"
$_SESSION['nome_utilizador'] = 'Maria';

echo 'Olá! O seu nome foi guardado na sessão.';
echo '<br><a href="pagina2.php">Ir para a página 2</a>';
?>`