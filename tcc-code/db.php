<?php

// 1. Configurações do Banco de Dados
// ATENÇÃO: Substitua 'localhost', 'root', '', e 'seu_banco_de_dados' com as suas credenciais reais.
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "conectando-ideias";

// 2. Conectar ao Banco de Dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    // Redireciona em caso de falha na conexão, para que o modal de erro seja exibido.
    header("Location: cadastro-investidores.php?erro=1");
    die("Conexão falhou: " . $conn->connect_error);
}

// 3. Processar o Formulário apenas se o método for POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obter os dados do formulário
    $nome = $_POST['inputNomeInvestidor'];
    $email = $_POST['inputEmailInvestidor'];
    // Em um ambiente de produção, SEMPRE armazene senhas criptografadas (hashing)!
    $senha = $_POST['inputPassword'];
    $rua = $_POST['inputRua'];
    $numero = $_POST['inputNum'];
    $complemento = $_POST['inputComplemento'];
    $cep = $_POST['inputCEP'];
    $cidade = $_POST['inputCidade'];
    $estado = $_POST['inputState'];
    $categoria = $_POST['inputCategoria'];
    $financiamento = $_POST['inputFinanciamento'];
    $valor = $_POST['inputValor'];

    // 4. Preparar a instrução SQL para inserção de dados
    $sql = "INSERT INTO investidores (nome, email, senha, rua, numero, complemento, cep, cidade, estado, categoria_interesse, tipo_financiamento, valor_a_investir)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    // 5. Vincular os parâmetros à instrução e executar
    // --- ALTERAÇÃO: Adicionamos esta verificação para garantir que a declaração foi preparada com sucesso.
    if ($stmt) {
        $stmt->bind_param("ssssssssssss", $nome, $email, $senha, $rua, $numero, $complemento, $cep, $cidade, $estado, $categoria, $financiamento, $valor);
        
        if ($stmt->execute()) {
            // --- ALTERAÇÃO: A instrução de redirecionamento agora está DENTRO do bloco de sucesso.
            $stmt->close(); // Fechamos o statement aqui, pois não será mais necessário.
            $conn->close(); // Fechamos a conexão aqui para liberar os recursos.
            header("Location: cadastro-investidores.php?sucesso=1");
            exit();
        } else {
            // --- ALTERAÇÃO: A instrução de redirecionamento agora está DENTRO do bloco de erro.
            $stmt->close(); // Fechamos o statement mesmo em caso de erro.
            $conn->close(); // Fechamos a conexão.
            header("Location: cadastro-investidores.php?erro=1");
            exit();
        }
    } else {
        // --- ALTERAÇÃO: Adicionamos este bloco para lidar com falha na preparação da instrução SQL.
        $conn->close();
        header("Location: cadastro-investidores.php?erro=1");
        exit();
    }
}

// 6. Fechar a conexão com o banco de dados
// --- ALTERAÇÃO: Este fechamento foi removido, pois a conexão já é fechada dentro dos blocos `if/else`.
// $conn->close(); 

?>
