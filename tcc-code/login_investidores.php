<?php
session_start();
include 'header.php';

$servername = "127.0.0.1";
$username   = "root";
$password   = "";
$dbname     = "conectando-ideias";

// Conexão
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Processa login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $stmt = $conn->prepare("SELECT id, nome, senha FROM investidores WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        // Substitua por password_verify se a senha estiver hash
        if ($senha === $user['senha']) {
            $_SESSION['tipo'] = 'investidor';
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_nome'] = $user['nome'];

            header("Location: projetos.php");
            exit();
        } else {
            header("Location: login_investidores.php?erro=Senha incorreta");
            exit();
        }
    } else {
        header("Location: login_investidores.php?erro=Usuário não encontrado");
        exit();
    }
}
?>