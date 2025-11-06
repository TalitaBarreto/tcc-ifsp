<?php

var_dump($_POST);
include 'header.php';
include 'db-projetos.php'; 

// Obtém o ID do projeto
$projeto_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$projeto = null;

// Busca o projeto no banco
if ($projeto_id > 0) {
    $sql = "SELECT * FROM projetos WHERE id = $projeto_id";
    $resultado = $conn->query($sql);
    if ($resultado && $resultado->num_rows > 0) {
        $projeto = $resultado->fetch_assoc();
    }
}


?>

<div class="container">
    <section class="row espaco-entre-secao">
        <div class="col-md-12">
            <h2>Não se esqueça de atualizar seu Projeto</h2>
        </div>
    </section>
    <section class="row espaco-entre-secao" id="editarProjeto">
        <?php if ($projeto): ?>
            <form class="row g-3 formulario" action="up-projeto.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= htmlspecialchars($projeto['id']) ?>">

                <div class="col-md-12">
                    <h3>Atualização de Projeto</h3>
                </div>

                <div class="col-md-5">
                    <label class="form-label">Nome do Projeto</label>
                    <input type="text" class="form-control" name="nome_projeto" value="<?= htmlspecialchars($projeto['nome_projeto']) ?>" required>
                </div>

                <div class="col-md-5">
                    <label class="form-label">Responsável</label>
                    <input type="text" class="form-control" name="responsavel" value="<?= htmlspecialchars($projeto['responsavel']) ?>" required>
                </div>

                <div class="col-md-2">
                    <label class="form-label">Senha</label>
                    <input type="password" class="form-control" name="senha" placeholder="•••••••">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Rua</label>
                    <input type="text" class="form-control" name="rua" value="<?= htmlspecialchars($projeto['rua']) ?>" required>
                </div>

                <div class="col-md-2">
                    <label class="form-label">Número</label>
                    <input type="text" class="form-control" name="numero" value="<?= htmlspecialchars($projeto['numero']) ?>" required>
                </div>

                <div class="col-md-2">
                    <label class="form-label">Complemento</label>
                    <input type="text" class="form-control" name="complemento" value="<?= htmlspecialchars($projeto['complemento']) ?>">
                </div>

                <div class="col-md-2">
                    <label class="form-label">CEP</label>
                    <input type="text" class="form-control" name="cep" value="<?= htmlspecialchars($projeto['cep']) ?>" required>
                </div>

                <div class="col-md-2">
                    <label class="form-label">Cidade</label><br>
                    <select name="cidade" class="form-select selecao" required>
                        <?php
                        $cidades = [
                            "Campinas",
                            "Americana",
                            "Artur Nogueira",
                            "Cosmópolis",
                            "Engenheiro Coelho",
                            "Holambra",
                            "Hortolândia",
                            "Indaiatuba",
                            "Itatiba",
                            "Jaguariúna",
                            "Monte Mor",
                            "Nova Odessa",
                            "Paulínia",
                            "Pedreira",
                            "Santa Bárbara D’Oeste",
                            "Santo Antônio de Posse",
                            "Sumaré",
                            "Valinhos",
                            "Vinhedo",
                            "Morungaba",
                            "Rio de Janeiro",
                            "Brasília",
                            "Salvador",
                            "Fortaleza",
                            "Belo Horizonte",
                            "Manaus",
                            "Curitiba",
                            "Recife",
                            "Porto Alegre",
                            "Belém",
                            "Goiânia",
                            "Guarulhos",
                            "São Luís",
                            "São Gonçalo",
                            "Maceió",
                            "Duque de Caxias",
                            "Natal",
                            "Teresina",
                            "Campo Grande",
                            "Nova Iguaçu",
                            "João Pessoa",
                            "São Bernardo do Campo",
                            "Santo André",
                            "Osasco",
                            "Jaboatão dos Guararapes",
                            "Ribeirão Preto",
                            "Uberlândia",
                            "Contagem",
                            "Sorocaba",
                            "Aracaju",
                            "Feira de Santana",
                            "Cuiabá",
                            "Joinville",
                            "Londrina",
                            "Juiz de Fora",
                            "Aparecida de Goiânia",
                            "Ananindeua",
                            "Porto Velho",
                            "Florianópolis",
                            "Macapá",
                            "Santos",
                            "Serra",
                            "Caxias do Sul",
                            "Mauá",
                            "São José do Rio Preto",
                            "Mogi das Cruzes",
                            "Diadema",
                            "Maringá"
                        ];
                        foreach ($cidades as $cidade) {
                            $selected = ($projeto['cidade'] == $cidade) ? "selected" : "";
                            echo "<option $selected>$cidade</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="col-md-2">
                    <label class="form-label">Estado</label><br>
                    <select name="estado" class="form-select selecao" required>
                        <?php
                        $estados = [
                            "São Paulo",
                            "Acre",
                            "Alagoas",
                            "Amapá",
                            "Amazonas",
                            "Bahia",
                            "Ceará",
                            "Distrito Federal",
                            "Espírito Santo",
                            "Goiás",
                            "Maranhão",
                            "Mato Grosso",
                            "Mato Grosso do Sul",
                            "Minas Gerais",
                            "Pará",
                            "Paraíba",
                            "Paraná",
                            "Pernambuco",
                            "Piauí",
                            "Rio de Janeiro",
                            "Rio Grande do Norte",
                            "Rio Grande do Sul",
                            "Rondônia",
                            "Roraima",
                            "Santa Catarina",
                            "Sergipe",
                            "Tocantins"
                        ];
                        foreach ($estados as $estado) {
                            $selected = ($projeto['estado'] == $estado) ? "selected" : "";
                            echo "<option $selected>$estado</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="form-label">Categoria</label><br>
                    <select name="categoria" class="form-select selecao" required>
                        <?php
                        $categorias = ["Educação Ambiental", "Créditos de Carbono", "Reflorestamento", "Reciclagem", "Recuperação de Área Degradadas", "Economia Sustentável Ambiental", "Startups Ambientais"];
                        foreach ($categorias as $categoria) {
                            $selected = ($projeto['categoria'] == $categoria) ? "selected" : "";
                            echo "<option $selected>$categoria</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="form-label">Financiamento</label><br>
                    <select name="financiamento" class="form-select selecao" required>
                        <?php
                        $financiamentos = ["Coparticipativo", "Privado", "Público", "Público-Privado", "Outro"];
                        foreach ($financiamentos as $tipo) {
                            $selected = ($projeto['financiamento'] == $tipo) ? "selected" : "";
                            echo "<option $selected>$tipo</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="col-md-2">
                    <label class="form-label">Valor Pretendido</label><br>
                    <select name="valor_pretendido" class="form-select selecao" required>
                        <?php
                        $valores = ["01 - 50 Mil", "51 - 100 Mil", "101 - 200 Mil", "201 - 400 Mil", "401 - 600 Mil", "601 - 800 Mil", "801 - 1 Milhão", "Acima de 1 Milhão"];
                        foreach ($valores as $valor) {
                            $selected = ($projeto['valor_pretendido'] == $valor) ? "selected" : "";
                            echo "<option $selected>$valor</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="col-md-12">
                    <label class="form-label">Descrição</label><br>
                    <textarea class="form-control" name="descricao" style="height: 100px" required><?= htmlspecialchars($projeto['descricao']) ?></textarea>
                </div>

                <div class="col-md-12">
                    <label class="form-label d-block mb-2">Imagem do Projeto</label>

                    <div class="d-flex align-items-center gap-3">
                        <div class="image-preview border rounded p-2" style="width: 120px; height: 120px; display: flex; justify-content: center; align-items: center; background-color: #f8f9fa;">
                            <?php if (!empty($projeto['imagem'])): ?>
                                <img src="<?= htmlspecialchars($projeto['imagem']) ?>" alt="Imagem atual" style="max-width: 100%; max-height: 100%; object-fit: cover; border-radius: 10px;">
                            <?php else: ?>
                                <span class="text-muted" style="font-size: 0.8rem;">Sem imagem</span>
                            <?php endif; ?>
                        </div>

                        <div class="flex-grow-1">
                            <label class="form-label">Alterar imagem</label>
                            <input type="file" class="form-control" id="imagem" name="imagem" accept="image/*">
                            <small id="nomeArquivo" class="text-muted">Nenhum arquivo selecionado</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <label>Instagram</label>
                    <input type="text" class="form-control" name="instagram" value="<?= htmlspecialchars($projeto['instagram']) ?>" required>
                </div>

                <div class="col-md-3">
                    <label>WhatsApp</label>
                    <input type="text" class="form-control" name="facebook" value="<?= htmlspecialchars($projeto['facebook']) ?>" required>
                </div>

                <div class="col-md-3">
                    <label>LinkedIn</label>
                    <input type="text" class="form-control" name="linkedin" value="<?= htmlspecialchars($projeto['linkedin']) ?>" required>
                </div>

                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary" style="width:100%; margin-top:32px">Salvar</button>
                </div>
            </form>

        <?php else: ?>
            <div class="alert alert-danger">Projeto não encontrado.</div>
        <?php endif; ?>
    </section>
</div>

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
                    nomeArquivo.textContent = "Nenhum arquivo";
                }
            });
        }
    });
</script>