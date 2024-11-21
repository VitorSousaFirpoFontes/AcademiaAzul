<?php
require 'conexao.php';

$matricula = $_POST['matricula'] ?? null;
$nome = $_POST['nome'] ?? null;
$cpf = $_POST['cpf'] ?? null;
$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;

if (empty($matricula) || empty($nome) || empty($cpf) || empty($email) || empty($senha)) {
    
        echo "ERRO!";

    } else {
        
        $sql = $pdo->prepare("INSERT INTO ALUNO (matricula, nome, cpf, email, senha) VALUES (:matricula, :nome, :cpf, :email, :senha)");
        $sql->bindValue(':matricula', $matricula);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':cpf', $cpf);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $senha);
    }

    if ($sql->execute()) {
        header("Location: cadastrogeral.php");
    } else {
        echo "Error: " . $sql->errorInfo()[2];
    }
?>

<?php
require 'conexao.php';

$id_adm = $_POST['id_adm'] ?? null;
$usuario = $_POST['usuario'] ?? null;
$senha_adm = $_POST['senha_adm'] ?? null;

if (empty($id_adm) || empty($usuario) || empty($senha_adm)) {
    
        echo "ERRO!";

    } else {
        
        $sql = $pdo->prepare("INSERT INTO ADM (id_adm, usuario, senha_adm) VALUES (:id_adm, :usuario, :senha_adm)");
        $sql->bindValue(':id_adm', $id_adm);
        $sql->bindValue(':usuario', $usuario);
        $sql->bindValue(':senha_adm', $senha_adm);
  
    }

    if ($sql->execute()) {
        header("Location: cadastrogeral.php");
    } else {
        echo "Error: " . $sql->errorInfo()[2];
    }
?>

<?php
    require 'conexao.php';

    $matricula_pf =  $_POST['matricula_pf'];
    $nome_pf = $_POST['nome_pf'];
    $cpf_pf = $_POST['cpf_pf'];  
    $email_pf =  $_POST['email_pf'];
    $senha_pf = $_POST['senha_pf'];  

    if (empty($matricula_pf) || empty($nome_pf) || empty($cpf_pf) || empty($email_pf) || empty($senha_pf)) {

        echo "ERRO!";

    } else {
        
        $sql = $pdo->prepare("INSERT INTO PROFESSOR (matricula_pf, nome_pf, cpf_pf, email_pf, senha_pf) VALUES (:matricula_pf, :nome_pf, :cpf_pf, :email_pf, :senha_pf)");
        $sql->bindValue(':matricula_pf', $matricula_pf);
        $sql->bindValue(':nome_pf', $nome_pf);
        $sql->bindValue(':cpf_pf', $cpf_pf);
        $sql->bindValue(':email_pf', $email_pf);
        $sql->bindValue(':senha_pf', $senha_pf);
    }

    if ($sql->execute()) {
        header("Location: cadastrogeral.php");
    }
    else {
        echo  "Error: " . $sql->errorInfo()[2];
    }
?>

<?php
    require 'conexao.php';

    $id_treino =  $_POST['id_treino'];
    $data_treino = $_POST['data_treino'];
    $treinos = $_POST['treinos'];  
    $repeticoes =  $_POST['repeticoes'];

    if (empty($id_treino) || empty($data_treino) || empty($treinos) || empty($repeticoes)) {

        echo "ERRO!";

    } else {
        
        $sql = $pdo->prepare("INSERT INTO AULAS (id_treino, data_treino, treinos, repeticoes) VALUES (:id_treino, :data_treino, :treinos, :repeticoes)");
        $sql->bindValue(':id_treino', $id_treino);
        $sql->bindValue(':data_treino', $data_treino);
        $sql->bindValue(':treinos', $treinos);
        $sql->bindValue(':repeticoes', $repeticoes);

    }

    if ($sql->execute()) {
        header("Location: cadastrogeral.php");
    }
    else {
        echo  "Error: " . $sql->errorInfo()[2]; 
    }
?>