<?php
require_once 'bancoDeDados.php';
require_once 'html/editar.html';
$id = $_GET['editar'];

if (isset($_POST['concluir']) && !empty($_POST['nome']) && !empty($_POST['idade']) && !empty($_POST['cep']) && !empty($_POST['saldo'])) {


    $sqlInsert = "UPDATE formularios SET nome = :nome,idade = :idade,cep = :cep,saldo = :saldo WHERE id = :id;";
    $preparacao = $pdo->prepare($sqlInsert);

    $preparacao->execute([
        ':nome' => $_POST['nome'],
        ':idade'=> $_POST['idade'],
        ':cep'=> $_POST['cep'],
        ':saldo'=> $_POST['saldo'],
        ':id' =>$id
        ]);

    echo "<div class='alert alert-success position-absolute fixed-top' role='alert'>Você Editou Um Cadastro</div>";

}

if (isset($_POST['excluir'])) {
    $apagar = "DELETE FROM formularios WHERE id = :id;";

    $confirmacao = $pdo->prepare($apagar);
    $confirmacao->execute([':id' => $id]);
    header("location: frontPage.php");

}

if (isset($_POST['home'])) {
    header("location: frontPage.php");
}