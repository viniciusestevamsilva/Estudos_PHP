<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Meu Primeiro PHP</title>
    <style>
        /*Estilizando a pagina */
        body{
            font-family: Arial;
            background-color: #f0f0f0f0;
            text-align: center;
        }
        input,button {
            padding: 8px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <h1>Bem-Vindo ao PHP</h1>

    <!-- 
    Formulario HTML
    - method='GET': envia os dados pela URL (ex: ?mensagem=texto)
    - action='': significa que o formulario sera enviado para a propria pagina
    -->
    <form method="GET" action="">
        <label>Digite sua mensagem:</label><br>

        <!-- Campo de texto onde o usuario digita -->
        <input type="text" name="mensagem" required>

        <!--  Botão para enviar -->
        <button type="submit">Enviar</button>
    </form> 

    <p>
        <?php
            // Inicio do codigo PHP

            // Verifica se existe uma mensagem enviada pelo formulario
            // A variavel $_GET['mensagem'] pega o valor  enviado na URL
            if (isset($_GET['mensagem'])) {
            
                // Armazena o que foi digitado na variavel  $mensagem
                // A função htmlspecialchars() serve para proteger  contra codigos
                // Maliciosos (evita que alguem  envie HTML ou JavaScript)
                $mensagem = htmlspecialchars($_GET['mensagem']);

                // Exibe na tela a mensagem digitada  pelo usuario
                echo "Você  digitou: <strong>$mensagem</strong>";
            } else {
                // Se nenhuma mensagem foi enviada ainda,  mostra essa frase padrão
                echo "Olá, mundo! Este é meu primeiro  código PHP.";
            }

            // Fim do codigo PHP
        ?>
    </p>
</body>