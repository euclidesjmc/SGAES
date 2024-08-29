<?php

/**
 * Função para obter um candidato com base no número de inscrição e bilhete de identidade.
 *
 * @param string $registration_number
 * @param string $id_number
 * @param object $conn Conexão à base de dados
 * @return array|false Candidato encontrado ou false se não existir
 */
function get_candidate($registration_number, $id_number, $conn) {
    $sql = "SELECT * FROM candidatos WHERE registration_number = ? AND id_number = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $registration_number, $id_number);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return false;
    }
}

/**
 * Função para verificar se um utilizador está autenticado como administrador.
 */
function check_admin_auth() {
    if (!isset($_SESSION['admin_id'])) {
        header("Location: login.php");
        exit();
    }
}

/**
 * Função para verificar se um utilizador está autenticado como candidato.
 */
function check_candidate_auth() {
    if (!isset($_SESSION['candidate_id'])) {
        header("Location: login.php");
        exit();
    }
}


?>
