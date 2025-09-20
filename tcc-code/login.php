<?php include 'header.php'; ?>
    <div class="container py-5 espaco-login">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-10">
                <div class="card card-login p-4 p-md-5">
                    <div class="row g-0">
                        <!-- Login Apoiadores -->
                        <div class="col-md-6 p-4">
                            <h4 class="mb-4">Login Apoiadores</h4>
                            <form action="login_apoiadores.php" method="post">
                                <div class="mb-3">
                                    <label for="apoio-email" class="form-label">E‑mail</label>
                                    <input type="email" class="form-control" id="apoio-email" name="email"
                                        placeholder="seu@exemplo.com" required>
                                </div>
                                <div class="mb-3">
                                    <label for="apoio-senha" class="form-label">Senha</label>
                                    <input type="password" class="form-control" id="apoio-senha" name="senha"
                                        placeholder="Senha" required>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary" type="submit">Entrar como Apoiador</button>
                                </div>
                            </form>
                        </div>


                        <!-- Login Projetos -->
                        <div class="col-md-6 p-4 divider-vertical">
                            <h4 class="mb-4">Login Projetos</h4>
                            <form action="login_projetos.php" method="post">
                                <div class="mb-3">
                                    <label for="proj-usuario" class="form-label">Usuário/Projeto</label>
                                    <input type="text" class="form-control" id="proj-usuario" name="usuario"
                                        placeholder="Nome do projeto" required>
                                </div>
                                <div class="mb-3">
                                    <label for="proj-senha" class="form-label">Senha</label>
                                    <input type="password" class="form-control" id="proj-senha" name="senha"
                                        placeholder="Senha" required>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary" type="submit">Entrar como Projeto</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include 'footer.php'; ?>