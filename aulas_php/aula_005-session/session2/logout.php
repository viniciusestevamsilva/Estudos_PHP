<?php
session_start();

// Remove todas as variaveis da sessão
session_unset();

// Destroi a sessão no servidor
session_destroy();

// Redireciona para login
header("Location: login.php");
exit();?>