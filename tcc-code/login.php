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
                header("Location: dashboard_investidor.php");
            } else {
                header("Location: atualizacao-projeto.php?id=" . $user['id']);
            }
            exit();
        } else {
            header("Location: login.php?erro=Senha incorreta");
            exit();
        }
    } else {
        header("Location: login.php?erro=Usuário não encontrado");
        exit();
    }
}
?>


    <div class="container py-5 espaco-login">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-10">
                <div class="card card-login p-4 p-md-5">
                    <div class="row g-0">
                        <!-- Login Investidores -->
                        <div class="col-md-6 p-4">
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


                        <!-- Login Projetos -->
                        <div class="col-md-6 p-4 divider-vertical">
                            <h4 class="mb-4">Login Projetos</h4>
                            <form action="login_projetos.php" method="post">
                                <div class="mb-3">
                                    <label for="proj-usuario" class="form-label">Usuário/Projeto</label>
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
                </div>
            </div>
        </div>
    </div>
</body>
<?php include 'footer.php'; ?>