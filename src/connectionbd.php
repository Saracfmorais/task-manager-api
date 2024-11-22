<?php
// Conexão com o banco de dados
$host = $_ENV['MYSQLHOST'];
$user = $_ENV['MYSQLUSER'];
$password = $_ENV['MYSQLPASSWORD'];
$dbname = $_ENV['MYSQLDATABASE'];
$conn = new mysqli($host, $user, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

?>