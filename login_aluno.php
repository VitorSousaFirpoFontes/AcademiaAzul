



<?php
include('conexao.php');

if (isset($_POST['username']) || isset($_POST['password'])) {
    if (strlen($_POST['username']) == 0) {
        echo "Preencha seu usuário";
    } else if (strlen($_POST['password']) == 0) {
        echo "Preencha sua senha";
    } else {
        $usuario = $conn->real_escape_string($_POST['username']);
        $senha = $conn->real_escape_string($_POST['password']);

        $sql_code = "SELECT * FROM ADM WHERE usuario = '$usuario' AND SENHA = '$senha'";
        $sql_query = $conn->query($sql_code) or die("Falha na conexão: " . $conn->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['user'] = $usuario['id'];
            $_SESSION['name'] = $usuario['nome'];

            header("Location: index.php");
            exit(); 
        } else {
            echo "Falha ao logar. Usuário ou senha incorretos.";
        }
    }
}
?>

