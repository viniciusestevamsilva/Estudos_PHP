<!DOCTYPE html>
<html lang="pr-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
        <title>PHP</title>
    </head>

    <body>
        <header>
            <h1>Busca Aleatoria: array_rand()</h1>
        </header>
        <main>
            <?php 
                echo '<hr>';
                echo '<h2> Array Rand </h2>';
                $array = [
                'nome' => 'Maria',
                'idade' => 40,
                'peso' => 50.5
                ];
                // Exibe o array original formatado
                echo "<pre>";
                print_r($array);
                echo "<pre>";
                // array_rand($array) retorna uma chave aleatoria do array
                // Em seguida, usamos essa chave para acessar o valor correspondente
                $busca_aleatoria = $array[array_rand($array)];

                // Exibe o valor aleatorio escolhido do array
                echo "<pre>";
                print_r($busca_aleatoria);
                echo "<pre>";
            ?>
        </main>   
    </body>
</html>