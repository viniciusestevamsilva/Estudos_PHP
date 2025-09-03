<?php
/**
* Define que a resposta do sevido será enviada no formato JSON,
* para que o javascript saiba interpretar os dados.
*/
header("Content-type: application/json");

/**
 *  Inclui o arquivo de conexão com o banco de dados,
 *  que contem credenciais e a configuração de objeto $conn
 */
include("../conexao/conexao.php");
/**
 * Lé o corpo da requisição HTTP (enviado via fetch no JavaScript)
 * e converte de JSON para array associativo em PHP.
 */
$dados = json_decode(file_get_contents("php://input"), true);

/**
 *  Extrai o campo "titulo" do array recebido e aplica uma
 * proteção contra SQL Injection, escapando caracteres perigosos
 */
$titulo = $conn->real_escape_string($dados["titulo"]);

// Monta o comando SQL para inserir o novo titulo na tabel tarefas
$sql = "INSERT INTO tarefas (titulo) VALUES ('$titulo')";
// Executa o comando SQL no banco de dados.
$conn->query($sql);

/**
 *  Retorna para o Javascript um obejto JSON com os dados da 
 *  tarefa recem-criada: o ID gerado automaticamente (insert_id),
 *  o titulo salvo e o status "concluida", inicialmente 0 (falso).
*/
echo json_encode(["id" => $conn->insert_id, "titulo" => $titulo, "concluida" => 0]);
?>