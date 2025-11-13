<?php
session_start();
include 'header.php';
include 'db.php';


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
        
        if ($senha === $user['senha']) {
            $_SESSION['tipo'] = 'investidor';
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_nome'] = $user['nome'];

            header("Location: projetos.php");
            exit();
        } else {
            header("Location: login_investidores.php?erro=Senha incorreta");           
            echo "<script>alert('Desculpa!! Sua senha está incorreta'); window.location='login.php';</script>";
            exit();
        }
    } else {
        header("Location: login_investidores.php?erro=Usuário não encontrado");
        echo "<script>alert('Desculpa!! Seu email está incorreto'); window.location='login.php';</script>";
        exit();
    }
}else{
    echo "<script>alert('Usuário não encontrado'); window.location='login.php';</script>";
    exit();
}
?>