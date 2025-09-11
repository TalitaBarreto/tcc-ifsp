<?php include 'header.php'; ?>

<div class="container">
    <section class="row espaco-entre-secao">
        <div class="col-md-6">
            <h2 class="tiutloCadastro">Invista em quem <span class="destaque">transforma</span> o futuro</h2>
            <p class="subtitulo">Seja parte da mudança apoiando projetos socioambientais que geram impacto positivo para a sociedade e
                para o planeta.</p>
            <a href="#cadastroInvestidor" class="btn btn-primary">Cadastre-se</a>
        </div>
        <div class="col-md-6">
            <img class="imgTamanho" src="img/investidor.jpg" alt="">
        </div>
    </section>
    <section class="row espaco-entre-secao">
        <div class="col-md-12">
            <h2>Quais os benefícios sua Empresa pode ganhar?</h2> 
        </div>
        <div class="col-md-3">
            <img class="imgProjeto" src="img/fig5.png" alt="">
            <h4 class="tituloBeneficio">Impacto real e mensurável</h4>
            <p class="beneficio">Acompanhe como seu investimento contribui para causas ambientais e sociais.</p>
        </div>
        <div class="col-md-3">
            <img class="imgProjeto" src="img/fig10.png" alt="">
            <h4 class="tituloBeneficio">Diversidade de projetos</h4>
            <p class="beneficio">Escolha iniciativas alinhadas aos seus valores e ao propósito da sua empresa.</p>
        </div>
        <div class="col-md-3">
            <img class="imgProjeto" src="img/fig3.png" alt="">
            <h4 class="tituloBeneficio">Benefícios fiscais</h4>
            <p class="beneficio">Aproveite incentivos legais ao investir em causas socioambientais.</p>
        </div>
        <div class="col-md-3">
            <img class="imgProjeto" src="img/fig11.png" alt="">
            <h4 class="tituloBeneficio">Reconhecimento e visibilidade</h4>
            <p class="beneficio">Fortaleça a imagem da sua marca como agente de transformação.</p>
        </div>
    </section>
    <section class="row secaoFraseDestaque">         
        <div class="col-md-12">
            <h2 class="fraseDestaque">Apoiar projetos socioambientais é fortalecer comunidades e projetar sua marca como referência em sustentabilidade ambiental.</h2>
        </div>
    </section>
    <section class="row espaco-entre-secao" id="cadastroInvestidor">
        <form class="row g-3 formulario" id="uploadForm">
            <div class="col-md-12">
                <h3>Cadastro de Investidores</h3>
            </div>
            <div class="col-md-5">
                <label for="inputNomeInvestidor" class="form-label">Nome do Investidor</label>
                <input type="text" class="form-control" id="inputNomeInvestidor" placeholder="Digite o nome do investidor">
            </div>
            <div class="col-md-5">
                <label for="inputEmailInvestidor" class="form-label">Email do Investidor</label>
                <input type="email" class="form-control" id="inputEmailInvestidor"
                    placeholder="Digite o email do investidor">
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
                <label for="inputCategoria" class="form-label">Categoria de Interesse</label><br>
                <select id="inputCategoria" class="form-select selecao">
                    <option selected>Educação Ambiental</option>
                    <option>Créditos de Carbono</option>
                    <option>Reflorestamento</option>
                    <option>Reciclagem</option>
                    <option>Recuperação de Área Degradadas</option>
                    <option>Economia Sustentável Ambiental</option>
                    <option>Startups Ambientais</option>
                    <option>Todas</option>
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
                <label for="inputValor" class="form-label">Valor a investir</label><br>
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
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 20px;">Cadastrar</button>
            </div>
        </form>

    </section>
</div>

<?php include 'footer.php'; ?>