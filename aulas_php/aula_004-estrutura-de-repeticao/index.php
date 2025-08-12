<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exemplo de Estruturas de Repetição em PHP</title>
        <!-- Link para o arquivo CSS externo que estiliza a pagina -->
        <link rel="stylesheet" href="public/css/estilo.css">
    </head>
    <body>
        <!-- Cabeçalho da pagina -->
        <header>
            <h1>Exemplo de Estruturas de Repetição em PHP</1h>
        </header>

        <!-- Conteúdo da pagina -->
        <main>
        <!-- Secão que exibe o loop FOR -->
            <section>
                <h2>Estrutura FOR</h2>
                <div class="caixa">
                    <?php 
                        // Inclui o arquivo PHP que contem as funções
                        // Em seguida, executa a afunção que exibe o loop FOR
                        include "public/processa.php";
                        exibirFor();
                    ?>
                </div>
            </section>

        <!-- Seção que exibe o loop WHILE -->
            <section>
                <h2>Estrutura WHILE</h2>
                <div class="caixa">
                    <?php 
                        // Chama a função que exibe o loop WHILE
                        exibirWhile();
                    ?>
                </div>
            </section>

        <!-- Seção que exibe o loop FOREACH-->
         <section>
                <h2>Estrutura FOREACH</h2>
                <div class="caixa">
                    <?php 
                        // Chama a função que exibe o loop FOREACH
                        exibirForeach();
                    ?>
                </div>
            </section>
        </main>

        <!-- Rodape da pagina -->
        <footer>
            <p>Exemplo didatico de PHP &copy; 2025</p>
        </footer>
    </body>
</html>