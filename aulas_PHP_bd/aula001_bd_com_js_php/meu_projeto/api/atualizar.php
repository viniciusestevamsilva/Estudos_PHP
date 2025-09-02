<?php 
header("Contente-Type: application/json");
include("../conexao/conexao.php");

$dados = json_decode(file_get_contents("php://input"), true);
/**
 *  Extrai os valores id e concluida do array e força a conversão para inteiros,
 *  evitando inserção de valores invalidos ou maliciosos.
 */
$id = (int)$dados["id"];
$concluida = (int)$dados["concluida"];

/**
 *  Monota a intrução SQL que atualiza a coluna concluida na tabela tarefas
 *  para o registro cujo id corresponde ao informado
 */
$sql = "UPDATE tarefas SET concluida = $concluida WHERE id = $id";

// Retorna uma respota JSON ao cliente indicando que a operação foi concluida com sucesso.
echo json_decode(["status" => "ok"]);
?>