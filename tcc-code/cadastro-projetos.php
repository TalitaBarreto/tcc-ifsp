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
        <form class="row g-3 formulario" id="uploadForm" action="db-projetos.php" method="POST" enctype="multipart/form-data">
            <div class="col-md-12">
                <h3>Cadastro de Projetos</h3>
            </div>               
            <div class="col-md-5">
                <label for="inputNomeProjeto" class="form-label">Nome do Projeto</label>
                <input type="text" class="form-control" id="inputNomeProjeto" name="nome_projeto" placeholder="Digite o nome do projeto" required>
            </div>
            <div class="col-md-5">
                <label for="inputResponsavel" class="form-label">Nome do Responsávell</label>
                <input type="text" class="form-control" id="inputResponsavel" name="responsavel" placeholder="Digite o nome do responsável do projeto" required>
            </div>
            <div class="col-md-2">
                <label for="inputPassword" class="form-label">Senha</label>
                <input type="password" class="form-control" id="inputPassword" name="senha" placeholder="Digite uma senha" required>
            </div>
            <div class="col-md-6">
                <label for="inputRua" class="form-label">Rua</label>
                <input type="text" class="form-control" id="inputRua" name="rua" placeholder="Digite o nome da rua" required>
            </div>
            <div class="col-md-2">
                <label for="inputNum" class="form-label">Número</label>
                <input type="text" class="form-control" id="inputNum" name="numero" placeholder="Digite o número" required>
            </div>
            <div class="col-md-2">
                <label for="inputComplemento" class="form-label">Complemento</label>
                <input type="text" class="form-control" id="inputComplemento" name="complemento" placeholder="Complemento">
            </div>
            <div class="col-md-2">
                <label for="inputCEP" class="form-label">CEP:</label>
                <input type="text" class="form-control" id="inputCEP" name="cep" placeholder="Digite o CEP" required>
            </div>
            <div class="col-md-2">
                <label for="inputCidade" class="form-label">Cidade</label><br>
                <select id="inputCidade" name="cidade" class="form-select-cidade selecao" required>
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
                <select id="inputState" name="estado" class="form-select selecao" required>
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
                <select id="inputCategoria" name="categoria" class="form-select selecao" required>
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
                <select id="inputFinanciamento" name="financiamento" class="form-select selecao" required>
                    <option selected>Coparticipativo</option>
                    <option>Privado</option>
                    <option>Público</option>
                    <option>Público-Privado</option>
                    <option>Outro</option>
                </select>
            </div>
             <div class="col-md-2">
                <label for="inputValor" class="form-label">Valor Pretendido</label><br>
                <select id="inputValor" name="valor_pretendido" class="form-select selecao" required>
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
                <textarea class="form-control" placeholder="Faça a descrição do seu projeto" name="descricao" id="floatingTextarea"  style="height: 100px" required></textarea>
            </div>
            <div class="col-md-3">
                <label class="form-label">Escolha Imagem do seu Projeto</label>
                <input type="file" id="imagem" class="d-none" name="imagem" accept="image/*" required></br>
                <label for="imagem" class="btn btn-outline-secondary"><i class="fa-solid fa-file-image" style="margin-right: 10px; margin-left: 5px;"></i>Escolher Imagem</label></br>
                <span id="nomeArquivo" class="ms-2 text-muted">Nenhum arquivo selecionado</span>
            </div>
            <div class="col-md-3">
                <label for="inputInstagram" class="form-label">Coloque aqui seu Instagram</label>
                <input type="text" class="form-control" name="instagram" id="inputInstagram" placeholder="Instagram" required>
            </div>
            <div class="col-md-3">
                <label for="inputFacebook" class="form-label">Coloque aqui seu WhatsApp</label>
                <input type="text" class="form-control" name="facebook" id="inputFacebook" placeholder="WhatsApp" required>
            </div>
            <div class="col-md-3">
                <label for="inputLinkedIn" class="form-label">Coloque aqui seu LinkedIn</label>
                <input type="text" class="form-control" name="linkedin" id="inputLinkedIn" placeholder="LinkedIn" required>
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 20px;">Cadastrar</button>
            </div>
            <div class="col-md-12">
                <p style="margin-top: 10px; color:crimson">*Todos os campos são necessários para o cadastro, menos o COMPLEMENTO que é opcional*</p>
            </div> 
        </form>

    </section>
</div>

<!-- Modal Sucesso -->
<div class="modal fade" id="modalSucesso" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title">Cadastro realizado!</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p>Seu projeto foi cadastrado com sucesso!</p>
      </div>
    </div>
  </div>
</div>

<!-- Modal Erro -->
<div class="modal fade" id="modalErro" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Erro no cadastro</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p>Não foi possível concluir o cadastro. Tente novamente.</p>
        <div id="erro_msg_detalhada" class="alert alert-warning mt-3" style="font-size: 0.9em; text-align: left;"></div>
      </div>      
    </div>
  </div>
</div>
<?php 
// Coleta a mensagem de erro da URL, se existir, e decodifica
$erro_msg_url = isset($_GET['erro']) ? htmlspecialchars(urldecode($_GET['erro'])) : '';
?>

<?php if (isset($_GET['sucesso']) && $_GET['sucesso'] == 1): ?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var modalSucesso = new bootstrap.Modal(document.getElementById('modalSucesso'));
        modalSucesso.show();
    });
</script>
<?php elseif (isset($_GET['erro'])): ?> 
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Exibe a mensagem de erro do banco de dados no modal
        document.getElementById('erro_msg_detalhada').textContent = 'Detalhe: <?php echo $erro_msg_url; ?>';
        
        var modalErro = new bootstrap.Modal(document.getElementById('modalErro'));
        modalErro.show();
        
        // Limpa todos os campos do formulário
        document.getElementById('uploadForm').reset();
    });
</script>


</script>
<?php endif; ?>

<?php include 'footer.php'; ?>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const inputArquivo = document.getElementById('imagem'); // input
    const nomeArquivo = document.getElementById('nomeArquivo'); // span

    if (inputArquivo && nomeArquivo) {
        inputArquivo.addEventListener('change', () => {
            if (inputArquivo.files.length > 0) {
                nomeArquivo.textContent = inputArquivo.files[0].name;
            } else {
                nomeArquivo.textContent = "Nenhum arquivo selecionado";
            }
        });
    }
});

document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById('uploadForm');
    const modalErro = new bootstrap.Modal(document.getElementById('modalErro'));
    const erroMsg = document.getElementById('erro_msg_detalhada');

    const camposObrigatorios = [
        {id: 'inputNomeProjeto', nome: 'Nome do Projeto'},
        {id: 'inputResponsavel', nome: 'Nome do Responsável'},
        {id: 'inputPassword', nome: 'Senha'},
        {id: 'inputRua', nome: 'Rua'},
        {id: 'inputNum', nome: 'Número'},
        {id: 'inputCEP', nome: 'CEP'},
        {id: 'inputCidade', nome: 'Cidade'},
        {id: 'inputState', nome: 'Estado'},
        {id: 'inputCategoria', nome: 'Categoria'},
        {id: 'inputFinanciamento', nome: 'Tipo de Financiamento'},
        {id: 'inputValor', nome: 'Valor Pretendido'},
        {id: 'floatingTextarea', nome: 'Descrição do Projeto'},
        {id: 'imagem', nome: 'Imagem do Projeto'},
        {id: 'instagram', nome: 'Instagram'},
        {id: 'facebook', nome: 'WhatsApp'},
        {id: 'linkedin', nome: 'Linkedin'}
    ];

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // evita envio enquanto valida
        let erros = [];

        camposObrigatorios.forEach(function(campoInfo) {
            const campo = document.getElementById(campoInfo.id);
            let preenchido = true;

            if (campo.tagName === 'SELECT') {
                preenchido = campo.value.trim() !== '';
            } else if (campo.type === 'file') {
                preenchido = campo.files.length > 0;
            } else {
                preenchido = campo.value.trim() !== '';
            }

            if (!preenchido) {
                erros.push(campoInfo.nome);
                campo.classList.add('is-invalid');
            } else {
                campo.classList.remove('is-invalid');
            }
        });

        if (erros.length > 0) {
            // Monta a mensagem de erro
            erroMsg.innerHTML = `<strong>Por favor, preencha os seguintes campos obrigatórios:</strong><ul><li>${erros.join('</li><li>')}</li></ul>`;
            modalErro.show();
        } else {
            // Se tudo preenchido, envia o formulário
            form.submit();
        }
    });
});

</script>