<?php

include 'db-projetos.php'; // conexão com o banco

// Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Verifica se o ID foi enviado e é válido
    $id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
    if ($id <= 0) {
        die("ID do projeto inválido! Atualização não permitida.");
    }

    // Verifica se o projeto existe no banco
    $check = $conn->prepare("SELECT id FROM projetos WHERE id=?");
    $check->bind_param("i", $id);
    $check->execute();
    $check->store_result();
    if ($check->num_rows === 0) {
        die("Projeto não encontrado. Atualização impossível.");
    }
    $check->close();

    // Recebe os dados do formulário
    $nome_projeto     = $_POST['nome_projeto'];
    $responsavel      = $_POST['responsavel'];
    $senha            = $_POST['senha'];
    $rua              = $_POST['rua'];
    $numero           = $_POST['numero'];
    $complemento      = $_POST['complemento'];
    $cep              = $_POST['cep'];
    $cidade           = $_POST['cidade'];
    $estado           = $_POST['estado'];
    $categoria        = $_POST['categoria'];
    $financiamento    = $_POST['financiamento'];
    $valor_pretendido = $_POST['valor_pretendido'];
    $descricao        = $_POST['descricao'];
    $instagram        = $_POST['instagram'];
    $facebook         = $_POST['facebook'];
    $linkedin         = $_POST['linkedin'];

    // Verifica se existe uma nova imagem
    $imagem_nova = $_FILES['imagem']['name'] ?? '';
    $imagem_final = '';

    if (!empty($imagem_nova)) {
        // Cria um nome único para a imagem
        $imagem_final = uniqid() . '_' . basename($imagem_nova);
        $destino = 'uploads/' . $imagem_final;

        // Move a imagem para o diretório de uploads
        if (!move_uploaded_file($_FILES['imagem']['tmp_name'], $destino)) {
            die("Erro ao fazer upload da imagem.");
        }
    }

    // Atualiza o registro no banco
    if ($imagem_final) {
        // Se uma imagem foi enviada, atualiza o campo imagem
        $sql = "UPDATE projetos SET 
                    nome_projeto=?, 
                    responsavel=?, 
                    senha=?, 
                    rua=?, 
                    numero=?, 
                    complemento=?, 
                    cep=?, 
                    cidade=?, 
                    estado=?, 
                    categoria=?, 
                    financiamento=?, 
                    valor_pretendido=?, 
                    descricao=?, 
                    imagem=?, 
                    instagram=?, 
                    facebook=?, 
                    linkedin=?
                WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param(
            "sssssssssssssssssi", // Bind dos parâmetros
            $nome_projeto,
            $responsavel,
            $senha,
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
            $imagem_final,
            $instagram,
            $facebook,
            $linkedin,
            $id
        );
    } else {
        // Se nenhuma imagem foi enviada, não atualiza o campo imagem
        $sql = "UPDATE projetos SET 
                    nome_projeto=?, 
                    responsavel=?, 
                    senha=?, 
                    rua=?, 
                    numero=?, 
                    complemento=?, 
                    cep=?, 
                    cidade=?, 
                    estado=?, 
                    categoria=?, 
                    financiamento=?, 
                    valor_pretendido=?, 
                    descricao=?, 
                    instagram=?, 
                    facebook=?, 
                    linkedin=?
                WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param(
            "ssssssssssssssssi", // Bind dos parâmetros sem imagem
            $nome_projeto,
            $responsavel,
            $senha,
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
            $instagram,
            $facebook,
            $linkedin,
            $id
        );
    }

    // Verifica se a execução do UPDATE foi bem-sucedida
    if ($stmt->execute()) {
        // Redireciona para a página de sucesso
        header("Location: atualizacao-projeto.php?id=$id&sucesso=1");
        exit();
    } else {
        // Se ocorreu algum erro, exibe a mensagem
        echo "Erro ao atualizar: " . $stmt->error;
    }

    // Fecha as conexões
    $stmt->close();
    $conn->close();
} else {
    // Se o método não for POST, exibe mensagem de erro
    die("Método inválido. Apenas POST é permitido.");
}
