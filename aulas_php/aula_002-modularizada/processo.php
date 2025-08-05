<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Procesando mensagem</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<!-- Titulo da pagina -->
    <h1> Resultado</h1>

    <p>
        <?php
        //Verifica se o campo 'mensagem'  foi wnviado atraves do formulario 
         if (isset($_POST['mensagem'])) {
            
                // A função htmlspecialchars impede que o usuario envie codigos perigosos (como scripts)
                // $_POST['mensagem'] é o vlaor enviado pelo formulario com o metodo PÓST
                $mensagem = htmlspecialchars($_POST['mensagem']);

                // Mostra a mensagem digitada pelo usuario 
                echo "Você  digitou: <strong>$mensagem</strong>";

            } else {
                // se nada foi enviado mostra uma mensagem padrao
                // se alguem tentat diretamente o processo.php vai falhar (segurança)
                echo "Nenhuma mensagem foi enviada.";
            }

        ?>

    </p>

        <!-- Link para voltar á pagina do formulario -->
    <a href="index.php">Voltar</a>

</body>