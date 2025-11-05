<?php include 'header.php'; ?>
<?php
include 'db.php'; 

// Função para limitar o número de palavras da descrição
function limit_words($text, $limit = 20) {
    $text = strip_tags($text); 
    $words = preg_split("/[\s,\r\n]+/", $text, -1, PREG_SPLIT_NO_EMPTY);
    if (count($words) <= $limit) return $text;
    return implode(' ', array_slice($words, 0, $limit)) . '...';
}

// Busca todos os projetos (sem filtro)
$sqlProjetos = "SELECT * FROM projetos ORDER BY id DESC";
$resultProjetos = $conn->query($sqlProjetos);
?>

<div class="container"> 
    <section class="row espaco-entre-secao">
        <div class="col-md-12 text-center">
            <h2 class="tiutloCadastro">Projetos que geram <span class="destaque">impacto real</span></h2>
            <p class="subtitulo">Veja como diferentes ideias estão ajudando comunidades e preservando o meio ambiente e apoie a que mais combina com você.</p>
        </div> 
    </section> 

    <section class="row espaco-entre-secao" id="listaProjetos">
        <div class="row">
            <?php
            if ($resultProjetos && $resultProjetos->num_rows > 0) {
                while ($row = $resultProjetos->fetch_assoc()) {
                    $descricao_limitada = limit_words($row['descricao']); 
                    ?>
                    <div class="col-md-4 mb-4 projeto-card">
                        <div class="card-projeto">
                            <?php if (!empty($row['imagem'])): ?>
                                <img class="card-img-top-projeto" src="<?php echo $row['imagem']; ?>" alt="<?php echo htmlspecialchars($row['nome_projeto']); ?>">
                            <?php else: ?>
                                <img class="card-img-top-projeto" src="img/placeholder.jpg" alt="Sem imagem">
                            <?php endif; ?>
                            <div class="card-body-projeto">
                                <h5 class="card-title-projeto"><?php echo htmlspecialchars($row['nome_projeto']); ?></h5>
                                <p class="card-text-projeto"><?php echo htmlspecialchars($descricao_limitada); ?></p>
                                <a href="descricao-projeto.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Conheça</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo '<div class="col-md-12 text-center"><p>Nenhum projeto encontrado.</p></div>';
            }

            $conn->close();
            ?>
        </div>
    </section>
</div>

<?php include 'footer.php'; ?>
