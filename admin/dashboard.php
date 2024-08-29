<?php
session_start();
include '../includes/functions.php';
check_admin_auth();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Painel do Administrador</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <h2>Painel do Administrador</h2>
    <ul>
        <li><a href="manage_candidates.php">Gerir Candidatos</a></li>
        <li><a href="logout.php">Sair</a></li>
    </ul>
</body>
</html>

