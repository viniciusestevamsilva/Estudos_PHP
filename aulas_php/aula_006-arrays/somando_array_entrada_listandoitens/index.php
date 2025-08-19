<?php 
session_start();

// Inicializa o array de alunos na sessão, se ainda não existir
if (!isset($_SESSION['alunos'])) {
    $_SESSION['alunos'] = [];
}

// Se o formalrio for enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Cria um novo aluno a partir dos dadods enviados
    $novo_aluno = [
    'nome' => $_POST['nome'],
    'Nota1' => (float) $_POST['nota1'],
    'Nota2' => (float) $_POST['nota2'],
    'Nota3' => (float) $_POST['nota3'],
    'Nota4' => (float) $_POST['nota4'],
    ];
    
    // Adiciona á lista na sessão
    $_SESSION['alunos'][] = $novo_aluno;
}

// Se desejar limpar a lista, descomente:
// session_destroy();
// $_SESSION['aluno'] = []

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Aluno (com session)</title>
    <style>
        body { font-family: Arial; margin: 40px; }  
        input[type="text"], input[type="number"] {padding: 8px; margin: 5px 0; width: 100%; max-width: 300px; }
        input[type="submit"] { padding: 10px 20px; margin-top: 15px; }
        hr  {margin: 30px 0 ;}
    </style>
</head>
<body>

<h1>Cadastro de Aluno (Com session)</h1>
<form method="POST">
    <label> Nome do Aluno:</label><br>]
    <input type="text" name="nome" required><br>

    <label> Nota 1:</label><br>]
    <input type="number" name="nota1" required><br>

    <label> Nota 2: </label><br>]
    <input type="number" name="nota2" required><br>

    <label> Nota 3: </label><br>]
    <input type="number" name="nota3" required><br>

    <label> Nota 4: </label><br>]
    <input type="number" name= "nota4" required><br>

    <input type="submit" value="< Adicionar aluno">
</form>

<?php if (!empty($_SESSION['alunos'])): ?>
    <hr>
    <h2>Lista de Alunos Cadastrados</h2>
    <?php foreach ($_SESSIO['alunos'] as $aluno): ?>
        <h3><?= htmlspecialchars($aluno['nome']) ?></h3>
        <ul>
            <li>Nota 1: <?= $alunos['Nota1'] ?></li>
            <li>Nota 2: <?= $alunos['Nota2'] ?></li>
            <li>Nota 3: <?= $alunos['Nota3'] ?></li>
            <li>Nota 4: <?= $alunos['Nota4'] ?></li>
            <?php
                $soma = $aluno['Nota1'] + $aluno['Nota2'] + $aluno['Nota3'] + $aluno['Nota4'];
                $media = $soma / 4;
            ?>
            <li><strong>Soma:</strong> <?= $soma ?></li>
            <li><strong>Media:</strong> <?= number_format($media, 2, ',', '.') ?></li>
        </ul>
        <hr>
    <?php endforeach; ?>
<?php endif; ?>

</body>
</html>