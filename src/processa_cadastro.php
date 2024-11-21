<?php
require_once 'connectionbd.php';

// Capturar os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

// Inserir no banco de dados
$sql = "INSERT INTO usuarios (USU_VAR_NOME, USU_VAR_EMAIL, USU_VAR_SENHA) VALUES ('$nome', '$email', '$senha')";

$insert = $conn->query($sql);
if ($insert === TRUE) {
    echo "Usuário cadastrado com sucesso!";
    // Redirecionar para a página de login
    echo "<a href='list.php'> Ver usuarios cadastrados </a>";
    exit();
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>
