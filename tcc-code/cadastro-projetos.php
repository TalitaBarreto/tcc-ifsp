<?php include 'header.php'; ?>
        
<div class="container">      
    <section class="row espaco-entre-secao">         
        <div class="col-md-6">
            <h2 class="tiutloCadastro"><span class="destaque">Transforme</span> sua ideia em impacto!</h2>            
            <p class="subtitulo">Juntos, podemos criar soluções reais para o meio ambiente e para a sociedade. Participe da rede que apoia mudanças positivas.</p>
            <a href="#cadastroProjeto" class="btn btn-primary">Cadastre-se</a>
        </div>  
        <div class="col-md-6">
            <img class="imgTamanho" src="img/explorar.jpg" alt="">
        </div>            
    </section>
    <section class="row espaco-entre-secao">  
        <div class="col-md-12">
            <h2>Quais os benefícios seu Projeto vai ganhar?</h2>        
        </div>
        <div class="col-md-4"> 
            <img class="imgProjeto" src="img/fig13.png" alt="">
            <h4 class="tituloBeneficio">Visibilidade para seu projeto</h4>
            <p class="beneficio">Alcance pessoas e organizações que querem investir em causas como a sua.</p>
        </div>
        <div class="col-md-4">
            <img class="imgProjeto" src="img/fig8.png" alt="">
            <h4 class="tituloBeneficio">Conexão com recursos e parceiros</h4>
            <p class="beneficio">Encontre colaboradores, voluntários e patrocinadores.</p>
        </div>
        <div class="col-md-4">
            <img class="imgProjeto" src="img/fig1.png" alt="">
            <h4 class="tituloBeneficio">Ampliar o impacto</h4>
            <p class="beneficio">Envolva mais pessoas, aumente seu alcance e potencialize os resultados do seu projeto.</p>            
        </div>           
    </section>
    <section class="row secaoFraseDestaque">         
        <div class="col-md-12">
            <h2 class="fraseDestaque">Cadastre seu projeto socioambiental e conecte-se com apoiadores que querem fazer a diferença.</h2>   
        </div>           
    </section>    
    <section class="row espaco-entre-secao" id="cadastroProjeto">
        <form class="row g-3 formulario" id="uploadForm">
            <div class="col-md-12">
                <h3>Cadastro de Projetos</h3>
            </div>  
            <div class="col-md-5">
                <label for="inputNomeProjeto" class="form-label">Nome do Projeto</label>
                <input type="text" class="form-control" id="inputNomeProjeto" placeholder="Digite o nome do projeto">
            </div>
            <div class="col-md-5">
                <label for="inputResponsavel" class="form-label">Nome do Responsávell</label>
                <input type="text" class="form-control" id="inputResponsavel" placeholder="Digite o nome do responsável do projeto">
            </div>
            <div class="col-md-2">
                <label for="inputPassword" class="form-label">Senha</label>
                <input type="password" class="form-control" id="inputPassword" placeholder="Digite uma senha">
            </div>
            <div class="col-md-6">
                <label for="inputRua" class="form-label">Rua</label>
                <input type="text" class="form-control" id="inputRua" placeholder="Digite o nome da rua">
            </div>
            <div class="col-md-2">
                <label for="inputNum" class="form-label">Número</label>
                <input type="text" class="form-control" id="inputNum" placeholder="Digite o número">
            </div>
            <div class="col-md-2">
                <label for="inputComplemento" class="form-label">Complemento</label>
                <input type="text" class="form-control" id="inputComplemento" placeholder="Complemento">
            </div>
            <div class="col-md-2">
                <label for="inputCEP" class="form-label">CEP:</label>
                <input type="text" class="form-control" id="inputCEP" placeholder="Digite o CEP">
            </div>
            <div class="col-md-2">
                <label for="inputCidade" class="form-label">Cidade</label><br>
                <select id="inputCidade" class="form-select-cidade selecao">
                <option selected>Campinas</option>
                <option>Americana</option>
                <option>Artur Nogueira</option>
                <option>Cosmópolis</option>
                <option>Engenheiro Coelho</option>
                <option>Holambra</option>
                <option>Hortolândia</option>
                <option>Indaiatuba</option>
                <option>Itatiba</option>
                <option>Jaguariúna</option>
                <option>Monte Mor</option>
                <option>Nova Odessa</option>
                <option>Paulínia</option>
                <option>Pedreira</option>
                <option>Santa Bárbara D’Oeste</option>
                <option>Santo Antônio de Posse</option>
                <option>Sumaré</option>
                <option>Valinhos</option>
                <option>Vinhedo</option>
                <option>Morungaba</option>
                <option>Rio de Janeiro</option>
                <option>Brasília</option>
                <option>Salvador</option>
                <option>Fortaleza</option>
                <option>Belo Horizonte</option>
                <option>Manaus</option>
                <option>Curitiba</option>
                <option>Recife</option>
                <option>Porto Alegre</option>
                <option>Belém</option>
                <option>Goiânia</option>
                <option>Guarulhos</option>
                <option>São Luís</option>
                <option>São Gonçalo</option>
                <option>Maceió</option>
                <option>Duque de Caxias</option>
                <option>Natal</option>
                <option>Teresina</option>
                <option>Campo Grande</option>
                <option>Nova Iguaçu</option>
                <option>João Pessoa</option>
                <option>São Bernardo do Campo</option>
                <option>Santo André</option>
                <option>Osasco</option>
                <option>Jaboatão dos Guararapes</option>
                <option>Ribeirão Preto</option>
                <option>Uberlândia</option>
                <option>Contagem</option>   
                <option>Sorocaba</option>
                <option>Aracaju</option>
                <option>Feira de Santana</option>               
                <option>Cuiabá</option>
                <option>Joinville</option>
                <option>Londrina</option>
                <option>Juiz de Fora</option>
                <option>Aparecida de Goiânia</option>
                <option>Ananindeua</option>
                <option>Porto Velho</option>
                <option>Florianópolis</option>
                <option>Macapá</option>
                <option>Santos</option>
                <option>Serra</option>
                <option>Caxias do Sul</option>
                <option>Mauá</option>
                <option>São José do Rio Preto</option>
                <option>Mogi das Cruzes</option>
                <option>Diadema</option>
                <option>Maringá</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputState" class="form-label">Estado</label><br>
                <select id="inputState" class="form-select selecao">
                <option selected>São Paulo</option>
                <option>Acre</option>
                <option>Alagoas</option>
                <option>Amapá</option>
                <option>Amazonas</option>
                <option>Bahia</option>
                <option>Ceará</option>
                <option>Distrito Federal</option>
                <option>Espírito Santo</option>
                <option>Goiás</option>
                <option>Maranhão</option>
                <option>Mato Grosso</option>
                <option>Mato Grosso do Sul</option>
                <option>Minas Gerais</option>
                <option>Pará</option>
                <option>Paraíba</option>
                <option>Paraná</option>
                <option>Pernambuco</option>
                <option>Piauí</option>
                <option>Rio de Janeiro</option>
                <option>Rio Grande do Norte</option>
                <option>Rio Grande do Sul</option>
                <option>Rondônia</option>
                <option>Roraima</option>
                <option>Santa Catarina</option>
                <option>Sergipe</option>
                <option>Tocantins</option>
                </select>
            </div> 
            <div class="col-md-3">
                <label for="inputCategoria" class="form-label">Categoria</label><br>
                <select id="inputCategoria" class="form-select selecao">
                    <option selected>Educação Ambiental</option>
                    <option>Créditos de Carbono</option>
                    <option>Reflorestamento</option>
                    <option>Reciclagem</option>
                    <option>Recuperação de Área Degradadas</option>
                    <option>Economia Sustentável Ambiental</option>
                    <option>Startups Ambientais</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="inputFinanciamento" class="form-label">Tipo de Financiamento</label><br>
                <select id="inputFinanciamento" class="form-select selecao">
                    <option selected>Coparticipativo</option>
                    <option>Privado</option>
                    <option>Público</option>
                    <option>Público-Privado</option>
                    <option>Outro</option>
                </select>
            </div>
             <div class="col-md-2">
                <label for="inputValor" class="form-label">Valor Pretendido</label><br>
                <select id="inputValor" class="form-select selecao">
                    <option selected>01 - 50 Mil</option>
                    <option>51 - 100 Mil</option>
                    <option>101 - 200 Mil</option>
                    <option>201 - 400 Mil</option>
                    <option>401 - 600 Mil</option>
                    <option>601 - 800 Mil</option>
                    <option>801 - 1 Milhão</option>
                    <option>Acima de 1 Milhão</option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="inputDescricao" class="form-label">Descrição do Projeto</label><br>
                <textarea class="form-control" placeholder="Faça a descrição do seu projeto" id="floatingTextarea"  style="height: 100px"></textarea>
            </div>
            <div class="col-md-3">
                <label class="form-label">Escolha Imagem do seu Projeto</label>
                <input type="file" id="imagem" class="d-none" accept="image/*" required></br>
                <label for="imagem" class="btn btn-outline-secondary"><i class="fa-solid fa-file-image" style="margin-right: 10px; margin-left: 5px;"></i>Escolher Imagem</label></br>
                <span id="nomeArquivo" class="ms-2 text-muted">Nenhum arquivo selecionado</span>
            </div>
            <div class="col-md-3">
                <label for="inputInstagram" class="form-label">Coloque aqui seu Instagram</label>
                <input type="text" class="form-control" id="inputInstagram" placeholder="Instagram">
            </div>
            <div class="col-md-3">
                <label for="inputFacebook" class="form-label">Coloque aqui seu Facebook</label>
                <input type="text" class="form-control" id="inputFacebook" placeholder="Facebook">
            </div>
            <div class="col-md-3">
                <label for="inputLinkedIn" class="form-label">Coloque aqui seu LinkedIn</label>
                <input type="text" class="form-control" id="inputLinkedIn" placeholder="LinkedIn">
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 20px;">Cadastrar</button>
            </div>
        </form>

    </section>
</div>

<script>
    const imagemInput = document.getElementById('imagem');
    const nomeArquivo = document.getElementById('nomeArquivo');
    const preview = document.getElementById('preview');
    const progressBar = document.getElementById('progressBar');
    const uploadForm = document.getElementById('uploadForm');

    // Mostrar nome do arquivo e pré-visualização
    imagemInput.addEventListener('change', function() {
        if (this.files.length > 0) {
            nomeArquivo.textContent = this.files[0].name;

            const reader = new FileReader();
            reader.onload = e => {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(this.files[0]);
        } else {
            nomeArquivo.textContent = 'Nenhum arquivo selecionado';
            preview.style.display = 'none';
        }
    });

    // Simular envio com barra de progresso
    uploadForm.addEventListener('submit', function(e) {
        e.preventDefault();

        progressBar.style.width = '0%';
        progressBar.textContent = '0%';

        let progresso = 0;
        const intervalo = setInterval(() => {
            if (progresso >= 100) {
                clearInterval(intervalo);
                progressBar.classList.remove('bg-success');
                progressBar.classList.add('bg-info');
                progressBar.textContent = 'Imagem enviada com sucesso!';
            } else {
                progresso += 10;
                progressBar.style.width = progresso + '%';
                progressBar.textContent = progresso + '%';
            }
        }, 200);
    });
</script>

<?php include 'footer.php'; ?>