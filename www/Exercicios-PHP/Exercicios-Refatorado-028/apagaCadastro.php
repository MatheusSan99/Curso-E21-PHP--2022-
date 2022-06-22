<head>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/apagando.css">
    <meta charset="UTF-8">
    <title>Apagando Cadastro</title>
</head>
<?php
session_start();
require_once 'bancoDeDados.php';

if($_GET['excluir']) {

    $nomeCadastro = $_GET['excluir'];

    $indiceASerExcluido = array_search($_GET['excluir'],array_column($_SESSION['cadastros'], 'Nome'));

    echo "<p>Apagando o Cadastro: $nomeCadastro</p>";

    array_splice($_SESSION['cadastros'], ($indiceASerExcluido), 1);
}
//    header('Location: adicionaCadastro.php');
    header("refresh: 1; adicionaCadastro.php");
