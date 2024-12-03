<?php
include "conexao.php"; // Certifique-se de que este arquivo está configurado corretamente

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe os dados do formulário
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $cpf = $_POST['cpf'] ?? '';
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    // Prepara a consulta SQL para inserir os dados
    $sql = "INSERT INTO aluno (nome, email, cpf, usuario, senha) VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Erro ao preparar a consulta: " . $conn->error);
    }

    // Hash da senha para segurança
    $senha_hashed = password_hash($senha, PASSWORD_DEFAULT);

    // Associa os parâmetros
    $stmt->bind_param("sssss", $nome, $email, $cpf, $usuario, $senha_hashed);

    // Executa a consulta e verifica o resultado
    if ($stmt->execute()) {
        header("Location: cadastrar_aluno.php?sucesso=Aluno cadastrado com sucesso!");
        exit();
    } else {
        header("Location: cadastrar_aluno.php?erro=Erro ao cadastrar o aluno: " . $stmt->error);
        exit();
    }

    // Fecha a declaração e a conexão
    $stmt->close();
    $conn->close();
}
?>
