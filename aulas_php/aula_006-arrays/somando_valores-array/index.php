Soma de Notas: 40
<?php 
echo '<hr>';

//Titulo da seção
echo '<h2> 1 - Extract </h2>';

// Criação de um array associativos com nome do alunos e quatro notas
$alunos = [
    'aluno' => 'Maria',
    'Nota1' => 10,
    'Nota2' => 10,
    'Nota3' => 10,
    'Nota4' => 10,
];
// Exibe o conteudo do array formatado na tela
echo "<pre>";
print_r($alunos);
echo "</pre>";

// Inicializa a variavel que armazenara a asoma das notas
$soma_notas = 0;
// Loop que percorre o array inteiro
foreach ($alunos as $chave => $valor) {
    // Verifica se o valor atual é numérico 9 para somar apenas as notas)
    if (is_numeric($valor)) {
        $soma_notas += $valor;
    }
}
// Mostra a soma das notas
echo "<hr>";
print_r("Soma de Notas: " . $soma_notas);
echo "<hr>";
?>