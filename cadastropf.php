<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Professor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilologin.css"> 
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <form action="processa_cadastro_professor.php" method="POST" class="border p-4 shadow-sm rounded">
                    <h2 class="text-center mb-4">Cadastrar Professor</h2>

                    <!-- Mensagens de erro ou sucesso -->
                    <?php if (isset($_GET['sucesso'])): ?>
                        <div class="alert alert-success"><?php echo $_GET['sucesso']; ?></div>
                    <?php elseif (isset($_GET['erro'])): ?>
                        <div class="alert alert-danger"><?php echo $_GET['erro']; ?></div>
                    <?php endif; ?>

                    <!-- Campos do Formulário -->
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do Professor" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email do Professor" required>
                    </div>

                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" name="cpf" id="cpf" class="form-control" placeholder="CPF do Professor" required>
                    </div>

               

                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" required>
                    </div>

                    <div class="form-group">
                        <label for="matricula">Matrícula</label>
                        <input type="text" name="matricula" id="matricula" class="form-control" placeholder="Matrícula do Professor" required>
                    </div>

                    <!-- Botão de Submissão -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Cadastrar</button>

                    <!-- Link para login -->
                    
                </form>
            </div>
        </div>
    </div>

    <!-- Scripts do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
