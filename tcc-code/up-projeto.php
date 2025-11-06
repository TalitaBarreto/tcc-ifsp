<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "conectando-ideias";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
    if ($id <= 0) {
        die("ID inválido. Atualização não permitida.");
    }

    // Pega os dados dos campos do formulário
    $nome_projeto = trim($_POST['nome_projeto']);
    $responsavel = trim($_POST['responsavel']);
    $rua = trim($_POST['rua']);
    $numero = trim($_POST['numero']);
    $complemento = trim($_POST['complemento']);
    $cep = trim($_POST['cep']);
    $cidade = trim($_POST['cidade']);
    $estado = trim($_POST['estado']);
    $categoria = trim($_POST['categoria']);
    $financiamento = trim($_POST['financiamento']);
    $valor_pretendido = trim($_POST['valor_pretendido']);
    $descricao = trim($_POST['descricao']);
    $instagram = trim($_POST['instagram']);
    $facebook = trim($_POST['facebook']);
    $linkedin = trim($_POST['linkedin']);
    $senha = trim($_POST['senha']);

    // Busca o projeto atual
    $stmt = $conn->prepare("SELECT imagem, senha FROM projetos WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 0) {
        die("Projeto não encontrado.");
    }

    $projetoAtual = $resultado->fetch_assoc();
    $imagemAtual = $projetoAtual['imagem'];
    $senhaAtual = $projetoAtual['senha'];

    // Upload da imagem (se houver nova)
    $caminhoImagem = $imagemAtual;
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
        $extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
        $nomeArquivo = uniqid() . '.' . $extensao;
        $caminhoUpload = 'uploads/' . $nomeArquivo;

        if (!is_dir('uploads')) {
            mkdir('uploads', 0777, true);
        }

        move_uploaded_file($_FILES['imagem']['tmp_name'], $caminhoUpload);
        $caminhoImagem = $caminhoUpload;
    }

    // Atualiza a senha apenas se foi alterada
    $senhaHash = !empty($senha) ? password_hash($senha, PASSWORD_DEFAULT) : $senhaAtual;

    // Atualização
    $sql = "UPDATE projetos SET 
                nome_projeto = ?, 
                responsavel = ?, 
                senha = ?, 
                rua = ?, 
                numero = ?, 
                complemento = ?, 
                cep = ?, 
                cidade = ?, 
                estado = ?, 
                categoria = ?, 
                financiamento = ?, 
                valor_pretendido = ?, 
                descricao = ?, 
                imagem = ?, 
                instagram = ?, 
                facebook = ?, 
                linkedin = ? 
            WHERE id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "sssssssssssssssssi",
        $nome_projeto,
        $responsavel,
        $senhaHash,
        $rua,
        $numero,
        $complemento,
        $cep,
        $cidade,
        $estado,
        $categoria,
        $financiamento,
        $valor_pretendido,
        $descricao,
        $caminhoImagem,
        $instagram,
        $facebook,
        $linkedin,
        $id
    );

    if ($stmt->execute()) {
        echo "<script>alert('Projeto atualizado com sucesso!'); window.location='home.php';</script>";
    } else {
        echo "<script>alert('Erro ao atualizar projeto: " . $stmt->error . "'); window.history.back();</script>";
    }

    $stmt->close();
    $conn->close();

} else {
    echo "Método inválido.";
}
?>
