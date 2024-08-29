<?php
session_start();
include '../includes/db_connect.php';
include '../includes/functions.php';
check_candidate_auth();

$candidate_id = $_SESSION['candidate_id'];
$sql = "SELECT * FROM candidatos WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $candidate_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $candidate = $result->fetch_assoc();
} else {
    $error = "Candidato não encontrado!";
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Candidato</title>
    <link rel="stylesheet" href="../styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <header>
            <img src="../images/school_logo.png" alt="Logo da Escola" class="school-logo">
            <h1>Resultados Exames de Acesso 2023/2024</h1>
        </header>

        <main>
            <?php if (isset($candidate)): ?>
                <div class="result-card">
                    <div class="card-body">
                        <p><strong> <span class="candidate-name"><?= htmlspecialchars($candidate['full_name']) ?></span></strong></p>
                        <p><strong>Curso:</strong> <?= htmlspecialchars($candidate['course']) ?></p>
                        <p><strong>Nota de Língua Portuguesa:</strong> <?= htmlspecialchars($candidate['exam_1_score']) ?></p>
                        <p><strong>Nota da Especialidade:</strong> <?= htmlspecialchars($candidate['exam_2_score']) ?></p>
                        <p><strong>Média:</strong> <?= htmlspecialchars($candidate['avg']) ?></p>
                        <p><strong>Resultado Final:</strong> <span class="result"><?= htmlspecialchars($candidate['final_result']) ?></span></p>
                    </div>
                    <div class="card-footer">
                        <a href="login.php" class="btn">Voltar ao Login</a>
                    </div>
                </div>
            <?php elseif (isset($error)): ?>
                <p class="error"><?= htmlspecialchars($error) ?></p>
            <?php endif; ?>
        </main>
    </div>
</body>
</html>
