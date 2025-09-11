<?php include 'header.php'; ?>
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
        <h2>Projetos em Destaque</h2>
        <div class="row">            
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="img/projetos-ambientais.jpg" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">Projeto 1</h5>
                        <p class="card-text">Descrição do Projeto 1</p>
                        <a href="#" class="btn btn-primary">Conheça</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="img/projetos-ambientais.jpg" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">Projeto 2</h5>
                        <p class="card-text">Descrição do Projeto 2</p>
                        <a href="#" class="btn btn-primary">Conheça</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="img/projetos-ambientais.jpg" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">Projeto 3</h5>
                        <p class="card-text">Descrição do Projeto 3</p>
                        <a href="#" class="btn btn-primary">Conheça</a>
                    </div>
                </div>
            </div>            
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="cardAtencao text-center">
                        <h2 style="margin: 0; font-size: 24px; color: #333;">Conheça mais sobre os nossos projetos!</h2>
                        <p style="margin: 10px 0; color: #444;">Iniciativas que fazem a diferença. Descubra como você pode participar.</p>
                        <a href="projetos.php" class="btn btn-primary">Ver Projetos</a>
                    </div>
                </div>
            </div>  
        </div>
    </section>
</div>

<?php include 'footer.php'; ?>