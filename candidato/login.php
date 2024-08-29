<?php
session_start();
include '../includes/db_connect.php';
include '../includes/functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $registration_number = $_POST['registration_number'];
    $id_number = $_POST['id_number'];

    $candidate = get_candidate($registration_number, $id_number, $conn);

    if ($candidate) {
        $_SESSION['candidate_id'] = $candidate['id'];
        $_SESSION['full_name'] = $candidate['full_name'];
        header("Location: result.php");
        exit();
    } else {
        $error = "Credenciais inválidas. Por favor, verifica o número de inscrição e o bilhete de identidade.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Login do Candidato</title>
    <link rel="stylesheet" href="../styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <header>
            <img src="../images/school_logo.png" alt="Logo da Escola" class="school-logo">
            <h1>Exames de Acesso 2023/2024 <p/> Consultar Resultados</h1>
        </header>
    <form method="POST" action="">
        <input type="text" name="registration_number" placeholder="Número de Inscrição" required>
        <input type="text" name="id_number" placeholder="Bilhete de Identidade" required>
        <button type="submit">Login</button>
    </form>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
    </div>
</body>
</html>
