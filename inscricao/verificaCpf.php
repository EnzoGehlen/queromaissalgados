<?php
include '../conexao.php';
session_start();
$cpf = $_POST['cpf'];
$sql = ("select * from vendas where cpf = '$cpf'");
$resultado = $mysqli->query($sql);

$_SESSION["cpf"] = $cpf;

if ($resultado->num_rows <= 0) {
    $insere = ("insert into vendas (cpf, created) values ('$cpf', 'NOW()')");
    if ($mysqli->query($insere)) {

        header('Location: segundaEtapa.php');
    } else {
        echo 'erro: ' . $mysqli->error;
    }

} else {
    $dados = $resultado->fetch_assoc();

    if (!empty($dados['status'])) {
        echo 'Você já concluiu seu cadastro, Verifique mais informações no email informado.';
    } else {

        foreach ($dados as $chave => $valor) {
            if (!empty($valor)) {

                $_SESSION[$chave] = $valor;
            }

        }

        print_r($dados);exit;
        header('Location: segundaEtapa.php?existente=true');
    }
}