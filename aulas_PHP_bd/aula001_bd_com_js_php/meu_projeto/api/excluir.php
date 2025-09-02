<?php
header("Content-Type: application/json");
include("../conexao/conexao.php");

$dados = json_decode(file_get_contents("php://input"), true);

$id = (int)$dados["id"];

/**
 *  Cria a query SQL para excluir o registro da tabela tarefas
 *  que tenha o id correspondente ao recebido
 */
$sql = "DELETE FROM tarefas WHERE id = $id";

// Executa o comaNDO SQL no bancode dados
$conn->query($sql);

// Retorna uma resposta JSON para o cliente indicando que a operação foi realiazada com sucesso.
echo json_encode(["status" => "ok"]);
?>