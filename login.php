<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilologin.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <form action="" method="POST" class="border p-4 shadow-sm rounded">
                <h2 class="text-center mb-4">Login</h2>

                <!-- Campo para o username -->
                <div class="form-outline mb-4">
                    <input type="text" id="username" class="form-control" name="username" required />
                    <label class="form-label" for="username">Username</label>
                </div>

                <!-- Campo para a senha -->
                <div class="form-outline mb-4">
                    <input type="password" id="password" class="form-control" name="password" required />
                    <label class="form-label" for="password">Password</label>
                </div>

                <!-- Opção para lembrar usuário -->
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="form2Example31" checked />
                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                    </div>

                    <div class="col text-right">
                        <a href="#">Forgot password?</a>
                    </div>
                </div>

                <!-- Botão de login que redireciona para menuadm.html -->
                <button type="button" class="btn btn-primary btn-block mb-4" onclick="window.location.href='menuadm.html';">Sign in</button>

                <!-- Opção para registro de novo usuário -->
                <div class="text-center">
                    <p>Not a member? <a href="registroUsuario.php">Register</a></p>
                    <p>or sign up with:</p>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button>
                </div>
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
