<?php
// Conexão com o banco de dados
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'tak-api';
$conn = new mysqli($host, $user, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

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
