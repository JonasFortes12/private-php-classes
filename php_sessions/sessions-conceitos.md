## Sessions em PHP

### O que são as Sessions?

As sessions (sessões) em PHP são uma forma de armazenar informações sobre um usuário em várias páginas da web. Ao contrário dos cookies, que são armazenados no computador do usuário, as sessões armazenam dados no servidor. Isso permite que os desenvolvedores mantenham informações do usuário, como preferências ou dados de login, durante a navegação em um site.

### Analogia:

Para começar, vamos a uma analogia. Imagine que você vai a um parque de diversões. Ao entrar, você recebe uma pulseira de identificação única. Essa pulseira (a "ID da Sessão") permite que o parque (o "servidor") saiba quem você é enquanto estiver lá dentro. Com ela, você pode guardar seus pertences num armário (os "dados da sessão") e, sempre que precisar, pode ir até lá e pegar ou guardar algo, porque o parque sabe que aquele armário pertence à pessoa com aquela pulseira específica. Quando você vai embora e devolve a pulseira, o armário é esvaziado.

### Como funcionam as Sessions em PHP?

Então, vamos continuar. Agora que você tem a "pulseira" (o ID da Sessão), como o parque (servidor) a entrega para você e como você a usa para aceder ao seu "armário" (os dados da sessão)?

É aqui que entra a função mais importante das sessões em PHP: `session_start()`.

Pense na `session_start()` como o portão de entrada do parque. Sempre que você visita uma página que precisa de usar ou guardar informações na sua sessão, você tem de "passar pelo portão" primeiro.

#### Isto é o que a `session_start()` faz nos bastidores:

- Procura por uma "pulseira": O PHP verifica se o seu browser já enviou uma ID de sessão (a tal pulseira).

- Se encontrar uma: Ele "lê" a pulseira e abre o seu armário específico no servidor, disponibilizando tudo o que estava guardado lá.

- Se não encontrar: O PHP percebe que você é um novo visitante. Então, ele cria uma nova pulseira (uma ID única e aleatória), entrega-a ao seu browser (geralmente através de um cookie) e prepara um armário vazio para você no servidor.

Uma vez que o "armário" está aberto, podemos usar uma variável especial em PHP, que é um array chamado `$_SESSION`, para guardar e buscar as nossas coisas.

### Exemplo de uso de Sessions em PHP

Imagine que temos duas páginas no nosso site: pagina1.php e pagina2.php.

Na `pagina1.php`, vamos pedir ao utilizador o seu nome e guardá-lo no "armário" (a sessão).
Na `pagina2.php`, vamos cumprimentar o utilizador pelo nome, buscando essa informação que guardámos.

#### `pagina1.php`:

```php
<?php
// 1. Iniciar ou retomar a sessão (passar pelo portão)
session_start();

// 2. Guardar uma informação no "armário"
$_SESSION['nome_utilizador'] = 'Maria';

echo 'Olá! O seu nome foi guardado na sessão.';
echo '<br><a href="pagina2.php">Ir para a página 2</a>';
?>`
```

#### `pagina2.php`:

```php
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
```

#### Vamos analisar:

- `session_start()` no topo: Repare que AMBAS as páginas começam com `session_start()`. Isto é crucial. Na primeira página, ela cria a sessão. Nas páginas seguintes, ela "reconecta-se" a essa mesma sessão.

- `$_SESSION[...]`: Usamos o array `$_SESSION` para guardar e aceder aos dados. O que guardamos com a chave 'nome_utilizador' na `pagina1.php` é exatamente o que recuperamos na `pagina2.php`.


Com base neste exemplo, o que você acha que aconteceria se comentássemos ou removêssemos a linha `session_start();` da `pagina2.php`?

- Se tirássemos o `session_start()` da `pagina2.php`, o PHP não teria como saber que precisa procurar pela "pulseira" (o ID da sessão) que o browser está a enviar. Para ele, seria como se você estivesse a chegar ao parque pela primeira vez, mesmo já tendo estado lá.

- Consequentemente, a variável `$_SESSION` estaria vazia naquela página, e o `isset($_SESSION['nome_utilizador'])` daria false. O script não geraria um erro, mas simplesmente não encontraria a informação.

- Isso mostra como o `session_start()` é a chave que liga cada página à mesma sessão contínua.

### Encerrando sessões:
Agora que sabemos como iniciar uma sessão e guardar dados, o próximo passo lógico é falar sobre o fim da sessão. Usando a nossa analogia, como é que fazemos para "sair do parque" e esvaziar o nosso armário de forma segura? Isso é o que chamamos de "destruir a sessão", algo fundamental para uma funcionalidade de "logout".

Fazer um "logout" seguro é mais do que simplesmente colocar um link para a página inicial. Precisamos garantir que todas as informações do "armário" sejam limpas e que a "pulseira" seja devolvida.

Em PHP, fazemos isso em três passos principais:

 - Iniciar a sessão: Pode parecer estranho, mas para destruir uma sessão, primeiro precisamos nos conectar a ela. `session_start()` é o primeiro passo.

 - Limpar os dados: Usamos a função `session_unset()` ou simplesmente redefinimos o array `$_SESSION = array();`. Isso é o mesmo que tirar tudo de dentro do seu armário.

 - Destruir a sessão: Usamos a função `session_destroy()`. Este é o passo final, que "quebra a pulseira" e diz ao servidor para apagar o arquivo daquela sessão.

Vamos ver como seria uma página de `logout.php`.

```php
<?php
// 1. Conectar-se à sessão existente
session_start();

// 2. Limpar todas as variáveis da sessão (esvaziar o armário)
$_SESSION = array();

// 3. Destruir a sessão (devolver a pulseira)
session_destroy();

// Opcional: Redirecionar o utilizador para a página de login ou inicial
header("Location: pagina_login.php");
exit;
?>
```