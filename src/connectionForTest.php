<?php
// Conexão com o banco de dados
$localhost = '127.0.0.1';
$username = 'test_user';
$password = 'test_password';
$bdname = 'taskapi';
$conn = new mysqli($localhost, $username, $password, $bdname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
} else{
    return true;
}
?>