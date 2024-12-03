<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Aluno</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilologin.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <form action="inserirAluno.php" method="POST" class="border p-4 shadow-sm rounded">
                    <h2 class="text-center mb-4">Cadastrar aluno</h2>
                    
                    <?php if (isset($_GET['sucesso'])): ?>
                        <div class="alert alert-success"><?php echo $_GET['sucesso']; ?></div>
                    <?php elseif (isset($_GET['erro'])): ?>
                        <div class="alert alert-danger"><?php echo $_GET['erro']; ?></div>
                    <?php endif; ?>

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do aluno" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email do usuario" required>
                    </div>
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" name="cpf" id="cpf" class="form-control" placeholder="CPF do Paciente" required>
                    </div>
                    <div class="form-group">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuário" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block mb-4">Cadastrar</button>
                    
                
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
