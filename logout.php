<?php
session_start(); // Inicie a sessão, se ainda não estiver iniciada

// Destrua todas as variáveis de sessão
$_SESSION = array();

// Se desejar encerrar completamente a sessão, apague o cookie de sessão.
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Destrua a sessão
session_destroy();

// Redirecione para a página de login ou outra página desejada
header("Location: user.html");

exit;
?>