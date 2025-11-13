<?php include 'header.php'; 
include 'db-projetos.php'; 

function limit_words($string, $word_limit = 20) {
    $words = explode(" ", strip_tags($string));
    if (count($words) > $word_limit) {
        return implode(" ", array_slice($words, 0, $word_limit)) . '...';
    }
    return $string;
}
?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 tamanhoSlides" src="img/paisagem.jpg" alt="Primeiro Slide">
            <div class="carousel-caption ">
                <h1>Bem-vindo ao Conectando Ideias</h1>
                <p>Plataforma para financiamento coletivo de projetos socioambientais.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 tamanhoSlides" src="img/educacao-ambiental1.jpg" alt="Segundo Slide">
            <div class="carousel-caption ">
                <h1>Bem-vindo ao Conectando Ideias</h1>
                <p>Plataforma para financiamento coletivo de projetos socioambientais.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 tamanhoSlides" src="img/projetos-ambientais1.jpg" alt="Terceiro Slide">
            <div class="carousel-caption ">
                <h1>Bem-vindo ao Conectando Ideias</h1>
                <p>Plataforma para financiamento coletivo de projetos socioambientais.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
    </a>
</div>
<div class="container">
    <section class="row espaco-entre-secao">
        <div class="col-md-6">
            <div class="card">
                <img class="card-img-top" src="img/projeto.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Invista no Futuro</h5>
                    <p class="card-text">Apoie projetos socioambientais e aproveite incentivos fiscais.</p>
                    <a href="porque.php" class="btn btn-primary">Saiba Mais</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <img class="card-img-top" src="img/reciclagem1.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Tem uma Ideia Transformadora?</h5>
                    <p class="card-text">Cadastre seu projeto e conecte-se com investidores.</p>
                    <a href="cadastro-projetos.php" class="btn btn-primary">Cadastre-se</a>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <h2>Projetos recém-cadastrados</h2>
        <div class="row">
            <?php

            $sqlRecentes = "SELECT * FROM projetos ORDER BY id DESC LIMIT 3";
            $resultRecentes = $conn->query($sqlRecentes);

            if ($resultRecentes && $resultRecentes->num_rows > 0) {

                while ($row = $resultRecentes->fetch_assoc()) {


                    $descricao_completa = $row['descricao'];
                    $descricao_limitada = limit_words($descricao_completa);


            ?>
                    <div class="col-md-4 mb-4">
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

                echo '<div class="col-md-12 text-center"><p>Ainda não temos projetos cadastrados. Seja o primeiro!</p></div>';
            }
            ?>
        </div>
    </section>
    <section>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="cardAtencao text-center">
                    <h2 style="margin: 0; font-size: 24px; color: #333;">Conheça mais sobre os nossos projetos!</h2>
                    <p style="margin: 10px 0; color: #444;">Iniciativas que fazem a diferença. Descubra como você pode participar.</p>
                    <a href="projetos-principal.php" class="btn btn-primary">Ver Projetos</a>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include 'footer.php'; ?>