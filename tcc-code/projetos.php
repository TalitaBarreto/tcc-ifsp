<?php include 'header.php'; ?>

<?php
// Inclui o ficheiro de conexão com a Base de Dados.
// Assumimos que 'db.php' contém a variável de conexão $conn (MySQLi).
include 'db.php'; 

/**
 * DOCUMENTAÇÃO: Função para limitar um texto a um número máximo de palavras (20).
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

// ----------------------------------------------------------------------------------
// LÓGICA PRINCIPAL DO FILTRO
// ----------------------------------------------------------------------------------

// 1. Verifica se uma categoria foi enviada no formulário (via método GET).
$filtroCategoria = isset($_GET['categoria']) ? $_GET['categoria'] : '';

// 2. Constrói a cláusula WHERE dinamicamente.
$whereClause = "";
if (!empty($filtroCategoria)) {
    // MUITO IMPORTANTE: Garante a segurança contra injeção SQL.
    $filtroCategoriaSegura = $conn->real_escape_string($filtroCategoria);
    $whereClause = "WHERE categoria = '{$filtroCategoriaSegura}'";
}

// 3. Constrói a query SQL final para buscar os projetos.
$sqlProjetos = "SELECT * FROM projetos {$whereClause} ORDER BY id DESC";
$resultProjetos = $conn->query($sqlProjetos);
?>

<div class="container"> 
    
    <section class="row espaco-entre-secao">
        <div class="col-md-12 text-center">
            <h2 class="tiutloCadastro">Projetos que geram <span class="destaque">impacto real</span></h2>
            <p class="subtitulo">Veja como diferentes ideias estão ajudando comunidades e preservando o meio ambiente e apoie a que mais combina com você.</p>
        </div> 
    </section> 
    
    <section class="row espaco-entre-secao">
        <div class="col-md-7"></div>
        <div class="col-md-5 text-center">
            <form method="GET" action="projetos.php" class="form-inline justify-content-center">
                <div class="input-group mb-2">
                    <label class="input-group-text" for="filtroCategoria"><i class="fa-solid fa-filter"></i>&nbsp; Filtrar por Categoria</label>
                    <select class="form-select filtroCategoria" id="filtroCategoria" name="categoria" onchange="this.form.submit()">
                        <option value="">Todas as Categorias</option> 
                        
                        <?php
                        // Lógica para obter categorias únicas para popular o dropdown
                        $sqlCategorias = "SELECT DISTINCT categoria FROM projetos WHERE categoria IS NOT NULL ORDER BY categoria ASC";
                        $resultCategorias = $conn->query($sqlCategorias);
    
                        if ($resultCategorias && $resultCategorias->num_rows > 0) {
                            while ($cat = $resultCategorias->fetch_assoc()) {
                                $nomeCategoria = htmlspecialchars($cat['categoria']);
                                
                                // Mantém a opção selecionada após a filtragem
                                $selected = ($filtroCategoria === $nomeCategoria) ? 'selected' : '';
                                
                                echo "<option value=\"{$nomeCategoria}\" {$selected}>{$nomeCategoria}</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
            </form>
        </div>
    </section>

    <section class="row espaco-entre-secao" id="listaProjetos">
        <div class="row">
            <?php
            // Utiliza o resultado da query filtrada ($resultProjetos)
            if ($resultProjetos && $resultProjetos->num_rows > 0) {
                while ($row = $resultProjetos->fetch_assoc()) {
                    
                    // Aplica a função para limitar a descrição.
                    $descricao_completa = $row['descricao'];
                    $descricao_limitada = limit_words($descricao_completa); 
                    
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
                                
                                <a href="#" class="btn btn-primary">Conheça</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                // Mensagem exibida se não houver projetos, ou se o filtro não encontrar resultados
                echo '<div class="col-md-12 text-center"><p>Nenhum projeto encontrado para esta categoria.</p></div>';
            }

            // Fecha a conexão com a base de dados
            $conn->close();
            ?>
        </div>
    </section>
</div>

<?php include 'footer.php'; ?>