<?php
require_once 'connectionbd.php';

// Capturar o ID do usuário
$id = intval($_GET['id']);

// Buscar os dados do usuário
$sql = "SELECT USU_VAR_NOME, USU_VAR_EMAIL FROM usuarios WHERE USU_INT_ID = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    die("Usuário não encontrado.");
}
?>

<form method="post" action="update_process.php">
    <input type="hidden" name="id" value="<?= $id ?>">
    <label>Nome:</label>
    <input type="text" name="nome" value="<?= htmlspecialchars($row['USU_VAR_NOME']) ?>"><br>
    <label>Email:</label>
    <input type="email" name="email" value="<?= htmlspecialchars($row['USU_VAR_EMAIL']) ?>"><br>
    <button type="submit">Atualizar</button>
</form>
