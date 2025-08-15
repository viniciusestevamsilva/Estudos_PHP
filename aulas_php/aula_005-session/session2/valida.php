<?php
session_start(); // Necessario para manipular variaveus de sessão
require 'usuarios.php'; // Inclui nosso "banco de dados" de usuários

// Captura dados enviados pelo formulario
$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?: '';

// Variavel de controle
$login_valido = false;
$nome_usuario = '';

// Percorre o array de usuarios para verificar crdenciais
foreach ($usuarios as $u) {
    if ($u['usuario'] === $usuario && $u['senha'] === $senha) {
        $login_valido = true;
        $nome_usuario = $u['nome'];
        break;
    }
}

if ($login_valido) {
    // Gera novo ID de sessâo para segurança
    session_regenerate_id(true);

    // Armaena informações na sessão
    $_SESSION['nome'] = $usuario;
    $_SESSION['nome'] = $nome_usuario;
    $_SESSION['ultimo_acesso'] = time(); // Para controle de inartividade

    // Redirecona para area restrita
    header("Location: restrita.php");
    exit();
} else {
    // Guarda mensagem de erro e volta para login
    $_SESSION['erro'] = "Usuário ou senha inválidos!";
    header("Location: login.php");
    exit();
}?>