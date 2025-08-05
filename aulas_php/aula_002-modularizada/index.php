<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>

    <!-- Link para o CSS externo -->
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<!-- Titulo da pagina -->
    <h1>Envie sua mensagem </h1>

    <!-- 
        Formulario para o usuario digitar e enviar dados
        - method='POST' indica uqe os dados serao enviados 'por tras' (sem aparecer na url).
        - action='processo.php' diz que os dados serão enviados para a página chamda processo.php
    -->
    <form method="POST" action="processo.php">

        <!-- Texto explicando o que o usuario deve fazer -->
        <label>Digite sua mensagem:</label><br>

        <!-- Campo de texto onde o usuario digita a mensagem
            - name='mensagem' é o nome do campo, usado para recupperar o valor no php
            - required significa que o campo é obrigatorio.
        -->
        <input type="text" name="mensagem" required>

        <!--  Botão para enviar o formulario -->
        <button type="submit">Enviar</button>
    </form> 

</body>