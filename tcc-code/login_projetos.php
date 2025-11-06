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
    $usuario = $_POST['usuario'] ?? '';
    $senha   = $_POST['senha'] ?? '';

    $stmt = $conn->prepare("SELECT id, nome_projeto, senha FROM projetos WHERE responsavel = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        
        if ($senha === $user['senha']) {
            $_SESSION['tipo'] = 'projeto';
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_nome'] = $user['nome_projeto'];

            header("Location: atualizacao-projeto.php?id=" . $user['id']);
            exit();
        } else {
            header("Location: login_projetos.php?erro=Senha incorreta");
            exit();
        }
    } else {
        header("Location: login_projetos.php?erro=Usuário não encontrado");
        exit();
    }
}
?>