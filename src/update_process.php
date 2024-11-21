<?php
require_once 'connectionbd.php';

// Capturar os dados do formulário
$id = intval($_POST['id']);
$nome = $_POST['nome'];
$email = $_POST['email'];

// Atualizar o registro no banco de dados
$sql = "UPDATE usuarios SET USU_VAR_NOME = '$nome', USU_VAR_EMAIL = '$email' WHERE USU_INT_ID = $id";

if ($conn->query($sql) === TRUE) {
    echo "Usuário atualizado com sucesso! <a href='list.php'>Voltar</a>";
} else {
    echo "Erro ao atualizar usuário: " . $conn->error;
}

$conn->close();
?>
