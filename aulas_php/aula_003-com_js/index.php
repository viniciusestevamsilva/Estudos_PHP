<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>

    <!-- Link para o CSS externo -->
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <h1>Envie sua mensagem </h1>

    <div class="caixa">
    <form id="meuFormulario" method="POST" action="processo.php">
        <label>Digite sua mensagem:</label><br>
        <input type="text" name="mensagem" required><br>
        <button type="submit">Enviar</button>
    </form> 
    </div>

    <!-- Link para o JavaScript externo -->
    <script src="js/script.js"></script>

</body>
</html>