<?php
include '../conexao.php';
session_start();

foreach ($_POST as $chave => $valor) {
    if (!empty($valor)) {

        $_SESSION[$chave] = $_POST[$chave];
    } else {

        $_SESSION[$chave] = '';
    }
}

$cpf = $_SESSION['cpf'];
$nome = $_SESSION['nome'];
$telefone = $_SESSION['telefone'];
$email = $_SESSION['email'];
$local = $_SESSION['local'];
$turma = $_SESSION['turma'];

$sql = ("update vendas set nome = '$nome', telefone = '$telefone', email = '$email', local = '$local', turma = '$turma', modified = 'NOW()' where cpf = '$cpf' ");

if ($mysqli->query($sql)) {

    header('Location: ../inicio');
} else {
    echo "Erro: " . $mysqli->error;

}