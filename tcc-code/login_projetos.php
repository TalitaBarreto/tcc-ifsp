<?php
session_start();
include 'header.php';
include 'db.php';

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
            echo "<script>alert('Desculpa!! Senha incorreta'); window.location='login.php';</script>";
            exit();
        }
    } else {
        header("Location: login_projetos.php?erro=Usuário não encontrado");
        echo "<script>alert('Desculpa!! Seu usuário está incorreta'); window.location='login.php';</script>";
        exit();
    }
}else{
    echo "<script>alert('Usuário não encontrado'); window.location='login.php';</script>";
    exit();
}
?>