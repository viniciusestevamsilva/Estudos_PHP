<!DOCTYPE html>
<html lang="pr-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
        <title>PHP</title>
    </head>

    <body>
        <header>
            <h1>Mudando o Case: array_chance_key_case()</h1>
        </header>
    
        <main>
            <?php 
                echo "<hr>";

                echo "<h2> 1 - Extract() </h2>;

                // Criação de um array com chaves em cases variados
                $array  [
                    'nome' => 'Maria',
                    'idade' => 40,
                    'peso' => 50.5
                ];

                // Exibe o array original
                echo "<pre>";
                print_r($array);
                echo "</pre>";

                //Converte todas as chaves do arrya para minusculas (CASE_LOWER)
                $indide_minusculo = array_change_key__case($array, CASE_LOWER);

                // Exibe o arry com chaves em minusculas
                echo "<pre>";
                echo "indice Minuculo: <br>";
                print_r($indide_minusculo);
                echo"</pre>";
            
                // Converte todas as chaves do array para maisculas (CASE_UPPER)
                $indide_maisculo = array_chance_key_case($array, CASE_UPPER);

                // Exibe o array com chaves em maisculas
                echo "<pre>";
                echo "indice Maisculo: <br>";
                print_r($indide_maisculo);
                echo"</pre>";
            ?>
        </main>
    </body>
</html>