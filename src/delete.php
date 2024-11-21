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
