<?php

if (isset($_POST['adicionar']) && !empty($_POST['nome']) && !empty($_POST['idade']) && !empty($_POST['cep']) && !empty($_POST['saldo'])) {


    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cep = $_POST['cep'];
    $saldo = $_POST['saldo'];

    $sqlInsert = "INSERT INTO formularios(nome,idade,cep,saldo) VALUES (:nome,:idade,:cep,:saldo);";

    $preparacao = $pdo->prepare($sqlInsert);

    $preparacao->execute([
        ':nome' => $nome,
        ':idade' => $idade,
        ':cep' => $cep,
        ':saldo' => $saldo
    ]);

    echo "<div class='alert alert-success position-absolute fixed-top' role='alert'>Você Adicionou Um Novo Cadastro</div>";
    header("location: listar.php");

}

if (isset($_POST['listar'])) {
    header("location: listar.php");
}