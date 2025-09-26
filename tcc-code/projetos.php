<?php include 'header.php'; ?>

<?php
/**
 * DOCUMENTAÇÃO: Função para limitar um texto a um número máximo de palavras (100).
 * Isso garante que todos os cards tenham a altura uniforme.
 */
function limit_words($text, $limit = 20) {
    // 1. Remove qualquer tag HTML para contar palavras de forma segura.
    $text = strip_tags($text); 
    
    // 2. Divide o texto em um array de palavras.
    $words = preg_split("/[\s,\r\n]+/", $text, -1, PREG_SPLIT_NO_EMPTY);
    
    // 3. Se o número de palavras for menor ou igual ao limite, retorna o texto original.
    if (count($words) <= $limit) {
        return $text;
    }
    
    // 4. Se for maior, pega as primeiras $limit palavras e junta-as novamente.
    $limited_text = implode(' ', array_slice($words, 0, $limit));
    
    // 5. Retorna o texto limitado com as reticências (...).
    return $limited_text . '...';
}
?>

<div class="container"> 
    
    <section class="row espaco-entre-secao">
        <div class="col-md-12 text-center">
            <h2 class="tiutloCadastro">Projetos que geram <span class="destaque">impacto real</span></h2>
            <p class="subtitulo">Veja como diferentes ideias estão ajudando comunidades e preservando o meio ambiente e apoie a que mais combina com você.</p>
        </div> 
    </section> 
    
    <section class="row espaco-entre-secao">
        <div class="col-md-12 text-center">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-magnifying-glass"></i></span>
                <input type="text" class="form-control" id="buscaProjeto" placeholder="Buscar projeto..." aria-label="Buscar projeto" aria-describedby="inputGroup-sizing-default">
            </div>
        </div>
    </section>

    <section class="row espaco-entre-secao" id="listaProjetos">
        <div class="row">
            <?php
            // Conexão com o banco (usando MySQLi, assumindo que $conn está em db.php)
            // CERTIFIQUE-SE que o ficheiro 'db.php' existe e está a funcionar.
            include 'db.php'; 

            $sql = "SELECT * FROM projetos ORDER BY id DESC";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    
                    // APLICAÇÃO DA FUNÇÃO: Limita a descrição a 100 palavras.
                    // O valor padrão de $limit é 100, mas podes passá-lo aqui se quiseres outro número.
                    $descricao_completa = $row['descricao'];
                    $descricao_limitada = limit_words($descricao_completa); 
                    
                    ?>
                    <div class="col-md-4 mb-4 projeto-card">
                        <div class="card">
                            <?php if (!empty($row['imagem'])): ?>
                                <img class="card-img-top" src="<?php echo $row['imagem']; ?>" alt="<?php echo htmlspecialchars($row['nome_projeto']); ?>">
                            <?php else: ?>
                                <img class="card-img-top" src="img/placeholder.jpg" alt="Sem imagem">
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($row['nome_projeto']); ?></h5>
                                
                                <p class="card-text"><?php echo htmlspecialchars($descricao_limitada); ?></p>
                                
                                <a href="#" class="btn btn-primary">Conheça</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo '<p class="text-center">Nenhum projeto cadastrado.</p>';
            }

            // Fecha a conexão com a base de dados
            $conn->close();
            ?>
        </div>
    </section>
</div>

<?php include 'footer.php'; ?>

<script>
    // Código JavaScript para busca rápida (Mantido inalterado)
    const buscaInput = document.getElementById('buscaProjeto');
    const cards = document.querySelectorAll('.projeto-card');

    buscaInput.addEventListener('input', () => {
        const filtro = buscaInput.value.toLowerCase();
        cards.forEach(card => {
            const titulo = card.querySelector('.card-title').textContent.toLowerCase();
            if (titulo.includes(filtro)) {
                card.style.display = '';
            } else {
                card.style.display = 'none';
            }
        });
    });
</script>