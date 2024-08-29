<?php
session_start();
include '../includes/db_connect.php';
include '../includes/functions.php';
check_admin_auth();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $course = $_POST['course'];
    $registration_number = $_POST['registration_number'];
    $id_number = $_POST['id_number'];
    $exam_1_score = $_POST['exam_1_score'];
    $exam_2_score = $_POST['exam_2_score'];
    $final_result = $_POST['final_result'];

    $sql = "INSERT INTO candidatos (full_name, course, registration_number, id_number, exam_1_score, exam_2_score, final_result) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssdds", $full_name, $course, $registration_number, $id_number, $exam_1_score, $exam_2_score, $final_result);

    if ($stmt->execute()) {
        $message = "Candidato adicionado com sucesso!";
    } else {
        $message = "Erro: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Gerir Candidatos</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <h2>Gerir Candidatos</h2>

    <?php if (isset($message)) echo "<p>$message</p>"; ?>

    <form method="POST" action="">
        <input type="text" name="full_name" placeholder="Nome Completo" required>
        <input type="text" name="course" placeholder="Curso" required>
        <input type="text" name="registration_number" placeholder="Número de Inscrição" required>
        <input type="text" name="id_number" placeholder="Bilhete de Identidade" required>
        <input type="number" step="0.01" name="exam_1_score" placeholder="Nota da Prova 1" required>
        <input type="number" step="0.01" name="exam_2_score" placeholder="Nota da Prova 2" required>
        <select name="final_result" required>
            <option value="Admitido">Admitido</option>
            <option value="Não Admitido">Não Admitido</option>
            <option value="Admitido à Oral">Admitido à Oral</option>
        </select>
        <button type="submit">Adicionar Candidato</button>
    </form>
</body>
</html>
