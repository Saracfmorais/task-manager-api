<?php
require_once 'connectionForTest.php';

// Capturar os dados do formulário
$nome = 'Sara';
$email = 's@gmail.com';
$senha = '1';

// Inserir no banco de dados
$sql = "INSERT INTO usuarios (USU_VAR_NOME, USU_VAR_EMAIL, USU_VAR_SENHA) VALUES ('$nome', '$email', '$senha')";

$insert = $conn->query($sql);
?>