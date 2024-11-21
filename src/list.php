<?php
require_once 'connectionbd.php';

// Consulta para buscar os usuários cadastrados
$sql = "SELECT USU_INT_ID, USU_VAR_NOME, USU_VAR_EMAIL FROM usuarios";
$result = $conn->query($sql);
$contagem = $result->num_rows;

if ($contagem > 0) {
    echo "<h2>Usuários Cadastrados</h2>";
    echo "<table border='1'>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>";
    
    // Exibir os dados de cada linha
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($row['USU_VAR_NOME']) . "</td>
                <td>" . htmlspecialchars($row['USU_VAR_EMAIL']) . "</td>
                <td>
                    <a href='update.php?id=" . $row['USU_INT_ID'] . "'>Atualizar</a> | 
                    <a href='delete.php?id=" . $row['USU_INT_ID'] . "' onclick=\"return confirm('Tem certeza que deseja deletar?')\">Deletar</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum usuário encontrado.";
}

$conn->close();
?>
