<?php
session_start();
include 'header.php';
include 'db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo = $_POST['tipo'] ?? ''; // 'investidor' ou 'projeto'
    $senha = $_POST['senha'] ?? '';

    if ($tipo == 'investidor') {
        $email = $_POST['email'] ?? '';
        $stmt = $conn->prepare("SELECT id, nome, senha FROM investidores WHERE email = ?");
        $stmt->bind_param("s", $email);
    } elseif ($tipo == 'projeto') {
        $usuario = $_POST['usuario'] ?? '';
        $stmt = $conn->prepare("SELECT id, nome_projeto, senha FROM projetos WHERE nome_projeto = ?");
        $stmt->bind_param("s", $usuario);
    } else {
        header("Location: login.php?erro=Tipo de login inválido");
        exit();
    }

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if ($senha === $user['senha']) { // ou password_verify($senha, $user['senha'])
            $_SESSION['tipo'] = $tipo;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_nome'] = $tipo == 'investidor' ? $user['nome'] : $user['nome_projeto'];

            if ($tipo == 'investidor') {
                header("Location: projetos.php");
            } else {
                header("Location: atualizacao-projeto.php?id=" . $user['id']);
            }
            exit();
        } else {
            header("Location: login.php?erro=Senha incorreta");
            echo "<script>alert('Desculpa!! Senha incorreta'); window.location='login.php';</script>";
            exit();
        }
    } else {
        header("Location: login.php?erro=Usuário não encontrado");
        echo "<script>alert('Desculpa!! Usuário não encontrado'); window.location='login.php';</script>";
        exit();
    }
}
?>
<div class="container">

    <section class="row espaco-entre-secao">
        <div class="col-md-6">
            <div class="card card-login">
                <h4 class="mb-4">Login Projetos</h4>
                <form action="login_projetos.php" method="post">
                    <div class="mb-3">
                        <label for="proj-usuario" class="form-label">Responsável</label>
                        <input type="text" class="form-control" id="proj-usuario" name="usuario"
                            placeholder="Nome do projeto" required>
                    </div>
                    <div class="mb-3">
                        <label for="proj-senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="proj-senha" name="senha"
                            placeholder="Senha" required>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary" type="submit">Entrar como Projeto</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-login">
                <h4 class="mb-4">Login Investidores</h4>
                <form action="login_investidores.php" method="post">
                    <div class="mb-3">
                        <label for="apoio-email" class="form-label">E‑mail</label>
                        <input type="email" class="form-control" id="apoio-email" name="email"
                            placeholder="seu@exemplo.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="apoio-senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="apoio-senha" name="senha"
                            placeholder="Senha" required>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary" type="submit">Entrar como Apoiador</button>
                    </div>
                </form>
            </div>
        </div>        
    </section>

</div>


<?php include 'footer.php'; ?>