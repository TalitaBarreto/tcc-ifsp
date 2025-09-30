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
    echo '<div class="container my-5 text-center">
            <h1>Projeto Não Encontrado</h1>
            <p>O ID do projeto é inválido ou ele não existe mais.</p>
          </div>';
    if (isset($conn)) { $conn->close(); }
    include 'footer.php';
    exit;
}
?>

<section class="hero">
    <div class="container">
        <h1><?php echo htmlspecialchars($projeto['nome_projeto']); ?></h1>
        <p>Conheça os detalhes do projeto e veja como ele pode gerar impacto real.</p>
    </div>
</section>

<section class="container my-5">
    <h2 class="section-title">CONHEÇA O NOSSO PROJETO</h2>
    
    <div class="row project-images mb-4">
        <?php if (!empty($projeto['imagem'])): ?>
            <img style="height: 100%;" src="<?php echo htmlspecialchars($projeto['imagem']); ?>" alt="Imagem do projeto <?php echo htmlspecialchars($projeto['nome_projeto']); ?>" class="img-fluid rounded">
        <?php else: ?>
            <img src="img/placeholder.jpg" alt="Sem imagem disponível" class="img-fluid rounded">
        <?php endif; ?>
    </div>

    <ul class="list-unstyled project-details">
        <li><strong>Responsável:</strong> <?php echo htmlspecialchars($projeto['responsavel']); ?></li>
        <li><strong>Categoria:</strong> <?php echo htmlspecialchars($projeto['categoria']); ?></li>
        <li><strong>Objetivo:</strong> 
            R$ <?php echo number_format((float)$projeto['valor_pretendido'], 3, '.', '.'); ?>
        </li>
    </ul>

    <div class="project-description mt-3">
        <?php echo nl2br(htmlspecialchars($projeto['descricao'])); ?>
    </div>

    <div class="mt-4">
        <a href="projetos.php" class="btn btn-secondary">← Voltar para Projetos</a>
    </div>
</section>

<?php 
if (isset($conn)) { $conn->close(); }
include 'footer.php'; 
?>
