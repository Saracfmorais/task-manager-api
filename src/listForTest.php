<?php
require_once 'connectionForTest.php';

// Consulta para buscar os usuários cadastrados
$sql = "SELECT USU_INT_ID, USU_VAR_NOME, USU_VAR_EMAIL FROM usuarios";
$result = $conn->query($sql);
$contagem = $result->num_rows;
?>