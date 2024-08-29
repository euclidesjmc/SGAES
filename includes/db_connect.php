<?php
$servername = "localhost";
$username = "binarya1_exames_acesso";
$password = "Espb2024*#";
$dbname = "binarya1_exames_acesso";

// Criar conex«ªo
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conex«ªo
if ($conn->connect_error) {
    die("Conex«ªo falhou: " . $conn->connect_error);
}
?>
