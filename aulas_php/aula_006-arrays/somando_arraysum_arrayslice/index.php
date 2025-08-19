Soma de Notas: 40
<?php 
echo '<h2> 2 - Dois alunos com 4 notas </h2>';

$alunos = [
    [
        'nome' => 'Maria',
        'Nota1' => 10,
        'Nota2' => 9,
        'Nota3' => 8,
        'Nota4' => 10,
    ],
    [
        'nome' => 'João',
        'Nota1' => 7,
        'Nota2' => 8,
        'Nota3' => 6,
        'Nota4' => 9,
    ]
];

// Percorre cada aluno no array
foreach ($alunos as $aluno) {
    // Captura o nome do aluno
    $nome = $aluno['nome'];

    // Extrai apenaw as noas (ignorando a primeira chave, uqe é o 'nome')
    $notas = array_slice($alunos, 1); // retorna um array com as 4 notas
    // Soma todas as notas
    $soma_notas = array_sum($notas);

    // Calcula a média das notas
    $media = $soma_notas / count($notas);

    // Exibe os dados do aluno
    echo "<h3>Aluno; $nome</h3>";
    echo "Notas: " . implode(', ', $notas) . "<br>"; // Junta as notas em uma string separadas por virgula
    echo "Soma: $soma_notas <br>";

    // Exibe a media com 2 casas decimais, virfgula como separados decimal e ponto cmo separados de milhar
    echo "Media: " . number_format($media, 2, ',', '.') . "<hr>";
}
?>