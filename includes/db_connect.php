<?php
$servername = "localhost";
$username = "binarya1_exames_acesso";
$password = "Espb2024*#";
$dbname = "binarya1_exames_acesso";

// Criar conex���o
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conex���o
if ($conn->connect_error) {
    die("Conex���o falhou: " . $conn->connect_error);
}
?>
