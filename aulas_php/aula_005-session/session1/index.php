<?php
// Inicia a sessaõ (sempre deve estar no topo da pagina antes de quaquer HTML)
session_start();

// Verifica se o nome ja foi enviado pelo formulario
if (isset($_POST['nome'])) {
    // Armazena o nome enviado na sessão
    $_SESSION['nome'] = $_POST['nome'];
}
?>

<!-- Formulario simples para o usuario digitar o nome -->
<form method="POST">
    <label>Digite seu nome:</label>
    <input type="text" name="nome">
    <button type="submit">Enviar</button>
</form>

<?php 
// Verifica se ja existe um nome armazenado na sessão
if (isset($_SESSION['nome'])) {
    // Exibe uma mensagem com o nome armazenado
    echo "<p>Ola, " . $_SESSION['nome'] . "! Seja Bem-Vindo de volta </p>";
}
?>