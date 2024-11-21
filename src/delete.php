<?php
require_once 'connectionbd.php';

// Capturar o ID do usuário
$id = intval($_GET['id']);

// Deletar o usuário
$sql = "DELETE FROM usuarios WHERE USU_INT_ID = $id";

if ($conn->query($sql) === TRUE) {
    echo "Usuário deletado com sucesso!<a href='list.php'>Ver lista!</a>";
} else {
    echo "Erro ao deletar usuário: " . $conn->error;
}

$conn->close();
?>
