<?php 
session_start(); // Inicia sessão para verificar se ja esta logado

// Se ja estiver logado, redirecione para area restrita
if (isset($_SESSION['usuario'])) {
    header('Location: restrita.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF8">
    <title>Login com Sessões</title>
</head>
<body>
    <h1>Login</h>

    <!-- exibe mensagem de erro de exibir -->
    <?php if (isset($_SESSION['erro'])) :?>
        <p style="color:red;"><?php echo $_SESSION['erro']; unset($_SESSION['erro']); ?></p>
    <?php endif; ?>

    <!-- Formulario envia para valida.php -->
    <form action="valida.php" method="POST">
        <label>Usúario:</label><br>
        <input type="text" name="usuario" required><br><br>

        <label>Senha:</label><br>
        <input type="password" name="senha" required><br><br>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>