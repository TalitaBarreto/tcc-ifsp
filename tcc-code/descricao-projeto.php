<?php
include 'header.php';
include 'db-projetos.php'; // conexão com o banco
?>

<?php
// Passo 1 - Obter o ID do projeto da URL
$projeto_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$projeto = null;

// Passo 2 - Buscar o projeto no banco
if ($projeto_id > 0) {
    $id_seguro = $conn->real_escape_string($projeto_id);
    $sql = "SELECT * FROM projetos WHERE id = '{$id_seguro}'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $projeto = $result->fetch_assoc();
    }
}

// Caso não encontre nada
if (!$projeto) {
    echo '<div class="container text-center">
            <h1>Projeto Não Encontrado</h1>
            <p>O ID do projeto é inválido ou ele não existe mais.</p>
          </div>';
    if (isset($conn)) {
        $conn->close();
    }
    include 'footer.php';
    exit;
}
?>
<div class="container">

    <section class="row espaco-entre-secao">
        <div class="container">
            <h1 class="tituloDescricao"><?php echo htmlspecialchars($projeto['nome_projeto']); ?></h1>
            <p class="subDescricao">Conheça os detalhes do projeto e veja como ele pode gerar impacto real.</p>
        </div>
    </section>

    <section class="row espaco-entre-secao">

        <div class="col-md-12">
            <?php if (!empty($projeto['imagem'])): ?>
                <img src="<?php echo htmlspecialchars($projeto['imagem']); ?>" alt="Imagem do projeto <?php echo htmlspecialchars($projeto['nome_projeto']); ?>" class="imagemDescricao">
            <?php else: ?>
                <img src="img/placeholder.jpg" alt="Sem imagem disponível">
            <?php endif; ?>
        </div>

        <div class="col-md-12">
            <div class="cardInformacaoDescricao">
                <ul class="listaDescricao">
                    <li><strong>Responsável:</strong> <?php echo htmlspecialchars($projeto['responsavel']); ?></li>
                    <li><strong>Categoria:</strong> <?php echo htmlspecialchars($projeto['categoria']); ?></li>
                    <li><strong>Objetivo:</strong>
                        R$ <?php echo $projeto['valor_pretendido']; ?>
                    </li>
                </ul>
            </div>

        </div>

        <div class="col-md-12">
            <?php echo nl2br(htmlspecialchars($projeto['descricao'])); ?>
        </div>

        <div class="col-md-12">
            <h4 style="margin-top: 20px; margin-bottom:20px;">Entre em contato através das Redes Sociais:</h4>

            <?php if (!empty($projeto['instagram'])): ?>
                <a href="<?php echo htmlspecialchars($projeto['instagram']); ?>" target="_blank">
                    <i class="fa-brands fa-instagram" style="margin-left: 20px;"></i> Instagram
                </a>
            <?php endif; ?>

            <?php if (!empty($projeto['facebook'])): ?>
                <a href="<?php echo htmlspecialchars($projeto['facebook']); ?>" target="_blank">
                    <i class="fa-brands fa-whatsapp" style="margin-left: 20px;"></i> WhatsApp
                </a>
            <?php endif; ?>

            <?php if (!empty($projeto['linkedin'])): ?>
                <a href="<?php echo htmlspecialchars($projeto['linkedin']); ?>" target="_blank">
                    <i class="fa-brands fa-linkedin-in" style="margin-left: 20px;"></i> LinkedIn
                </a>
            <?php endif; ?>
        </div>

        <div class="col-md-12">
            <a href="projetos-principal.php" class="btn btn-secondary botaoDescricao">← Voltar para Projetos</a>
        </div>

    </section>

</div>

<?php
if (isset($conn)) {
    $conn->close();
}
include 'footer.php';
?>