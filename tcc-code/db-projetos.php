<?php
// Exibir erros para debug
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Conexão com o banco
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "conectando-ideias";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Processa somente POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitiza os dados
    $nome_projeto   = $_POST['nome_projeto'] ?? '';
    $responsavel    = $_POST['responsavel'] ?? '';
    $senha          = $_POST['senha'] ?? '';
    $rua            = $_POST['rua'] ?? '';
    $numero         = $_POST['numero'] ?? '';
    $complemento    = $_POST['complemento'] ?? '';
    $cep            = $_POST['cep'] ?? '';
    $cidade         = $_POST['cidade'] ?? '';
    $estado         = $_POST['estado'] ?? '';
    $categoria      = $_POST['categoria'] ?? '';
    $financiamento  = $_POST['financiamento'] ?? '';
    $valor          = $_POST['valor_pretendido'] ?? '';
    $descricao      = $_POST['descricao'] ?? '';
    $instagram      = $_POST['instagram'] ?? null;
    $facebook       = $_POST['facebook'] ?? null;
    $linkedin       = $_POST['linkedin'] ?? null;

    // Upload de imagem (opcional)
    $imagem = null;
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
        $pasta = "uploads/";
        if (!is_dir($pasta)) {
            mkdir($pasta, 0777, true);
        }
        $nome_arquivo = uniqid() . "_" . basename($_FILES['imagem']['name']);
        $caminho = $pasta . $nome_arquivo;
        if (move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho)) {
            $imagem = $caminho;
        }
    }

    // Prepara query
    $sql = "INSERT INTO projetos
        (nome_projeto, responsavel, senha, rua, numero, complemento, cep, cidade, estado, categoria, financiamento, valor_pretendido, descricao, imagem, instagram, facebook, linkedin)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Erro na preparação da query: " . $conn->error);
    }

    // Bind de parâmetros
    $stmt->bind_param(
    "sssssssssssssssss",
    $nome_projeto, $responsavel, $senha, $rua, $numero, $complemento,
    $cep, $cidade, $estado, $categoria, $financiamento, $valor,
    $descricao, $imagem, $instagram, $facebook, $linkedin
);

    // Executa
    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        header("Location: cadastro-projetos.php?sucesso=1");
        exit();
    } else {
        $erro = $stmt->error;
        $stmt->close();
        $conn->close();
        header("Location: cadastro-projetos.php?erro=" . urlencode($erro));
        exit();
    }
}
?>
