<!DOCTYPE html>
<html lang="pr-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
        <title>PHP</title>
    </head>

    <body>
        <header>
            <h1>Extraindo  valores com extract()</h1>
        </header>
    
        <main>
            <?php 
                echo "<hr>"";

                echo "<h2> 1 - Extract() </h2>;

                // Criação de um array associativo com chave => valores
                $array  [
                    'nome' => 'Maria',
                    'idade' => 40,
                    'peso' => 50.5]

                    // Exibe o array completo  em um formato legivel
                echo "<pre>";
                print_r($array);
                echo "</pre>";

                // A função extract transforma as chaves do array em variaveis
                // Exemplo:  cria as variaveis $nome, $idade , $peso
                extract($array);
            
                echo "<hr>";

                // Exibe o valor da variavel  $nome (que foi criada a partir do array)
                print_r("Valor extraido: " . $nome);

                echo "<hr>";
            ?>
        </main>

        
    </body>

</html>